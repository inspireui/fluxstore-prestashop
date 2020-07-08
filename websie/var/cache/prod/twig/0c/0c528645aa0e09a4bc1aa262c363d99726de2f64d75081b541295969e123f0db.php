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

/* @PrestaShop/Admin/Helpers/dropdown_menu.html.twig */
class __TwigTemplate_7ba14f8ef5a9f760af473a8e5cc16c6a7ca7d2420daae5bcfdd8ea524697e9cc extends \Twig\Template
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
        echo twig_escape_filter($this->env, (((isset($context["div_style"]) || array_key_exists("div_style", $context))) ? (_twig_default_filter(($context["div_style"] ?? null), "btn-group dropdown")) : ("btn-group dropdown")), "html", null, true);
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
      class=\"btn btn-";
            // line 34
            echo twig_escape_filter($this->env, ($context["buttonType"] ?? null), "html", null, true);
            echo "\"
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
  <button
    ";
        // line 45
        if (($context["button_id"] ?? null)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["button_id"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 46
        echo "    class=\"btn btn-";
        echo twig_escape_filter($this->env, ($context["buttonType"] ?? null), "html", null, true);
        echo " dropdown-toggle\"
    ";
        // line 47
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context)) && (($context["disabled"] ?? null) == true))) {
            echo "disabled=\"disabled\"";
        }
        // line 48
        echo "    data-toggle=\"dropdown\"
  >
    ";
        // line 50
        echo twig_escape_filter($this->env, (((isset($context["menu_label"]) || array_key_exists("menu_label", $context))) ? (_twig_default_filter(($context["menu_label"] ?? null), "")) : ("")), "html", null, true);
        echo "
    <i class=\"";
        // line 51
        echo twig_escape_filter($this->env, (((isset($context["menu_icon"]) || array_key_exists("menu_icon", $context))) ? (_twig_default_filter(($context["menu_icon"] ?? null), "icon-caret-down")) : ("icon-caret-down")), "html", null, true);
        echo "\"></i>
  </button>

  <div class=\"dropdown-menu";
        // line 54
        if (($context["right"] ?? null)) {
            echo " dropdown-menu-right";
        }
        echo "\">
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 56
            echo "      ";
            if (($this->getAttribute($context["entry"], "divider", [], "any", true, true) && ($this->getAttribute($context["entry"], "divider", []) == true))) {
                // line 57
                echo "        <div class=\"dropdown-divider\"></div>
      ";
            } else {
                // line 59
                echo "        <a
          class=\"dropdown-item\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entry"], "href", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "href", []), "#")) : ("#")), "html", null, true);
                echo "\"
          ";
                // line 61
                if ($this->getAttribute($context["entry"], "onclick", [], "any", true, true)) {
                    echo "onclick=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "onclick", []), "html", null, true);
                    echo "\"";
                }
                // line 62
                echo "          ";
                if ($this->getAttribute($context["entry"], "target", [], "any", true, true)) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "target", []), "html", null, true);
                    echo "\"";
                }
                // line 63
                echo "        >
          ";
                // line 64
                if ($this->getAttribute($context["entry"], "icon", [])) {
                    // line 65
                    echo "            <i class=\"material-icons\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "icon", []), "html", null, true);
                    echo "</i>
          ";
                }
                // line 67
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entry"], "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "label", []), "")) : ("")), "html", null, true);
                echo "
        </a>
      ";
            }
            // line 70
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Helpers/dropdown_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 71,  169 => 70,  162 => 67,  156 => 65,  154 => 64,  151 => 63,  144 => 62,  138 => 61,  134 => 60,  131 => 59,  127 => 57,  124 => 56,  120 => 55,  114 => 54,  108 => 51,  104 => 50,  100 => 48,  96 => 47,  91 => 46,  85 => 45,  81 => 43,  74 => 40,  68 => 38,  66 => 37,  63 => 36,  59 => 35,  55 => 34,  51 => 33,  47 => 32,  44 => 31,  42 => 30,  37 => 28,  34 => 27,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Helpers/dropdown_menu.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Helpers/dropdown_menu.html.twig");
    }
}
