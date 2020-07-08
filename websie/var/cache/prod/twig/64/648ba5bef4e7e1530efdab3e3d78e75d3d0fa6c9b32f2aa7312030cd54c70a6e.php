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

/* PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_dbe2ac2808578d8fb0949e0ea8b1f148d53450df4f84b312e73e5284accca83a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'checkbox_radio_row' => [$this, 'block_checkbox_radio_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'form_row_class' => [$this, 'block_form_row_class'],
                'text_with_unit_widget' => [$this, 'block_text_with_unit_widget'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('form_start', $context, $blocks);
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('form_label', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 47
        echo "
";
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_row', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('radio_row', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('submit_row', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('form_row_class', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('text_with_unit_widget', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('text_with_length_counter_widget', $context, $blocks);
    }

    // line 26
    public function block_form_start($context, array $blocks = [])
    {
        // line 27
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-horizontal"))]);
        // line 28
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 33
    public function block_form_label($context, array $blocks = [])
    {
        // line 34
        ob_start();
        // line 35
        echo "        ";
        if ((($context["label"] ?? null) === false)) {
            // line 36
            echo "            <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
        ";
        } else {
            // line 38
            echo "            ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 39
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        // line 41
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 44
    public function block_form_label_class($context, array $blocks = [])
    {
        // line 45
        echo "col-sm-2";
    }

    // line 50
    public function block_form_row($context, array $blocks = [])
    {
        // line 51
        ob_start();
        // line 52
        echo "        <div class=\"";
        $this->displayBlock("form_row_class", $context, $blocks);
        echo " ";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
            <div class=\"";
        // line 54
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 63
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
    }

    // line 66
    public function block_radio_row($context, array $blocks = [])
    {
        // line 67
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
    }

    // line 70
    public function block_checkbox_radio_row($context, array $blocks = [])
    {
        // line 71
        ob_start();
        // line 72
        echo "        <div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">
            <div class=\"";
        // line 73
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 74
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 82
    public function block_submit_row($context, array $blocks = [])
    {
        // line 83
        ob_start();
        // line 84
        echo "        <div class=\"form-group\">
            <div class=\"";
        // line 85
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 86
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 93
    public function block_form_group_class($context, array $blocks = [])
    {
        // line 94
        echo "col-sm-10";
    }

    // line 97
    public function block_form_row_class($context, array $blocks = [])
    {
        // line 98
        echo "form-group";
    }

    // line 101
    public function block_text_with_unit_widget($context, array $blocks = [])
    {
        // line 102
        echo "<div class=\"input-group\">";
        // line 103
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 104
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "unit", [], "any", true, true)) {
            // line 105
            echo "        <div class=\"input-group-append\">
            <span class=\"input-group-text\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "unit", []), "html", null, true);
            echo "</span>
        </div>
    ";
        }
        // line 109
        echo "</div>
";
    }

    // line 112
    public function block_ip_address_text_widget($context, array $blocks = [])
    {
        // line 113
        echo "<div class=\"input-group\">";
        // line 114
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 115
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, ($context["currentIp"] ?? null), "html", null, true);
        echo "\">
        <i class=\"material-icons\">add_circle</i> ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
</div>
";
    }

    // line 121
    public function block_switch_widget($context, array $blocks = [])
    {
        // line 122
        echo "<div class=\"input-group\">";
        // line 123
        $this->displayParentBlock("switch_widget", $context, $blocks);
        // line 124
        echo "</div>
";
    }

    // line 127
    public function block_text_with_length_counter_widget($context, array $blocks = [])
    {
        // line 128
        echo "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 129
        $context["current_length"] = ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []) - twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "value", [])));
        // line 130
        echo "
    ";
        // line 131
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "position", []) == "before")) {
            // line 132
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 133
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 136
        echo "
    ";
        // line 137
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-max-length" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []), "maxlength" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []), "class" => "js-countable-input"]);
        // line 139
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "input", []) == "textarea")) {
            // line 140
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 142
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 144
        echo "
    ";
        // line 145
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "position", []) == "after")) {
            // line 146
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 147
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 150
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  397 => 150,  391 => 147,  388 => 146,  386 => 145,  383 => 144,  380 => 142,  377 => 140,  375 => 139,  373 => 137,  370 => 136,  364 => 133,  361 => 132,  359 => 131,  356 => 130,  354 => 129,  351 => 128,  348 => 127,  343 => 124,  341 => 123,  339 => 122,  336 => 121,  328 => 116,  323 => 115,  321 => 114,  319 => 113,  316 => 112,  311 => 109,  305 => 106,  302 => 105,  300 => 104,  298 => 103,  296 => 102,  293 => 101,  289 => 98,  286 => 97,  282 => 94,  279 => 93,  270 => 87,  266 => 86,  262 => 85,  259 => 84,  257 => 83,  254 => 82,  245 => 76,  241 => 75,  237 => 74,  233 => 73,  226 => 72,  224 => 71,  221 => 70,  217 => 67,  214 => 66,  210 => 63,  207 => 62,  198 => 56,  194 => 55,  190 => 54,  186 => 53,  177 => 52,  175 => 51,  172 => 50,  168 => 45,  165 => 44,  160 => 41,  157 => 39,  154 => 38,  148 => 36,  145 => 35,  143 => 34,  140 => 33,  136 => 28,  134 => 27,  131 => 26,  127 => 127,  124 => 126,  122 => 121,  119 => 120,  117 => 112,  114 => 111,  112 => 101,  109 => 100,  107 => 97,  104 => 96,  102 => 93,  99 => 92,  97 => 82,  94 => 81,  92 => 70,  89 => 69,  87 => 66,  84 => 65,  82 => 62,  79 => 61,  77 => 50,  74 => 49,  71 => 47,  69 => 44,  66 => 43,  64 => 33,  61 => 32,  58 => 30,  56 => 26,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig");
    }
}
