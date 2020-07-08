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

/* @Product/CatalogPage/Blocks/tools.html.twig */
class __TwigTemplate_e23365a13e918580cb0264fc6d82c121eff4f405479a95b5de987555a33e8e88 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "<div class=\"col-2 text-right\">
  <div class=\"dropdown\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"catalog-tools-button\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "Admin.Global"), "html", null, true);
        echo "\"
    >
      <span class=\"sr-only\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "Admin.Global"), "html", null, true);
        echo "</span>
    </button>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"catalog-tools-button\">
      ";
        // line 37
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayDashboardToolbarIcons", []);
        echo "
      <a id=\"desc-product-export\" class=\"dropdown-item\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_export_action");
        echo "\">
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <a id=\"desc-product-import\" class=\"dropdown-item\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["import_link"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <a id=\"desc-product-show-sql\" class=\"dropdown-item\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
        ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show SQL query", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <a id=\"desc-product-sql-manager\" class=\"dropdown-item\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
        ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Blocks/tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 48,  73 => 45,  67 => 42,  63 => 41,  58 => 39,  54 => 38,  50 => 37,  44 => 34,  39 => 32,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/CatalogPage/Blocks/tools.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Blocks/tools.html.twig");
    }
}
