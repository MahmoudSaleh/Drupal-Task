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

/* modules/contrib/webform/templates/webform-composite-contact.html.twig */
class __TwigTemplate_2b2a37cd68577d9cd9a0fadbb4b994f8 extends Template
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
        // line 16
        if (($context["flexbox"] ?? null)) {
            // line 17
            yield "<div class=\"webform-contact\">
  ";
            // line 18
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "name", [], "any", false, false, true, 18) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "company", [], "any", false, false, true, 18))) {
                // line 19
                yield "    <div class=\"webform-flexbox webform-contact__row-1\">
      ";
                // line 20
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "name", [], "any", false, false, true, 20)) {
                    // line 21
                    yield "        <div class=\"webform-flex webform-flex--1 webform-address__name\"><div class=\"webform-flex--container\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    yield "</div></div>
      ";
                }
                // line 23
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "company", [], "any", false, false, true, 23)) {
                    // line 24
                    yield "        <div class=\"webform-flex webform-flex--1 webform-address__company\"><div class=\"webform-flex--container\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "company", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                    yield "</div></div>
      ";
                }
                // line 26
                yield "    </div>
  ";
            }
            // line 28
            yield "
  ";
            // line 29
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "email", [], "any", false, false, true, 29) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "phone", [], "any", false, false, true, 29))) {
                // line 30
                yield "    <div class=\"webform-flexbox webform-contact__row-2\">
      ";
                // line 31
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "email", [], "any", false, false, true, 31)) {
                    // line 32
                    yield "        <div class=\"webform-flex webform-flex--1 webform-address__email\"><div class=\"webform-flex--container\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "email", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                    yield "</div></div>
      ";
                }
                // line 34
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "phone", [], "any", false, false, true, 34)) {
                    // line 35
                    yield "        <div class=\"webform-flex webform-flex--1 webform-address__phone\"><div class=\"webform-flex--container\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "phone", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    yield "</div></div>
      ";
                }
                // line 37
                yield "    </div>
  ";
            }
            // line 39
            yield "
  ";
            // line 40
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "address", [], "any", false, false, true, 40)) {
                // line 41
                yield "    <div class=\"webform-flexbox webform-contact__row-3\">
      <div class=\"webform-flex webform-flex--1 webform-address__address\"><div class=\"webform-flex--container\">";
                // line 42
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "address", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                yield "</div></div>
    </div>
  ";
            }
            // line 45
            yield "
  ";
            // line 46
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "address_2", [], "any", false, false, true, 46)) {
                // line 47
                yield "    <div class=\"webform-flexbox webform-contact__row-4\">
      <div class=\"webform-flex webform-flex--1 webform-address__address-2\"><div class=\"webform-flex--container\">";
                // line 48
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "address_2", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                yield "</div></div>
    </div>
  ";
            }
            // line 51
            yield "
  ";
            // line 52
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "city", [], "any", false, false, true, 52) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "state_province", [], "any", false, false, true, 52)) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "postal_code", [], "any", false, false, true, 52))) {
                // line 53
                yield "    <div class=\"webform-flexbox webform-contact__row-5\">
      ";
                // line 54
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "city", [], "any", false, false, true, 54)) {
                    // line 55
                    yield "        <div class=\"webform-flex webform-flex--1 webform-address__city\"><div class=\"webform-flex--container\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "city", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                    yield "</div></div>
      ";
                }
                // line 57
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "state_province", [], "any", false, false, true, 57)) {
                    // line 58
                    yield "        <div class=\"webform-flex webform-flex--1 webform-address__province\"><div class=\"webform-flex--container\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "state_province", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                    yield "</div></div>
      ";
                }
                // line 60
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "postal_code", [], "any", false, false, true, 60)) {
                    // line 61
                    yield "        <div class=\"webform-flex webform-flex--1 webform-address__postal-code\"><div class=\"webform-flex--container\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "postal_code", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    yield "</div></div>
      ";
                }
                // line 63
                yield "    </div>
  ";
            }
            // line 65
            yield "
  ";
            // line 66
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "country", [], "any", false, false, true, 66)) {
                // line 67
                yield "    <div class=\"webform-flexbox webform-contact__row-6\">
      <div class=\"webform-flex webform-flex--1 webform-address__country\"><div class=\"webform-flex--container\">";
                // line 68
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "country", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                yield "</div></div>
    </div>
  ";
            }
            // line 71
            yield "</div>
