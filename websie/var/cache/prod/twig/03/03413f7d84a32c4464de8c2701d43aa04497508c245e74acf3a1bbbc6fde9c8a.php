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

/* @PrestaShop/Admin/Improve/International/Language/Blocks/form.html.twig */
class __TwigTemplate_d515c421e99788b89ed3c90362ec03734083dd8575f339485543381c21bdea54 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'language_form_rest' => [$this, 'block_language_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/International/Language/Blocks/form.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["languageForm"] ?? null), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">language</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Languages", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["languageForm"] ?? null), 'errors');
        echo "

      ";
        // line 38
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? null), "name", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global")]);
        // line 40
        echo "

      ";
        // line 42
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? null), "iso_code", []), ["attr" => ["maxlength" => 2]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ISO code", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Two-letter ISO code (e.g. FR, EN, DE).", [], "Admin.International.Help")]);
        // line 49
        echo "

      ";
        // line 51
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? null), "tag_ietf", []), ["attr" => ["maxlength" => 5]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language code", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IETF language tag (e.g. en-US, pt-BR).", [], "Admin.International.Help")]);
        // line 58
        echo "

      ";
        // line 60
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? null), "short_date_format", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date format", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Short date format (e.g., Y-m-d).", [], "Admin.International.Help")]);
        // line 63
        echo "

      ";
        // line 65
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? null), "full_date_format", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date format (full)", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Full date format (e.g., Y-m-d H:i:s).", [], "Admin.International.Help")]);
        // line 68
        echo "

      ";
        // line 70
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? null), "flag_image", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Flag", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload the country flag from your computer.", [], "Admin.International.Help")]);
        // line 73
        echo "

      ";
        // line 75
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? null), "no_picture_image", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("\"No-picture\" image", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image is displayed when \"no picture is found\".", [], "Admin.International.Help")]);
        // line 78
        echo "

      ";
        // line 80
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? null), "is_rtl", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Is RTL language", [], "Admin.International.Feature"), "help" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable if this language is read from right to left.", [], "Admin.International.Help") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(Experimental: your theme must be compliant with RTL languages).", [], "Admin.International.Help"))]);
        // line 83
        echo "

      ";
        // line 85
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? null), "is_active", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate this language.", [], "Admin.International.Feature")]);
        // line 88
        echo "

      ";
        // line 90
        if ($this->getAttribute(($context["languageForm"] ?? null), "shop_association", [], "any", true, true)) {
            // line 91
            echo "        ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["languageForm"] ?? null), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global")]);
            // line 93
            echo "
      ";
        }
        // line 95
        echo "
      ";
        // line 96
        $this->displayBlock('language_form_rest', $context, $blocks);
        // line 99
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_languages_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["languageForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 96
    public function block_language_form_rest($context, array $blocks = [])
    {
        // line 97
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["languageForm"] ?? null), 'rest');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Language/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 97,  154 => 96,  148 => 110,  141 => 106,  135 => 103,  131 => 102,  126 => 99,  124 => 96,  121 => 95,  117 => 93,  114 => 91,  112 => 90,  108 => 88,  106 => 85,  102 => 83,  100 => 80,  96 => 78,  94 => 75,  90 => 73,  88 => 70,  84 => 68,  82 => 65,  78 => 63,  76 => 60,  72 => 58,  70 => 51,  66 => 49,  64 => 42,  60 => 40,  58 => 38,  53 => 36,  46 => 32,  39 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Language/Blocks/form.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Language/Blocks/form.html.twig");
    }
}
