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

/* modules/contrib/webform/templates/webform-help-video-youtube.html.twig */
class __TwigTemplate_0ac13f4ad392d28095a94c9f651e539d extends Template
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
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.help"), "html", null, true);
        yield "
<div class=\"webform-help-video-youtube\">
  <div class=\"webform-help-video-youtube--container\">
    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_id"] ?? null), 15, $this->source), "html", null, true);
        yield "?rel=0&modestbranding=1";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["autoplay"] ?? null)) ? ("&autoplay=1") : ("")));
        yield "\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["autoplay"] ?? null)) ? ("allow=\"autoplay\"") : ("")));
        yield " title=\"YouTube video\" allowfullscreen></iframe>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["youtube_id", "autoplay"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-help-video-youtube.html.twig";
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
        return array (  46 => 15,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme implementation for webform help video using YouTube.
 *
 * Available variables
 * - youtube_id: YouTube video id.
 *
 * @ingroup themeable
 */
#}
{{ attach_library('webform/webform.help') }}
<div class=\"webform-help-video-youtube\">
  <div class=\"webform-help-video-youtube--container\">
    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/{{ youtube_id }}?rel=0&modestbranding=1{{ autoplay ? '&autoplay=1' : '' }}\"{{ autoplay ? 'allow=\"autoplay\"' : '' }} title=\"YouTube video\" allowfullscreen></iframe>
  </div>
</div>
", "modules/contrib/webform/templates/webform-help-video-youtube.html.twig", "/home/ccgforum/public_html/web/modules/contrib/webform/templates/webform-help-video-youtube.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 12);
        static $functions = array("attach_library" => 12);

        try {
            $this->sandbox->checkSecurity(
                [],
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
