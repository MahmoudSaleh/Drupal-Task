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

/* themes/gavias_edupia/templates/user/page--user--login.html.twig */
class __TwigTemplate_ab87e9e46c6996e78f88563b5d8223a1 extends Template
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
        // line 7
        yield "
<div class=\"page-user-login gva-body-page\">
   ";
        // line 9
        yield from         $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/preloader.html.twig"), "themes/gavias_edupia/templates/user/page--user--login.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "   <div class=\"bg\"></div>
   <div role=\"main\" class=\"main main-page\">
      <div class=\"branding text-center\">
         ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 13)) {
            // line 14
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            yield "
         ";
        }
        // line 16
        yield "      </div>
      ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 17)) {
            // line 18
            yield "         <div class=\"help show\">
            <div class=\"container\">
               <div class=\"content-inner\">
                  ";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            yield "
               </div>
            </div>
         </div>
      ";
        }
        // line 26
        yield "      <div class=\"clearfix\"></div>
      <div id=\"content\" class=\"content content-full\">
         ";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 28)) {
            // line 29
            yield "            <div class=\"content-main\">
               ";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            yield "
            </div>
         ";
        }
        // line 33
        yield "      </div>
   </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["directory", "page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/user/page--user--login.html.twig";
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
        return array (  92 => 33,  86 => 30,  83 => 29,  81 => 28,  77 => 26,  69 => 21,  64 => 18,  62 => 17,  59 => 16,  53 => 14,  51 => 13,  46 => 10,  44 => 9,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Gavias's theme implementation to display a single Drupal page.
 */
#}

<div class=\"page-user-login gva-body-page\">
   {% include directory ~ '/templates/page/parts/preloader.html.twig' %}
   <div class=\"bg\"></div>
   <div role=\"main\" class=\"main main-page\">
      <div class=\"branding text-center\">
         {% if page.branding %}
            {{ page.branding }}
         {% endif %}
      </div>
      {% if page.help %}
         <div class=\"help show\">
            <div class=\"container\">
               <div class=\"content-inner\">
                  {{ page.help }}
               </div>
            </div>
         </div>
      {% endif %}
      <div class=\"clearfix\"></div>
      <div id=\"content\" class=\"content content-full\">
         {% if page.content %}
            <div class=\"content-main\">
               {{ page.content }}
            </div>
         {% endif %}
      </div>
   </div>
</div>
", "themes/gavias_edupia/templates/user/page--user--login.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/user/page--user--login.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 9, "if" => 13);
        static $filters = array("escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
