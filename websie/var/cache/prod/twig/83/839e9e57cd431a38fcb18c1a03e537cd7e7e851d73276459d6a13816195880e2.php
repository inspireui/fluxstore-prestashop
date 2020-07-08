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

/* @PrestaShop/Admin/layout.html.twig */
class __TwigTemplate_0e1f206c82005a3c0e51c3368bebc04da8430f55c9236a9013be57497e0babe9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
            'content_header' => [$this, 'block_content_header'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return $this->loadTemplate(twig_template_from_string($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getLegacyLayout($this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_legacy_controller"], "method"), ((        // line 28
(isset($context["layoutTitle"]) || array_key_exists("layoutTitle", $context))) ? (($context["layoutTitle"] ?? null)) : ("")), ((        // line 29
(isset($context["layoutHeaderToolbarBtn"]) || array_key_exists("layoutHeaderToolbarBtn", $context))) ? (($context["layoutHeaderToolbarBtn"] ?? null)) : ([])), ((        // line 30
(isset($context["layoutDisplayType"]) || array_key_exists("layoutDisplayType", $context))) ? (($context["layoutDisplayType"] ?? null)) : ("")), ((        // line 31
(isset($context["showContentHeader"]) || array_key_exists("showContentHeader", $context))) ? (($context["showContentHeader"] ?? null)) : (true)), ((        // line 32
(isset($context["headerTabContent"]) || array_key_exists("headerTabContent", $context))) ? (($context["headerTabContent"] ?? null)) : ("")), ((        // line 33
(isset($context["enableSidebar"]) || array_key_exists("enableSidebar", $context))) ? (($context["enableSidebar"] ?? null)) : (false)), ((        // line 34
(isset($context["help_link"]) || array_key_exists("help_link", $context))) ? (($context["help_link"] ?? null)) : ("")))), "@PrestaShop/Admin/layout.html.twig", 25);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 38
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/layout.html.twig", 38);
        // line 25
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        // line 41
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/default.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/right-sidebar.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/form_popover_error.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 46
    public function block_translate_javascripts($context, array $blocks = [])
    {
        // line 47
        echo "  <script>
    var translate_javascripts = ";
        // line 48
        echo twig_jsonencode_filter(($context["js_translatable"] ?? null));
        echo ";
    var PS_ALLOW_ACCENTED_CHARS_URL = ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->intCast($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ALLOW_ACCENTED_CHARS_URL")), "html", null, true);
        echo ";
  </script>
";
    }

    // line 53
    public function block_content_header($context, array $blocks = [])
    {
        // line 54
        echo "  ";
        // line 74
        echo "  ";
        $context["layout"] = $this;
        // line 75
        echo "
  ";
        // line 76
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "peek", [0 => "error"], "method")) > 0)) {
            // line 77
            echo "    ";
            echo $context["layout"]->getalert("danger", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "get", [0 => "error"], "method"));
            echo "
  ";
        }
        // line 79
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "peek", [0 => "failure"], "method")) > 0)) {
            // line 80
            echo "    ";
            echo $context["layout"]->getalert("danger", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "get", [0 => "failure"], "method"));
            echo "
  ";
        }
        // line 82
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "peek", [0 => "success"], "method")) > 0)) {
            // line 83
            echo "    ";
            echo $context["layout"]->getalert("success", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "get", [0 => "success"], "method"));
            echo "
  ";
        }
        // line 85
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "peek", [0 => "warning"], "method")) > 0)) {
            // line 86
            echo "    ";
            echo $context["layout"]->getalert("warning", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "get", [0 => "warning"], "method"));
            echo "
  ";
        }
    }

    // line 90
    public function block_sidebar_right($context, array $blocks = [])
    {
        // line 91
        echo "  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-xs-5 col-sm-4 col-md-4 col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/img/bundle/dashboard_loading.gif"), "html", null, true);
        echo "\"
      style=\"margin-top: 10em;\" alt=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Loading...", [], "Admin.Global"), "html", null, true);
        echo "\"
    />
  </nav>
";
    }

    // line 54
    public function getalert($__type__ = null, $__flashbagContent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "flashbagContent" => $__flashbagContent__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 55
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      ";
            // line 59
            if ((twig_length_filter($this->env, ($context["flashbagContent"] ?? null)) > 1)) {
                // line 60
                echo "        <ul class=\"alert-text\">
          ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 62
                    echo "            <li>";
                    echo $context["flashMessage"];
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "        </ul>
      ";
            } else {
                // line 66
                echo "        <div class=\"alert-text\">
          ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 68
                    echo "            <p>";
                    echo $context["flashMessage"];
                    echo "</p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "        </div>
      ";
            }
            // line 72
            echo "    </div>
  ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 72,  217 => 70,  208 => 68,  204 => 67,  201 => 66,  197 => 64,  188 => 62,  184 => 61,  181 => 60,  179 => 59,  171 => 55,  158 => 54,  150 => 98,  146 => 97,  138 => 91,  135 => 90,  127 => 86,  124 => 85,  118 => 83,  115 => 82,  109 => 80,  106 => 79,  100 => 77,  98 => 76,  95 => 75,  92 => 74,  90 => 54,  87 => 53,  80 => 49,  76 => 48,  73 => 47,  70 => 46,  64 => 43,  60 => 42,  55 => 41,  52 => 40,  48 => 25,  46 => 38,  40 => 34,  39 => 33,  38 => 32,  37 => 31,  36 => 30,  35 => 29,  34 => 28,  33 => 27,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/layout.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/layout.html.twig");
    }
}
