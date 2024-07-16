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

/* themes/gavias_edupia/templates/status-messages.html.twig */
class __TwigTemplate_c6c90cdfe05a7ad98e4ea818efcb3806 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        yield "<div data-drupal-messages>
";
        // line 23
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 57
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings", "attributes"]);        return; yield '';
    }

    // line 23
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            yield "  ";
            if (($context["type"] == "status")) {
                yield " ";
                $context["type"] = "info";
                yield " ";
            }
            // line 26
            yield "  ";
            if (($context["type"] == "error")) {
                yield " ";
                $context["type"] = "warning";
                yield " ";
            }
            // line 27
            yield "  ";
            // line 28
            $context["classes"] = ["alert", ("alert-" . $this->sandbox->ensureToStringAllowed(            // line 30
$context["type"], 30, $this->source))];
            // line 33
            yield "  <div role=\"contentinfo\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 33, $this->source), "html", null, true);
            yield "\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 33), 33, $this->source), "role", "aria-label"), "html", null, true);
            yield ">
    ";
            // line 34
            if (($context["type"] == "error")) {
                // line 35
                yield "      <div role=\"alert\">
    ";
            }
            // line 37
            yield "      ";
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                // line 38
                yield "        <h2 class=\"visually-hidden\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 38, $this->source), "html", null, true);
                yield "</h2>
      ";
            }
            // line 40
            yield "      ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["messages"]) > 1)) {
                // line 41
                yield "        <ul class=\"messages__list\">
          ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 43
                    yield "            <li class=\"messages__item\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 43, $this->source), "html", null, true);
                    yield "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                yield "        </ul>
      ";
            } else {
                // line 47
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["messages"], 47, $this->source)), "html", null, true);
                yield "
      ";
            }
            // line 49
            yield "    ";
            if (($context["type"] == "error")) {
                // line 50
                yield "      </div>
    ";
            }
            // line 52
            yield "  </div>
  ";
            // line 54
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["classes"] ?? null)], "method", false, false, true, 54);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/status-messages.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  141 => 54,  138 => 52,  134 => 50,  131 => 49,  125 => 47,  121 => 45,  112 => 43,  108 => 42,  105 => 41,  102 => 40,  96 => 38,  93 => 37,  89 => 35,  87 => 34,  80 => 33,  78 => 30,  77 => 28,  75 => 27,  68 => 26,  61 => 25,  57 => 24,  53 => 23,  46 => 57,  44 => 23,  41 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 */
#}
<div data-drupal-messages>
{% block messages %}
{% for type, messages in message_list %}
  {% if type == 'status' %} {% set type = 'info' %} {% endif %}
  {% if type == 'error' %} {% set type = 'warning' %} {% endif %}
  {%
    set classes = [
      'alert',
      'alert-' ~ type,
    ]
  %}
  <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>
    {% if type == 'error' %}
      <div role=\"alert\">
    {% endif %}
      {% if status_headings[type] %}
        <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
      {% endif %}
      {% if messages|length > 1 %}
        <ul class=\"messages__list\">
          {% for message in messages %}
            <li class=\"messages__item\">{{ message }}</li>
          {% endfor %}
        </ul>
      {% else %}
        {{ messages|first }}
      {% endif %}
    {% if type == 'error' %}
      </div>
    {% endif %}
  </div>
  {# Remove type specific classes. #}
  {% set attributes = attributes.removeClass(classes) %}
{% endfor %}
{% endblock messages %}
</div>
", "themes/gavias_edupia/templates/status-messages.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 23, "for" => 24, "if" => 25, "set" => 25);
        static $filters = array("escape" => 33, "without" => 33, "length" => 40, "first" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'if', 'set'],
                ['escape', 'without', 'length', 'first'],
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
