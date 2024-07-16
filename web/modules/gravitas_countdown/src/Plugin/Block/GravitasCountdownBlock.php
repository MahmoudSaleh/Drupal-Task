<?php

namespace Drupal\gravitas_countdown\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Datetime\DateFormatterInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides the Countdown Block.
 *
 * @Block(
 *   id="gravitas_countdown",
 *   admin_label = @Translation("Gravitas Countdown"),
 * )
 */
class GravitasCountdownBlock extends BlockBase implements ContainerFactoryPluginInterface
{

  /**
   * The date formatter service.
   *
   * @var \Drupal\Core\Datetime\DateFormatterInterface
   */
  protected $dateFormatter;

  /**
   * The file storage service.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $fileStorage;

  /**
   * Constructs a form object.
   *
   * @param \Drupal\Core\Entity\EntityStorageInterface $file_storage
   *   The file storage service.
   * @param \Drupal\Core\Datetime\DateFormatterInterface $date_formatter
   *   The date formatter service.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, EntityStorageInterface $entity_storage, DateFormatterInterface $date_formatter) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->fileStorage = $entity_storage;
    $this->dateFormatter = $date_formatter;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('entity_type.manager')->getStorage('file'),
      $container->get('date.formatter')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration()
  {
    return parent::defaultConfiguration() + [
      'gravitas_countdown' => [],
    ];
  }

  /**
   * Overrides \Drupal\Core\Block\BlockBase::blockForm().
   *
   * Adds body and description fields to the block configuration form.
   */
  public function blockForm($form, FormStateInterface $form_state)
  {
    $form = parent::blockForm($form, $form_state);
    $config = $this->getConfiguration();

    $form['description_settings'] = [
      '#type' => 'details',
      '#title' => $this->t('Text Content settings'),
      '#open' => TRUE,
      '#tree' => TRUE,
    ];
    $form['description_settings']['countdown_header'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Countdown Heading'),
      '#default_value' => $config['countdown_header']??'',
      '#attributes' => ['class' => ['timezone-detect']],
    ];
    $form['description_settings']['description'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Countdown Description'),
      '#default_value' => $config['description']?? '',
      '#format' => $config['description_format'] ?? 'basic_html',
      '#attributes' => ['class' => ['timezone-detect']],
    ];

    $default_value = isset($config['datetime']) ? DrupalDateTime::createFromTimestamp($config['datetime']) : '';
    $form['description_settings']['datetime'] = [
      '#type' => 'datetime',
      '#required' => true,
      '#title' => $this->t('Countdown Time'),
      '#default_value' => $default_value,
      '#attributes' => ['class' => ['timezone-detect']],
    ];

    $form['description_settings']['banner_image'] = array(
      '#type' => 'managed_file',
      '#title' => t('Countdown banner'),
      '#description' => t('Upload an image for the countdown banner.'),
      '#default_value' => $config['banner_image'],
      '#upload_location' => 'public://gravitas-banner/',
      '#upload_validators' => array(
        'file_validate_extensions' => array('png gif jpg jpeg'),
      ),
    );

    $form['description_settings']['countdown_layout'] = [
      '#type' => 'select',
      '#title' => t('Countdown layout'),
      '#description' => t('Countdown layout'),
      '#options' => array(
        '1' => 'Layout 1',
        '2' => 'Layout 2',
        '3' => 'Layout 3',
        '4' => 'Layout 4',
        '5' => 'Layout 5',
        '6' => 'Layout 6',
        '7' => 'Layout 7',
        '8' => 'Layout 8',
        '9' => 'Layout 9',
        '10' => 'Layout 10',
      ),
      '#default_value' => $config['countdown_layout'] ?? '1',
    ];

    $form['description_settings']['font_style'] = [
      '#type' => 'select',
      '#title' => t('Font style'),
      '#description' => t('Font style'),
      '#options' => array(
        '' => 'None',
        'dark' => 'Dark',
        'light' => 'Light'
      ),
      '#default_value' => $config['font_style'] ?? '1',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state)
  {
    $countdown_description = $this->configuration['description'] ?? '';
    $old_image_fid = $this->configuration['banner_image'] ?? '';

    $values = $form_state->getValues();
    $countdown_header = $values['description_settings']['countdown_header'] ?? '';
    $datetime = $values['description_settings']['datetime'] ?? '';
    $countdown_layout = $values['description_settings']['countdown_layout'] ?? '1';
    $font_style = $values['description_settings']['font_style'] ?? '';
    $description = $values['description_settings']['description'] ?? '';
    $old_countdown_image_ids = array();
    $current_countdown_image_ids = array();

    $timestamp = '';
    if($datetime) {
      $timestamp = $datetime->getTimestamp();
    }

    $description_content = $values['description_settings']['description']['value'] ?? '';
    $this->configuration['countdown_header'] = $countdown_header;
    $this->configuration['datetime'] = $timestamp;
    $this->configuration['description'] = $description_content;
    $this->configuration['countdown_layout'] = $countdown_layout;
    $this->configuration['font_style'] = $font_style;
    $this->configuration['description_format'] = $values['description_settings']['description']['format'] ?? 'basic_html';

    $old_header_image_ids = get_countdown_editor_files($countdown_description);
    $current_header_image_ids = get_countdown_editor_files($description_content);

    // remove old images
    $result = array_diff($old_header_image_ids, $current_header_image_ids);

    if (!empty($result)) {
      foreach ($result as $key => $author_image_id) {
        $file = $this->fileStorage->load($author_image_id);
        $file->setTemporary();
        $file->save();
      }
    } else {
      foreach ($current_header_image_ids as $key => $author_image_id) {
        $file = $this->fileStorage->load($author_image_id);
        $file->setPermanent();
        $file->save();
      }
    }

    $image_fid = $values['description_settings']['banner_image'] ?? '';
    $this->configuration['banner_image'] = $image_fid;


    $remove_old_image = false;

    if (!empty($image_fid)) {
      $image_fid = $image_fid[0];

      if($old_image_fid != $image_fid) {
       $remove_old_image = true;
     }

     /* Load the object of the file by it's fid */
     $file = $this->fileStorage->load($image_fid);
        // Set the status flag permanent of the file object.
     if (!empty($file)) {
      $file->setPermanent();
        // Save the file in the database.
      $file->save();
    }
  } else {
    $remove_old_image = true;
  }

  if($remove_old_image) {
    if(!empty($old_image_fid)) {
     $image_fid = $old_image_fid[0];
     $old_file = $this->fileStorage->load($image_fid);
     if (!empty($old_file)) {
      $old_file->setTemporary();
        // Save the file in the database.
      $old_file->save();
    }
  }
}
}

  /**
   * {@inheritdoc}
   */
  public function build()
  {
    $config = $this->getConfiguration();
    $countdown_header = $this->configuration['countdown_header'] ?? '';
    $countdown_layout = $this->configuration['countdown_layout'] ?? 1;
    $font_style = $this->configuration['font_style'] ?? '';
    $description = $this->configuration['description'] ?? '';
    $datetime = $this->configuration['datetime'] ?? '';
    $banner_image = $this->configuration['banner_image'] ?? '';
    $banner_url = '';
    $current_time = time();

    if($current_time > $datetime) {
      $datetime = '';
    }

    if($datetime != '') {
      $datetime = $this->dateFormatter->format($datetime, 'custom', 'd F Y H:i:s');
    }

    if(isset($banner_image[0])) {
      $image_fid = $banner_image[0];
      $file = $this->fileStorage->load($image_fid);
      if($file) {
        $banner_url = $file->getFileUri();
        $banner_url = file_create_url($banner_url);
      }
    }

    $build = [];
    $build['countdown'] = [
      '#theme' => 'gravitas_countdown',
      '#title' => $countdown_header,
      '#countdown_layout' => $countdown_layout,
      '#font_style' => $font_style,
      '#datetime' => $datetime,
      '#description' => $description,
      '#banner_image' => $banner_url
    ];
    $build['#attached']['library'][] = 'gravitas_countdown/gravitas_countdown';
    return $build;
  }

}