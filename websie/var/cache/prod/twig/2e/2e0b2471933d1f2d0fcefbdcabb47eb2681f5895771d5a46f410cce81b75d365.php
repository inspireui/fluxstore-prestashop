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

/* @PrestaShop/Admin/Module/manage.html.twig */
class __TwigTemplate_a9e3c81eeac78234cf336281b2adc8f6c5d0ae71f7a238625942dbd77d438126 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'catalog_categories_listing' => [$this, 'block_catalog_categories_listing'],
            'addon_card_see_more' => [$this, 'block_addon_card_see_more'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 28
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-lg-10\">
      ";
        // line 31
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 31)->display($context);
        // line 32
        echo "      ";
        // line 33
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 33)->display($context);
        // line 34
        echo "      ";
        // line 35
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 35)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 36
        echo "      ";
        // line 37
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 37)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 38
        echo "      ";
        // line 39
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/menu_top.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 39)->display(twig_array_merge($context, ["topMenuData" => ($context["topMenuData"] ?? null), "bulkActions" => ($context["bulkActions"] ?? null)]));
        // line 40
        echo "
      ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 41)->display(twig_array_merge($context, ["display_type" => "list", "origin" => "manage"]));
        // line 42
        echo "
      ";
        // line 43
        $this->displayBlock('catalog_categories_listing', $context, $blocks);
        // line 62
        echo "    </div>
  </div>
";
    }

    // line 43
    public function block_catalog_categories_listing($context, array $blocks = [])
    {
        // line 44
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["categories"] ?? null), "subMenu", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 45
            echo "          <div class=\"module-short-list\">
            <span id=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "refMenu", []), "html", null, true);
            echo "_modules\" class=\"module-search-result-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["category"], "name", []), [], "Admin.Modules.Feature"), "html", null, true);
            echo "</span>

            ";
            // line 48
            if (twig_test_empty($this->getAttribute($context["category"], "modules", []))) {
                // line 49
                echo "              ";
                $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 49)->display(twig_array_merge($context, ["category" => $context["category"], "display_type" => "list", "origin" => "manage"]));
                // line 50
                echo "            ";
            } else {
                // line 51
                echo "              ";
                $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 51)->display(twig_array_merge($context, ["modules" => $this->getAttribute($context["category"], "modules", []), "display_type" => "list", "origin" => "manage", "id" => $this->getAttribute($context["category"], "refMenu", [])]));
                // line 52
                echo "
              ";
                // line 53
                $this->displayBlock('addon_card_see_more', $context, $blocks);
                // line 58
                echo "            ";
            }
            // line 59
            echo "          </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "      ";
    }

    // line 53
    public function block_addon_card_see_more($context, array $blocks = [])
    {
        // line 54
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["category"] ?? null), "modules", [])) > ($context["maxModulesDisplayed"] ?? null))) {
            // line 55
            echo "                  ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/see_more.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 55)->display(twig_array_merge($context, ["id" => $this->getAttribute(($context["category"] ?? null), "refMenu", [])]));
            // line 56
            echo "                ";
        }
        // line 57
        echo "              ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 57,  165 => 56,  162 => 55,  159 => 54,  156 => 53,  152 => 61,  137 => 59,  134 => 58,  132 => 53,  129 => 52,  126 => 51,  123 => 50,  120 => 49,  118 => 48,  111 => 46,  108 => 45,  90 => 44,  87 => 43,  81 => 62,  79 => 43,  76 => 42,  74 => 41,  71 => 40,  68 => 39,  66 => 38,  63 => 37,  61 => 36,  58 => 35,  56 => 34,  53 => 33,  51 => 32,  48 => 31,  44 => 28,  41 => 27,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/manage.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Module/manage.html.twig");
    }
}
