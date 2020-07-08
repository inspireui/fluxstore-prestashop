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

/* @PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig */
class __TwigTemplate_f7b94d907cc5440fcb8b44152a567c543461149427e71281d5ae070f58785d95 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'preferences_form_general' => [$this, 'block_preferences_form_general'],
            'shop_preferences_form_rest' => [$this, 'block_shop_preferences_form_rest'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", 27);
        // line 30
        $context["generalForm"] = $this->getAttribute(($context["form"] ?? null), "general", []);
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        // line 34
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form", "id" => "configuration_form"]]);
        echo "
    <div class=\"row justify-content-center\">
        ";
        // line 36
        $this->displayBlock('preferences_form_general', $context, $blocks);
        // line 181
        echo "
    </div>
    ";
        // line 183
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    // line 36
    public function block_preferences_form_general($context, array $blocks = [])
    {
        // line 37
        echo "            <div class=\"col-xl-10\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">settings</i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General", [], "Admin.Global"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block row\">
                        <div class=\"card-text\">
                            <div class=\"form-group row\">
                                ";
        // line 45
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable SSL", [], "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you want to enable SSL on all the pages of your shop, activate the \"Enable on all the pages\" option below.", [], "Admin.Shopparameters.Help"));
        // line 48
        echo "
                                ";
        // line 49
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "isSecure", [], "method")) {
            // line 50
            echo "                                    <div class=\"col-sm\">
                                        ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_ssl", []), 'errors');
            echo "
                                        ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_ssl", []), 'widget');
            echo "
                                        <small class=\"form-text\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you own an SSL certificate for your shop's domain name, you can activate SSL encryption (https://) for customer account identification and order processing.", [], "Admin.Shopparameters.Help"), "html", null, true);
            echo "</small>
                                    </div>
                                ";
        } else {
            // line 56
            echo "                                    <div class=\"col-sm\">
                                        <div class=\"form-control-plaintext\">
                                            <a class=\"d-block\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["sslUri"] ?? null), "html", null, true);
            echo "\">
                                                ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please click here to check if your shop supports HTTPS.", [], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
                                            </a>
                                        </div>
                                    </div>
                                ";
        }
        // line 64
        echo "                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable SSL on all pages", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_ssl_everywhere", []), 'errors');
        echo "
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_ssl_everywhere", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When enabled, all the pages of your shop will be SSL-secured.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Increase front office security", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_token", []), 'errors');
        echo "
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "enable_token", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable token in the Front Office to improve PrestaShop's security.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>

                                    ";
        // line 80
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["generalForm"] ?? null), "enable_token", []), "vars", []), "disabled", [])) {
            // line 81
            echo "                                      <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
                                        <p class=\"alert-text\">
                                          ";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can't change the value of this configuration field in the context of this shop.", [], "Admin.Notifications.Warning"), "html", null, true);
            echo "
                                        </p>
                                      </div>
                                    ";
        }
        // line 87
        echo "                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow iframes on HTML fields", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "allow_html_iframes", []), 'errors');
        echo "
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "allow_html_iframes", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow iframes on text fields like product description. We recommend that you leave this option disabled.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use HTMLPurifier Library", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "use_htmlpurifier", []), 'errors');
        echo "
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "use_htmlpurifier", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clean the HTML content on text fields. We recommend that you leave this option enabled.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Round mode", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "price_round_mode", []), 'errors');
        echo "
                                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "price_round_mode", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can choose among 6 different ways of rounding prices. \"Round up away from zero ...\" is the recommended behavior.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Round type", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "price_round_type", []), 'errors');
        echo "
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "price_round_type", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can choose when to round prices: either on each item, each line or the total (of an invoice, for example).", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of decimals", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "price_display_precision", []), 'errors');
        echo "
                                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "price_display_precision", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose how many decimals you want to display", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display brands and suppliers", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "display_suppliers", []), 'errors');
        echo "
                                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "display_suppliers", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable brands and suppliers pages on your front office even when their respective modules are disabled.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display best sellers", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "display_best_sellers", []), 'errors');
        echo "
                                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "display_best_sellers", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable best sellers page on your front office even when its respective module is disabled.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable Multistore", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "multishop_feature_active", []), 'errors');
        echo "
                                    ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "multishop_feature_active", []), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The multistore feature allows you to manage several e-shops with one Back Office. If this feature is enabled, a \"Multistore\" page will be available in the \"Advanced Parameters\" menu.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>

                                    ";
        // line 152
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["generalForm"] ?? null), "multishop_feature_active", []), "vars", []), "disabled", [])) {
            // line 153
            echo "                                      <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
                                        <p class=\"alert-text\">
                                          ";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can't change the value of this configuration field in the context of this shop.", [], "Admin.Notifications.Warning"), "html", null, true);
            echo "
                                        </p>
                                      </div>
                                    ";
        }
        // line 159
        echo "                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"form-control-label\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main Shop Activity", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm\">
                                    ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "shop_activity", []), 'errors');
        echo "
                                    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "shop_activity", []), 'widget');
        echo "
                                </div>
                            </div>
                            ";
        // line 168
        $this->displayBlock('shop_preferences_form_rest', $context, $blocks);
        // line 171
        echo "                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-end\">
                            <button class=\"btn btn-primary\">";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }

    // line 168
    public function block_shop_preferences_form_rest($context, array $blocks = [])
    {
        // line 169
        echo "                              ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
                            ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 169,  392 => 168,  382 => 175,  376 => 171,  374 => 168,  368 => 165,  364 => 164,  359 => 162,  354 => 159,  347 => 155,  343 => 153,  341 => 152,  336 => 150,  332 => 149,  328 => 148,  323 => 146,  316 => 142,  312 => 141,  308 => 140,  303 => 138,  296 => 134,  292 => 133,  288 => 132,  283 => 130,  276 => 126,  272 => 125,  268 => 124,  263 => 122,  256 => 118,  252 => 117,  248 => 116,  243 => 114,  236 => 110,  232 => 109,  228 => 108,  223 => 106,  216 => 102,  212 => 101,  208 => 100,  203 => 98,  196 => 94,  192 => 93,  188 => 92,  183 => 90,  178 => 87,  171 => 83,  167 => 81,  165 => 80,  160 => 78,  156 => 77,  152 => 76,  147 => 74,  140 => 70,  136 => 69,  132 => 68,  127 => 66,  123 => 64,  115 => 59,  111 => 58,  107 => 56,  101 => 53,  97 => 52,  93 => 51,  90 => 50,  88 => 49,  85 => 48,  83 => 45,  75 => 40,  70 => 37,  67 => 36,  61 => 183,  57 => 181,  55 => 36,  49 => 34,  46 => 33,  42 => 25,  40 => 30,  38 => 27,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/preferences.html.twig");
    }
}
