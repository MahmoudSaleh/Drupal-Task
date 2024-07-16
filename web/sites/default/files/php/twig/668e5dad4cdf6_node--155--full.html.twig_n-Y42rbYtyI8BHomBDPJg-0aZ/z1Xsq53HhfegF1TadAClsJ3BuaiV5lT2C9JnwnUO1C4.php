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

/* themes/gavias_edupia/templates/node/node--155--full.html.twig */
class __TwigTemplate_34b30fb4ebe6b5a4a889848e2483034b extends Template
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
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 8, $this->source)))) : (""))];
        // line 11
        if ((($context["teaser"] ?? null) == true)) {
            // line 12
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 12), 12, $this->source), "about"), "html", null, true);
            yield ">
  <div class=\"header-title\">
    ";
            // line 14
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 14, $this->source), "html", null, true);
            yield "
      <h2";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title"], "method", false, false, true, 15), 15, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 15, $this->source), "html", null, true);
            yield "</h2>
    ";
            // line 16
            $context["title_suffix"] = "";
            // line 17
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 17, $this->source), "html", null, true);
            yield "
    ";
            // line 18
            if (($context["display_submitted"] ?? null)) {
                // line 19
                yield "      <div class=\"node__meta\">
        ";
                // line 20
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 20, $this->source), "html", null, true);
                yield "
        <span";
                // line 21
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 21, $this->source), "html", null, true);
                yield ">
          ";
                // line 22
                yield t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 23
                yield "        </span>
        ";
                // line 24
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 24, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 27
            yield "  </div>
  <div";
            // line 28
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 28), 28, $this->source), "html", null, true);
            yield ">
    ";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 29, $this->source), "html", null, true);
            yield "
  </div>
</div>
<!-- End Display article for teaser page -->
";
        } else {
            // line 34
            yield "<!-- Start Display article for detail page -->

<div";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "about"), "html", null, true);
            yield ">
  <div class=\"header-title\">

    <div class=\"container\">
      <h2 class=\"title\"><span>";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 40, $this->source), "html", null, true);
            yield "</span></h2>
    </div>
  </div>

  <div";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
            yield ">
    ";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 45, $this->source), "html", null, true);
            yield "
            ";
            // line 47
            yield "
            ";
            // line 50
            yield "            <br><br><br><br><br><br>
  </div>
</div>

";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "teaser", "attributes", "title_prefix", "title_attributes", "label", "display_submitted", "author_picture", "author_attributes", "author_name", "date", "metadata", "content_attributes", "content"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/node/node--155--full.html.twig";
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
        return array (  140 => 50,  137 => 47,  133 => 45,  129 => 44,  122 => 40,  115 => 36,  111 => 34,  103 => 29,  99 => 28,  96 => 27,  90 => 24,  87 => 23,  85 => 22,  81 => 21,  77 => 20,  74 => 19,  72 => 18,  67 => 17,  65 => 16,  59 => 15,  55 => 14,  49 => 12,  47 => 11,  45 => 8,  44 => 7,  43 => 6,  42 => 5,  41 => 4,  40 => 2,);
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
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class
  ]
%}
{% if teaser == true %}
<div{{ attributes.addClass(classes)|without('about') }}>
  <div class=\"header-title\">
    {{ title_prefix }}
      <h2{{ title_attributes.addClass('node__title') }}>{{ label }}</h2>
    {% set title_suffix = '' %}
    {{ title_suffix }}
    {% if display_submitted %}
      <div class=\"node__meta\">
        {{ author_picture }}
        <span{{ author_attributes }}>
          {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
        </span>
        {{ metadata }}
      </div>
    {% endif %}
  </div>
  <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
    {{ content }}
  </div>
</div>
<!-- End Display article for teaser page -->
{% else %}
<!-- Start Display article for detail page -->

<div{{ attributes.addClass(classes)|without('about') }}>
  <div class=\"header-title\">

    <div class=\"container\">
      <h2 class=\"title\"><span>{{ label }}</span></h2>
    </div>
  </div>

  <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
    {{ content }}
            {# <p><a class=\"use-ajax text-white bg-purple1 rounded-lg px-6 py-3.5 cursor-pointer\" href=\"/web/node/153\" data-dialog-type=\"modal\" data-dialog-options=\"{&quot;width&quot;:836}\">شروط قبول المشاركات </a></p> #}

            {# <div class=\"column-content  text-size-medium\"><h1>
            <a class=\"use-ajax text-white bg-purple1 rounded-lg px-6 py-3.5 cursor-pointer\" href=\"{{ path('entity.node.canonical', {'node': 153}) }}\" data-dialog-type=\"modal\" data-dialog-options=\"{&quot;width&quot;:836}\">شروط قبول المشاركات </a></h1></div> #}
            <br><br><br><br><br><br>
  </div>
</div>

{% endif %}", "themes/gavias_edupia/templates/node/node--155--full.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/node/node--155--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 11, "trans" => 22);
        static $filters = array("clean_class" => 4, "escape" => 12, "without" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'without'],
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
