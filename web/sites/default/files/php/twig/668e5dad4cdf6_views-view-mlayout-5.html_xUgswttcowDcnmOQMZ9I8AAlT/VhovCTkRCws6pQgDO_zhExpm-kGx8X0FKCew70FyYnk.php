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

/* modules/custom/gavias_views_magazine/templates/views-view-mlayout-5.html.twig */
class __TwigTemplate_5cd227d6e0b5d62298bf973dd7aae18e extends Template
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
        // line 1
        if (($context["attributes"] ?? null)) {
            // line 2
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 2, $this->source), "html", null, true);
            yield ">
";
        }
        // line 4
        yield "   
  ";
        // line 5
        if (($context["title"] ?? null)) {
            // line 6
            yield "    <h3>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 6, $this->source), "html", null, true);
            yield "</h3>
  ";
        }
        // line 8
        yield "
  <div class=\"gva-view-grid-inner lg-block-grid-";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["class_grid"] ?? null), "items_lg", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        yield " md-block-grid-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["class_grid"] ?? null), "items_md", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        yield " sm-block-grid-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["class_grid"] ?? null), "items_sm", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        yield " xs-block-grid-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["class_grid"] ?? null), "items_xs", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        yield "\">

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 12
            yield "        <div class=\"item-columns\">
          <div";
            // line 13
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 13), 13, $this->source));
            yield "</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "  </div>
    
";
        // line 18
        if (($context["attributes"] ?? null)) {
            // line 19
            yield "</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title", "class_grid", "rows"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/custom/gavias_views_magazine/templates/views-view-mlayout-5.html.twig";
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
        return array (  97 => 19,  95 => 18,  91 => 16,  80 => 13,  77 => 12,  73 => 11,  62 => 9,  59 => 8,  53 => 6,  51 => 5,  48 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if attributes -%}
  <div{{ attributes }}>
{% endif %}
   
  {% if title %}
    <h3>{{ title }}</h3>
  {% endif %}

  <div class=\"gva-view-grid-inner lg-block-grid-{{ class_grid.items_lg }} md-block-grid-{{class_grid.items_md}} sm-block-grid-{{class_grid.items_sm}} xs-block-grid-{{class_grid.items_xs}}\">

    {% for row in rows %}
        <div class=\"item-columns\">
          <div{{ row.attributes }}>{{ row.content|raw }}</div>
        </div>
    {% endfor %}
  </div>
    
{% if attributes -%}
    </div>
{% endif %}
", "modules/custom/gavias_views_magazine/templates/views-view-mlayout-5.html.twig", "/home/ccgforum/public_html/web/modules/custom/gavias_views_magazine/templates/views-view-mlayout-5.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 11);
        static $filters = array("escape" => 2, "raw" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw'],
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
