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

/* @PrestaShop/Admin/TwigTemplateForm/material.html.twig */
class __TwigTemplate_326fbc382e39b2668658a862550e64458e90da075ffa8ae62a9980855a87da2f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'material_choice_tree_widget' => [$this, 'block_material_choice_tree_widget'],
            'material_choice_tree_item_widget' => [$this, 'block_material_choice_tree_item_widget'],
            'material_choice_tree_item_checkbox_widget' => [$this, 'block_material_choice_tree_item_checkbox_widget'],
            'material_choice_tree_item_radio_widget' => [$this, 'block_material_choice_tree_item_radio_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('material_choice_tree_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('material_choice_tree_item_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('material_choice_tree_item_checkbox_widget', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('material_choice_tree_item_radio_widget', $context, $blocks);
    }

    // line 26
    public function block_material_choice_tree_widget($context, array $blocks = [])
    {
        // line 27
        echo "<div class=\"material-choice-tree-container js-choice-tree-container\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
  <div class=\"choice-tree-actions\">
    <span class=\"form-control-label js-toggle-choice-tree-action\"
          data-expanded-text=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-expanded-icon=\"expand_more\"
          data-collapsed-text=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-collapsed-icon=\"expand_less\"
          data-action=\"expand\"
    >
      <i class=\"material-icons\">expand_more</i>
      <span class=\"js-toggle-text\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "</span>
    </span>
  </div>

  <ul class=\"choice-tree\">
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices_tree"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 43
            echo "      ";
            $this->displayBlock("material_choice_tree_item_widget", $context, $blocks);
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </ul>
</div>
";
    }

    // line 49
    public function block_material_choice_tree_item_widget($context, array $blocks = [])
    {
        // line 50
        echo "  ";
        $context["has_children"] = $this->getAttribute(($context["choice"] ?? null), ($context["choice_children"] ?? null), [], "array", true, true);
        // line 51
        echo "
  <li class=\"";
        // line 52
        if ($this->getAttribute(($context["choice"] ?? null), "has_selected_children", [])) {
            echo "expanded";
        } elseif (($context["has_children"] ?? null)) {
            echo "collapsed";
        }
        echo "\">
    ";
        // line 53
        if (($context["multiple"] ?? null)) {
            // line 54
            echo "      ";
            $this->displayBlock("material_choice_tree_item_checkbox_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 56
            echo "      ";
            $this->displayBlock("material_choice_tree_item_radio_widget", $context, $blocks);
            echo "
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if (($context["has_children"] ?? null)) {
            // line 60
            echo "      <ul>
        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["choice"] ?? null), ($context["choice_children"] ?? null), [], "array"));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 62
                echo "          ";
                $context["choice"] = $context["item"];
                // line 63
                echo "          ";
                $this->displayBlock("material_choice_tree_item_widget", $context, $blocks);
                echo "
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "      </ul>
    ";
        }
        // line 67
        echo "  </li>
";
    }

    // line 70
    public function block_material_choice_tree_item_checkbox_widget($context, array $blocks = [])
    {
        // line 71
        echo "  <div class=\"checkbox js-input-wrapper\">
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        <input type=\"checkbox\"
               ";
        // line 75
        if ( !(null === $this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"))) {
            // line 76
            echo "                 name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
            echo "[]\"
                 value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), "html", null, true);
            echo "\"
                 ";
            // line 78
            if (twig_in_filter($this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), ($context["selected_values"] ?? null))) {
                echo "checked";
            }
            // line 79
            echo "               ";
        }
        // line 80
        echo "               ";
        if ((($context["disabled"] ?? null) || twig_in_filter($this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), ($context["disabled_values"] ?? null)))) {
            echo "disabled";
        }
        // line 81
        echo "        >
        <i class=\"md-checkbox-control\"></i>
        ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["choice"] ?? null), ($context["choice_label"] ?? null), [], "array"), "html", null, true);
        echo "
      </label>
    </div>
  </div>
";
    }

    // line 89
    public function block_material_choice_tree_item_radio_widget($context, array $blocks = [])
    {
        // line 90
        echo "  <div class=\"radio js-input-wrapper\">
    <label>
      <input type=\"radio\"
             name=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
        echo "\"
             value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), "html", null, true);
        echo "\"
             ";
        // line 95
        if (twig_in_filter($this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), ($context["selected_values"] ?? null))) {
            echo "checked";
        }
        // line 96
        echo "             ";
        if ((($context["disabled"] ?? null) || twig_in_filter($this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), ($context["disabled_values"] ?? null)))) {
            echo "disabled";
        }
        // line 97
        echo "      >
      ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["choice"] ?? null), ($context["choice_label"] ?? null), [], "array"), "html", null, true);
        echo "
    </label>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/material.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  285 => 98,  282 => 97,  277 => 96,  273 => 95,  269 => 94,  265 => 93,  260 => 90,  257 => 89,  248 => 83,  244 => 81,  239 => 80,  236 => 79,  232 => 78,  228 => 77,  223 => 76,  221 => 75,  215 => 71,  212 => 70,  207 => 67,  203 => 65,  186 => 63,  183 => 62,  166 => 61,  163 => 60,  161 => 59,  158 => 58,  152 => 56,  146 => 54,  144 => 53,  136 => 52,  133 => 51,  130 => 50,  127 => 49,  121 => 45,  104 => 43,  87 => 42,  79 => 37,  71 => 32,  66 => 30,  59 => 27,  56 => 26,  52 => 89,  49 => 88,  47 => 70,  44 => 69,  42 => 49,  39 => 48,  37 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/material.html.twig");
    }
}
