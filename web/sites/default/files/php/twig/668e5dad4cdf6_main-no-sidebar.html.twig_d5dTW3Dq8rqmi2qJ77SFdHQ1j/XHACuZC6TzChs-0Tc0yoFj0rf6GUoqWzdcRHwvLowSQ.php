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

/* themes/gavias_edupia/templates/page/main-no-sidebar.html.twig */
class __TwigTemplate_435315e28acb601c3567f38e0f9a9d2a extends Template
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
\t<div id=\"page-main-content\" class=\"main-content\">
\t\t<div class=\"main-content-inner\">
\t\t\t";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 4)) {
            // line 5
            yield "\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t";
        }
        // line 9
        yield "
\t\t\t";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 10)) {
            // line 11
            yield "\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t";
        }
        // line 15
        yield "
\t\t\t";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 16)) {
            // line 17
            yield "\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t";
        }
        // line 21
        yield "\t\t</div>
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
        return "themes/gavias_edupia/templates/page/main-no-sidebar.html.twig";
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
        return array (  84 => 21,  78 => 18,  75 => 17,  73 => 16,  70 => 15,  64 => 12,  61 => 11,  59 => 10,  56 => 9,  50 => 6,  47 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-main-inner\">
\t<div id=\"page-main-content\" class=\"main-content\">
\t\t<div class=\"main-content-inner\">
\t\t\t{% if page.content_top %}
\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t{{ page.content_top }}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if page.content %}
\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t{{ page.content }}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if page.content_bottom %}
\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t{{ page.content_bottom }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</div>
</div>

", "themes/gavias_edupia/templates/page/main-no-sidebar.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/page/main-no-sidebar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("escape" => 6);
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
