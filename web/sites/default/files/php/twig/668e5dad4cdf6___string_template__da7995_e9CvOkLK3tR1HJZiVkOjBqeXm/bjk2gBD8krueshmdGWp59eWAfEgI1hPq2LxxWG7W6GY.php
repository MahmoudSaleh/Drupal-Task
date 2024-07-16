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

/* __string_template__da79959c044f1533b3e2d56b7e3b8daf */
class __TwigTemplate_e511410df989fad7597fb9592258ca47 extends Template
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
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTDXHTML1.0Transitional//EN\" \"http://www.=w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"3D\"http://www.w3.org/1999/xhtml\"\">
\t<head>
\t\t<meta name=\"3D\"viewport\"\" content=\"3D\"width=3Ddevice-width, initial-scale=3D1.=
\t\t\t0\"\">
\t\t<meta http-equiv=\"3D\"Content-Type\"\" content=\"3D\"text/html; charset=3DUTF-8\"\">
\t\t<meta name=\"3D\"color-scheme\"\" content=\"3D\"light\"\">
\t\t<meta name=\"3D\"supported-color-schemes\"\" content=\"3D\"light\"\">
\t\t<style>
\t\t\t@media only screen and(max-width: 600px) {
\t\t\t\t.inner-body {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}

\t\t\t\t.footer {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t}

\t\t\t@media only screen and(max-width: 500px) {
\t\t\t\t.button {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t}
\t\t</style>

\t</head>
\t<body  style=\"background-color: #EDF2F7; box-sizing: border-box; font-family: -apple-system, BlinkMac=
\t\t\tSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color =
\t\t\tEmoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; -webkit-te=
\t\t\txt-size-adjust: none; background-color: #ffffff; color: #718096; height: 10=
\t\t\t0%; line-height: 1.4; margin: 0; padding: 0; width: 100% !important;\">

\t\t<table class=\"wrapper\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple=
\t\t\t\t-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-ser=
\t\t\t\tif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: rel=
\t\t\t\tative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-wid=
\t\t\t\tth: 100%; background-color: #edf2f7; margin: 0; padding: 0; width: 100%;\">
\t\t\t<tr>
\t\t\t\t<td align=\"center\" style=\"box-sizing: border-box; font-family: -apple-s=
\t\t\t\t\t\tystem, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif=
\t\t\t\t\t\t, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relat=
\t\t\t\t\t\tive;\">
\t\t\t\t\t<table class=\"content\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"background-color: white !important; box-sizing: border-box; font-family: -apple=
\t\t\t\t\t\t\t-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-ser=
\t\t\t\t\t\t\tif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: rel=
\t\t\t\t\t\t\tative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-wid=
\t\t\t\t\t\t\tth: 100%; margin: 0; padding: 0; width: 100%;\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<!-- Email Body -->
\t\t\t\t\t\t<tr>
                        
\t\t\t\t\t\t\t<td class=\"body\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont,=
\t\t\t\t\t\t\t\t\t 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Se=
\t\t\t\t\t\t\t\t\tgoe UI Emoji', 'Segoe UI Symbol'; position: relative; -premailer-cellpaddin=
\t\t\t\t\t\t\t\t\tg: 0; -premailer-cellspacing: 0; -premailer-width: 100%; background-color: =
\t\t\t\t\t\t\t\t\t# edf2f7; border-bottom: 1px solid #edf2f7; border-top: 1px solid #edf2f7; m=
\t\t\t\t\t\t\t\t\targin: 0; padding: 0; width: 100%; border: hidden !important;\">
\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\tclass=\"inner-body\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" 
                                    style=\"box-sizing: border-box; =
\t\t\t\t\t\t\t\t\t\tfont-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helveti=
\t\t\t\t\t\t\t\t\t\tca, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Sym=
\t\t\t\t\t\t\t\t\t\tbol'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing=
\t\t\t\t\t\t\t\t\t\t: 0; -premailer-width: 570px; background-color: #ffffff; border-color: #e8e=
\t\t\t\t\t\t\t\t\t\t5ef; border-radius: 2px; border-width: 1px; box-shadow: 0 2px 0 rgba(0, 0, =
\t\t\t\t\t\t\t\t\t\t150, 0.025), 2px 4px 0 rgba(0, 0, 150, 0.015); margin: 0 auto; padding: 0; =
\t\t\t\t\t\t\t\t\t\twidth: 570px;\">
\t\t\t\t\t\t\t\t\t<!-- Body content -->
\t\t\t\t\t\t\t\t\t<tr>
                                    
\t\t\t\t\t\t\t\t\t\t<td class=\"content-cell\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; 
\t\t\t\t\t\t\t\t\t\tposition: relative; max-width: 100vw; padding: 32px;\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://gmwconference.com\" style=\"box-sizing: border-box;
\t\t\t\t\t\t\t\t\t\t\t font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
\t\t\t\t\t\t\t\t\t\t\t  position: relative; color: #3d4852; font-size: 19px; font-weight: bold; text-decoration: none; display: block;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://www.gmwconference.com/web/sites/default/files/Untitled-1-01_1.png\" />
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
                                    
\t\t\t\t\t\t\t\t\t\t<td class=\"content-cell\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; 
\t\t\t\t\t\t\t\t\t\tposition: relative; max-width: 100vw; padding: 32px;\">
\t\t\t\t\t\t\t\t\t\t\t<h1 style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
                                             position: relative; color: #3d4852; font-size: 18px; font-weight: bold; margin-top: 0; text-align: left;\">
                                                    ";
        // line 92
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "name", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        yield "
                                            </h1>
\t\t\t\t\t\t\t\t\t\t\t<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
                                             position: relative; font-size: 16=px; line-height: 1.5em; margin-top: 0; 
                                             text-align: right !important;  direction: rtl !important;\">


                                                شكرا لتواصلكم معانا و سيتم الرد عليكم في اقرب وقت
                                                
                                            </p>
\t\t\t\t\t\t\t\t\t\t\t<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
                                             position: relative; font-size: 16=px; line-height: 1.5em; margin-top: 0;  text-align: left;\">
                                                    Thank you for reachingout we will contact you soon.

                                            </p>
\t\t\t\t\t\t\t\t\t\t\t<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
                                             position: relative; font-size: 16=px; line-height: 1.5em; margin-top: 0;  text-align: left;\">
                                                ";
        // line 110
        yield "                                                ";
        // line 111
        yield "                                                ";
        // line 112
        yield "                                                ";
        // line 113
        yield "
                                            </p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSys=
\t\t\t\t\t\t\t\t\ttemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emo=
\t\t\t\t\t\t\t\t\tji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; font-size: 16=
\t\t\t\t\t\t\t\t\tpx; line-height: 1.5em; margin-top: 0; text-align: left;\">
\t\t\t\t\t\t\t\t\tGMWConference.
                                </p>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>

\t\t</table>
\t</body>
</html>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["data"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__da79959c044f1533b3e2d56b7e3b8daf";
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
        return array (  159 => 113,  157 => 112,  155 => 111,  153 => 110,  133 => 92,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<!DOCTYPE html PUBLIC \"-//W3C//DTDXHTML1.0Transitional//EN\" \"http://www.=w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"3D\"http://www.w3.org/1999/xhtml\"\">
\t<head>
\t\t<meta name=\"3D\"viewport\"\" content=\"3D\"width=3Ddevice-width, initial-scale=3D1.=
\t\t\t0\"\">
\t\t<meta http-equiv=\"3D\"Content-Type\"\" content=\"3D\"text/html; charset=3DUTF-8\"\">
\t\t<meta name=\"3D\"color-scheme\"\" content=\"3D\"light\"\">
\t\t<meta name=\"3D\"supported-color-schemes\"\" content=\"3D\"light\"\">
\t\t<style>
\t\t\t@media only screen and(max-width: 600px) {
\t\t\t\t.inner-body {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}

\t\t\t\t.footer {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t}

\t\t\t@media only screen and(max-width: 500px) {
\t\t\t\t.button {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}
\t\t\t}
\t\t</style>

\t</head>
\t<body  style=\"background-color: #EDF2F7; box-sizing: border-box; font-family: -apple-system, BlinkMac=
\t\t\tSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color =
\t\t\tEmoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; -webkit-te=
\t\t\txt-size-adjust: none; background-color: #ffffff; color: #718096; height: 10=
\t\t\t0%; line-height: 1.4; margin: 0; padding: 0; width: 100% !important;\">

\t\t<table class=\"wrapper\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"box-sizing: border-box; font-family: -apple=
\t\t\t\t-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-ser=
\t\t\t\tif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: rel=
\t\t\t\tative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-wid=
\t\t\t\tth: 100%; background-color: #edf2f7; margin: 0; padding: 0; width: 100%;\">
\t\t\t<tr>
\t\t\t\t<td align=\"center\" style=\"box-sizing: border-box; font-family: -apple-s=
\t\t\t\t\t\tystem, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif=
\t\t\t\t\t\t, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relat=
\t\t\t\t\t\tive;\">
\t\t\t\t\t<table class=\"content\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"background-color: white !important; box-sizing: border-box; font-family: -apple=
\t\t\t\t\t\t\t-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-ser=
\t\t\t\t\t\t\tif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: rel=
\t\t\t\t\t\t\tative; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-wid=
\t\t\t\t\t\t\tth: 100%; margin: 0; padding: 0; width: 100%;\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<!-- Email Body -->
\t\t\t\t\t\t<tr>
                        
\t\t\t\t\t\t\t<td class=\"body\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont,=
\t\t\t\t\t\t\t\t\t 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Se=
\t\t\t\t\t\t\t\t\tgoe UI Emoji', 'Segoe UI Symbol'; position: relative; -premailer-cellpaddin=
\t\t\t\t\t\t\t\t\tg: 0; -premailer-cellspacing: 0; -premailer-width: 100%; background-color: =
\t\t\t\t\t\t\t\t\t# edf2f7; border-bottom: 1px solid #edf2f7; border-top: 1px solid #edf2f7; m=
\t\t\t\t\t\t\t\t\targin: 0; padding: 0; width: 100%; border: hidden !important;\">
\t\t\t\t\t\t\t\t<table
\t\t\t\t\t\t\t\t\tclass=\"inner-body\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" 
                                    style=\"box-sizing: border-box; =
\t\t\t\t\t\t\t\t\t\tfont-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helveti=
\t\t\t\t\t\t\t\t\t\tca, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Sym=
\t\t\t\t\t\t\t\t\t\tbol'; position: relative; -premailer-cellpadding: 0; -premailer-cellspacing=
\t\t\t\t\t\t\t\t\t\t: 0; -premailer-width: 570px; background-color: #ffffff; border-color: #e8e=
\t\t\t\t\t\t\t\t\t\t5ef; border-radius: 2px; border-width: 1px; box-shadow: 0 2px 0 rgba(0, 0, =
\t\t\t\t\t\t\t\t\t\t150, 0.025), 2px 4px 0 rgba(0, 0, 150, 0.015); margin: 0 auto; padding: 0; =
\t\t\t\t\t\t\t\t\t\twidth: 570px;\">
\t\t\t\t\t\t\t\t\t<!-- Body content -->
\t\t\t\t\t\t\t\t\t<tr>
                                    
\t\t\t\t\t\t\t\t\t\t<td class=\"content-cell\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; 
\t\t\t\t\t\t\t\t\t\tposition: relative; max-width: 100vw; padding: 32px;\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://gmwconference.com\" style=\"box-sizing: border-box;
\t\t\t\t\t\t\t\t\t\t\t font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
\t\t\t\t\t\t\t\t\t\t\t  position: relative; color: #3d4852; font-size: 19px; font-weight: bold; text-decoration: none; display: block;\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"https://www.gmwconference.com/web/sites/default/files/Untitled-1-01_1.png\" />
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
                                    
\t\t\t\t\t\t\t\t\t\t<td class=\"content-cell\" style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; 
\t\t\t\t\t\t\t\t\t\tposition: relative; max-width: 100vw; padding: 32px;\">
\t\t\t\t\t\t\t\t\t\t\t<h1 style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
                                             position: relative; color: #3d4852; font-size: 18px; font-weight: bold; margin-top: 0; text-align: left;\">
                                                    {{data.name}}
                                            </h1>
\t\t\t\t\t\t\t\t\t\t\t<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
                                             position: relative; font-size: 16=px; line-height: 1.5em; margin-top: 0; 
                                             text-align: right !important;  direction: rtl !important;\">


                                                شكرا لتواصلكم معانا و سيتم الرد عليكم في اقرب وقت
                                                
                                            </p>
\t\t\t\t\t\t\t\t\t\t\t<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
                                             position: relative; font-size: 16=px; line-height: 1.5em; margin-top: 0;  text-align: left;\">
                                                    Thank you for reachingout we will contact you soon.

                                            </p>
\t\t\t\t\t\t\t\t\t\t\t<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
                                             position: relative; font-size: 16=px; line-height: 1.5em; margin-top: 0;  text-align: left;\">
                                                {# Content #}
                                                {# Content #}
                                                {# Content #}
                                                {# Content #}

                                            </p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<p style=\"box-sizing: border-box; font-family: -apple-system, BlinkMacSys=
\t\t\t\t\t\t\t\t\ttemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emo=
\t\t\t\t\t\t\t\t\tji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; font-size: 16=
\t\t\t\t\t\t\t\t\tpx; line-height: 1.5em; margin-top: 0; text-align: left;\">
\t\t\t\t\t\t\t\t\tGMWConference.
                                </p>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>

\t\t</table>
\t</body>
</html>

", "__string_template__da79959c044f1533b3e2d56b7e3b8daf", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 92);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
