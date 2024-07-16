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

/* themes/gavias_edupia/templates/node/node--research-topics--teaser.html.twig */
class __TwigTemplate_481b0fce55dde07a58a45192fb17364c extends Template
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
        // line 2
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["node"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 5)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 6)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 7)) ? ("node--unpublished") : ("")), ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 8, $this->source)))) : ("")), "clearfix"];
        // line 12
        yield "
<div class=\"course-block\">
\t<div class=\"course-block-inner\">
\t\t<div class=\"image gallery-popup\">
\t\t\t";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_research_image", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        yield "
\t\t\t";
        // line 20
        yield "\t\t</div>
\t\t<div class=\"course-content\">
\t\t\t<div class=\"content-inner\">
\t\t\t\t<div class=\"categories clearfix\">";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_research_topics", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        yield "</div>
\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t<a href=\"";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 25, $this->source), "html", null, true);
        yield "\" rel=\"bookmark\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 25, $this->source), "html", null, true);
        yield "</a>
\t\t\t\t</h4>
\t\t\t\t<div class=\"course-info\">
\t\t\t\t\t";
        // line 29
        yield "\t\t\t\t\t<div class=\"field field--name-field-course-teacher field--type-entity-reference field--label-hidden field__items\">
\t\t\t\t\t\t<div class=\"field__item\">
\t\t\t\t\t\t\t<div class=\"team-block team-teaser-3\">
\t\t\t\t\t\t\t\t<div class=\"team-image\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"field field--name-field-team-image field--type-image field--label-hidden field__item\">
\t\t\t\t\t\t\t\t\t\t";
        // line 36
        yield "\t\t\t\t\t\t\t\t\t\t";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_researcher_photo", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t";
        // line 38
        yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"team-content\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"team-name\">
\t\t\t\t\t\t\t\t\t\t";
        // line 44
        yield "\t\t\t\t\t\t\t\t\t\t";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_researcher_name", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t";
        // line 46
        yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 48
        yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"course-footer clearfix\">
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<div class=\"course-price\">
\t\t\t\t\t\t<div class=\"course-price-inner\">
\t\t\t\t\t\t\t";
        // line 60
        if (($context["price_display"] ?? null)) {
            // line 61
            yield "\t\t\t\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["price_display"] ?? null), 61, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t\t";
        } else {
            // line 63
            yield "\t\t\t\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "variation_price", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            yield "
\t\t\t\t\t\t\t";
        }
        // line 65
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<a href=\"";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_research_file", [], "any", false, false, true, 69), 0, [], "any", false, false, true, 69)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null), 69, $this->source), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("DownLoad"));
        yield "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "content", "url", "label", "price_display", "product"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/node/node--research-topics--teaser.html.twig";
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
        return array (  137 => 69,  131 => 65,  125 => 63,  119 => 61,  117 => 60,  103 => 48,  100 => 46,  95 => 44,  88 => 38,  83 => 36,  75 => 29,  67 => 25,  62 => 23,  57 => 20,  53 => 16,  47 => 12,  45 => 8,  44 => 7,  43 => 6,  42 => 5,  41 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}

<div class=\"course-block\">
\t<div class=\"course-block-inner\">
\t\t<div class=\"image gallery-popup\">
\t\t\t{{ content.field_research_image }}
\t\t\t{# {% if video_link %}
\t\t\t\t\t\t        <a class=\"video-link popup-video\" href=\"{{ video_link }}\"><i class=\"fas fa-video\"></i> {{'Preview'|t}}</a>
\t\t\t\t\t\t      {% endif %} #}
\t\t</div>
\t\t<div class=\"course-content\">
\t\t\t<div class=\"content-inner\">
\t\t\t\t<div class=\"categories clearfix\">{{content.field_research_topics}}</div>
\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t<a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
\t\t\t\t</h4>
\t\t\t\t<div class=\"course-info\">
\t\t\t\t\t{# {{ dump(content) }} #}
\t\t\t\t\t<div class=\"field field--name-field-course-teacher field--type-entity-reference field--label-hidden field__items\">
\t\t\t\t\t\t<div class=\"field__item\">
\t\t\t\t\t\t\t<div class=\"team-block team-teaser-3\">
\t\t\t\t\t\t\t\t<div class=\"team-image\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"field field--name-field-team-image field--type-image field--label-hidden field__item\">
\t\t\t\t\t\t\t\t\t\t{# <a href=\"/workspace/ccgforum/web/en/node/58\" hreflang=\"en\"> #}
\t\t\t\t\t\t\t\t\t\t{{content.field_researcher_photo}}
\t\t\t\t\t\t\t\t\t\t{# </a> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"team-content\">
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"team-name\">
\t\t\t\t\t\t\t\t\t\t{# <a href=\"/workspace/ccgforum/web/en/node/58\"> #}
\t\t\t\t\t\t\t\t\t\t{{content.field_researcher_name}}
\t\t\t\t\t\t\t\t\t\t{# </a> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{# <div class=\"team-job\">Marketing Director</div> #}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"course-footer clearfix\">
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<div class=\"course-price\">
\t\t\t\t\t\t<div class=\"course-price-inner\">
\t\t\t\t\t\t\t{% if price_display %}
\t\t\t\t\t\t\t\t{{ price_display }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{ product.variation_price }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<a href=\"{{ content.field_research_file.0['#markup'] }}\">{{ 'DownLoad'|t }}</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

", "themes/gavias_edupia/templates/node/node--research-topics--teaser.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/node/node--research-topics--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 60);
        static $filters = array("clean_class" => 4, "escape" => 16, "t" => 69);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't'],
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
