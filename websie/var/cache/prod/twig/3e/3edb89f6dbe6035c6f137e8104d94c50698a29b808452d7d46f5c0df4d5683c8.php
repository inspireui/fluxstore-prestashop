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

/* @PrestaShop/Admin/Common/Grid/grid.html.twig */
class __TwigTemplate_69269c5e81b9273e4607742dd8d57dbcc354c938e58bb8a8c6b0957052a8b1d5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'grid_header_row' => [$this, 'block_grid_header_row'],
            'grid_bulk_actions_block' => [$this, 'block_grid_bulk_actions_block'],
            'grid_table_row' => [$this, 'block_grid_table_row'],
            'grid_footer_row' => [$this, 'block_grid_footer_row'],
            'grid_extra_content' => [$this, 'block_grid_extra_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div class=\"row grid js-grid\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "id", []), "html", null, true);
        echo "_grid\" data-grid-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "id", []), "html", null, true);
        echo "\">
  <div class=\"col-sm\">
    ";
        // line 28
        $this->displayBlock('grid_header_row', $context, $blocks);
        // line 46
        echo "
    ";
        // line 47
        $this->displayBlock('grid_table_row', $context, $blocks);
        // line 54
        echo "
    ";
        // line 55
        $this->displayBlock('grid_footer_row', $context, $blocks);
        // line 62
        echo "  </div>
</div>

";
        // line 65
        $this->displayBlock('grid_extra_content', $context, $blocks);
    }

    // line 28
    public function block_grid_header_row($context, array $blocks = [])
    {
        // line 29
        echo "      <div class=\"row\">
        ";
        // line 30
        $this->displayBlock('grid_bulk_actions_block', $context, $blocks);
        // line 44
        echo "      </div>
    ";
    }

    // line 30
    public function block_grid_bulk_actions_block($context, array $blocks = [])
    {
        // line 31
        echo "          <div class=\"col-sm\">
            <div class=\"row\">
              <div class=\"col-sm\">
                ";
        // line 34
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/bulk_actions.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-sm\">
                ";
        // line 39
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/bulk_actions_select_all.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
              </div>
            </div>
          </div>
        ";
    }

    // line 47
    public function block_grid_table_row($context, array $blocks = [])
    {
        // line 48
        echo "      <div class=\"row\">
        <div class=\"col-sm\">
          ";
        // line 50
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
        </div>
      </div>
    ";
    }

    // line 55
    public function block_grid_footer_row($context, array $blocks = [])
    {
        // line 56
        echo "      <div class=\"row\">
        <div class=\"col\">
          ";
        // line 58
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
        </div>
      </div>
    ";
    }

    // line 65
    public function block_grid_extra_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 65,  126 => 58,  122 => 56,  119 => 55,  111 => 50,  107 => 48,  104 => 47,  95 => 39,  87 => 34,  82 => 31,  79 => 30,  74 => 44,  72 => 30,  69 => 29,  66 => 28,  62 => 65,  57 => 62,  55 => 55,  52 => 54,  50 => 47,  47 => 46,  45 => 28,  38 => 26,  35 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/grid.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/grid.html.twig");
    }
}
