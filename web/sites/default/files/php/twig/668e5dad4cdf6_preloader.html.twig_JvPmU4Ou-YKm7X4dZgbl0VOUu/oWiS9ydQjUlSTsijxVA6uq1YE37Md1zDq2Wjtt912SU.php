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

/* themes/gavias_edupia/templates/page/parts/preloader.html.twig */
class __TwigTemplate_76af53818951f8c9593fa8b8d74a99ff extends Template
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
        // line 1
        if ((($context["preloader"] ?? null) == 1)) {
            // line 2
            yield "    <div id=\"jpreContent\">
        <div id=\"jprecontent-inner\">
           <div class=\"preloader-wrapper d-none active\">
              <img src=\"";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 5, $this->source), "html", null, true);
            yield "/images/preloader/preloader-7.gif\" alt=\"\" />
           </div>  
        </div>
      </div>
  ";
        }
        // line 9
        yield " ";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["preloader", "theme_path"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/page/parts/preloader.html.twig";
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
        return array (  55 => 9,  47 => 5,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if preloader == 1 %}
    <div id=\"jpreContent\">
        <div id=\"jprecontent-inner\">
           <div class=\"preloader-wrapper d-none active\">
              <img src=\"{{ theme_path }}/images/preloader/preloader-7.gif\" alt=\"\" />
           </div>  
        </div>
      </div>
  {% endif %} ", "themes/gavias_edupia/templates/page/parts/preloader.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/page/parts/preloader.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
