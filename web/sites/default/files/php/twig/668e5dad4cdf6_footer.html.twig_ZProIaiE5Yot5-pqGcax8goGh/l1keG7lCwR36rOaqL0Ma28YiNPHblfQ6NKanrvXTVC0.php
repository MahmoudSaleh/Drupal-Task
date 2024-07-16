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

/* themes/gavias_edupia/templates/page/footer.html.twig */
class __TwigTemplate_b8e191f09c436ec2467c81b1338be498 extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 1)) {
            // line 2
            yield "  <div class=\"gva-drupal-message-status\">
    ";
            // line 3
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            yield "
  </div>
";
        }
        // line 6
        yield "  
<footer id=\"footer\" class=\"footer\">
  <div class=\"footer-inner\">
    
    ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "before_footer", [], "any", false, false, true, 10)) {
            // line 11
            yield "     <div class=\"footer-top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <div class=\"before-footer clearfix area\">
                  ";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "before_footer", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            yield "
              </div>
            </div>
          </div>     
        </div>   
      </div> 
     ";
        }
        // line 23
        yield "     
     <div class=\"footer-center\">
        <div class=\"container\">      
           <div class=\"row\">
              ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 27)) {
            // line 28
            yield "                <div class=\"footer-first col-xl-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null), 28, $this->source), "html", null, true);
            yield " col-lg-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null), 28, $this->source), "html", null, true);
            yield " col-md-12 col-sm-12 col-xs-12 column\">
                  ";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            yield "
                </div> 
              ";
        }
        // line 32
        yield "
              ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 33)) {
            // line 34
            yield "               <div class=\"footer-second col-xl-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_size"] ?? null), 34, $this->source), "html", null, true);
            yield " col-lg-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_size"] ?? null), 34, $this->source), "html", null, true);
            yield " col-md-12 col-sm-12 col-xs-12 column\">
                  ";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            yield "
                </div> 
              ";
        }
        // line 38
        yield "
              ";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 39)) {
            // line 40
            yield "                <div class=\"footer-third col-xl-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_size"] ?? null), 40, $this->source), "html", null, true);
            yield " col-lg-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_size"] ?? null), 40, $this->source), "html", null, true);
            yield " col-md-12 col-sm-12 col-xs-12 column\">
                  ";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            yield "
                </div> 
              ";
        }
        // line 44
        yield "
              ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 45)) {
            // line 46
            yield "                 <div class=\"footer-four col-xl-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_four_size"] ?? null), 46, $this->source), "html", null, true);
            yield " col-lg-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_four_size"] ?? null), 46, $this->source), "html", null, true);
            yield " col-md-12 col-sm-12 col-xs-12 column\">
                  ";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            yield "
                </div> 
              ";
        }
        // line 50
        yield "           </div>   
        </div>
    </div>  
  </div>   

  ";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 55)) {
            // line 56
            yield "    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
            ";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            yield "
        </div>   
      </div>   
    </div>
  ";
        }
        // line 64
        yield "  <div id=\"gva-popup-ajax\" class=\"clearfix\"><div class=\"pajax-content\"><a href=\"javascript:void(0);\" class=\"btn-close\"><i class=\"gv-icon-4\"></i></a><div class=\"gva-popup-ajax-content clearfix\"></div></div></div>
</footer>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "footer_first_size", "footer_second_size", "footer_third_size", "footer_four_size"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/page/footer.html.twig";
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
        return array (  173 => 64,  165 => 59,  160 => 56,  158 => 55,  151 => 50,  145 => 47,  138 => 46,  136 => 45,  133 => 44,  127 => 41,  120 => 40,  118 => 39,  115 => 38,  109 => 35,  102 => 34,  100 => 33,  97 => 32,  91 => 29,  84 => 28,  82 => 27,  76 => 23,  66 => 16,  59 => 11,  57 => 10,  51 => 6,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if page.message %}
  <div class=\"gva-drupal-message-status\">
    {{ page.message }}
  </div>
{% endif %}
  
<footer id=\"footer\" class=\"footer\">
  <div class=\"footer-inner\">
    
    {% if page.before_footer %}
     <div class=\"footer-top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <div class=\"before-footer clearfix area\">
                  {{ page.before_footer }}
              </div>
            </div>
          </div>     
        </div>   
      </div> 
     {% endif %}
     
     <div class=\"footer-center\">
        <div class=\"container\">      
           <div class=\"row\">
              {% if page.footer_first %}
                <div class=\"footer-first col-xl-{{ footer_first_size }} col-lg-{{ footer_first_size }} col-md-12 col-sm-12 col-xs-12 column\">
                  {{ page.footer_first }}
                </div> 
              {% endif %}

              {% if page.footer_second %}
               <div class=\"footer-second col-xl-{{ footer_second_size }} col-lg-{{ footer_second_size }} col-md-12 col-sm-12 col-xs-12 column\">
                  {{ page.footer_second }}
                </div> 
              {% endif %}

              {% if page.footer_third %}
                <div class=\"footer-third col-xl-{{ footer_third_size }} col-lg-{{ footer_third_size }} col-md-12 col-sm-12 col-xs-12 column\">
                  {{ page.footer_third }}
                </div> 
              {% endif %}

              {% if page.footer_four %}
                 <div class=\"footer-four col-xl-{{ footer_four_size }} col-lg-{{ footer_four_size }} col-md-12 col-sm-12 col-xs-12 column\">
                  {{ page.footer_four }}
                </div> 
              {% endif %}
           </div>   
        </div>
    </div>  
  </div>   

  {% if page.copyright %}
    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
            {{ page.copyright }}
        </div>   
      </div>   
    </div>
  {% endif %}
  <div id=\"gva-popup-ajax\" class=\"clearfix\"><div class=\"pajax-content\"><a href=\"javascript:void(0);\" class=\"btn-close\"><i class=\"gv-icon-4\"></i></a><div class=\"gva-popup-ajax-content clearfix\"></div></div></div>
</footer>

", "themes/gavias_edupia/templates/page/footer.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/page/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 3);
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
