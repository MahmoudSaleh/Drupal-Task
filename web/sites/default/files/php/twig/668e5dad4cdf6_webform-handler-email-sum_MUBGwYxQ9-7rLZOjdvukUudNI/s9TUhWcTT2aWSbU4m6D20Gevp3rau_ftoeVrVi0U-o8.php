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

/* modules/contrib/webform/templates/webform-handler-email-summary.html.twig */
class __TwigTemplate_ddd1b638d8e646bfb292e30be2a2bd88 extends Template
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
        yield "
";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "debug", [], "any", false, false, true, 14)) {
            yield "<strong class=\"color-error\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Debugging is enabled"));
            yield "</strong><br />";
        }
        // line 15
        yield "<b>";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("To:"));
        yield "</b> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "to_mail", [], "any", false, false, true, 15), 15, $this->source), ["," => ", "]), "html", null, true);
        yield "<br />
";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "cc_mail", [], "any", false, false, true, 16)) {
            yield "<b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("CC:"));
            yield "</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "cc_mail", [], "any", false, false, true, 16), 16, $this->source), ["," => ", "]), "html", null, true);
            yield "<br />";
        }
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "bcc_mail", [], "any", false, false, true, 17)) {
            yield "<b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("BCC:"));
            yield "</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "bcc_mail", [], "any", false, false, true, 17), 17, $this->source), ["," => ", "]), "html", null, true);
            yield "<br />";
        }
        // line 18
        yield "<b>";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("From:"));
        yield "</b> ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "from_name", [], "any", false, false, true, 18)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "from_name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        }
        yield " &lt;";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "from_mail", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        yield "&gt;<br />
";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "reply_to", [], "any", false, false, true, 19)) {
            yield "<b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Reply to:"));
            yield "</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "reply_to", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            yield "<br />";
        }
        // line 20
        yield "<b>";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Subject:"));
        yield "</b> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "subject", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        yield "<br />
<b>";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Settings:"));
        yield "</b> ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "html", [], "any", false, false, true, 21)) ? ("HTML") : (t("Plain text"))));
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "html", [], "any", false, false, true, 21) && CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "attachments", [], "any", false, false, true, 21))) ? ("/") : ("")));
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "attachments", [], "any", false, false, true, 21)) ? (t("Attachments")) : ("")));
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "twig", [], "any", false, false, true, 21)) ? (t("(Twig)")) : ("")));
        yield "<br />
<b>";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sent when:"));
        yield "</b> ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "states", [], "any", false, false, true, 22)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "states", [], "any", false, false, true, 22), 22, $this->source), "; "), "html", null, true);
        } else {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Custom"));
        }
        yield "<br />
";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "theme_name", [], "any", false, false, true, 23)) {
            yield "<b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Theme:"));
            yield "</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "theme_name", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            yield "<br />";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["settings"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-handler-email-summary.html.twig";
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
        return array (  120 => 23,  110 => 22,  98 => 21,  91 => 20,  83 => 19,  72 => 18,  64 => 17,  56 => 16,  49 => 15,  43 => 14,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a summary of a webform email handler.
 *
 * Available variables:
 * - settings: The current configuration for this email handler.
 * - handler: The email handler.
 *
 * @ingroup themeable
 */
#}

{% if settings.debug %}<strong class=\"color-error\">{{ 'Debugging is enabled'|t }}</strong><br />{% endif %}
<b>{{ 'To:'|t }}</b> {{ settings.to_mail|replace({',': ', '}) }}<br />
{% if settings.cc_mail %}<b>{{ 'CC:'|t }}</b> {{ settings.cc_mail|replace({',': ', '}) }}<br />{% endif %}
{% if settings.bcc_mail %}<b>{{ 'BCC:'|t }}</b> {{ settings.bcc_mail|replace({',': ', '}) }}<br />{% endif %}
<b>{{ 'From:'|t }}</b> {% if settings.from_name %}{{ settings.from_name }}{% endif %} &lt;{{ settings.from_mail }}&gt;<br />
{% if settings.reply_to %}<b>{{ 'Reply to:'|t }}</b> {{ settings.reply_to }}<br />{% endif %}
<b>{{ 'Subject:'|t }}</b> {{ settings.subject }}<br />
<b>{{ 'Settings:'|t }}</b> {{ settings.html ? 'HTML' : 'Plain text'|t }} {{ settings.html and settings.attachments ? '/' : '' }} {{ settings.attachments ? 'Attachments'|t : '' }} {{ settings.twig ? '(Twig)'|t : '' }}<br />
<b>{{ 'Sent when:'|t }}</b> {% if settings.states %}{{ settings.states|join('; ') }}{% else %}{{ 'Custom'|t }}{% endif %}<br />
{% if settings.theme_name %}<b>{{ 'Theme:'|t }}</b> {{ settings.theme_name }}<br />{% endif %}
", "modules/contrib/webform/templates/webform-handler-email-summary.html.twig", "/home/ccgforum/public_html/web/modules/contrib/webform/templates/webform-handler-email-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14);
        static $filters = array("t" => 14, "escape" => 15, "replace" => 15, "join" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape', 'replace', 'join'],
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
