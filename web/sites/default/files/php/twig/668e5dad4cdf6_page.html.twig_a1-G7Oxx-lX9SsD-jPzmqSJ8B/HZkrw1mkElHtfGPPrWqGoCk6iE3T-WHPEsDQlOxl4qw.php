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

/* themes/gavias_edupia/templates/page/page.html.twig */
class __TwigTemplate_a7e6f344d5e9f9167f4a650defbf9d0b extends Template
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
        // line 7
        $context["has_breadcrumb"] = "";
        // line 8
        yield "<div class=\"body-page gva-body-page\">
\t";
        // line 9
        yield from         $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/preloader.html.twig"), "themes/gavias_edupia/templates/page/page.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "   ";
        yield from         $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_edupia/templates/page/page.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "\t
\t";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 12)) {
            // line 13
            yield "\t\t";
            $context["has_breadcrumb"] = " has-breadcrumb";
            // line 14
            yield "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            yield "
\t\t</div>
\t";
        }
        // line 18
        yield "
\t<div role=\"main\" class=\"main main-page";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["has_breadcrumb"] ?? null), 19, $this->source), "html", null, true);
        yield "\">
\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 22)) {
            // line 23
            yield "\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        // line 26
        yield "\t

\t\t";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 28)) {
            // line 29
            yield "\t\t\t<div class=\"help show hidden\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 37
        yield "
\t\t";
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "fw_before_content", [], "any", false, false, true, 38)) {
            // line 39
            yield "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "fw_before_content", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        // line 43
        yield "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 45)) {
            // line 46
            yield "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 56
        yield "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container";
        // line 60
        if (((($context["gva_layout"] ?? null) == "fw_sidebar") || (($context["gva_layout"] ?? null) == "fw"))) {
            yield "-full";
        }
        yield " container-bg\">
\t\t\t\t";
        // line 61
        if (((($context["gva_layout"] ?? null) == "fw") || (($context["gva_layout"] ?? null) == "container_no_sidebar"))) {
            yield " 
\t\t\t\t\t";
            // line 62
            yield from             $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main-no-sidebar.html.twig"), "themes/gavias_edupia/templates/page/page.html.twig", 62)->unwrap()->yield($context);
            // line 63
            yield "\t\t\t\t";
        } else {
            // line 64
            yield "\t\t\t\t\t";
            yield from             $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main.html.twig"), "themes/gavias_edupia/templates/page/page.html.twig", 64)->unwrap()->yield($context);
            // line 65
            yield "\t\t\t\t";
        }
        yield "\t
\t\t\t</div>
\t\t</div>

\t\t";
        // line 69
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 69)) {
            // line 70
            yield "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 76
        yield "
\t\t";
        // line 77
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "after_content", [], "any", false, false, true, 77)) {
            // line 78
            yield "\t\t\t<div class=\"area after_content\">
\t\t\t\t<div class=\"container-fw\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "after_content", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            yield "
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 86
        yield "\t\t
\t\t";
        // line 87
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "fw_after_content", [], "any", false, false, true, 87)) {
            // line 88
            yield "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "fw_after_content", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        // line 92
        yield "\t</div>
</div>

";
        // line 95
        yield from         $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_edupia/templates/page/page.html.twig", 95)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["directory", "header_skin", "page", "gva_layout"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/page/page.html.twig";
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
        return array (  223 => 95,  218 => 92,  212 => 89,  209 => 88,  207 => 87,  204 => 86,  196 => 81,  191 => 78,  189 => 77,  186 => 76,  179 => 72,  175 => 70,  173 => 69,  165 => 65,  162 => 64,  159 => 63,  157 => 62,  153 => 61,  147 => 60,  141 => 56,  132 => 50,  126 => 46,  124 => 45,  120 => 43,  114 => 40,  111 => 39,  109 => 38,  106 => 37,  98 => 32,  93 => 29,  91 => 28,  87 => 26,  81 => 24,  78 => 23,  76 => 22,  70 => 19,  67 => 18,  61 => 15,  58 => 14,  55 => 13,  53 => 12,  50 => 11,  47 => 10,  45 => 9,  42 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Gavias's theme implementation to display a single Drupal page.
 */
#}
{% set has_breadcrumb = '' %}
<div class=\"body-page gva-body-page\">
\t{% include directory ~ '/templates/page/parts/preloader.html.twig' %}
   {% include header_skin %}
\t
\t{% if page.breadcrumbs %}
\t\t{% set has_breadcrumb = ' has-breadcrumb' %}
\t\t<div class=\"breadcrumbs\">
\t\t\t{{ page.breadcrumbs }}
\t\t</div>
\t{% endif %}

\t<div role=\"main\" class=\"main main-page{{ has_breadcrumb }}\">
\t
\t\t<div class=\"clearfix\"></div>
\t\t{% if page.slideshow_content %}
\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t{{ page.slideshow_content }}
\t\t\t</div>
\t\t{% endif %}\t

\t\t{% if page.help %}
\t\t\t<div class=\"help show hidden\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t{{ page.help }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}

\t\t{% if page.fw_before_content %}
\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t{{ page.fw_before_content }}
\t\t\t</div>
\t\t{% endif %}
\t\t
\t\t<div class=\"clearfix\"></div>
\t\t{% if page.before_content %}
\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t{{ page.before_content }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container{% if gva_layout == 'fw_sidebar' or gva_layout == 'fw' %}-full{% endif %} container-bg\">
\t\t\t\t{% if gva_layout == 'fw' or gva_layout == 'container_no_sidebar' %} 
\t\t\t\t\t{% include directory ~ '/templates/page/main-no-sidebar.html.twig' %}
\t\t\t\t{% else %}
\t\t\t\t\t{% include directory ~ '/templates/page/main.html.twig' %}
\t\t\t\t{% endif %}\t
\t\t\t</div>
\t\t</div>

\t\t{% if page.highlighted %}
\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t{{ page.highlighted }}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}

\t\t{% if page.after_content %}
\t\t\t<div class=\"area after_content\">
\t\t\t\t<div class=\"container-fw\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t {{ page.after_content }}
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t
\t\t{% if page.fw_after_content %}
\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t{{ page.fw_after_content }}
\t\t\t</div>
\t\t{% endif %}
\t</div>
</div>

{% include directory ~ '/templates/page/footer.html.twig' %}", "themes/gavias_edupia/templates/page/page.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "include" => 9, "if" => 12);
        static $filters = array("escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
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
