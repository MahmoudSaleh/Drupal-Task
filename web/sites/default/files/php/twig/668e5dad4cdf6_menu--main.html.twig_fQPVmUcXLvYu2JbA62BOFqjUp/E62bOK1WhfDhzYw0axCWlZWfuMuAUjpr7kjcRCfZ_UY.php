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

/* themes/gavias_edupia/templates/navigation/menu--main.html.twig */
class __TwigTemplate_135a133b9e674a192cdae0d73112e19d extends Template
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
        // line 21
        yield "
<div class=\"gva-navigation\">
";
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        yield "
";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 29, $context, $this->getSourceContext()));
        yield "

";
        // line 83
        yield "</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        return; yield '';
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 32
            yield "  ";
            $macros["menus"] = $this;
            // line 33
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 34
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    yield "      <ul ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["gva_menu gva_menu_main"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                    yield ">
      
    ";
                } else {
                    // line 38
                    yield "      <ul class=\"menu sub-menu\">
    ";
                }
                // line 40
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    yield "      ";
                    $context["class_mega_menu"] = "";
                    // line 42
                    yield "      ";
                    $context["class_columns"] = "";
                    // line 43
                    yield "      ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 43), "gva_layout", [], "any", false, false, true, 43) == "menu-block") && (($context["menu_level"] ?? null) == 0))) {
                        // line 44
                        yield "        ";
                        $context["class_mega_menu"] = "gva-mega-menu mega-menu-block";
                        yield " 
      ";
                    } elseif (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 45
$context["item"], "attributes", [], "any", false, false, true, 45), "gva_layout", [], "any", false, false, true, 45) == "menu-grid") && (($context["menu_level"] ?? null) == 0))) {
                        yield "   
        ";
                        // line 46
                        $context["class_mega_menu"] = "gva-mega-menu megamenu menu-grid";
                        yield " 
        ";
                        // line 47
                        $context["class_columns"] = Twig\Extension\CoreExtension::join(["menu-columns-", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 47), "gva_layout_columns", [], "any", false, false, true, 47)], "");
                        // line 48
                        yield "      ";
                    }
                    yield "    
      ";
                    // line 50
                    $context["classes"] = ["menu-item", ((CoreExtension::getAttribute($this->env, $this->source,                     // line 52
$context["item"], "is_expanded", [], "any", false, false, true, 52)) ? ("menu-item--expanded") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 53
$context["item"], "is_collapsed", [], "any", false, false, true, 53)) ? ("menu-item--collapsed") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 54
$context["item"], "in_active_trail", [], "any", false, false, true, 54)) ? ("menu-item--active-trail") : ("")), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 55
$context["item"], "attributes", [], "any", false, false, true, 55), "gva_class", [], "any", false, false, true, 55),                     // line 56
($context["class_mega_menu"] ?? null),                     // line 57
($context["class_columns"] ?? null)];
                    // line 60
                    yield "      <li ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 60), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "gva_icon", "gva_class", "gva_layout_columns", "gva_block", "gva_layout"), "html", null, true);
                    yield ">
        <a href=\"";
                    // line 61
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    yield "\">
          ";
                    // line 62
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 62), "gva_icon", [], "any", false, false, true, 62) != "")) {
                        // line 63
                        yield "            <i class=\"fa ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 63), "gva_icon", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                        yield "\"></i>
          ";
                    }
                    // line 65
                    yield "          ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 65), 65, $this->source)), "html", null, true);
                    yield "
          ";
                    // line 66
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 66) || ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 66), "gva_layout", [], "any", false, false, true, 66) == "menu-block") && (($context["menu_level"] ?? null) == 0)))) {
                        // line 67
                        yield "            <span class=\"icaret nav-plus gv-icon-161\"></span>
          ";
                    }
                    // line 68
                    yield "  
        </a>
        ";
                    // line 70
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 70), "gva_layout", [], "any", false, false, true, 70) == "menu-block") && (($context["menu_level"] ?? null) == 0))) {
                        // line 71
                        yield "          <div class=\"sub-menu\">
            ";
                        // line 72
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "gva_block_content", [], "any", false, false, true, 72), 72, $this->source)), "html", null, true);
                        yield "
          </div>
        ";
                    }
                    // line 74
                    yield "  
        ";
                    // line 75
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 75)) {
                        // line 76
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 76), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 76, $context, $this->getSourceContext()));
                        yield "
        ";
                    }
                    // line 78
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                yield "    </ul>
  ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/navigation/menu--main.html.twig";
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
        return array (  199 => 80,  192 => 78,  186 => 76,  184 => 75,  181 => 74,  175 => 72,  172 => 71,  170 => 70,  166 => 68,  162 => 67,  160 => 66,  155 => 65,  149 => 63,  147 => 62,  143 => 61,  138 => 60,  136 => 57,  135 => 56,  134 => 55,  133 => 54,  132 => 53,  131 => 52,  130 => 50,  125 => 48,  123 => 47,  119 => 46,  115 => 45,  110 => 44,  107 => 43,  104 => 42,  101 => 41,  96 => 40,  92 => 38,  85 => 35,  82 => 34,  79 => 33,  76 => 32,  62 => 31,  54 => 83,  49 => 29,  46 => 24,  44 => 23,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}

<div class=\"gva-navigation\">
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul {{ attributes.addClass('gva_menu gva_menu_main') }}>
      
    {% else %}
      <ul class=\"menu sub-menu\">
    {% endif %}
    {% for item in items %}
      {% set class_mega_menu = '' %}
      {% set class_columns = '' %}
      {% if item.attributes.gva_layout == 'menu-block' and menu_level == 0 %}
        {% set class_mega_menu = 'gva-mega-menu mega-menu-block' %} 
      {% elseif item.attributes.gva_layout == 'menu-grid' and menu_level == 0 %}   
        {% set class_mega_menu = 'gva-mega-menu megamenu menu-grid' %} 
        {% set class_columns = ['menu-columns-', item.attributes.gva_layout_columns]|join('') %}
      {% endif %}    
      {%
        set classes = [
          'menu-item',
          item.is_expanded ? 'menu-item--expanded',
          item.is_collapsed ? 'menu-item--collapsed',
          item.in_active_trail ? 'menu-item--active-trail',
          item.attributes.gva_class,
          class_mega_menu,
          class_columns
        ]
      %}
      <li {{ item.attributes.addClass(classes)|without('gva_icon', 'gva_class', 'gva_layout_columns', 'gva_block', 'gva_layout') }}>
        <a href=\"{{ item.url }}\">
          {% if item.attributes.gva_icon != '' %}
            <i class=\"fa {{ item.attributes.gva_icon }}\"></i>
          {% endif %}
          {{ item.title|trim }}
          {% if item.below or item.attributes.gva_layout == 'menu-block' and menu_level == 0 %}
            <span class=\"icaret nav-plus gv-icon-161\"></span>
          {% endif %}  
        </a>
        {% if item.attributes.gva_layout == 'menu-block' and menu_level == 0 %}
          <div class=\"sub-menu\">
            {{ item.gva_block_content|trim }}
          </div>
        {% endif %}  
        {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
</div>

", "themes/gavias_edupia/templates/navigation/menu--main.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 40, "set" => 41);
        static $filters = array("escape" => 35, "join" => 47, "without" => 60, "trim" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'join', 'without', 'trim'],
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
