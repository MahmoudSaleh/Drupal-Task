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

/* themes/gavias_edupia/templates/page/header.html.twig */
class __TwigTemplate_3f807c23f109974ac6d976f900cd7246 extends Template
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
        yield "<header id=\"header\" class=\"header-v1\">
  
  ";
        // line 3
        yield from         $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/topbar.html.twig"), "themes/gavias_edupia/templates/page/header.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "
  ";
        // line 5
        $context["class_sticky"] = "";
        // line 6
        yield "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 7
            yield "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 8
            yield "  ";
        }
        yield "  

   <div class=\"header-main ";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null), 10, $this->source), "html", null, true);
        yield "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-3 col-sm-6 col-xs-8 branding\">
                ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 15)) {
            // line 16
            yield "                  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            yield "
                ";
        }
        // line 18
        yield "              </div>

              <div class=\"col-md-9 col-sm-6 col-xs-4 p-static\">
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                        <div class=\"gva-offcanvas-mobile\">
                          <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                          ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 27)) {
            // line 28
            yield "                            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            yield "
                          
                          ";
        }
        // line 30
        yield "  
                          ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 31)) {
            // line 32
            yield "                            <div class=\"after-offcanvas hidden\">
                              ";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            yield "
                            </div>
                         ";
        }
        // line 36
        yield "                        </div>
                          
                        <div id=\"menu-bar\" class=\"menu-bar d-xl-none d-lg-none d-xl-none\">
                          <span class=\"one\"></span>
                          <span class=\"two\"></span>
                          <span class=\"three\"></span>
                        </div>
                        
                        ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, true, 44)) {
            // line 45
            yield "                          <div class=\"quick-cart\">
                            ";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            yield "
                          </div>
                        ";
        }
        // line 49
        yield "
                        ";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 50)) {
            // line 51
            yield "                          <div class=\"gva-search-region search-region\">
                            <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                            <div class=\"search-content\">  
                              ";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            yield "
                            </div>  
                          </div>
                        ";
        }
        // line 58
        yield "                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["directory", "sticky_menu", "page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/page/header.html.twig";
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
        return array (  151 => 58,  144 => 54,  139 => 51,  137 => 50,  134 => 49,  128 => 46,  125 => 45,  123 => 44,  113 => 36,  107 => 33,  104 => 32,  102 => 31,  99 => 30,  92 => 28,  90 => 27,  79 => 18,  73 => 16,  71 => 15,  63 => 10,  57 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"header-v1\">
  
  {% include directory ~ '/templates/page/parts/topbar.html.twig' %}

  {% set class_sticky = '' %}
  {% if sticky_menu == 1 %}
    {% set class_sticky = 'gv-sticky-menu' %}
  {% endif %}  

   <div class=\"header-main {{ class_sticky }}\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-3 col-sm-6 col-xs-8 branding\">
                {% if page.branding %}
                  {{ page.branding }}
                {% endif %}
              </div>

              <div class=\"col-md-9 col-sm-6 col-xs-4 p-static\">
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                        <div class=\"gva-offcanvas-mobile\">
                          <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                          {% if page.main_menu %}
                            {{ page.main_menu }}
                          
                          {% endif %}  
                          {% if page.offcanvas %}
                            <div class=\"after-offcanvas hidden\">
                              {{ page.offcanvas }}
                            </div>
                         {% endif %}
                        </div>
                          
                        <div id=\"menu-bar\" class=\"menu-bar d-xl-none d-lg-none d-xl-none\">
                          <span class=\"one\"></span>
                          <span class=\"two\"></span>
                          <span class=\"three\"></span>
                        </div>
                        
                        {% if page.cart %}
                          <div class=\"quick-cart\">
                            {{ page.cart }}
                          </div>
                        {% endif %}

                        {% if page.search %}
                          <div class=\"gva-search-region search-region\">
                            <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                            <div class=\"search-content\">  
                              {{ page.search }}
                            </div>  
                          </div>
                        {% endif %}
                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
", "themes/gavias_edupia/templates/page/header.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/page/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 3, "set" => 5, "if" => 6);
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'set', 'if'],
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
