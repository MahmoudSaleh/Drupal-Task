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

/* modules/contrib/webform/templates/webform-submission-navigation.html.twig */
class __TwigTemplate_e0f5c8164f04687a356cf14889c281a8 extends Template
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
        // line 17
        if ((($context["prev_url"] ?? null) || ($context["next_url"] ?? null))) {
            // line 18
            yield "  <nav id=\"webform-submission-navigation-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform_id"] ?? null), 18, $this->source), "html", null, true);
            yield "\" class=\"webform-submission-navigation\" role=\"navigation\" aria-labelledby=\"webform-submission-label-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform_id"] ?? null), 18, $this->source), "html", null, true);
            yield "\">
    <h2 class=\"visually-hidden\" id=\"webform-submission-label-";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform_id"] ?? null), 19, $this->source), "html", null, true);
            yield "\">Submission navigation links for ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform_title"] ?? null), 19, $this->source), "html", null, true);
            yield "</h2>
    <ul class=\"webform-submission-pager\">
      ";
            // line 21
            if (($context["prev_url"] ?? null)) {
                // line 22
                yield "        <li class=\"webform-submission-pager__item webform-submission-pager__item--previous\">
          <a href=\"";
                // line 23
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev_url"] ?? null), 23, $this->source), "html", null, true);
                yield "\" rel=\"prev\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\"><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("‹"));
                yield "</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous submission"));
                yield "</a>
        </li>
      ";
            }
            // line 26
            yield "      ";
            if (($context["next_url"] ?? null)) {
                // line 27
                yield "        <li class=\"webform-submission-pager__item webform-submission-pager__item--next\">
          <a href=\"";
                // line 28
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_url"] ?? null), 28, $this->source), "html", null, true);
                yield "\" rel=\"next\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next submission"));
                yield " <b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("›"));
                yield "</b></a>
        </li>
      ";
            }
            // line 31
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["prev_url", "next_url", "webform_id", "webform_title"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-submission-navigation.html.twig";
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
        return array (  91 => 31,  79 => 28,  76 => 27,  73 => 26,  61 => 23,  58 => 22,  56 => 21,  49 => 19,  42 => 18,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to navigate webform submission.
 *
 * Available variables:
 * - prev_url: URL to the previous webform submission.
 * - next_url: URL to the next webform submission.
 * - webform_id: The webform ID. Provided for context.
 * - webform_title: The webform title. Provided for context.
 *
 * @see template_preprocess_webform_submission_navigation()
 *
 * @ingroup themeable
 */
#}
{% if prev_url or next_url %}
  <nav id=\"webform-submission-navigation-{{ webform_id }}\" class=\"webform-submission-navigation\" role=\"navigation\" aria-labelledby=\"webform-submission-label-{{ webform_id }}\">
    <h2 class=\"visually-hidden\" id=\"webform-submission-label-{{ webform_id }}\">Submission navigation links for {{ webform_title }}</h2>
    <ul class=\"webform-submission-pager\">
      {% if prev_url %}
        <li class=\"webform-submission-pager__item webform-submission-pager__item--previous\">
          <a href=\"{{ prev_url }}\" rel=\"prev\" title=\"{{ 'Go to previous page'|t }}\"><b>{{ '‹'|t }}</b> {{ 'Previous submission'|t }}</a>
        </li>
      {% endif %}
      {% if next_url %}
        <li class=\"webform-submission-pager__item webform-submission-pager__item--next\">
          <a href=\"{{ next_url }}\" rel=\"next\" title=\"{{ 'Go to next page'|t }}\">{{ 'Next submission'|t }} <b>{{ '›'|t }}</b></a>
        </li>
      {% endif %}
    </ul>
  </nav>
{% endif %}
", "modules/contrib/webform/templates/webform-submission-navigation.html.twig", "/home/ccgforum/public_html/web/modules/contrib/webform/templates/webform-submission-navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17);
        static $filters = array("escape" => 18, "t" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
