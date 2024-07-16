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

/* themes/gavias_edupia/templates/page/main.html.twig */
class __TwigTemplate_f1a5d5f34e2ad888a94dd4756373450e extends Template
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
        yield "<div class=\"content-main-inner\">
\t<div class=\"row\">
\t\t
\t\t";
        // line 4
        $context["cl_main"] = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 ";
        // line 5
        yield "\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 5) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 5))) {
            yield "\t
\t\t\t";
            // line 6
            $context["cl_main"] = "col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 ";
            // line 7
            yield "\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 7) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 7))) {
            yield "\t
\t\t\t";
            // line 8
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 8)) {
                // line 9
                yield "\t\t\t \t";
                $context["cl_main"] = "col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 sb-r ";
                // line 10
                yield "\t\t\t";
            }
            yield " \t\t
\t\t\t";
            // line 11
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 11)) {
                // line 12
                yield "\t\t\t\t";
                $context["cl_main"] = "col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 sb-l ";
                // line 13
                yield "\t\t\t";
            }
            yield "\t\t\t\t
      ";
        }
        // line 14
        yield " 

\t\t<div id=\"page-main-content\" class=\"main-content ";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_main"] ?? null), 16, $this->source), "html", null, true);
        yield "\">

\t\t\t<div class=\"main-content-inner\">
\t\t\t\t
\t\t\t\t";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 20)) {
            // line 21
            yield "\t\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t\t";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            yield "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 25
        yield "
\t\t\t\t";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 26)) {
            // line 27
            yield "\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            yield "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 31
        yield "
\t\t\t\t";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 32)) {
            // line 33
            yield "\t\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t\t";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            yield "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 37
        yield "\t\t\t</div>

\t\t</div>

\t\t<!-- Sidebar Left -->
\t\t";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 42)) {
            // line 43
            yield "\t\t\t";
            $context["cl_left"] = "col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-xs-2";
            // line 44
            yield "\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 44)) {
                // line 45
                yield "\t\t\t \t";
                $context["cl_left"] = "col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-xs-2";
                // line 46
                yield "\t\t\t";
            }
            yield " \t\t
\t\t\t
\t\t\t<div class=\"";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_left"] ?? null), 48, $this->source), "html", null, true);
            yield " sidebar sidebar-left\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 54
        yield "\t\t<!-- End Sidebar Left -->

\t\t<!-- Sidebar Right -->
\t\t";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 57)) {
            // line 58
            yield "\t\t\t";
            $context["cl_right"] = "col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-3 order-lg-3 order-md-3 order-sm-3 order-xs-3";
            // line 59
            yield "\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 59)) {
                // line 60
                yield "\t\t\t\t";
                $context["cl_right"] = "col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-3 order-lg-3 order-md-3 order-sm-3 order-xs-3";
                // line 61
                yield "\t\t\t";
            }
            yield "\t 

\t\t\t<div class=\"";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_right"] ?? null), 63, $this->source), "html", null, true);
            yield " sidebar sidebar-right theiaStickySidebar\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 69
        yield "\t\t<!-- End Sidebar Right -->
\t\t
\t</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/page/main.html.twig";
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
        return array (  200 => 69,  193 => 65,  188 => 63,  182 => 61,  179 => 60,  176 => 59,  173 => 58,  171 => 57,  166 => 54,  159 => 50,  154 => 48,  148 => 46,  145 => 45,  142 => 44,  139 => 43,  137 => 42,  130 => 37,  124 => 34,  121 => 33,  119 => 32,  116 => 31,  110 => 28,  107 => 27,  105 => 26,  102 => 25,  96 => 22,  93 => 21,  91 => 20,  84 => 16,  80 => 14,  74 => 13,  71 => 12,  69 => 11,  64 => 10,  61 => 9,  59 => 8,  54 => 7,  52 => 6,  47 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-main-inner\">
\t<div class=\"row\">
\t\t
\t\t{% set cl_main = 'col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 ' %}
\t\t{% if page.sidebar_right and page.sidebar_left %}\t
\t\t\t{% set cl_main = 'col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 ' %}
\t\t{% elseif page.sidebar_right or page.sidebar_left %}\t
\t\t\t{% if page.sidebar_right %}
\t\t\t \t{% set cl_main = 'col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 sb-r ' %}
\t\t\t{% endif %} \t\t
\t\t\t{% if page.sidebar_left %}
\t\t\t\t{% set cl_main = 'col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-xs-1 sb-l ' %}
\t\t\t{% endif %}\t\t\t\t
      {% endif %} 

\t\t<div id=\"page-main-content\" class=\"main-content {{ cl_main }}\">

\t\t\t<div class=\"main-content-inner\">
\t\t\t\t
\t\t\t\t{% if page.content_top %}
\t\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t\t{{ page.content_top }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if page.content %}
\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t{{ page.content }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if page.content_bottom %}
\t\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t\t{{ page.content_bottom }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>

\t\t</div>

\t\t<!-- Sidebar Left -->
\t\t{% if page.sidebar_left %}
\t\t\t{% set cl_left = 'col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-xs-2' %}
\t\t\t{%\tif page.sidebar_right %}
\t\t\t \t{% set cl_left = 'col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-xs-2' %}
\t\t\t{% endif %} \t\t
\t\t\t
\t\t\t<div class=\"{{ cl_left }} sidebar sidebar-left\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t{{ page.sidebar_left }}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t<!-- End Sidebar Left -->

\t\t<!-- Sidebar Right -->
\t\t{% if page.sidebar_right %}
\t\t\t{% set cl_right = 'col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-3 order-lg-3 order-md-3 order-sm-3 order-xs-3'  %}
\t\t\t{% if page.sidebar_left %}
\t\t\t\t{% set cl_right = 'col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 order-xl-3 order-lg-3 order-md-3 order-sm-3 order-xs-3' %}
\t\t\t{% endif %}\t 

\t\t\t<div class=\"{{ cl_right }} sidebar sidebar-right theiaStickySidebar\">
\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t{{ page.sidebar_right }}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t<!-- End Sidebar Right -->
\t\t
\t</div>
</div>
", "themes/gavias_edupia/templates/page/main.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/page/main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 5);
        static $filters = array("escape" => 16);
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
