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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/category_position.html.twig */
class __TwigTemplate_2752c3b13fdaef29f13a45e2fc398bc9eb60682df329e6b1dc3ebec35ec556d3 extends \Twig\Template
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
<div class=\"category-position-column\">
  ";
        // line 27
        if ((($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "sorting", []), "order_by", []) == "position") && ($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "sorting", []), "order_way", []) == "asc"))) {
            // line 28
            echo "    <div class=\"js-drag-handle js-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "id", []), "html", null, true);
            echo "-position text-center\"
         data-id=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "id_field", []), [], "array"), "html", null, true);
            echo "\"
         data-id-parent=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "id_parent_field", []), [], "array"), "html", null, true);
            echo "\"
         data-position=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "field", []), [], "array"), "html", null, true);
            echo "\"
         data-position-update-url=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "update_route", []));
            echo "\"
         data-pagination-offset=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "pagination", []), "offset", []), "html", null, true);
            echo "\"
    >
    <span class=\"js-position position\">
      ";
            // line 36
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "field", []), [], "array") + 1), "html", null, true);
            echo "
    </span>
    </div>
  ";
        } else {
            // line 40
            echo "    <div class=\"text-center\">
    <span class=\"position\">
      ";
            // line 42
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "field", []), [], "array") + 1), "html", null, true);
            echo "
    </span>
    </div>
  ";
        }
        // line 46
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/category_position.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 46,  74 => 42,  70 => 40,  63 => 36,  57 => 33,  53 => 32,  49 => 31,  45 => 30,  41 => 29,  36 => 28,  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/category_position.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/category_position.html.twig");
    }
}
