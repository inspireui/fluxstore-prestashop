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

/* @PrestaShop/Admin/Common/Grid/grid_panel.html.twig */
class __TwigTemplate_50c63637ccb46ebd0985ccfee4ebae885890ced7ca1864c9da688cb7b2d2256d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'grid_panel_header' => [$this, 'block_grid_panel_header'],
            'grid_actions_block' => [$this, 'block_grid_actions_block'],
            'grid_panel_body' => [$this, 'block_grid_panel_body'],
            'grid_view_block' => [$this, 'block_grid_view_block'],
            'grid_panel_footer' => [$this, 'block_grid_panel_footer'],
            'grid_panel_extra_content' => [$this, 'block_grid_panel_extra_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div class=\"card js-grid-panel\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "id", []), "html", null, true);
        echo "_grid_panel\">
  ";
        // line 27
        $this->displayBlock('grid_panel_header', $context, $blocks);
        // line 39
        echo "
  ";
        // line 40
        $this->displayBlock('grid_panel_body', $context, $blocks);
        // line 47
        echo "
  ";
        // line 48
        $this->displayBlock('grid_panel_footer', $context, $blocks);
        // line 49
        echo "</div>

";
        // line 51
        $this->displayBlock('grid_panel_extra_content', $context, $blocks);
    }

    // line 27
    public function block_grid_panel_header($context, array $blocks = [])
    {
        // line 28
        echo "    <div class=\"card-header js-grid-header\">
      <h3 class=\"d-inline-block card-header-title\">
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "name", []), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "data", []), "records_total", []), "html", null, true);
        echo ")
      </h3>
      ";
        // line 32
        $this->displayBlock('grid_actions_block', $context, $blocks);
        // line 37
        echo "    </div>
  ";
    }

    // line 32
    public function block_grid_actions_block($context, array $blocks = [])
    {
        // line 33
        echo "        <div class=\"d-inline-block float-right\">
          ";
        // line 34
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
        </div>
      ";
    }

    // line 40
    public function block_grid_panel_body($context, array $blocks = [])
    {
        // line 41
        echo "    <div class=\"card-body\">
      ";
        // line 42
        $this->displayBlock('grid_view_block', $context, $blocks);
        // line 45
        echo "    </div>
  ";
    }

    // line 42
    public function block_grid_view_block($context, array $blocks = [])
    {
        // line 43
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/grid.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
      ";
    }

    // line 48
    public function block_grid_panel_footer($context, array $blocks = [])
    {
    }

    // line 51
    public function block_grid_panel_extra_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 51,  120 => 48,  113 => 43,  110 => 42,  105 => 45,  103 => 42,  100 => 41,  97 => 40,  90 => 34,  87 => 33,  84 => 32,  79 => 37,  77 => 32,  70 => 30,  66 => 28,  63 => 27,  59 => 51,  55 => 49,  53 => 48,  50 => 47,  48 => 40,  45 => 39,  43 => 27,  39 => 26,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/grid_panel.html.twig");
    }
}
