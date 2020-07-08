<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Configure/AdvancedParameters/Webservice/webservice_settings.html.twig */
class __TwigTemplate_8567e910b5c9b07237e44710b12c2e651148e8342f410f8ef25208c4b8f3ecbc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'webservice_form_configuration' => [$this, 'block_webservice_form_configuration'],
            'webservice_configuration_form_rest' => [$this, 'block_webservice_configuration_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $context["webserviceConfigurationForm"] = $this->getAttribute(($context["form"] ?? null), "webservice_configuration", []);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('webservice_form_configuration', $context, $blocks);
    }

    public function block_webservice_form_configuration($context, array $blocks = [])
    {
        // line 31
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configuration", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable PrestaShop's webservice", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>

          <div class=\"col-sm\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["webserviceConfigurationForm"] ?? null), "enable_webservice", []), 'errors');
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["webserviceConfigurationForm"] ?? null), "enable_webservice", []), 'widget');
        echo "

            <small class=\"form-text\">
              ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Before activating the webservice, you must be sure to: ", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
              <br/>
              1. ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check that URL rewriting is available on this server.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
              <br/>
              2. ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check that the five methods GET, POST, PUT, DELETE and HEAD are supported by this server.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
            </small>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable CGI mode for PHP", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>

          <div class=\"col-sm\">
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["webserviceConfigurationForm"] ?? null), "enable_cgi", []), 'errors');
        echo "
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["webserviceConfigurationForm"] ?? null), "enable_cgi", []), 'widget');
        echo "

            <small class=\"form-text\">
              ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Before choosing \"Yes\", check that PHP is not configured as an Apache module on your server.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
            </small>
          </div>
        </div>

        ";
        // line 68
        $this->displayBlock('webservice_configuration_form_rest', $context, $blocks);
        // line 71
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
    }

    // line 68
    public function block_webservice_configuration_form_rest($context, array $blocks = [])
    {
        // line 69
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["webserviceConfigurationForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/webservice_settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 69,  138 => 68,  129 => 75,  123 => 71,  121 => 68,  113 => 63,  107 => 60,  103 => 59,  97 => 56,  88 => 50,  83 => 48,  78 => 46,  72 => 43,  68 => 42,  62 => 39,  53 => 33,  49 => 31,  43 => 30,  40 => 29,  38 => 28,  35 => 27,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/webservice_settings.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Webservice/webservice_settings.html.twig");
    }
}
