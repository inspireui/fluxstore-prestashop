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

/* @PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig */
class __TwigTemplate_0315b72c048cc6e5bad13f602cb21ff7cef13eb8ed46cd143553519f34cf09aa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'shipping_preferences_carrier_options' => [$this, 'block_shipping_preferences_carrier_options'],
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
        $this->displayBlock('shipping_preferences_carrier_options', $context, $blocks);
    }

    public function block_shipping_preferences_carrier_options($context, array $blocks = [])
    {
        // line 29
        echo "  <div class=\"col-xl-10\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">local_shipping</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier options", [], "Admin.Shipping.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default carrier", [], "Admin.Shipping.Feature"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">
              ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["carrierOptionsForm"] ?? null), "default_carrier", []), 'errors');
        echo "
              ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["carrierOptionsForm"] ?? null), "default_carrier", []), 'widget');
        echo "
              <small class=\"form-text\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your shop's default carrier", [], "Admin.Shipping.Help"), "html", null, true);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", [], "Admin.Actions"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">
              ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["carrierOptionsForm"] ?? null), "carrier_default_order_by", []), 'errors');
        echo "
              ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["carrierOptionsForm"] ?? null), "carrier_default_order_by", []), 'widget');
        echo "
              <small class=\"form-text\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will only be visible in the front office.", [], "Admin.Shipping.Help"), "html", null, true);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order by", [], "Admin.Actions"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">
              ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["carrierOptionsForm"] ?? null), "carrier_default_order_way", []), 'errors');
        echo "
              ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["carrierOptionsForm"] ?? null), "carrier_default_order_way", []), 'widget');
        echo "
              <small class=\"form-text\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will only be visible in the front office.", [], "Admin.Shipping.Help"), "html", null, true);
        echo "</small>
            </div>
          </div>
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 64,  109 => 57,  105 => 56,  101 => 55,  96 => 53,  89 => 49,  85 => 48,  81 => 47,  76 => 45,  69 => 41,  65 => 40,  61 => 39,  56 => 37,  48 => 32,  43 => 29,  37 => 28,  34 => 27,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig");
    }
}
