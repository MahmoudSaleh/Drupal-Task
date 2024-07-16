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

/* core/modules/system/templates/fieldset.html.twig */
class __TwigTemplate_3f4a315bfdc0197e15544c0c1f066703 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        $context["classes"] = ["js-form-item", "form-item", "js-form-wrapper", "form-wrapper"];
        // line 39
        yield "<fieldset";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        yield ">
  ";
        // line 41
        $context["legend_span_classes"] = ["fieldset-legend", ((        // line 43
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 44
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 47
        yield "  ";
        // line 48
        yield "  <legend";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "attributes", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        yield ">
    <span";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["legend_span"] ?? null), "attributes", [], "any", false, false, true, 49), "addClass", [($context["legend_span_classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["legend"] ?? null), "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        yield "</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    ";
        // line 52
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 52))) {
            // line 53
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 53), "addClass", ["description"], "method", false, false, true, 53), 53, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            yield "</div>
    ";
        }
        // line 55
        yield "    ";
        if (($context["errors"] ?? null)) {
            // line 56
            yield "      <div>
        ";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 57, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 60
        yield "    ";
        if (($context["prefix"] ?? null)) {
            // line 61
            yield "      <span class=\"field-prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 61, $this->source), "html", null, true);
            yield "</span>
    ";
        }
        // line 63
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 63, $this->source), "html", null, true);
        yield "
    ";
        // line 64
        if (($context["suffix"] ?? null)) {
            // line 65
            yield "      <span class=\"field-suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 65, $this->source), "html", null, true);
            yield "</span>
    ";
        }
        // line 67
        yield "    ";
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 67))) {
            // line 68
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 68), "addClass", ["description"], "method", false, false, true, 68), 68, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            yield "</div>
    ";
        }
        // line 70
        yield "  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "required", "legend", "legend_span", "description_display", "description", "errors", "prefix", "children", "suffix"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/system/templates/fieldset.html.twig";
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
        return array (  121 => 70,  113 => 68,  110 => 67,  104 => 65,  102 => 64,  97 => 63,  91 => 61,  88 => 60,  82 => 57,  79 => 56,  76 => 55,  68 => 53,  66 => 52,  58 => 49,  53 => 48,  51 => 47,  49 => 44,  48 => 43,  47 => 41,  42 => 39,  40 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a fieldset element and its children.
 *
 * Available variables:
 * - attributes: HTML attributes for the <fieldset> element.
 * - errors: (optional) Any errors for this <fieldset> element, may not be set.
 * - required: Boolean indicating whether the <fieldset> element is required.
 * - legend: The <legend> element containing the following properties:
 *   - title: Title of the <fieldset>, intended for use as the text
       of the <legend>.
 *   - attributes: HTML attributes to apply to the <legend> element.
 * - description: The description element containing the following properties:
 *   - content: The description content of the <fieldset>.
 *   - attributes: HTML attributes to apply to the description container.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element (default).
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - children: The rendered child elements of the <fieldset>.
 * - prefix: The content to add before the <fieldset> children.
 * - suffix: The content to add after the <fieldset> children.
 *
 * @see template_preprocess_fieldset()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'js-form-item',
    'form-item',
    'js-form-wrapper',
    'form-wrapper',
  ]
%}
<fieldset{{ attributes.addClass(classes) }}>
  {%
    set legend_span_classes = [
      'fieldset-legend',
      required ? 'js-form-required',
      required ? 'form-required',
    ]
  %}
  {# Always wrap fieldset legends in a <span> for CSS positioning. #}
  <legend{{ legend.attributes }}>
    <span{{ legend_span.attributes.addClass(legend_span_classes) }}>{{ legend.title }}</span>
  </legend>
  <div class=\"fieldset-wrapper\">
    {% if description_display == 'before' and description.content %}
      <div{{ description.attributes.addClass('description') }}>{{ description.content }}</div>
    {% endif %}
    {% if errors %}
      <div>
        {{ errors }}
      </div>
    {% endif %}
    {% if prefix %}
      <span class=\"field-prefix\">{{ prefix }}</span>
    {% endif %}
    {{ children }}
    {% if suffix %}
      <span class=\"field-suffix\">{{ suffix }}</span>
    {% endif %}
    {% if description_display in ['after', 'invisible'] and description.content %}
      <div{{ description.attributes.addClass('description') }}>{{ description.content }}</div>
    {% endif %}
  </div>
</fieldset>
", "core/modules/system/templates/fieldset.html.twig", "/home/ccgforum/public_html/web/core/modules/system/templates/fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 32, "if" => 52);
        static $filters = array("escape" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
