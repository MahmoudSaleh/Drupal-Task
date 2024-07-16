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

/* themes/gavias_edupia/templates/views/views-view-unformatted--taxonomy-term.html.twig */
class __TwigTemplate_e7da60a4b945daa36caf26e6e5ceafd1 extends Template
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
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            yield "  <h3>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
            yield "</h3>
";
        }
        // line 23
        yield "
";
        // line 24
        $context["i"] = 0;
        // line 25
        yield "<div class=\"categories-view-content view-content-wrap post-style-grid box\">
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            yield "    
    ";
            // line 28
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 29
            yield "    
    ";
            // line 30
            if (((($context["i"] ?? null) % 3) == 1)) {
                yield " 
      <div class=\"row\">
    ";
            }
            // line 32
            yield " 
    
      <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12\">
        ";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            yield "
      </div>
   
    ";
            // line 38
            if ((((($context["i"] ?? null) % 3) == 0) || (($context["i"] ?? null) == Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["rows"] ?? null))))) {
                yield " 
      </div>
    ";
            }
            // line 40
            yield " 

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "rows"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/views/views-view-unformatted--taxonomy-term.html.twig";
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
        return array (  99 => 43,  91 => 40,  85 => 38,  79 => 35,  74 => 32,  68 => 30,  65 => 29,  63 => 28,  60 => 27,  56 => 26,  53 => 25,  51 => 24,  48 => 23,  42 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 *
 * @ingroup themeable
 */
#}
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}

{% set i = 0 %}
<div class=\"categories-view-content view-content-wrap post-style-grid box\">
  {% for row in rows %}
    
    {% set i = i + 1 %}
    
    {% if i % 3 == 1 %} 
      <div class=\"row\">
    {% endif %} 
    
      <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12\">
        {{ row.content }}
      </div>
   
    {% if (i % 3 == 0 or i == rows|length)  %} 
      </div>
    {% endif %} 

  {% endfor %}
</div>
", "themes/gavias_edupia/templates/views/views-view-unformatted--taxonomy-term.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/views/views-view-unformatted--taxonomy-term.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 24, "for" => 26);
        static $filters = array("escape" => 21, "length" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length'],
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
