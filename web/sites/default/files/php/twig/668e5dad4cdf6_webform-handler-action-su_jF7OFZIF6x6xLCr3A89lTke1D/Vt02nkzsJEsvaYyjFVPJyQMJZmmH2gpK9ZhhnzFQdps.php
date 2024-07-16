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

/* modules/contrib/webform/templates/webform-handler-action-summary.html.twig */
class __TwigTemplate_0d631a950fea84db1e630d900ffad991 extends Template
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
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "debug", [], "any", false, false, true, 13)) {
            yield "<strong class=\"color-error\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Debugging is enabled"));
            yield "</strong><br />";
        }
        // line 14
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "sticky", [], "any", false, false, true, 14))) {
            yield "<b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Status:"));
            yield "</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "sticky", [], "any", false, false, true, 14)) ? (t("Flag/Star")) : (t("Unflag/Unstar"))));
            yield "<br />";
        }
        // line 15
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "locked", [], "any", false, false, true, 15))) {
            yield "<b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Lock:"));
            yield "</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "locked", [], "any", false, false, true, 15)) ? (t("Locked")) : (t("Unlocked"))));
            yield "<br />";
        }
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "notes", [], "any", false, false, true, 16)) {
            yield "<b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Notes:"));
            yield "</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "notes", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            yield "<br />";
        }
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "message", [], "any", false, false, true, 17)) {
            yield "<b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Message:"));
            yield "</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "message", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            yield " (";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "message_type", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            yield ")<br />";
        }
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "data", [], "any", false, false, true, 18)) {
            yield "<b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Data (keys):"));
            yield "</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "data", [], "any", false, false, true, 18), 18, $this->source), "; "), "html", null, true);
            yield "<br />";
        }
        // line 19
        yield "<b>";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Execute when:"));
        yield "</b> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "states", [], "any", false, false, true, 19), 19, $this->source), "; "), "html", null, true);
        yield "<br />

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["settings"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-handler-action-summary.html.twig";
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
        return array (  88 => 19,  80 => 18,  70 => 17,  62 => 16,  54 => 15,  46 => 14,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a summary of a webform action handler.
 *
 * Available variables:
 * - settings: The current configuration for this debug handler.
 * - handler: The action handler.
 *
 * @ingroup themeable
 */
#}
{% if settings.debug %}<strong class=\"color-error\">{{ 'Debugging is enabled'|t }}</strong><br />{% endif %}
{% if settings.sticky is not null %}<b>{{ 'Status:'|t }}</b> {{ settings.sticky ? 'Flag/Star'|t : 'Unflag/Unstar'|t }}<br />{% endif %}
{% if settings.locked is not null %}<b>{{ 'Lock:'|t }}</b> {{ settings.locked ? 'Locked'|t : 'Unlocked'|t }}<br />{% endif %}
{% if settings.notes %}<b>{{ 'Notes:'|t }}</b> {{ settings.notes }}<br />{% endif %}
{% if settings.message %}<b>{{ 'Message:'|t }}</b> {{ settings.message }} ({{ settings.message_type }})<br />{% endif %}
{% if settings.data %}<b>{{ 'Data (keys):'|t }}</b> {{ settings.data|join('; ') }}<br />{% endif %}
<b>{{ 'Execute when:'|t }}</b> {{ settings.states|join('; ') }}<br />

", "modules/contrib/webform/templates/webform-handler-action-summary.html.twig", "/home/ccgforum/public_html/web/modules/contrib/webform/templates/webform-handler-action-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array("t" => 13, "escape" => 16, "join" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape', 'join'],
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
