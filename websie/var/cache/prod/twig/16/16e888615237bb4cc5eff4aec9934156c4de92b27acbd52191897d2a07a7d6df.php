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

/* @Product/CatalogPage/Forms/form_edit_dropdown.html.twig */
class __TwigTemplate_39c1ca0ede037cfc7cd67cc79594fa74b19a3d57b8e967212fc35d214ff7d0c7 extends \Twig\Template
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
        $context["buttonType"] = (((isset($context["buttonType"]) || array_key_exists("buttonType", $context))) ? (_twig_default_filter(($context["buttonType"] ?? null), "primary")) : ("primary"));
        // line 26
        $context["right"] = (((isset($context["right"]) || array_key_exists("right", $context))) ? (_twig_default_filter(($context["right"] ?? null), false)) : (false));
        // line 27
        echo "
<div class=\"";
        // line 28
        echo twig_escape_filter($this->env, (((isset($context["div_style"]) || array_key_exists("div_style", $context))) ? (_twig_default_filter(($context["div_style"] ?? null), "btn-group")) : ("btn-group")), "html", null, true);
        echo "\">

  ";
        // line 30
        if ((isset($context["default_item"]) || array_key_exists("default_item", $context))) {
            // line 31
            echo "    <a
      href=\"";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["default_item"] ?? null), "href", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default_item"] ?? null), "href", []), "#")) : ("#")), "html", null, true);
            echo "\"
      title=\"";
            // line 33
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["default_item"] ?? null), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default_item"] ?? null), "title", []), (($this->getAttribute(($context["default_item"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default_item"] ?? null), "label", []), "")) : ("")))) : ((($this->getAttribute(($context["default_item"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default_item"] ?? null), "label", []), "")) : ("")))), "html", null, true);
            echo "\"
      class=\"btn tooltip-link product-edit\"
      ";
            // line 35
            if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && (($context["disabled"] ?? null) == true))) {
                echo "disabled=\"disabled\"";
            }
            // line 36
            echo "    >
      ";
            // line 37
            if ($this->getAttribute(($context["default_item"] ?? null), "icon", [])) {
                // line 38
                echo "        <i class=\"material-icons\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["default_item"] ?? null), "icon", []), "html", null, true);
                echo "</i>
      ";
            }
            // line 40
            echo "      ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["default_item"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["default_item"] ?? null), "label", []), "")) : ("")), "html", null, true);
            echo "
    </a>
  ";
        }
        // line 43
        echo "
  <button class=\"btn btn-link dropdown-toggle dropdown-toggle-split product-edit\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    ";
        // line 45
        echo twig_escape_filter($this->env, (((isset($context["menu_label"]) || array_key_exists("menu_label", $context))) ? (_twig_default_filter(($context["menu_label"] ?? null), "")) : ("")), "html", null, true);
        echo "
  </button>

  <div class=\"dropdown-menu";
        // line 48
        if (($context["right"] ?? null)) {
            echo " dropdown-menu-right";
        }
        echo "\" x-placement=\"bottom-start\" >
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 50
            echo "      ";
            if (($this->getAttribute($context["entry"], "divider", [], "any", true, true) && ($this->getAttribute($context["entry"], "divider", []) == true))) {
                // line 51
                echo "        <div class=\"dropdown-divider\"></div>
      ";
            } else {
                // line 53
                echo "        <a
          class=\"dropdown-item product-edit\" href=\"";
                // line 54
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entry"], "href", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "href", []), "#")) : ("#")), "html", null, true);
                echo "\"
          ";
                // line 55
                if ($this->getAttribute($context["entry"], "onclick", [], "any", true, true)) {
                    echo "onclick=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "onclick", []), "html", null, true);
                    echo "\"";
                }
                // line 56
                echo "          ";
                if ($this->getAttribute($context["entry"], "target", [], "any", true, true)) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "target", []), "html", null, true);
                    echo "\"";
                }
                // line 57
                echo "        >
          ";
                // line 58
                if ($this->getAttribute($context["entry"], "icon", [])) {
                    // line 59
                    echo "            <i class=\"material-icons\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "icon", []), "html", null, true);
                    echo "</i>
          ";
                }
                // line 61
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entry"], "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "label", []), "")) : ("")), "html", null, true);
                echo "
        </a>
      ";
            }
            // line 64
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Forms/form_edit_dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 65,  143 => 64,  136 => 61,  130 => 59,  128 => 58,  125 => 57,  118 => 56,  112 => 55,  108 => 54,  105 => 53,  101 => 51,  98 => 50,  94 => 49,  88 => 48,  82 => 45,  78 => 43,  71 => 40,  65 => 38,  63 => 37,  60 => 36,  56 => 35,  51 => 33,  47 => 32,  44 => 31,  42 => 30,  37 => 28,  34 => 27,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/CatalogPage/Forms/form_edit_dropdown.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Forms/form_edit_dropdown.html.twig");
    }
}