";
        } else {
            // line 73
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 73, $this->source), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["flexbox", "content"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-composite-contact.html.twig";
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
        return array (  184 => 73,  180 => 71,  174 => 68,  171 => 67,  169 => 66,  166 => 65,  162 => 63,  156 => 61,  153 => 60,  147 => 58,  144 => 57,  138 => 55,  136 => 54,  133 => 53,  131 => 52,  128 => 51,  122 => 48,  119 => 47,  117 => 46,  114 => 45,  108 => 42,  105 => 41,  103 => 40,  100 => 39,  96 => 37,  90 => 35,  87 => 34,  81 => 32,  79 => 31,  76 => 30,  74 => 29,  71 => 28,  67 => 26,  61 => 24,  58 => 23,  52 => 21,  50 => 20,  47 => 19,  45 => 18,  42 => 17,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation of a contact composite webform element.
 *
 * Available variables:
 * - content: The contact webform element to be output.
 * - flexbox: Determines if Flexbox layout should be applied to the composite
 *   element.
 *
 * @see template_preprocess_webform_composite_contact()
 *
 * @ingroup themeable
 */
#}
{% if flexbox %}
<div class=\"webform-contact\">
  {% if content.name or content.company %}
    <div class=\"webform-flexbox webform-contact__row-1\">
      {% if content.name %}
        <div class=\"webform-flex webform-flex--1 webform-address__name\"><div class=\"webform-flex--container\">{{ content.name }}</div></div>
      {% endif %}
      {% if content.company %}
        <div class=\"webform-flex webform-flex--1 webform-address__company\"><div class=\"webform-flex--container\">{{ content.company }}</div></div>
      {% endif %}
    </div>
  {% endif %}

  {% if content.email or content.phone %}
    <div class=\"webform-flexbox webform-contact__row-2\">
      {% if content.email %}
        <div class=\"webform-flex webform-flex--1 webform-address__email\"><div class=\"webform-flex--container\">{{ content.email }}</div></div>
      {% endif %}
      {% if content.phone %}
        <div class=\"webform-flex webform-flex--1 webform-address__phone\"><div class=\"webform-flex--container\">{{ content.phone }}</div></div>
      {% endif %}
    </div>
  {% endif %}

  {% if content.address %}
    <div class=\"webform-flexbox webform-contact__row-3\">
      <div class=\"webform-flex webform-flex--1 webform-address__address\"><div class=\"webform-flex--container\">{{ content.address }}</div></div>
    </div>
  {% endif %}

  {% if content.address_2 %}
    <div class=\"webform-flexbox webform-contact__row-4\">
      <div class=\"webform-flex webform-flex--1 webform-address__address-2\"><div class=\"webform-flex--container\">{{ content.address_2 }}</div></div>
    </div>
  {% endif %}

  {% if content.city or content.state_province or content.postal_code %}
    <div class=\"webform-flexbox webform-contact__row-5\">
      {% if content.city %}
        <div class=\"webform-flex webform-flex--1 webform-address__city\"><div class=\"webform-flex--container\">{{ content.city }}</div></div>
      {% endif %}
      {% if content.state_province %}
        <div class=\"webform-flex webform-flex--1 webform-address__province\"><div class=\"webform-flex--container\">{{ content.state_province }}</div></div>
      {% endif %}
      {% if content.postal_code %}
        <div class=\"webform-flex webform-flex--1 webform-address__postal-code\"><div class=\"webform-flex--container\">{{ content.postal_code }}</div></div>
      {% endif %}
    </div>
  {% endif %}

  {% if content.country %}
    <div class=\"webform-flexbox webform-contact__row-6\">
      <div class=\"webform-flex webform-flex--1 webform-address__country\"><div class=\"webform-flex--container\">{{ content.country }}</div></div>
    </div>
  {% endif %}
</div>
{% else %}
  {{ content }}
{% endif %}
", "modules/contrib/webform/templates/webform-composite-contact.html.twig", "/home/ccgforum/public_html/web/modules/contrib/webform/templates/webform-composite-contact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
