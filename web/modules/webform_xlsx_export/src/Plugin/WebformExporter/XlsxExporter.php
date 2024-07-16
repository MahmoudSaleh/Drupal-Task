<?php

namespace Drupal\webform_xlsx_export\Plugin\WebformExporter;

use Drupal\Core\File\FileSystemInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StreamWrapper\StreamWrapperManagerInterface;
use Drupal\webform\Plugin\WebformExporterBase;
use PhpOffice\PhpSpreadsheet\Cell\StringValueBinder;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Drupal\Core\StreamWrapper\StreamWrapperInterface;
use Drupal\webform\Plugin\WebformExporter\TabularBaseWebformExporter;
use Drupal\webform\WebformSubmissionInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class XlsxExporter.
 *
 * @package Drupal\webform_xlsx_export\Plugin\WebformExporter
 *
 * @WebformExporter(
 *   id = "xlsx",
 *   label = @Translation("XLSX"),
 *   description = @Translation("Exports results as an Office Open XML file."),
 * )
 */
class XlsxExporter extends TabularBaseWebformExporter {

  /**
   * PhpSpreadsheet object.
   *
   * @var \PhpOffice\PhpSpreadsheet\Spreadsheet|null
   */
  private ?Spreadsheet $xls;

  /**
   * The file_system service.
   *
   * @var \Drupal\Core\File\FileSystemInterface
   */
  protected FileSystemInterface $fileSystem;

  /**
   * The stream_wrapper_manager service.
   *
   * @var \Drupal\Core\StreamWrapper\StreamWrapperManagerInterface
   */
  protected StreamWrapperManagerInterface $streamWrapperManager;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition): WebformExporterBase|ContainerFactoryPluginInterface|XlsxExporter|TabularBaseWebformExporter {
    $instance = parent::create($container, $configuration, $plugin_id, $plugin_definition);
    $instance->fileSystem = $container->get('file_system');
    $instance->streamWrapperManager = $container->get('stream_wrapper_manager');
    return $instance;
  }

  /**
   * {@inheritdoc}
   * @noinspection PhpMissingParentCallCommonInspection
   */
  public function getFileExtension(): string {
    return 'xlsx';
  }

  /**
   * {@inheritdoc}
   * @noinspection PhpMissingParentCallCommonInspection
   */
  public function createExport(): void {
    $this->xls = new Spreadsheet();
  }

  /**
   * {@inheritdoc}
   *
   * @throws \PhpOffice\PhpSpreadsheet\Reader\Exception
   * @noinspection PhpMissingParentCallCommonInspection
   */
  public function openExport(): void {
    if (!$this->xls) {
      $export_file_path = $this->getExportFilePath();
      // For LOCAL_NORMAL uris, resolve to a filesystem path since
      // phpoffice/phpspreadsheet does not support Drupal stream wrappers.
      // @see https://github.com/PHPOffice/PhpSpreadsheet/issues/2907
      if (($wrapper = $this->streamWrapperManager->getViaUri($export_file_path)) &&
          $wrapper::getType() === StreamWrapperInterface::LOCAL_NORMAL) {
        $export_file_path = $this->fileSystem->realpath($export_file_path);
      }

      $this->xls = IOFactory::load($export_file_path);
    }
  }

  /**
   * {@inheritdoc}
   *
   * @throws \PhpOffice\PhpSpreadsheet\Writer\Exception
   * @noinspection PhpMissingParentCallCommonInspection
   */
  public function closeExport(): void {
    IOFactory::createWriter($this->xls, "Xlsx")->save($this->getExportFilePath());
  }

  /**
   * {@inheritdoc}
   *
   * @throws \PhpOffice\PhpSpreadsheet\Exception
   */
  public function writeHeader(): void {
    parent::writeHeader();
    $sheet = $this->xls->getActiveSheet();

    foreach ($this->buildHeader() as $column => $header) {
      $sheet->setCellValueByColumnAndRow($column + 1, 1, $header);
    }

    $sheet->getStyle('A1:' . $sheet->getHighestColumn() . '1')
      ->getFont()
      ->setBold(TRUE);
  }

  /**
   * {@inheritdoc}
   *
   * @throws \PhpOffice\PhpSpreadsheet\Exception
   */
  public function writeSubmission(WebformSubmissionInterface $webform_submission): void {
    parent::writeSubmission($webform_submission);
    $sheet = $this->xls->getActiveSheet();
    $row = $sheet->getHighestRow();

    foreach ($this->buildRecord($webform_submission) as $column => $record) {
      $valueBinder = NULL;
      if (is_string($record) && strlen($record) > 1 && $record[0] === '=') {
        $valueBinder = new StringValueBinder();
      }
      $sheet->setCellValueByColumnAndRow($column + 1, $row + 1, $record, $valueBinder);
    }
  }

}
