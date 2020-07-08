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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig */
class __TwigTemplate_0f9e161425433cf036ae056e0f929759af7fa0602f22a29d21c845202813ddb1 extends \Twig\Template
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
        echo "
<div class=\"card\">
  <div class=\"card-block\">
    <nav>
      <ol class=\"breadcrumb\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentCategoryView"] ?? null), "breadcrumb_tree", []));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "          <li class=\"breadcrumb-item\">
            ";
            // line 32
            if ((($this->getAttribute($context["category"], "id_parent", []) == 0) && ($context["isSingleShopContext"] ?? null))) {
                // line 33
                echo "              ";
                if (($this->getAttribute($context["category"], "id_category", []) == $this->getAttribute(($context["currentCategoryView"] ?? null), "id", []))) {
                    // line 34
                    echo "                <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                    echo "</span>
                <a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_edit", ["categoryId" => $this->getAttribute($context["category"], "id_category", [])]), "html", null, true);
                    echo "\">
                  <i style=\"font-size: 16px;\" class=\"material-icons\">edit</i>
                  ";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                    echo "
                </a>
              ";
                } else {
                    // line 40
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_index");
                    echo "\">
                  ";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                    echo "
                </a>
              ";
                }
                // line 44
                echo "            ";
            } elseif (($this->getAttribute($context["category"], "id_category", []) == $this->getAttribute(($context["currentCategoryView"] ?? null), "id", []))) {
                // line 45
                echo "              <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                echo "</span>
              <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_edit", ["categoryId" => $this->getAttribute($context["category"], "id_category", [])]), "html", null, true);
                echo "\">
                <i style=\"font-size: 16px;\" class=\"material-icons\">edit</i>
                ";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                echo "
              </a>
            ";
            } else {
                // line 51
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_index", ["categoryId" => $this->getAttribute($context["category"], "id_category", [])]), "html", null, true);
                echo "\">
                ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                echo "
              </a>
            ";
            }
            // line 55
            echo "          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "      </ol>
    </nav>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 57,  106 => 55,  100 => 52,  95 => 51,  89 => 48,  84 => 46,  79 => 45,  76 => 44,  70 => 41,  65 => 40,  59 => 37,  54 => 35,  49 => 34,  46 => 33,  44 => 32,  41 => 31,  37 => 30,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig");
    }
}
