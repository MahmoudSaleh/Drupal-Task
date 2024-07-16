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

/* modules/contrib/webform/templates/webform-submission-information.html.twig */
class __TwigTemplate_1d4c8435433964b42146329c10dabe27 extends Template
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
        // line 33
        if (($context["submissions_view"] ?? null)) {
            // line 34
            yield "  <div><b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission Number"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["serial"] ?? null), 34, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission ID"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sid"] ?? null), 35, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission UUID"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uuid"] ?? null), 36, $this->source), "html", null, true);
            yield "</div>
  ";
            // line 37
            if (($context["uri"] ?? null)) {
                // line 38
                yield "    <div><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission URI"));
                yield ":</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uri"] ?? null), 38, $this->source), "html", null, true);
                yield "</div>
  ";
            }
            // line 40
            yield "  ";
            if (($context["token_view"] ?? null)) {
                // line 41
                yield "    <div><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission View"));
                yield ":</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token_view"] ?? null), 41, $this->source), "html", null, true);
                yield "</div>
  ";
            }
            // line 43
            yield "  ";
            if (($context["token_update"] ?? null)) {
                // line 44
                yield "    <div><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission Update"));
                yield ":</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token_update"] ?? null), 44, $this->source), "html", null, true);
                yield "</div>
  ";
            }
            // line 46
            yield "  ";
            if (($context["token_delete"] ?? null)) {
                // line 47
                yield "    <div><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission Delete"));
                yield ":</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token_delete"] ?? null), 47, $this->source), "html", null, true);
                yield "</div>
  ";
            }
            // line 49
            yield "  <br />
  <div><b>";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Created"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 50, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Completed"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["completed"] ?? null), 51, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Changed"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["changed"] ?? null), 52, $this->source), "html", null, true);
            yield "</div>
  <br />
  <div><b>";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Remote IP address"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remote_addr"] ?? null), 54, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submitted by"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_by"] ?? null), 55, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Language"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 56, $this->source), "html", null, true);
            yield "</div>
  <br />
  <div><b>";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Is draft"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["is_draft"] ?? null), 58, $this->source), "html", null, true);
            yield "</div>
  ";
            // line 59
            if (($context["current_page"] ?? null)) {
                // line 60
                yield "    <div><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Current page"));
                yield ":</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_page"] ?? null), 60, $this->source), "html", null, true);
                yield "</div>
  ";
            }
            // line 62
            yield "  <div><b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Webform"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform"] ?? null), 62, $this->source), "html", null, true);
            yield "</div>
  ";
            // line 63
            if (($context["submitted_to"] ?? null)) {
                // line 64
                yield "    <div><b>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submitted to"));
                yield ":</b> ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_to"] ?? null), 64, $this->source), "html", null, true);
                yield "</div>
  ";
            }
            // line 66
            yield "  ";
            if (((($context["sticky"] ?? null) || ($context["locked"] ?? null)) || ($context["notes"] ?? null))) {
                // line 67
                yield "    <br />
    ";
                // line 68
                if (($context["sticky"] ?? null)) {
                    // line 69
                    yield "      <div><b>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Flagged"));
                    yield ":</b> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky"] ?? null), 69, $this->source), "html", null, true);
                    yield "</div>
    ";
                }
                // line 71
                yield "    ";
                if (($context["locked"] ?? null)) {
                    // line 72
                    yield "      <div><b>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Locked"));
                    yield ":</b> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["locked"] ?? null), 72, $this->source), "html", null, true);
                    yield "</div>
    ";
                }
                // line 74
                yield "    ";
                if (($context["notes"] ?? null)) {
                    // line 75
                    yield "      <div><b>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Notes"));
                    yield ":</b><br/>
      <pre>";
                    // line 76
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["notes"] ?? null), 76, $this->source), "html", null, true);
                    yield "</pre>
      </div>
    ";
                }
                // line 79
                yield "  ";
            }
        } else {
            // line 81
            yield "  <div><b>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submission Number"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["serial"] ?? null), 81, $this->source), "html", null, true);
            yield "</div>
  <div><b>";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Created"));
            yield ":</b> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 82, $this->source), "html", null, true);
            yield "</div>
";
        }
        // line 84
        yield "
