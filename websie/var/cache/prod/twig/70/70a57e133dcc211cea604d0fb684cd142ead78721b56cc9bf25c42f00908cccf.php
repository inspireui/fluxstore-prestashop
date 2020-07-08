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

/* @PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig */
class __TwigTemplate_904656b65d6b6f2d6999a05b18fd749bfe55a676d86dbf5af2fdd6b052487a00 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'category_showcase_card' => [$this, 'block_category_showcase_card'],
            'categories_kpis' => [$this, 'block_categories_kpis'],
            'categories_breadcrumb' => [$this, 'block_categories_breadcrumb'],
            'categories_listing' => [$this, 'block_categories_listing'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        if ( !$this->getAttribute(($context["currentCategoryView"] ?? null), "is_home_category", [])) {
            // line 29
            $context["layoutTitle"] = $this->getAttribute(($context["currentCategoryView"] ?? null), "name", []);
        }
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        // line 33
        echo "  ";
        $this->displayBlock('category_showcase_card', $context, $blocks);
        // line 40
        echo "
  ";
        // line 41
        $this->displayBlock('categories_kpis', $context, $blocks);
        // line 55
        echo "
  ";
        // line 56
        $this->displayBlock('categories_breadcrumb', $context, $blocks);
        // line 63
        echo "
  ";
        // line 64
        $this->displayBlock('categories_listing', $context, $blocks);
    }

    // line 33
    public function block_category_showcase_card($context, array $blocks = [])
    {
        // line 34
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 36
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/showcase_card.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 36)->display($context);
        // line 37
        echo "      </div>
    </div>
  ";
    }

    // line 41
    public function block_categories_kpis($context, array $blocks = [])
    {
        // line 42
        echo "    <div class=\"row\">
      <div class=\"col\">
        <div class=\"card\">
          <div class=\"row\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:renderKpiRow", ["kpiRow" =>         // line 48
($context["categoriesKpi"] ?? null)]));
        // line 49
        echo "
          </div>
        </div>
      </div>
    </div>
  ";
    }

    // line 56
    public function block_categories_breadcrumb($context, array $blocks = [])
    {
        // line 57
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 59
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 59)->display($context);
        // line 60
        echo "      </div>
    </div>
  ";
    }

    // line 64
    public function block_categories_listing($context, array $blocks = [])
    {
        // line 65
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 67
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 67, "1067917429")->display(twig_array_merge($context, ["grid" => ($context["categoriesGrid"] ?? null)]));
        // line 76
        echo "      </div>
    </div>
  ";
    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        // line 82
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/category.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 85,  148 => 84,  142 => 82,  139 => 81,  133 => 76,  131 => 67,  127 => 65,  124 => 64,  118 => 60,  116 => 59,  112 => 57,  109 => 56,  100 => 49,  98 => 48,  97 => 46,  91 => 42,  88 => 41,  82 => 37,  80 => 36,  76 => 34,  73 => 33,  69 => 64,  66 => 63,  64 => 56,  61 => 55,  59 => 41,  56 => 40,  53 => 33,  50 => 32,  46 => 26,  43 => 29,  41 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/index.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig */
class __TwigTemplate_904656b65d6b6f2d6999a05b18fd749bfe55a676d86dbf5af2fdd6b052487a00___1067917429 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 67
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 67);
        $this->blocks = [
            'grid_panel_footer' => [$this, 'block_grid_panel_footer'],
            'grid_panel_extra_content' => [$this, 'block_grid_panel_extra_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 68
    public function block_grid_panel_footer($context, array $blocks = [])
    {
        // line 69
        echo "            ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 69)->display($context);
        // line 70
        echo "          ";
    }

    // line 72
    public function block_grid_panel_extra_content($context, array $blocks = [])
    {
        // line 73
        echo "            ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", 73)->display($context);
        // line 74
        echo "          ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 74,  226 => 73,  223 => 72,  219 => 70,  216 => 69,  213 => 68,  195 => 67,  152 => 85,  148 => 84,  142 => 82,  139 => 81,  133 => 76,  131 => 67,  127 => 65,  124 => 64,  118 => 60,  116 => 59,  112 => 57,  109 => 56,  100 => 49,  98 => 48,  97 => 46,  91 => 42,  88 => 41,  82 => 37,  80 => 36,  76 => 34,  73 => 33,  69 => 64,  66 => 63,  64 => 56,  61 => 55,  59 => 41,  56 => 40,  53 => 33,  50 => 32,  46 => 26,  43 => 29,  41 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/index.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/index.html.twig");
    }
}
