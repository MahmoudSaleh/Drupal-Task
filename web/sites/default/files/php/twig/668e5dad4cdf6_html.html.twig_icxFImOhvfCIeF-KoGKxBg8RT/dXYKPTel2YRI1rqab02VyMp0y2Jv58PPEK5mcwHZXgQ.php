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

/* themes/gavias_edupia/templates/page/html.html.twig */
class __TwigTemplate_2705f4f1e3ec1f0cea07b52626b946bc extends Template
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
        // line 26
        yield "<!DOCTYPE html>
<html";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 27, $this->source), "html", null, true);
        yield ">
  <head>
    <head-placeholder token=\"";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 29, $this->source));
        yield "\">
    <title>";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 30, $this->source), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 31, $this->source));
        yield "\">

    <js-placeholder token=\"";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 33, $this->source));
        yield "\">
";
        // line 34
        if (((($__internal_compile_0 = ($context["html_attributes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["dir"] ?? null) : null) == "rtl")) {
            // line 35
            yield "    <link rel=\"stylesheet\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 35, $this->source), "html", null, true);
            yield "/css/style-rtl.css\" media=\"screen\" />";
        }
        // line 37
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 37, $this->source), "html", null, true);
        yield "/css/custom.css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 38, $this->source), "html", null, true);
        yield "/css/update.css\" media=\"screen\" />

    ";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["links_google_fonts"] ?? null), 40, $this->source));
        yield "

    ";
        // line 42
        if (($context["customize_css"] ?? null)) {
            // line 43
            yield "      <style type=\"text/css\">
        ";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_css"] ?? null), 44, $this->source));
            yield "
      </style>
    ";
        }
        // line 47
        yield "
    ";
        // line 48
        if (($context["customize_styles"] ?? null)) {
            // line 49
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_styles"] ?? null), 49, $this->source));
            yield "
    ";
        }
        // line 51
        yield "
  </head>

  ";
        // line 54
        $context["body_classes"] = [((        // line 55
($context["logged_in"] ?? null)) ? ("logged-in") : ("")), (( !        // line 56
($context["root_path"] ?? null)) ? ("frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 56, $this->source))))), ((        // line 57
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 57, $this->source)))) : ("")), ((        // line 58
($context["node_id"] ?? null)) ? (("node-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_id"] ?? null), 58, $this->source)))) : (""))];
        // line 61
        yield "
  <body";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
        yield ">

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>
    ";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 67, $this->source), "html", null, true);
        yield "
    ";
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 68, $this->source), "html", null, true);
        yield "
    ";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 69, $this->source), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 70, $this->source));
        yield "\">

    ";
        // line 72
        if (($context["addon_template"] ?? null)) {
            // line 73
            yield "      <div class=\"permission-save-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["save_customize_permission"] ?? null), 73, $this->source), "html", null, true);
            yield "\">
        ";
            // line 74
            yield from             $this->loadTemplate(($context["addon_template"] ?? null), "themes/gavias_edupia/templates/page/html.html.twig", 74)->unwrap()->yield($context);
            // line 75
            yield "      </div>
    ";
        }
        // line 77
        yield "
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["html_attributes", "placeholder_token", "head_title", "theme_path", "links_google_fonts", "customize_css", "customize_styles", "logged_in", "root_path", "node_type", "node_id", "attributes", "page_top", "page", "page_bottom", "addon_template", "save_customize_permission"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/page/html.html.twig";
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
        return array (  164 => 77,  160 => 75,  158 => 74,  153 => 73,  151 => 72,  146 => 70,  142 => 69,  138 => 68,  134 => 67,  129 => 65,  123 => 62,  120 => 61,  118 => 58,  117 => 57,  116 => 56,  115 => 55,  114 => 54,  109 => 51,  103 => 49,  101 => 48,  98 => 47,  92 => 44,  89 => 43,  87 => 42,  82 => 40,  77 => 38,  72 => 37,  67 => 35,  65 => 34,  61 => 33,  56 => 31,  52 => 30,  48 => 29,  43 => 27,  40 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
#}
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head>
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token|raw }}\">

    <js-placeholder token=\"{{ placeholder_token|raw }}\">
{% if html_attributes['dir'] == 'rtl' %}
    <link rel=\"stylesheet\" href=\"{{ theme_path }}/css/style-rtl.css\" media=\"screen\" />
{%- endif -%}
    <link rel=\"stylesheet\" href=\"{{ theme_path }}/css/custom.css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"{{ theme_path }}/css/update.css\" media=\"screen\" />

    {{ links_google_fonts|raw }}

    {% if customize_css %}
      <style type=\"text/css\">
        {{ customize_css|raw }}
      </style>
    {% endif %}

    {% if customize_styles %}
      {{ customize_styles|raw }}
    {% endif %}

  </head>

  {% set body_classes = [
    logged_in ? 'logged-in',
    not root_path ? 'frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'node--type-' ~ node_type|clean_class,
    node_id ? 'node-' ~ node_id|clean_class,
    ]
  %}

  <body{{ attributes.addClass(body_classes) }}>

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      {{ 'Skip to main content'|t }}
    </a>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">

    {% if addon_template %}
      <div class=\"permission-save-{{ save_customize_permission }}\">
        {% include addon_template %}
      </div>
    {% endif %}

  </body>
</html>
", "themes/gavias_edupia/templates/page/html.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/page/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34, "set" => 54, "include" => 74);
        static $filters = array("escape" => 27, "raw" => 29, "safe_join" => 30, "clean_class" => 56, "t" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 'raw', 'safe_join', 'clean_class', 't'],
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