";
        // line 85
        if (($context["delete"] ?? null)) {
            // line 86
            yield "  <br/>
  <div>";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["delete"] ?? null), 87, $this->source), "html", null, true);
            yield "</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["submissions_view", "serial", "sid", "uuid", "uri", "token_view", "token_update", "token_delete", "created", "completed", "changed", "remote_addr", "submitted_by", "language", "is_draft", "current_page", "webform", "submitted_to", "sticky", "locked", "notes", "delete"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-submission-information.html.twig";
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
        return array (  245 => 87,  242 => 86,  240 => 85,  237 => 84,  230 => 82,  223 => 81,  219 => 79,  213 => 76,  208 => 75,  205 => 74,  197 => 72,  194 => 71,  186 => 69,  184 => 68,  181 => 67,  178 => 66,  170 => 64,  168 => 63,  161 => 62,  153 => 60,  151 => 59,  145 => 58,  138 => 56,  132 => 55,  126 => 54,  119 => 52,  113 => 51,  107 => 50,  104 => 49,  96 => 47,  93 => 46,  85 => 44,  82 => 43,  74 => 41,  71 => 40,  63 => 38,  61 => 37,  55 => 36,  49 => 35,  42 => 34,  40 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for webform submission information.
 *
 * Available variables:
 * - serial: The serial number of the submission entity.
 * - sid: The ID of the submission entity.
 * - uuid: The UUID of the submission entity.
 * - token: A secure token used to look up a submission.
 * - uri: The URI the user submitted the webform.
 * - created: The time that the submission was first saved.
 * - completed: The time that the submission was completed.
 * - changed: The time that the submission was saved.
 * - in_draft: Is this a draft of the submission?
 * - current_page: The current wizard page.
 * - remote_addr: The IP address of the user that submitted the webform.
 * - submitted_by: The user that submitted the webform.
 * - submitted_to: Link to the submission's URI.
 * - langcode: The submission language code.
 * - locked: A flag that indicates a locked submission.
 * - sticky: A flag that indicate the status of the submission.
 * - notes: Administrative notes about the submission.
 * - webform: The associated webform.
 * - token_update: The tokenize URL used to update the submission.
 * - delete: Link to delete the submission.
 *
 * @see template_preprocess_webform_submission_information()
 *
 * @ingroup themeable
 */
#}
{% if submissions_view %}
  <div><b>{{ 'Submission Number'|t }}:</b> {{ serial }}</div>
  <div><b>{{ 'Submission ID'|t }}:</b> {{ sid }}</div>
  <div><b>{{ 'Submission UUID'|t }}:</b> {{ uuid }}</div>
  {% if uri %}
    <div><b>{{ 'Submission URI'|t }}:</b> {{ uri }}</div>
  {% endif %}
  {% if token_view %}
    <div><b>{{ 'Submission View'|t }}:</b> {{ token_view }}</div>
  {% endif %}
  {% if token_update %}
    <div><b>{{ 'Submission Update'|t }}:</b> {{ token_update }}</div>
  {% endif %}
  {% if token_delete %}
    <div><b>{{ 'Submission Delete'|t }}:</b> {{ token_delete }}</div>
  {% endif %}
  <br />
  <div><b>{{ 'Created'|t }}:</b> {{ created }}</div>
  <div><b>{{ 'Completed'|t }}:</b> {{ completed }}</div>
  <div><b>{{ 'Changed'|t }}:</b> {{ changed }}</div>
  <br />
  <div><b>{{ 'Remote IP address'|t }}:</b> {{ remote_addr }}</div>
  <div><b>{{ 'Submitted by'|t }}:</b> {{ submitted_by }}</div>
  <div><b>{{ 'Language'|t }}:</b> {{ language }}</div>
  <br />
  <div><b>{{ 'Is draft'|t }}:</b> {{ is_draft }}</div>
  {% if current_page %}
    <div><b>{{ 'Current page'|t }}:</b> {{ current_page }}</div>
  {% endif %}
  <div><b>{{ 'Webform'|t }}:</b> {{ webform }}</div>
  {% if submitted_to %}
    <div><b>{{ 'Submitted to'|t }}:</b> {{ submitted_to }}</div>
  {% endif %}
  {% if sticky or locked or notes %}
    <br />
    {% if sticky %}
      <div><b>{{ 'Flagged'|t }}:</b> {{ sticky }}</div>
    {% endif %}
    {% if locked %}
      <div><b>{{ 'Locked'|t }}:</b> {{ locked }}</div>
    {% endif %}
    {% if notes %}
      <div><b>{{ 'Notes'|t }}:</b><br/>
      <pre>{{ notes }}</pre>
      </div>
    {% endif %}
  {% endif %}
{% else %}
  <div><b>{{ 'Submission Number'|t }}:</b> {{ serial }}</div>
  <div><b>{{ 'Created'|t }}:</b> {{ created }}</div>
{% endif %}

{% if delete %}
  <br/>
  <div>{{ delete }}</div>
{% endif %}
", "modules/contrib/webform/templates/webform-submission-information.html.twig", "/home/ccgforum/public_html/web/modules/contrib/webform/templates/webform-submission-information.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33);
        static $filters = array("t" => 34, "escape" => 34);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
