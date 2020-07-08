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

/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_2f501795a8084e03e6a9099b401fd2a279accf576fbcb2f87b649221fe1e4a85 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 25);
        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
            'product_catalog_tools' => [$this, 'block_product_catalog_tools'],
            'product_catalog_filters' => [$this, 'block_product_catalog_filters'],
            'product_catalog_form' => [$this, 'block_product_catalog_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["categories"] ?? null), [0 => "@PrestaShop/Admin/Product/Themes/categories_theme.html.twig"], true);
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/catalog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/jquery/ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/catalog.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        // line 38
        echo "  <div class=\"products-catalog\">

    ";
        // line 40
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("legacy_block_kpi", ["kpi_controller" => "AdminProductsController"]);
        echo "

    <div class=\"content container-fluid\">

      ";
        // line 44
        if (twig_length_filter($this->env, ($context["permission_error"] ?? null))) {
            // line 45
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              ";
            // line 52
            echo twig_escape_filter($this->env, ($context["permission_error"] ?? null), "html", null, true);
            echo "
            </p>
          </div>
        </div>
      </div>
      ";
        }
        // line 58
        echo "
      <div class=\"row align-items-start\">
        ";
        // line 60
        $this->displayBlock('product_catalog_tools', $context, $blocks);
        // line 63
        echo "
        ";
        // line 64
        $this->displayBlock('product_catalog_filters', $context, $blocks);
        // line 73
        echo "      </div>

      ";
        // line 75
        $this->displayBlock('product_catalog_form', $context, $blocks);
        // line 99
        echo "
    </div>
  </div>

  ";
        // line 104
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 104, "603635271")->display(twig_array_merge($context, ["id" => "catalog_duplicate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_duplicate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 123
        echo "

  ";
        // line 126
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 126, "672214576")->display(twig_array_merge($context, ["id" => "catalog_activate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_activate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 145
        echo "

  ";
        // line 148
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 148, "2009717353")->display(twig_array_merge($context, ["id" => "catalog_deactivate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_deactivate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 167
        echo "

  ";
        // line 170
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 170, "543683721")->display(twig_array_merge($context, ["id" => "catalog_delete_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_delete_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 189
        echo "

  ";
        // line 192
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 192, "186420592")->display(twig_array_merge($context, ["id" => "catalog_deletion_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete products?", [], "Admin.Catalog.Feature"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete now", [], "Admin.Actions"), "value" => "confirm", "class" => "btn btn-primary btn-lg"]]]));
        // line 209
        echo "
  ";
        // line 210
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 210, "362751778")->display(twig_array_merge($context, ["id" => "catalog_sql_query_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", [], "Admin.Global"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", [], "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg"]]]));
        // line 230
        echo "
";
    }

    // line 60
    public function block_product_catalog_tools($context, array $blocks = [])
    {
        // line 61
        echo "          ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/tools.html.twig", ["import_link" => ($context["import_link"] ?? null)]);
        echo "
        ";
    }

    // line 64
    public function block_product_catalog_filters($context, array $blocks = [])
    {
        // line 65
        echo "          ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/filters.html.twig", ["limit" =>         // line 66
($context["limit"] ?? null), "offset" =>         // line 67
($context["offset"] ?? null), "orderBy" =>         // line 68
($context["orderBy"] ?? null), "sortOrder" =>         // line 69
($context["sortOrder"] ?? null)]);
        // line 71
        echo "
        ";
    }

    // line 75
    public function block_product_catalog_form($context, array $blocks = [])
    {
        // line 76
        echo "        ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Forms/form_products.html.twig", ["limit" =>         // line 77
($context["limit"] ?? null), "orderBy" =>         // line 78
($context["orderBy"] ?? null), "offset" =>         // line 79
($context["offset"] ?? null), "sortOrder" =>         // line 80
($context["sortOrder"] ?? null), "filter_category" =>         // line 81
($context["filter_category"] ?? null), "filter_column_id_product" =>         // line 82
($context["filter_column_id_product"] ?? null), "filter_column_name" =>         // line 83
($context["filter_column_name"] ?? null), "filter_column_reference" =>         // line 84
($context["filter_column_reference"] ?? null), "filter_column_name_category" =>         // line 85
($context["filter_column_name_category"] ?? null), "filter_column_price" =>         // line 86
($context["filter_column_price"] ?? null), "filter_column_sav_quantity" =>         // line 87
($context["filter_column_sav_quantity"] ?? null), "filter_column_active" =>         // line 88
($context["filter_column_active"] ?? null), "has_category_filter" =>         // line 89
($context["has_category_filter"] ?? null), "activate_drag_and_drop" =>         // line 90
($context["activate_drag_and_drop"] ?? null), "products" =>         // line 91
($context["products"] ?? null), "last_sql" =>         // line 92
($context["last_sql"] ?? null), "product_count_filtered" =>         // line 93
($context["product_count_filtered"] ?? null), "pagination_parameters" =>         // line 94
($context["pagination_parameters"] ?? null), "pagination_limit_choices" =>         // line 95
($context["pagination_limit_choices"] ?? null)]);
        // line 97
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 97,  222 => 95,  221 => 94,  220 => 93,  219 => 92,  218 => 91,  217 => 90,  216 => 89,  215 => 88,  214 => 87,  213 => 86,  212 => 85,  211 => 84,  210 => 83,  209 => 82,  208 => 81,  207 => 80,  206 => 79,  205 => 78,  204 => 77,  202 => 76,  199 => 75,  194 => 71,  192 => 69,  191 => 68,  190 => 67,  189 => 66,  187 => 65,  184 => 64,  177 => 61,  174 => 60,  169 => 230,  167 => 210,  164 => 209,  161 => 192,  157 => 189,  154 => 170,  150 => 167,  147 => 148,  143 => 145,  140 => 126,  136 => 123,  133 => 104,  127 => 99,  125 => 75,  121 => 73,  119 => 64,  116 => 63,  114 => 60,  110 => 58,  101 => 52,  92 => 45,  90 => 44,  83 => 40,  79 => 38,  76 => 37,  70 => 34,  66 => 33,  62 => 32,  58 => 31,  54 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_2f501795a8084e03e6a9099b401fd2a279accf576fbcb2f87b649221fe1e4a85___603635271 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 104
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 104);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 114
    public function block_content($context, array $blocks = [])
    {
        // line 115
        echo "      <div class=\"modal-body\">
        ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 118,  289 => 116,  286 => 115,  283 => 114,  266 => 104,  224 => 97,  222 => 95,  221 => 94,  220 => 93,  219 => 92,  218 => 91,  217 => 90,  216 => 89,  215 => 88,  214 => 87,  213 => 86,  212 => 85,  211 => 84,  210 => 83,  209 => 82,  208 => 81,  207 => 80,  206 => 79,  205 => 78,  204 => 77,  202 => 76,  199 => 75,  194 => 71,  192 => 69,  191 => 68,  190 => 67,  189 => 66,  187 => 65,  184 => 64,  177 => 61,  174 => 60,  169 => 230,  167 => 210,  164 => 209,  161 => 192,  157 => 189,  154 => 170,  150 => 167,  147 => 148,  143 => 145,  140 => 126,  136 => 123,  133 => 104,  127 => 99,  125 => 75,  121 => 73,  119 => 64,  116 => 63,  114 => 60,  110 => 58,  101 => 52,  92 => 45,  90 => 44,  83 => 40,  79 => 38,  76 => 37,  70 => 34,  66 => 33,  62 => 32,  58 => 31,  54 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_2f501795a8084e03e6a9099b401fd2a279accf576fbcb2f87b649221fe1e4a85___672214576 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 126
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 126);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 136
    public function block_content($context, array $blocks = [])
    {
        // line 137
        echo "      <div class=\"modal-body\">
        ";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 140,  362 => 138,  359 => 137,  356 => 136,  339 => 126,  294 => 118,  289 => 116,  286 => 115,  283 => 114,  266 => 104,  224 => 97,  222 => 95,  221 => 94,  220 => 93,  219 => 92,  218 => 91,  217 => 90,  216 => 89,  215 => 88,  214 => 87,  213 => 86,  212 => 85,  211 => 84,  210 => 83,  209 => 82,  208 => 81,  207 => 80,  206 => 79,  205 => 78,  204 => 77,  202 => 76,  199 => 75,  194 => 71,  192 => 69,  191 => 68,  190 => 67,  189 => 66,  187 => 65,  184 => 64,  177 => 61,  174 => 60,  169 => 230,  167 => 210,  164 => 209,  161 => 192,  157 => 189,  154 => 170,  150 => 167,  147 => 148,  143 => 145,  140 => 126,  136 => 123,  133 => 104,  127 => 99,  125 => 75,  121 => 73,  119 => 64,  116 => 63,  114 => 60,  110 => 58,  101 => 52,  92 => 45,  90 => 44,  83 => 40,  79 => 38,  76 => 37,  70 => 34,  66 => 33,  62 => 32,  58 => 31,  54 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_2f501795a8084e03e6a9099b401fd2a279accf576fbcb2f87b649221fe1e4a85___2009717353 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 148
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 148);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 158
    public function block_content($context, array $blocks = [])
    {
        // line 159
        echo "      <div class=\"modal-body\">
        ";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 162,  435 => 160,  432 => 159,  429 => 158,  412 => 148,  367 => 140,  362 => 138,  359 => 137,  356 => 136,  339 => 126,  294 => 118,  289 => 116,  286 => 115,  283 => 114,  266 => 104,  224 => 97,  222 => 95,  221 => 94,  220 => 93,  219 => 92,  218 => 91,  217 => 90,  216 => 89,  215 => 88,  214 => 87,  213 => 86,  212 => 85,  211 => 84,  210 => 83,  209 => 82,  208 => 81,  207 => 80,  206 => 79,  205 => 78,  204 => 77,  202 => 76,  199 => 75,  194 => 71,  192 => 69,  191 => 68,  190 => 67,  189 => 66,  187 => 65,  184 => 64,  177 => 61,  174 => 60,  169 => 230,  167 => 210,  164 => 209,  161 => 192,  157 => 189,  154 => 170,  150 => 167,  147 => 148,  143 => 145,  140 => 126,  136 => 123,  133 => 104,  127 => 99,  125 => 75,  121 => 73,  119 => 64,  116 => 63,  114 => 60,  110 => 58,  101 => 52,  92 => 45,  90 => 44,  83 => 40,  79 => 38,  76 => 37,  70 => 34,  66 => 33,  62 => 32,  58 => 31,  54 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_2f501795a8084e03e6a9099b401fd2a279accf576fbcb2f87b649221fe1e4a85___543683721 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 170
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 170);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 180
    public function block_content($context, array $blocks = [])
    {
        // line 181
        echo "      <div class=\"modal-body\">
        ";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 184,  508 => 182,  505 => 181,  502 => 180,  485 => 170,  440 => 162,  435 => 160,  432 => 159,  429 => 158,  412 => 148,  367 => 140,  362 => 138,  359 => 137,  356 => 136,  339 => 126,  294 => 118,  289 => 116,  286 => 115,  283 => 114,  266 => 104,  224 => 97,  222 => 95,  221 => 94,  220 => 93,  219 => 92,  218 => 91,  217 => 90,  216 => 89,  215 => 88,  214 => 87,  213 => 86,  212 => 85,  211 => 84,  210 => 83,  209 => 82,  208 => 81,  207 => 80,  206 => 79,  205 => 78,  204 => 77,  202 => 76,  199 => 75,  194 => 71,  192 => 69,  191 => 68,  190 => 67,  189 => 66,  187 => 65,  184 => 64,  177 => 61,  174 => 60,  169 => 230,  167 => 210,  164 => 209,  161 => 192,  157 => 189,  154 => 170,  150 => 167,  147 => 148,  143 => 145,  140 => 126,  136 => 123,  133 => 104,  127 => 99,  125 => 75,  121 => 73,  119 => 64,  116 => 63,  114 => 60,  110 => 58,  101 => 52,  92 => 45,  90 => 44,  83 => 40,  79 => 38,  76 => 37,  70 => 34,  66 => 33,  62 => 32,  58 => 31,  54 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_2f501795a8084e03e6a9099b401fd2a279accf576fbcb2f87b649221fe1e4a85___186420592 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 192
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 192);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 203
    public function block_content($context, array $blocks = [])
    {
        // line 204
        echo "      <div class=\"modal-body\">
        ";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These products will be deleted for good. Please confirm.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  581 => 205,  578 => 204,  575 => 203,  558 => 192,  513 => 184,  508 => 182,  505 => 181,  502 => 180,  485 => 170,  440 => 162,  435 => 160,  432 => 159,  429 => 158,  412 => 148,  367 => 140,  362 => 138,  359 => 137,  356 => 136,  339 => 126,  294 => 118,  289 => 116,  286 => 115,  283 => 114,  266 => 104,  224 => 97,  222 => 95,  221 => 94,  220 => 93,  219 => 92,  218 => 91,  217 => 90,  216 => 89,  215 => 88,  214 => 87,  213 => 86,  212 => 85,  211 => 84,  210 => 83,  209 => 82,  208 => 81,  207 => 80,  206 => 79,  205 => 78,  204 => 77,  202 => 76,  199 => 75,  194 => 71,  192 => 69,  191 => 68,  190 => 67,  189 => 66,  187 => 65,  184 => 64,  177 => 61,  174 => 60,  169 => 230,  167 => 210,  164 => 209,  161 => 192,  157 => 189,  154 => 170,  150 => 167,  147 => 148,  143 => 145,  140 => 126,  136 => 123,  133 => 104,  127 => 99,  125 => 75,  121 => 73,  119 => 64,  116 => 63,  114 => 60,  110 => 58,  101 => 52,  92 => 45,  90 => 44,  83 => 40,  79 => 38,  76 => 37,  70 => 34,  66 => 33,  62 => 32,  58 => 31,  54 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_2f501795a8084e03e6a9099b401fd2a279accf576fbcb2f87b649221fe1e4a85___362751778 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 210
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 210);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 221
    public function block_content($context, array $blocks = [])
    {
        // line 222
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["sql_manager_add_link"] ?? null), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  645 => 222,  642 => 221,  625 => 210,  581 => 205,  578 => 204,  575 => 203,  558 => 192,  513 => 184,  508 => 182,  505 => 181,  502 => 180,  485 => 170,  440 => 162,  435 => 160,  432 => 159,  429 => 158,  412 => 148,  367 => 140,  362 => 138,  359 => 137,  356 => 136,  339 => 126,  294 => 118,  289 => 116,  286 => 115,  283 => 114,  266 => 104,  224 => 97,  222 => 95,  221 => 94,  220 => 93,  219 => 92,  218 => 91,  217 => 90,  216 => 89,  215 => 88,  214 => 87,  213 => 86,  212 => 85,  211 => 84,  210 => 83,  209 => 82,  208 => 81,  207 => 80,  206 => 79,  205 => 78,  204 => 77,  202 => 76,  199 => 75,  194 => 71,  192 => 69,  191 => 68,  190 => 67,  189 => 66,  187 => 65,  184 => 64,  177 => 61,  174 => 60,  169 => 230,  167 => 210,  164 => 209,  161 => 192,  157 => 189,  154 => 170,  150 => 167,  147 => 148,  143 => 145,  140 => 126,  136 => 123,  133 => 104,  127 => 99,  125 => 75,  121 => 73,  119 => 64,  116 => 63,  114 => 60,  110 => 58,  101 => 52,  92 => 45,  90 => 44,  83 => 40,  79 => 38,  76 => 37,  70 => 34,  66 => 33,  62 => 32,  58 => 31,  54 => 30,  49 => 29,  46 => 28,  42 => 25,  40 => 26,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}
