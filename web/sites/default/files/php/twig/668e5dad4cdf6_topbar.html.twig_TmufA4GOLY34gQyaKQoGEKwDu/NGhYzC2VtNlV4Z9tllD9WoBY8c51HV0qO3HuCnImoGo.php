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

/* themes/gavias_edupia/templates/page/parts/topbar.html.twig */
class __TwigTemplate_d731c36154e8a368f43a12a2a1d435cf extends Template
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
        yield "<div class=\"topbar\">
  <div class=\"container\">
    <div class=\"topbar-inner\">
      <div class=\"row\">

        <div class=\"topbar-left col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-6\">
          ";
        // line 7
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 7)) {
            // line 8
            yield "          <div class=\"topbar-left-content\">
            ";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            yield "
            ";
            // line 11
            yield "


          </div>
        ";
        }
        // line 16
        yield "        </div>

        ";
        // line 50
        yield "
      </div>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/gavias_edupia/templates/page/parts/topbar.html.twig";
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
        return array (  68 => 50,  64 => 16,  57 => 11,  53 => 9,  50 => 8,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"topbar\">
  <div class=\"container\">
    <div class=\"topbar-inner\">
      <div class=\"row\">

        <div class=\"topbar-left col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-6\">
          {% if page.topbar %}
          <div class=\"topbar-left-content\">
            {{ page.topbar }}
            {# {{ \"now\"|date(\"D j M Y\") }} #}



          </div>
        {% endif %}
        </div>

        {# <div class=\"topbar-right col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6\">

          <div class=\"gva-user-region user-region\">
            <div class=\"user-top\">
              {% if custom_account %}
                <span class=\"account-name\">{{ custom_account|raw }}</span>
              {% endif %}
              <span class=\"icon\">
                {% if user_picture %}
                  <img src=\"{{ file_url(user_picture) }}\" alt=\"\"/>
                {% else %}
                  <i class=\"fa fa-user\"></i>
                {% endif %}
              </span>
            </div>
            <div class=\"user-content\">
              {% if custom_account %}
                <div class=\"account-message\">{{ custom_account|raw }}</div>
              {% endif %}
              <ul class=\"user-links\">
                {% if custom_account %}
                  <li><a href=\"{{ path('user.page') }}\">{{ '+ My Account'|t }}</a></li>
                  <li><a href=\"{{ path('user.logout') }}\">{{ '+ Logout'|t }}</a></li>
                {% else %}
                  <li><a href=\"{{ path('user.login') }}\">{{ '+ Login'|t }}</a></li>
                  <li><a href=\"{{ path('user.register') }}\">{{ '+ Register'|t }}</a></li>
                {% endif %}
              </ul>
            </div>
          </div>

        </div> #}

      </div>
    </div>
  </div>
</div>
", "themes/gavias_edupia/templates/page/parts/topbar.html.twig", "/home/ccgforum/public_html/web/themes/gavias_edupia/templates/page/parts/topbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("escape" => 9);
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
