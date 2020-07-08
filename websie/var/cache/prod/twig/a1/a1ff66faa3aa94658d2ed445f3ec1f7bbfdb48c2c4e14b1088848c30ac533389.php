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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Webservice/Blocks/form.html.twig */
class __TwigTemplate_f9bea2fecee6902af6447a74f2a9214d17a2a5e174682832625b941ed3d8b17f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'webservice_key_form' => [$this, 'block_webservice_key_form'],
            'webservice_key_form_rest' => [$this, 'block_webservice_key_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/Blocks/form.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('webservice_key_form', $context, $blocks);
    }

    public function block_webservice_key_form($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["webserviceKeyForm"] ?? null), 'form_start');
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Webservice Accounts", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["webserviceKeyForm"] ?? null), 'errors');
        echo "

        ";
        // line 38
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["webserviceKeyForm"] ?? null), "key", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Key", [], "Admin.Advparameters.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Webservice account key.", [], "Admin.Advparameters.Feature")]);
        // line 41
        echo "

        ";
        // line 43
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["webserviceKeyForm"] ?? null), "description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Key description", [], "Admin.Advparameters.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quick description of the key: who it is for, what permissions it has, etc.", [], "Admin.Advparameters.Help")]);
        // line 46
        echo "

        ";
        // line 48
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["webserviceKeyForm"] ?? null), "status", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global")]);
        // line 50
        echo "

        <div class=\"form-group row mb-0\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm mb-0\">
            <div class=\"alert alert-info\" role=\"alert\">
              <p class=\"alert-text\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set the resource permissions for this key:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
            </div>
          </div>
        </div>

        ";
        // line 61
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["webserviceKeyForm"] ?? null), "permissions", []), ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Resource", [], "Admin.Global")], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permissions", [], "Admin.Advparameters.Feature")]);
        // line 65
        echo "

        ";
        // line 67
        if ($this->getAttribute(($context["webserviceKeyForm"] ?? null), "shop_association", [], "any", true, true)) {
            // line 68
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["webserviceKeyForm"] ?? null), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global")]);
            // line 70
            echo "
        ";
        }
        // line 72
        echo "
        ";
        // line 73
        $this->displayBlock('webservice_key_form_rest', $context, $blocks);
        // line 76
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_webservice_keys_index");
        echo "\" class=\"btn btn-outline-secondary\">
        ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <button class=\"btn btn-primary float-right\">
        ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
  ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["webserviceKeyForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 73
    public function block_webservice_key_form_rest($context, array $blocks = [])
    {
        // line 74
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["webserviceKeyForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 74,  143 => 73,  137 => 87,  130 => 83,  124 => 80,  120 => 79,  115 => 76,  113 => 73,  110 => 72,  106 => 70,  103 => 68,  101 => 67,  97 => 65,  95 => 61,  87 => 56,  79 => 50,  77 => 48,  73 => 46,  71 => 43,  67 => 41,  65 => 38,  60 => 36,  53 => 32,  46 => 29,  40 => 28,  37 => 27,  35 => 26,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/Blocks/form.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Webservice/Blocks/form.html.twig");
    }
}
