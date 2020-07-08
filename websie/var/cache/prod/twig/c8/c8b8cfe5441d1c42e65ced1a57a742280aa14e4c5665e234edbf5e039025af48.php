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

/* @PrestaShop/Admin/Improve/International/Localization/index.html.twig */
class __TwigTemplate_44dc3ee2d74cb5387c10dcb807594512132d5d919e88c3dba336094a75cbbe63 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'localization_settings_form_rest' => [$this, 'block_localization_settings_form_rest'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 29
        list($context["configurationForm"], $context["localUnitsForm"], $context["advancedForm"]) =         [$this->getAttribute(($context["localizationForm"] ?? null), "configuration", []), $this->getAttribute(($context["localizationForm"] ?? null), "local_units", []), $this->getAttribute(($context["localizationForm"] ?? null), "advanced", [])];
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      ";
        // line 34
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Localization/Blocks/import_localization_pack_block.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 34)->display($context);
        // line 35
        echo "    </div>
  </div>

  ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["localizationForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_localization_save_options")]);
        echo "
    <div class=\"row justify-content-center\">
      <div class=\"col-xl-10\">
        ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 41)->display($context);
        // line 42
        echo "      </div>
      <div class=\"col-xl-10\">
        ";
        // line 44
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 44)->display($context);
        // line 45
        echo "      </div>
      <div class=\"col-xl-10\">
        ";
        // line 47
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Localization/Blocks/advanced_configuration.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 47)->display($context);
        // line 48
        echo "      </div>
    </div>

    ";
        // line 51
        $this->displayBlock('localization_settings_form_rest', $context, $blocks);
        // line 54
        echo "
  ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["localizationForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 51
    public function block_localization_settings_form_rest($context, array $blocks = [])
    {
        // line 52
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["localizationForm"] ?? null), 'rest');
        echo "
    ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        // line 59
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/localization.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Localization/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 61,  107 => 59,  104 => 58,  97 => 52,  94 => 51,  88 => 55,  85 => 54,  83 => 51,  78 => 48,  76 => 47,  72 => 45,  70 => 44,  66 => 42,  64 => 41,  58 => 38,  53 => 35,  51 => 34,  47 => 32,  44 => 31,  40 => 26,  38 => 29,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Localization/index.html.twig");
    }
}
