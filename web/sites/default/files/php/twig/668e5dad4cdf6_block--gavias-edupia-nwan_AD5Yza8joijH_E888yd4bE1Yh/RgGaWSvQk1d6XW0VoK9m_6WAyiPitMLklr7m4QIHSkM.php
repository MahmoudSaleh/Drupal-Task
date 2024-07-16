<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/gavias_edupia/templates/block/block--gavias-edupia-nwanalfwrmt.html.twig */
class __TwigTemplate_518d7aabf482bca4e3f1c662f962b8c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        $context["title_classes"] = "";
        // line 33
        if ((($context["label"] ?? null) == "")) {
            // line 34
            $context["title_classes"] = "no-title";
        }
        // line 37
        $context["classes"] = ["block gva-block-breadcrumb", ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 39), 39, $this->source))), ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 40
($context["plugin_id"] ?? null), 40, $this->source))),         // line 41
($context["title_classes"] ?? null)];
        // line 44
        yield "
<div class=\"breadcrumb-content-inner\">
  <div class=\"gva-breadcrumb-content\">
    <div";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
        yield ">
      <div class=\"breadcrumb-style\" style=\"";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_style"] ?? null), 48, $this->source), "html", null, true);
        yield "\">
        <div class=\"container\">
          <div class=\"breadcrumb-content-main\">
            <h2 class=\"page-title\">";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb_title"] ?? null), 51, $this->source), "html", null, true);
        yield " </h2>
            ";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 52, $this->source), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 52, $this->source), "html", null, true);
        yield "
            ";
        // line 53
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 61
        yield "          </div>
        </div>
      </div>
    </div>
  </div>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label", "configuration", "plugin_id", "attributes", "custom_style", "breadcrumb_title", "title_prefix", "title_suffix", "custom_classes", "content_attributes", "content"]);        return; yield '';
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        yield "              <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_classes"] ?? null), 54, $this->source), "html", null, true);
        yield "\">
                <div";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["content block-content"], "method", false, false, true, 55), 55, $this->source), "html", null, true);
        yield ">
                  ";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 56, $this->source), "html", null, true);
        yield "
                  <br><br><br>
                </div>
              </div>
            ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/block/block--gavias-edupia-nwanalfwrmt.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  106 => 56,  102 => 55,  97 => 54,  93 => 53,  80 => 61,  78 => 53,  72 => 52,  68 => 51,  62 => 48,  58 => 47,  53 => 44,  51 => 41,  50 => 40,  49 => 39,  48 => 37,  45 => 34,  43 => 33,  41 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main content
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 *
 * @ingroup themeable
 */
#}
{% set title_classes = '' %}
{% if label == '' %}
{% set title_classes = 'no-title' %}
{% endif %}
{%
  set classes = [
    'block gva-block-breadcrumb',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    title_classes
  ]
%}

<div class=\"breadcrumb-content-inner\">
  <div class=\"gva-breadcrumb-content\">
    <div{{ attributes.addClass(classes) }}>
      <div class=\"breadcrumb-style\" style=\"{{ custom_style }}\">
        <div class=\"container\">
          <div class=\"breadcrumb-content-main\">
            <h2 class=\"page-title\">{{ breadcrumb_title }} </h2>
            {{ title_prefix }} {{ title_suffix }}
            {% block content %}
              <div class=\"{{ custom_classes }}\">
                <div{{ content_attributes.addClass('content block-content') }}>
                  {{ content }}
                  <br><br><br>
                </div>
              </div>
            {% endblock %}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

", "themes/gavias_edupia/templates/block/block--gavias-edupia-nwanalfwrmt.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/block/block--gavias-edupia-nwanalfwrmt.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 32, "if" => 33, "block" => 53);
        static $filters = array("clean_class" => 39, "escape" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
