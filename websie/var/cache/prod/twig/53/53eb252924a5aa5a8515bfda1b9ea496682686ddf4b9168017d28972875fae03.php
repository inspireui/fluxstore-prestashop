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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig */
class __TwigTemplate_5b695ed73e660812af78939417d806b86c51c3e4b428fcc25f780e46db0e9e31 extends \Twig\Template
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
";
        // line 26
        $context["actions"] = $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "actions", []);
        // line 27
        echo "
";
        // line 28
        if ( !twig_test_empty(($context["actions"] ?? null))) {
            // line 29
            echo "  <div class=\"btn-group-action text-right\">
    <div class=\"btn-group\">
      ";
            // line 31
            list($context["skippedActions"], $context["isFirstRendered"]) =             [0, false];
            // line 32
            echo "
      ";
            // line 34
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 35
                echo "        ";
                if ( !($context["isFirstRendered"] ?? null)) {
                    // line 36
                    echo "          ";
                    $context["skippedActions"] = (($context["skippedActions"] ?? null) + 1);
                    // line 37
                    echo "        ";
                }
                // line 38
                echo "
        ";
                // line 39
                if (($this->getAttribute($context["action"], "isApplicable", [0 => ($context["record"] ?? null)], "method") &&  !($context["isFirstRendered"] ?? null))) {
                    // line 40
                    echo "          ";
                    echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . $this->getAttribute($context["action"], "type", [])) . ".html.twig"), ["grid" =>                     // line 41
($context["grid"] ?? null), "column" =>                     // line 42
($context["column"] ?? null), "attributes" => ["class" => "dropdown-item", "tooltip_name" => true], "record" =>                     // line 44
($context["record"] ?? null), "action" =>                     // line 45
$context["action"]]);
                    // line 46
                    echo "

          ";
                    // line 48
                    $context["isFirstRendered"] = true;
                    // line 49
                    echo "        ";
                }
                // line 50
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
      ";
            // line 53
            echo "      ";
            if ((twig_length_filter($this->env, ($context["actions"] ?? null)) > ($context["skippedActions"] ?? null))) {
                // line 54
                echo "        <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split\"
           data-toggle=\"dropdown\"
           aria-haspopup=\"true\"
           aria-expanded=\"false\"
        >
        </a>

        <div class=\"dropdown-menu dropdown-menu-right\">
          ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["actions"] ?? null), ($context["skippedActions"] ?? null)));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    if ($this->getAttribute($context["action"], "isApplicable", [0 => ($context["record"] ?? null)], "method")) {
                        // line 63
                        echo "            ";
                        echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . $this->getAttribute($context["action"], "type", [])) . ".html.twig"), ["grid" =>                         // line 64
($context["grid"] ?? null), "column" =>                         // line 65
($context["column"] ?? null), "attributes" => ["class" => "dropdown-item", "tooltip_name" => false], "record" =>                         // line 67
($context["record"] ?? null), "action" =>                         // line 68
$context["action"]]);
                        // line 69
                        echo "
          ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        </div>
      ";
            }
            // line 73
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 73,  156 => 71,  145 => 69,  143 => 68,  142 => 67,  141 => 65,  140 => 64,  138 => 63,  127 => 62,  117 => 54,  114 => 53,  111 => 51,  97 => 50,  94 => 49,  92 => 48,  88 => 46,  86 => 45,  85 => 44,  84 => 42,  83 => 41,  81 => 40,  79 => 39,  76 => 38,  73 => 37,  70 => 36,  67 => 35,  49 => 34,  46 => 32,  44 => 31,  40 => 29,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/action.html.twig");
    }
}
