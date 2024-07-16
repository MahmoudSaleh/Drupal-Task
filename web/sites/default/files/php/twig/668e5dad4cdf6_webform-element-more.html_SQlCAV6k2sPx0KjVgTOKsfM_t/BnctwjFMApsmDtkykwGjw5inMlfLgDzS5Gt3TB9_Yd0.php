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

/* modules/contrib/webform/templates/webform-element-more.html.twig */
class __TwigTemplate_668dbf320727faa6b91e80acbbe4d107 extends Template
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
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.element.more"), "html", null, true);
        yield "
";
        // line 20
        $context["classes"] = ["js-webform-element-more", "webform-element-more"];
        // line 25
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 25), 25, $this->source), "html", null, true);
        yield ">
  <div class=\"webform-element-more--link\"><a role=\"button\" href=\"#";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        yield "--content\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more_title"] ?? null), 26, $this->source), "html", null, true);
        yield "</a></div>
  <div id=\"";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        yield "--content\" class=\"webform-element-more--content\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 27, $this->source), "html", null, true);
        yield "</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "more_title", "more"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-element-more.html.twig";
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
        return array (  57 => 27,  51 => 26,  46 => 25,  44 => 20,  40 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme implementation for webform element more.
 *
 * Available variables
 * - title: More label.
 * - content: More content.
 *
 * Based on WAI-ARIA Authoring Practices 1.1: Disclosure (Show/Hide)
 *
 * @see https://www.w3.org/TR/wai-aria-practices-1.1/#disclosure
 * @see https://www.w3.org/TR/wai-aria-practices-1.1/examples/disclosure/disclosure-faq.html
 * @see template_preprocess_webform_element_more()
 * @ingroup themeable
 */
#}
{{ attach_library('webform/webform.element.more') }}
{%
  set classes = [
    'js-webform-element-more',
    'webform-element-more',
  ]
%}
<div{{ attributes.addClass(classes) }}>
  <div class=\"webform-element-more--link\"><a role=\"button\" href=\"#{{ attributes.id }}--content\">{{ more_title }}</a></div>
  <div id=\"{{ attributes.id }}--content\" class=\"webform-element-more--content\">{{ more }}</div>
</div>
", "modules/contrib/webform/templates/webform-element-more.html.twig", "/home/ccgforum/public_html/web/modules/contrib/webform/templates/webform-element-more.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 20);
        static $filters = array("escape" => 18);
        static $functions = array("attach_library" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['attach_library'],
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