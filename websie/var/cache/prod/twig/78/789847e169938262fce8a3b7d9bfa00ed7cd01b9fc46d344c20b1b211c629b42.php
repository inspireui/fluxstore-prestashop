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

/* @Product/ProductPage/Blocks/footer.html.twig */
class __TwigTemplate_08b797b243d5f9d5d902c283ee2de3b81ab81e7c3ea2d362552329cfdbe3b638 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_footer' => [$this, 'block_product_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo " ";
        $this->displayBlock('product_footer', $context, $blocks);
    }

    public function block_product_footer($context, array $blocks = [])
    {
        // line 26
        echo "  <div class=\"product-footer justify-content-md-center\">
    <div class=\"col-lg-4\">
      <a
        href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", ["action" => "delete", "id" => ($context["productId"] ?? null)]), "html", null, true);
        echo "\"
        class=\"tooltip-link btn btn-lg delete\"
        data-toggle=\"pstooltip\"
        id=\"product_form_delete_btn\"
        title=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permanently delete this product.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
        data-placement=\"left\"
        data-original-title=\"Delete\"
      >
        <i class=\"material-icons\">delete</i>
      </a>
      <a
        href=\"\"
        data-redirect=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["preview_link"] ?? null), "html", null, true);
        echo "\"
        data-url-deactive=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["preview_link_deactivate"] ?? null), "html", null, true);
        echo "\"
        target=\"_blank\"
        class=\"btn btn-secondary preview\"
        data-toggle=\"pstooltip\"
        id=\"product_form_preview_btn\"
        title=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("See how your product sheet will look online: ALT+SHIFT+V", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
      >
        ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Preview", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      ";
        // line 51
        if (($context["editable"] ?? null)) {
            // line 52
            echo "      <h2 class=\"for-switch online-title\" ";
            if ( !($context["is_active"] ?? null)) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"pstooltip\"
          title=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable the product on your shop: ALT+SHIFT+O", [], "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Online", [], "Admin.Global"), "html", null, true);
            echo "</h2>
      <h2 class=\"for-switch offline-title\" ";
            // line 54
            if (($context["is_active"] ?? null)) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"pstooltip\"
          title=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable the product on your shop: ALT+SHIFT+O", [], "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Offline", [], "Admin.Global"), "html", null, true);
            echo "</h2>
      <input
        class=\"switch-input-lg\"
        id=\"form_step1_active\"
        data-toggle=\"switch\"
        type=\"checkbox\"
        name=\"form[step1][active]\"
        value=\"1\"
        ";
            // line 63
            echo ((($context["is_active"] ?? null)) ? ("checked=\"checked\"") : (""));
            echo "
      />
      ";
        }
        // line 66
        echo "    </div>
    <div class=\"col-sm-5 col-lg-7 text-right\">
      <input
        id=\"submit\"
        type=\"submit\"
        class=\"btn btn-primary save uppercase ml-3\"
        value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "\"
        data-toggle=\"pstooltip\"
        title=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save the product and stay on the current page: ALT+SHIFT+S", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
        />
      ";
        // line 76
        if (($context["is_shop_context"] ?? null)) {
            // line 77
            echo "        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate ml-3\"
          id=\"product_form_save_duplicate_btn\"
          data-redirect=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", ["action" => "duplicate", "id" => ($context["productId"] ?? null)]), "html", null, true);
            echo "\"
          data-toggle=\"pstooltip\"
          title=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and duplicate this product, then go to the new product: ALT+SHIFT+D", [], "Admin.Catalog.Help"), "html", null, true);
            echo "\"
          >
          ";
            // line 85
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", [], "Admin.Actions");
            echo "
        </button>
      ";
        }
        // line 88
        echo "      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase go-catalog ml-3\"
        id=\"product_form_save_go_to_catalog_btn\"
        data-redirect=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["offset" => "last", "limit" => "last"]), "html", null, true);
        echo "\"
        data-toggle=\"pstooltip\"
        title=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and go back to the catalog: ALT+SHIFT+Q", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
        >
        ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to catalog", [], "Admin.Catalog.Feature");
        echo "
      </button>
      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase new-product ml-3\"
        id=\"product_form_save_new_btn\"
        data-redirect=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
        data-toggle=\"pstooltip\"
        title=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and create a new product: ALT+SHIFT+P", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
        >
        ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new product", [], "Admin.Catalog.Feature");
        echo "
      </button>

        <div class=\"js-spinner spinner hide btn-primary-reverse onclick mr-1 btn\"></div>
        <div class=\"btn-group hide dropdown\">
          <button
          class=\"btn btn-primary js-btn-save ml-3\"
          type=\"submit\"
          >
            <span>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</span>
          </button><button
            class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"
            type=\"button\"
            id=\"dropdownMenu\"
            data-toggle=\"dropdown\"
            aria-expanded=\"false\"
          >
            <span class=\"sr-only\">Toggle Dropdown</span>
          </button>
          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
            ";
        // line 126
        if (($context["is_shop_context"] ?? null)) {
            // line 127
            echo "              <a
              class=\"dropdown-item duplicate js-btn-save\"
              href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", ["action" => "duplicate", "id" => ($context["productId"] ?? null)]), "html", null, true);
            echo "\"
              >
              ";
            // line 131
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", [], "Admin.Actions");
            echo "
              </a>
            ";
        }
        // line 134
        echo "          <a
            class=\"dropdown-item go-catalog js-btn-save\"
            href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["offset" => "last", "limit" => "last"]), "html", null, true);
        echo "\"
            >
            ";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to catalog", [], "Admin.Catalog.Feature");
        echo "
          </a>
          <a
            class=\"dropdown-item new-product js-btn-save\"
            href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
            >
            ";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new product", [], "Admin.Catalog.Feature");
        echo "
          </a>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Blocks/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  264 => 144,  259 => 142,  252 => 138,  247 => 136,  243 => 134,  237 => 131,  232 => 129,  228 => 127,  226 => 126,  212 => 115,  200 => 106,  195 => 104,  190 => 102,  181 => 96,  176 => 94,  171 => 92,  165 => 88,  159 => 85,  154 => 83,  149 => 81,  143 => 77,  141 => 76,  136 => 74,  131 => 72,  123 => 66,  117 => 63,  104 => 55,  98 => 54,  92 => 53,  85 => 52,  83 => 51,  78 => 49,  73 => 47,  65 => 42,  61 => 41,  50 => 33,  43 => 29,  38 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/ProductPage/Blocks/footer.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Blocks/footer.html.twig");
    }
}
