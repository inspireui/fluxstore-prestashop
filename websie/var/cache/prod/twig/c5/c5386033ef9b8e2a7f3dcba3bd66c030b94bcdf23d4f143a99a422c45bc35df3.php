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

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig */
class __TwigTemplate_d32e94cf8d28a46ddec9fb15b9df5c16df99bfeabcb95862f53b790f3c87e6e0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 27);
        // line 27
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.');
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        echo "
";
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('button_widget', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('money_widget', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('date_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('time_widget', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 220
        echo "
";
        // line 221
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 291
        echo "
";
        // line 292
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 333
        echo "
";
        // line 334
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 347
        echo "
";
        // line 348
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 354
        echo "
";
        // line 355
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 380
        echo "
";
        // line 381
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 393
        echo "
";
        // line 394
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 423
        echo "
";
        // line 425
        echo "
";
        // line 426
        $this->displayBlock('form_label', $context, $blocks);
        // line 430
        echo "
";
        // line 431
        $this->displayBlock('choice_label', $context, $blocks);
        // line 436
        echo "
";
        // line 437
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 440
        echo "
";
        // line 441
        $this->displayBlock('radio_label', $context, $blocks);
        // line 444
        echo "
";
        // line 445
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 474
        echo "
";
        // line 476
        echo "
";
        // line 477
        $this->displayBlock('form_row', $context, $blocks);
        // line 484
        echo "
";
        // line 485
        $this->displayBlock('button_row', $context, $blocks);
        // line 490
        echo "
";
        // line 491
        $this->displayBlock('choice_row', $context, $blocks);
        // line 495
        echo "
";
        // line 496
        $this->displayBlock('date_row', $context, $blocks);
        // line 500
        echo "
";
        // line 501
        $this->displayBlock('time_row', $context, $blocks);
        // line 505
        echo "
";
        // line 506
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 510
        echo "
";
        // line 511
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 517
        echo "
";
        // line 518
        $this->displayBlock('radio_row', $context, $blocks);
        // line 524
        echo "
";
        // line 526
        echo "
";
        // line 527
        $this->displayBlock('form_errors', $context, $blocks);
        // line 556
        echo "

";
        // line 559
        echo "
";
        // line 560
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 590
        echo "
";
        // line 591
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 643
        echo "
";
        // line 644
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 676
        echo "
";
        // line 677
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 701
        echo "
";
        // line 702
        $this->displayBlock('file_widget', $context, $blocks);
        // line 724
        echo "
";
        // line 725
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 741
        echo "
";
        // line 742
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 756
        echo "
";
        // line 757
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
    }

    // line 31
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 32
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || ("file" != ($context["type"] ?? null)))) {
            // line 33
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 35
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 38
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 39
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        // line 40
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 43
    public function block_button_widget($context, array $blocks = [])
    {
        // line 44
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 45
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 48
    public function block_money_widget($context, array $blocks = [])
    {
        // line 49
        echo "<div class=\"input-group money-type\">
        ";
        // line 50
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 51
        echo "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 52
            echo "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 53
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 56
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 57
        if (($context["prepend"] ?? null)) {
            // line 58
            echo "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 59
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 62
        echo "    </div>";
    }

    // line 65
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 66
        echo "<div class=\"input-group\">";
        // line 67
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 68
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
    }

    // line 74
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 75
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 76
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 78
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 79
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'errors');
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'errors');
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'widget', ["datetime" => true]);
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'widget', ["datetime" => true]);
            // line 84
            echo "</div>";
        }
    }

    // line 88
    public function block_date_widget($context, array $blocks = [])
    {
        // line 89
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 90
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 92
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 93
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 94
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 96
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 97
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget'), "{{ month }}" =>             // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget'), "{{ day }}" =>             // line 99
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')]);
            // line 101
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 102
                echo "</div>";
            }
        }
    }

    // line 107
    public function block_time_widget($context, array $blocks = [])
    {
        // line 108
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 112
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 113
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", []), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", []), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", []), 'widget');
            }
            // line 116
            echo "        ";
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 117
                echo "</div>";
            }
        }
    }

    // line 122
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 123
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-select"))]);
        // line 124
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 127
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 128
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")))) {
            // line 129
            echo "<div class=\"control-group\">";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 131
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 132
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 133
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "</div>";
        } else {
            // line 138
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 140
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 141
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 142
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "</div>";
        }
    }

    // line 149
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 150
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 151
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 152
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 154
            echo "<div class=\"checkbox\">";
            // line 155
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 156
            echo "</div>";
        }
    }

    // line 160
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 161
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 162
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 163
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 165
            echo "<div class=\"radio\">";
            // line 166
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 167
            echo "</div>";
        }
    }

    // line 171
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        // line 172
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 176
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "</ul>
    </div>";
    }

    // line 182
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        // line 183
        echo "<li>
        ";
        // line 184
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "submitted_values", [], "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? null), "id_category", []), [], "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 185
        echo "        ";
        if (($context["multiple"] ?? null)) {
            // line 186
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo ">
                    ";
            // line 189
            if (($this->getAttribute(($context["child"] ?? null), "active", [], "any", true, true) && ($this->getAttribute(($context["child"] ?? null), "active", []) == 0))) {
                // line 190
                echo "                        <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
                echo "</i>";
            } else {
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
                echo "
                    ";
            }
            // line 194
            echo "                    ";
            if ((isset($context["defaultCategory"]) || array_key_exists("defaultCategory", $context))) {
                // line 195
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 197
            echo "                </label>
            </div>";
        } else {
            // line 200
            echo "<div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo " class=\"category\">
                    ";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
            echo "
                    ";
            // line 204
            if ((isset($context["defaultCategory"]) || array_key_exists("defaultCategory", $context))) {
                // line 205
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 207
            echo "                </label>
            </div>";
        }
        // line 210
        echo "        ";
        if ($this->getAttribute(($context["child"] ?? null), "children", [], "any", true, true)) {
            // line 211
            echo "            <ul>
                ";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? null), "children", []));
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
                // line 213
                echo "                    ";
                $context["child"] = $context["item"];
                // line 214
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
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
            // line 216
            echo "</ul>
        ";
        }
        // line 218
        echo "    </li>";
    }

    // line 221
    public function block_translatefields_widget($context, array $blocks = [])
    {
        // line 222
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
        ";
        // line 224
        if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 225
            echo "        <ul class=\"translationsLocales nav nav-pills\">
            ";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 227
                echo "                <li class=\"nav-item\">
                    <a href=\"#\" data-locale=\"";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
                echo "\" class=\"";
                if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
                echo "\">
                        ";
                // line 229
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", [])), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "        </ul>
        ";
        }
        // line 235
        echo "
        <div class=\"translationsFields tab-content\">
            ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 238
            echo "                <div data-locale=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                echo "show active";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "valid", [])) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\">
                    ";
            // line 239
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 240
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "        </div>
    </div>
";
    }

    // line 247
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        // line 248
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || ("file" != ($context["type"] ?? null)))) {
            // line 249
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 251
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 254
    public function block_translate_text_widget($context, array $blocks = [])
    {
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"input-group locale-input-group js-locale-input-group\">
        ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 258
            echo "            ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 259
            echo "            ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "label", []));
            // line 260
            echo "
            ";
            // line 261
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "name", []))) {
                // line 262
                echo "                ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 263
                echo "            ";
            }
            // line 264
            echo "
            ";
            // line 265
            $context["attr"] = $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "attr", []);
            // line 266
            echo "
            ";
            // line 267
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "
        ";
        // line 270
        if ( !($context["hide_locales"] ?? null)) {
            // line 271
            echo "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
            >
                ";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 282
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
                ";
            // line 283
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 284
                echo "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            echo "            </div>
        </div>
        ";
        }
        // line 289
        echo "    </div>";
    }

    // line 292
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 296
            echo "      ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["textarea"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["textarea"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 297
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["textarea"], "vars", []), "label", []));
            // line 298
            echo "
      ";
            // line 299
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["textarea"], "vars", []), "name", []))) {
                // line 300
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 301
                echo "      ";
            }
            // line 302
            echo "
      <div class=\"";
            // line 303
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 304
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "
    ";
        // line 308
        if (($context["show_locale_select"] ?? null)) {
            // line 309
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 315
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
        >
          ";
            // line 317
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 320
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
          ";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 322
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\"
            >
              ";
                // line 325
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            echo "        </div>
      </div>
    ";
        }
        // line 331
        echo "  </div>";
    }

    // line 334
    public function block_date_picker_widget($context, array $blocks = [])
    {
        // line 335
        echo "    ";
        ob_start();
        // line 336
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " datepicker"))]);
        // line 337
        echo "        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" ";
        // line 338
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
            <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                    <i class=\"material-icons\">date_range</i>
                </div>
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 348
    public function block_date_range_widget($context, array $blocks = [])
    {
        // line 349
        echo "  ";
        ob_start();
        // line 350
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "from", []), 'widget');
        echo "
    ";
        // line 351
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "to", []), 'widget');
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 355
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        // line 356
        echo "    ";
        ob_start();
        // line 357
        echo "        <button type=\"submit\"
                class=\"btn btn-primary grid-search-button d-block float-right\"
                title=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
                name=\"";
        // line 360
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[search]\"
        >
          <i class=\"material-icons\">search</i>
          ";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>

        ";
        // line 366
        if (($context["show_reset_button"] ?? null)) {
            // line 367
            echo "          <div class=\"clearfix\"></div>
            <button type=\"reset\"
                    name=\"";
            // line 369
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[reset]\"
                    class=\"btn btn-link js-reset-search btn d-block grid-reset-button float-right\"
                    data-url=\"";
            // line 371
            echo twig_escape_filter($this->env, ($context["reset_url"] ?? null), "html", null, true);
            echo "\"
                    data-redirect=\"";
            // line 372
            echo twig_escape_filter($this->env, ($context["redirect_url"] ?? null), "html", null, true);
            echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
            // line 375
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
            </button>
        ";
        }
        // line 378
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 381
    public function block_switch_widget($context, array $blocks = [])
    {
        // line 382
        echo "    ";
        ob_start();
        // line 383
        echo "    <span class=\"ps-switch\">
        ";
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
            // line 385
            echo "            ";
            $context["inputId"] = ((($context["id"] ?? null) . "_") . $this->getAttribute($context["choice"], "value", []));
            // line 386
            echo "            <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\" ";
            $this->displayBlock("attributes", $context, $blocks);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", []), "html", null, true);
            echo "\"";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                echo "checked=\"\"";
            }
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"\"";
            }
            echo "type=\"radio\">
            <label for=\"";
            // line 387
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", []), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
            echo "</label>
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
        // line 389
        echo "        <span class=\"slide-button\"></span>
    </span>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 394
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        // line 395
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 399
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" /> ";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 410
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 411
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 412
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 413
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "data", []), $this->getAttribute($context["loop"], "index0", []), [], "array"), "file_name", [], "array"), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 414
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "data", []), $this->getAttribute($context["loop"], "index0", []), [], "array"), "mime", [], "array"), "html", null, true);
            echo "</td>
              </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 417
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
    }

    // line 426
    public function block_form_label($context, array $blocks = [])
    {
        // line 427
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " control-label"))]);
        // line 428
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 431
    public function block_choice_label($context, array $blocks = [])
    {
        // line 433
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 434
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 437
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 438
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 441
    public function block_radio_label($context, array $blocks = [])
    {
        // line 442
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 445
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        // line 446
        echo "    ";
        // line 447
        echo "    ";
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 448
            echo "      ";
            if (($context["required"] ?? null)) {
                // line 449
                echo "        ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
                // line 450
                echo "      ";
            }
            // line 451
            echo "      ";
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 452
                echo "          ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 453
                echo "      ";
            }
            // line 454
            echo "      ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 455
                echo "          ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 456
                echo "      ";
            }
            // line 457
            echo "
      ";
            // line 458
            if ((isset($context["material_design"]) || array_key_exists("material_design", $context))) {
                // line 459
                echo "        <div class=\"md-checkbox md-checkbox-inline\">
          <label";
                // line 460
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 461
                echo ($context["widget"] ?? null);
                // line 462
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 463
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 464
                echo "</label>
        </div>
      ";
            } else {
                // line 467
                echo "      <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 468
                echo ($context["widget"] ?? null);
                // line 469
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 470
                echo "</label>
      ";
            }
            // line 472
            echo "    ";
        }
    }

    // line 477
    public function block_form_row($context, array $blocks = [])
    {
        // line 478
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 479
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 480
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 481
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 482
        echo "</div>";
    }

    // line 485
    public function block_button_row($context, array $blocks = [])
    {
        // line 486
        echo "<div class=\"form-group\">";
        // line 487
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 488
        echo "</div>";
    }

    // line 491
    public function block_choice_row($context, array $blocks = [])
    {
        // line 492
        $context["force_error"] = true;
        // line 493
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 496
    public function block_date_row($context, array $blocks = [])
    {
        // line 497
        $context["force_error"] = true;
        // line 498
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 501
    public function block_time_row($context, array $blocks = [])
    {
        // line 502
        $context["force_error"] = true;
        // line 503
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 506
    public function block_datetime_row($context, array $blocks = [])
    {
        // line 507
        $context["force_error"] = true;
        // line 508
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 511
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 512
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 513
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 514
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 515
        echo "</div>";
    }

    // line 518
    public function block_radio_row($context, array $blocks = [])
    {
        // line 519
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 520
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 521
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 522
        echo "</div>";
    }

    // line 527
    public function block_form_errors($context, array $blocks = [])
    {
        // line 528
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 529
            echo "<div class=\"alert alert-danger\">";
            // line 530
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                // line 531
                echo "<ul class=\"alert-text\">";
                // line 532
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 533
                    echo "<li> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 534
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 535
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 536
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                    // line 537
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 540
                echo "</ul>";
            } else {
                // line 542
                echo "<div class=\"alert-text\">";
                // line 543
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 544
                    echo "<p> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 545
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 546
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 547
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                    // line 548
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 551
                echo "</div>";
            }
            // line 553
            echo "</div>";
        }
    }

    // line 560
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        // line 561
        echo "  ";
        ob_start();
        // line 562
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
          <tr>
            <th class=\"checkbox\">
              <div class=\"md-checkbox\">
                <label>
                  <input type=\"checkbox\" class=\"js-choice-table-select-all\">
                  <i class=\"md-checkbox-control\"></i>
                  ";
        // line 571
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
                </label>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 579
            echo "          <tr>
            <td>
              ";
            // line 581
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 585
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 591
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        // line 592
        echo "  ";
        ob_start();
        // line 593
        echo "    <div class=\"choice-table table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
        // line 597
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</th>
            ";
        // line 598
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 599
            echo "              <th class=\"text-center\">
                ";
            // line 600
            if (($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "multiple", []) && !twig_in_filter($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "name", []), ($context["headers_to_disable"] ?? null)))) {
                // line 601
                echo "                  <a href=\"#\"
                     class=\"js-multiple-choice-table-select-column\"
                     data-column-num=\"";
                // line 603
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", []) + 1), "html", null, true);
                echo "\"
                     data-column-checked=\"false\"
                  >
                    ";
                // line 606
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "label", []), "html", null, true);
                echo "
                  </a>
                ";
            } else {
                // line 609
                echo "                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "label", []), "html", null, true);
                echo "
                ";
            }
            // line 611
            echo "              </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 613
        echo "          </tr>
        </thead>
        <tbody>
        ";
        // line 616
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 617
            echo "          <tr>
            <td>
              ";
            // line 619
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 621
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 622
                echo "              <td class=\"text-center\">
                ";
                // line 623
                if ($this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true), $context["child_choice_name"], [], "array", true, true)) {
                    // line 624
                    echo "                  ";
                    $context["entry_index"] = $this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array"), $context["child_choice_name"], [], "array");
                    // line 625
                    echo "
                  ";
                    // line 626
                    if ($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "multiple", [])) {
                        // line 627
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), [], "array"), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 629
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), [], "array"), 'widget');
                        echo "
                  ";
                    }
                    // line 631
                    echo "                ";
                } else {
                    // line 632
                    echo "                  --
                ";
                }
                // line 634
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 636
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 638
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 644
    public function block_translatable_widget($context, array $blocks = [])
    {
        // line 645
        echo "<div class=\"input-group locale-input-group js-locale-input-group d-flex\">
    ";
        // line 646
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 647
            echo "      ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 648
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "label", []));
            // line 649
            echo "      ";
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "name", []))) {
                // line 650
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 651
                echo "      ";
            }
            // line 652
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
        ";
            // line 653
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 656
        echo "    ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 657
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 663
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
        >
          ";
            // line 665
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
        </button>
        <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 667
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
          ";
            // line 668
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 669
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 671
            echo "        </div>
      </div>
    ";
        }
        // line 674
        echo "  </div>";
    }

    // line 677
    public function block_birthday_widget($context, array $blocks = [])
    {
        // line 678
        echo "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 679
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 681
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 682
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 683
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 685
            echo "
    ";
            // line 686
            $context["yearWidget"] = (("<div class=\"col pl-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget')) . "</div>");
            // line 687
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget')) . "</div>");
            // line 688
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')) . "</div>");
            // line 690
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 691
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 692
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 693
($context["dayWidget"] ?? null)]);
            // line 696
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 697
                echo "</div>";
            }
        }
    }

    // line 702
    public function block_file_widget($context, array $blocks = [])
    {
        // line 703
        echo "  <div class=\"custom-file\">
    ";
        // line 704
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(        // line 705
($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->env->getExtension('PrestaShopBundle\Twig\ContextIsoCodeProviderExtension')->getIsoCode()]);
        // line 710
        if (($this->getAttribute(($context["attr"] ?? null), "disabled", [], "any", true, true) && $this->getAttribute(($context["attr"] ?? null), "disabled", []))) {
            // line 711
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ($this->getAttribute(            // line 712
($context["attr"] ?? null), "class", []) . " disabled")]);
            // line 714
            echo "    ";
        }
        // line 715
        echo "
    ";
        // line 716
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

    <label class=\"custom-file-label\" for=\"";
        // line 718
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
      ";
        // line 719
        $context["attributes"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []);
        // line 720
        echo "      ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["attributes"] ?? null), "placeholder", [], "any", true, true)) ? ($this->getAttribute(($context["attributes"] ?? null), "placeholder", [])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>
