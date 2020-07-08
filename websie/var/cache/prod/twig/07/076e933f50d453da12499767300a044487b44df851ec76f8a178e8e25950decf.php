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

/* @PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig */
class __TwigTemplate_a7dc04f233a17b03182a9fc9d98bb921404693e029ed4e054a481c87c4fe5374 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_catalog_form_table_row' => [$this, 'block_product_catalog_form_table_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "<tbody
    ";
        // line 26
        if (($context["activate_drag_and_drop"] ?? null)) {
            echo "class=\"sortable\"";
        }
        // line 27
        echo "    last_sql=\"";
        echo twig_escape_filter($this->env, ($context["last_sql_query"] ?? null), "html_attr");
        echo "\"
>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 30
            echo "    ";
            $this->displayBlock('product_catalog_form_table_row', $context, $blocks);
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 140
            echo "<tr><td colspan=\"11\">
        ";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no result for this search. Update your filters to view other products.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "
    </td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 30
    public function block_product_catalog_form_table_row($context, array $blocks = [])
    {
        // line 31
        echo "    <tr data-uniturl=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "unit_action_url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "unit_action_url", []), "#")) : ("#")), "html", null, true);
        echo "\" data-product-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "id_product", []), "html", null, true);
        echo "\">
        <td class=\"checkbox-column form-group\">
            <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                    <input type=\"checkbox\" id=\"bulk_action_selected_products-";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "id_product", []), "html", null, true);
        echo "\" name=\"bulk_action_selected_products[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "id_product", []), "html", null, true);
        echo "\">
                    <i class=\"md-checkbox-control\"></i>
                </label>
            </div>
        </td>
        <td>
            <label class=\"form-check-label\" for=\"bulk_action_selected_products-";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "id_product", []), "html", null, true);
        echo "\">
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "id_product", []), "html", null, true);
        echo "
            </label>
        </td>
        <td>
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step1\">";
        echo $this->getAttribute(($context["product"] ?? null), "image", []);
        echo "</a>
        </td>
        <td>
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step1\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "name", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>
        <td>
            ";
        // line 52
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "reference", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "reference", []), "")) : ("")), "html", null, true);
        echo "
        </td>
        <td>
            ";
        // line 55
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "name_category", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "name_category", []), "")) : ("")), "html", null, true);
        echo "
        </td>
        <td class=\"text-center\">
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step2\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "price", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "price", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>
        <td class=\"text-center\">
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", []), "")) : ("")), "html", null, true);
        echo "#tab-step2\">";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "price_final", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "price_final", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>

        ";
        // line 64
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 65
            echo "            <td class=\"product-sav-quantity text-center\" data-product-quantity-value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "sav_quantity", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "sav_quantity", []), "")) : ("")), "html", null, true);
            echo "\">
                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", []), "")) : ("")), "html", null, true);
            echo "#tab-step3\">
                    ";
            // line 67
            if (($this->getAttribute(($context["product"] ?? null), "sav_quantity", [], "any", true, true) && ($this->getAttribute(($context["product"] ?? null), "sav_quantity", []) > 0))) {
                // line 68
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "sav_quantity", []), "html", null, true);
                echo "
                    ";
            } else {
                // line 70
                echo "                        ";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["product"] ?? null), "sav_quantity", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "sav_quantity", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "
                    ";
            }
            // line 72
            echo "                </a>
            </td>
        ";
        } else {
            // line 75
            echo "            <td></td>
        ";
        }
        // line 77
        echo "        <td class=\"text-center\">
            ";
        // line 78
        if (((($this->getAttribute(($context["product"] ?? null), "active", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "active", []), 0)) : (0)) == 0)) {
            // line 79
            echo "                <a href=\"#\" onclick=\"unitProductAction(this, 'activate'); return false;\">
                    <i class=\"material-icons action-disabled\">clear</i>
                </a>
            ";
        } else {
            // line 83
            echo "                <a href=\"#\" onclick=\"unitProductAction(this, 'deactivate'); return false;\">
                    <i class=\"material-icons action-enabled \">check</i>
                </a>
            ";
        }
        // line 87
        echo "        </td>
        ";
        // line 88
        if ($this->getAttribute(($context["product"] ?? null), "position", [], "any", true, true)) {
            // line 89
            echo "            <td ";
            if (($context["activate_drag_and_drop"] ?? null)) {
                echo "class=\"placeholder\"";
            }
            echo " style=\"cursor: pointer; cursor: hand;\">
                ";
            // line 90
            if (($context["activate_drag_and_drop"] ?? null)) {
                // line 91
                echo "                    <big><big>⇅</big></big>
                ";
            }
            // line 93
            echo "                <span class=\"position\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "position", []), "html", null, true);
            echo "</span>
                <input type=\"hidden\" name=\"mass_edit_action_sorted_products[]\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "id_product", []), "html", null, true);
            echo "\" />
                <input type=\"hidden\" name=\"mass_edit_action_sorted_positions[]\" value=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? null), "position", []), "html", null, true);
            echo "\" />
            </td>
        ";
        }
        // line 98
        echo "        <td class=\"text-right\">
            <div class=\"btn-group-action\">

                ";
        // line 101
        $context["buttons_action"] = [0 => ["href" => (($this->getAttribute(        // line 103
($context["product"] ?? null), "preview_url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "preview_url", []), "#")) : ("#")), "target" => "_blank", "icon" => "remove_red_eye", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Preview", [], "Admin.Actions")]];
        // line 109
        echo "
                ";
        // line 110
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? null), [0 => ["onclick" => "unitProductAction(this, 'duplicate');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", [], "Admin.Actions")]]);
        // line 117
        echo "
                ";
        // line 118
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? null), [0 => ["onclick" => "unitProductAction(this, 'delete');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions")]]);
        // line 125
        echo "
                ";
        // line 126
        $this->loadTemplate("@Product/CatalogPage/Forms/form_edit_dropdown.html.twig", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig", 126)->display(twig_array_merge($context, ["button_id" => (("product_list_id_" . $this->getAttribute(        // line 127
($context["product"] ?? null), "id_product", [])) . "_menu"), "default_item" => ["href" => (($this->getAttribute(        // line 129
($context["product"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["product"] ?? null), "url", []), "#")) : ("#")), "icon" => "mode_edit"], "right" => true, "items" =>         // line 133
($context["buttons_action"] ?? null)]));
        // line 135
        echo "            </div>
        </td>
    </tr>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 135,  277 => 133,  276 => 129,  275 => 127,  274 => 126,  271 => 125,  269 => 118,  266 => 117,  264 => 110,  261 => 109,  259 => 103,  258 => 101,  253 => 98,  247 => 95,  243 => 94,  238 => 93,  234 => 91,  232 => 90,  225 => 89,  223 => 88,  220 => 87,  214 => 83,  208 => 79,  206 => 78,  203 => 77,  199 => 75,  194 => 72,  188 => 70,  182 => 68,  180 => 67,  176 => 66,  171 => 65,  169 => 64,  161 => 61,  153 => 58,  147 => 55,  141 => 52,  133 => 49,  125 => 46,  118 => 42,  114 => 41,  103 => 35,  93 => 31,  90 => 30,  79 => 141,  76 => 140,  62 => 30,  44 => 29,  38 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Lists/list.html.twig");
    }
}