";
    }

    // line 725
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        // line 726
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "is_allowed_to_display", [])) {
            // line 727
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 729
            $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 730
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 732
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"
          ";
            // line 733
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 734
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
    }

    // line 742
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        // line 743
        echo "  <div class=\"input-group\">";
        // line 744
        $this->displayBlock("form_widget", $context, $blocks);
        // line 745
        echo "<span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 748
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 749
        echo twig_escape_filter($this->env, ($context["generated_value_length"] ?? null), "html", null, true);
        echo "\"
      >
        ";
        // line 751
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
";
    }

    // line 757
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        // line 758
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 759
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 763
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 764
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 766
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 768
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 770
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 773
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 774
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 776
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 778
        echo "
    </em>
  </small>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2120 => 778,  2118 => 776,  2117 => 774,  2116 => 773,  2110 => 770,  2106 => 768,  2103 => 766,  2100 => 764,  2098 => 763,  2096 => 759,  2094 => 758,  2091 => 757,  2082 => 751,  2077 => 749,  2073 => 748,  2068 => 745,  2066 => 744,  2064 => 743,  2061 => 742,  2050 => 734,  2046 => 733,  2042 => 732,  2038 => 730,  2036 => 729,  2032 => 727,  2029 => 726,  2026 => 725,  2017 => 720,  2015 => 719,  2011 => 718,  2006 => 716,  2003 => 715,  2000 => 714,  1998 => 712,  1996 => 711,  1994 => 710,  1992 => 705,  1991 => 704,  1988 => 703,  1985 => 702,  1979 => 697,  1977 => 696,  1975 => 693,  1974 => 692,  1973 => 691,  1972 => 690,  1969 => 688,  1966 => 687,  1964 => 686,  1961 => 685,  1956 => 683,  1954 => 682,  1952 => 681,  1949 => 679,  1946 => 678,  1943 => 677,  1939 => 674,  1934 => 671,  1923 => 669,  1919 => 668,  1915 => 667,  1910 => 665,  1905 => 663,  1897 => 657,  1894 => 656,  1885 => 653,  1880 => 652,  1877 => 651,  1874 => 650,  1871 => 649,  1868 => 648,  1865 => 647,  1861 => 646,  1858 => 645,  1855 => 644,  1847 => 638,  1840 => 636,  1833 => 634,  1829 => 632,  1826 => 631,  1820 => 629,  1814 => 627,  1812 => 626,  1809 => 625,  1806 => 624,  1804 => 623,  1801 => 622,  1797 => 621,  1792 => 619,  1788 => 617,  1784 => 616,  1779 => 613,  1764 => 611,  1758 => 609,  1752 => 606,  1746 => 603,  1742 => 601,  1740 => 600,  1737 => 599,  1720 => 598,  1716 => 597,  1710 => 593,  1707 => 592,  1704 => 591,  1696 => 585,  1686 => 581,  1682 => 579,  1678 => 578,  1668 => 571,  1657 => 562,  1654 => 561,  1651 => 560,  1646 => 553,  1643 => 551,  1636 => 548,  1634 => 547,  1633 => 546,  1632 => 545,  1630 => 544,  1626 => 543,  1624 => 542,  1621 => 540,  1614 => 537,  1612 => 536,  1611 => 535,  1610 => 534,  1608 => 533,  1604 => 532,  1602 => 531,  1600 => 530,  1598 => 529,  1596 => 528,  1593 => 527,  1589 => 522,  1587 => 521,  1585 => 520,  1579 => 519,  1576 => 518,  1572 => 515,  1570 => 514,  1568 => 513,  1562 => 512,  1559 => 511,  1555 => 508,  1553 => 507,  1550 => 506,  1546 => 503,  1544 => 502,  1541 => 501,  1537 => 498,  1535 => 497,  1532 => 496,  1528 => 493,  1526 => 492,  1523 => 491,  1519 => 488,  1517 => 487,  1515 => 486,  1512 => 485,  1508 => 482,  1506 => 481,  1504 => 480,  1502 => 479,  1496 => 478,  1493 => 477,  1488 => 472,  1484 => 470,  1482 => 469,  1480 => 468,  1465 => 467,  1460 => 464,  1458 => 463,  1456 => 462,  1454 => 461,  1440 => 460,  1437 => 459,  1435 => 458,  1432 => 457,  1429 => 456,  1426 => 455,  1423 => 454,  1420 => 453,  1417 => 452,  1414 => 451,  1411 => 450,  1408 => 449,  1405 => 448,  1402 => 447,  1400 => 446,  1397 => 445,  1393 => 442,  1390 => 441,  1386 => 438,  1383 => 437,  1379 => 434,  1377 => 433,  1374 => 431,  1370 => 428,  1368 => 427,  1365 => 426,  1356 => 417,  1339 => 414,  1335 => 413,  1331 => 412,  1328 => 411,  1311 => 410,  1305 => 406,  1301 => 405,  1297 => 404,  1289 => 399,  1283 => 396,  1278 => 395,  1275 => 394,  1268 => 389,  1250 => 387,  1232 => 386,  1229 => 385,  1212 => 384,  1209 => 383,  1206 => 382,  1203 => 381,  1198 => 378,  1192 => 375,  1186 => 372,  1182 => 371,  1177 => 369,  1173 => 367,  1171 => 366,  1165 => 363,  1159 => 360,  1155 => 359,  1151 => 357,  1148 => 356,  1145 => 355,  1138 => 351,  1133 => 350,  1130 => 349,  1127 => 348,  1108 => 338,  1105 => 337,  1102 => 336,  1099 => 335,  1096 => 334,  1092 => 331,  1087 => 328,  1078 => 325,  1073 => 323,  1070 => 322,  1066 => 321,  1062 => 320,  1056 => 317,  1051 => 315,  1043 => 309,  1041 => 308,  1038 => 307,  1029 => 304,  1025 => 303,  1022 => 302,  1019 => 301,  1016 => 300,  1014 => 299,  1011 => 298,  1008 => 297,  1005 => 296,  1001 => 295,  996 => 293,  993 => 292,  989 => 289,  984 => 286,  973 => 284,  969 => 283,  965 => 282,  959 => 279,  954 => 277,  946 => 271,  944 => 270,  941 => 269,  933 => 267,  930 => 266,  928 => 265,  925 => 264,  922 => 263,  919 => 262,  917 => 261,  914 => 260,  911 => 259,  908 => 258,  904 => 257,  899 => 255,  896 => 254,  892 => 251,  889 => 249,  887 => 248,  884 => 247,  878 => 243,  869 => 240,  865 => 239,  844 => 238,  840 => 237,  836 => 235,  832 => 233,  822 => 229,  812 => 228,  809 => 227,  805 => 226,  802 => 225,  800 => 224,  796 => 223,  791 => 222,  788 => 221,  784 => 218,  780 => 216,  763 => 214,  760 => 213,  743 => 212,  740 => 211,  737 => 210,  733 => 207,  727 => 205,  725 => 204,  721 => 203,  713 => 202,  709 => 200,  705 => 197,  699 => 195,  696 => 194,  691 => 192,  686 => 190,  684 => 189,  676 => 188,  672 => 186,  669 => 185,  667 => 184,  664 => 183,  661 => 182,  656 => 178,  639 => 176,  622 => 175,  619 => 174,  613 => 172,  610 => 171,  605 => 167,  603 => 166,  601 => 165,  598 => 163,  596 => 162,  594 => 161,  591 => 160,  586 => 156,  584 => 155,  582 => 154,  579 => 152,  577 => 151,  575 => 150,  572 => 149,  567 => 145,  561 => 142,  560 => 141,  559 => 140,  555 => 139,  551 => 138,  548 => 136,  542 => 133,  541 => 132,  540 => 131,  536 => 130,  534 => 129,  532 => 128,  529 => 127,  525 => 124,  523 => 123,  520 => 122,  514 => 117,  511 => 116,  503 => 115,  498 => 113,  496 => 112,  494 => 111,  491 => 109,  489 => 108,  486 => 107,  480 => 102,  478 => 101,  476 => 99,  475 => 98,  474 => 97,  473 => 96,  468 => 94,  466 => 93,  464 => 92,  461 => 90,  459 => 89,  456 => 88,  451 => 84,  449 => 83,  447 => 82,  445 => 81,  443 => 80,  439 => 79,  437 => 78,  434 => 76,  432 => 75,  429 => 74,  422 => 68,  420 => 67,  418 => 66,  415 => 65,  411 => 62,  405 => 59,  402 => 58,  400 => 57,  398 => 56,  392 => 53,  389 => 52,  386 => 51,  384 => 50,  381 => 49,  378 => 48,  374 => 45,  372 => 44,  369 => 43,  365 => 40,  363 => 39,  360 => 38,  356 => 35,  353 => 33,  351 => 32,  348 => 31,  344 => 757,  341 => 756,  339 => 742,  336 => 741,  334 => 725,  331 => 724,  329 => 702,  326 => 701,  324 => 677,  321 => 676,  319 => 644,  316 => 643,  314 => 591,  311 => 590,  309 => 560,  306 => 559,  302 => 556,  300 => 527,  297 => 526,  294 => 524,  292 => 518,  289 => 517,  287 => 511,  284 => 510,  282 => 506,  279 => 505,  277 => 501,  274 => 500,  272 => 496,  269 => 495,  267 => 491,  264 => 490,  262 => 485,  259 => 484,  257 => 477,  254 => 476,  251 => 474,  249 => 445,  246 => 444,  244 => 441,  241 => 440,  239 => 437,  236 => 436,  234 => 431,  231 => 430,  229 => 426,  226 => 425,  223 => 423,  221 => 394,  218 => 393,  216 => 381,  213 => 380,  211 => 355,  208 => 354,  206 => 348,  203 => 347,  201 => 334,  198 => 333,  196 => 292,  193 => 291,  191 => 254,  188 => 253,  186 => 247,  183 => 246,  181 => 221,  178 => 220,  176 => 182,  173 => 181,  171 => 171,  168 => 170,  166 => 160,  163 => 159,  161 => 149,  158 => 148,  156 => 127,  153 => 126,  151 => 122,  148 => 121,  146 => 107,  143 => 106,  141 => 88,  138 => 87,  136 => 74,  133 => 73,  131 => 65,  128 => 64,  126 => 48,  123 => 47,  121 => 43,  118 => 42,  116 => 38,  113 => 37,  111 => 31,  108 => 30,  105 => 28,  39 => 27,  32 => 26,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig");
    }
}
