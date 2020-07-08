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

/* @PrestaShop/Admin/Improve/International/Language/index.html.twig */
class __TwigTemplate_5a0e65693bf35bde268ef288d37eedff5e3c71853db70061c3ca3a5b0c96a9f0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 36
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Language/index.html.twig", 36);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'language_listing' => [$this, 'block_language_listing'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_languages_create"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new language", [], "Admin.International.Feature"), "icon" => "add_circle_outline"]];
        // line 33
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Languages", [], "Admin.Global");
        // line 34
        $context["enableSidebar"] = true;
        // line 36
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        // line 39
        echo "  <div class=\"row\">
    <div class=\"col\">
      <div class=\"alert alert-warning\" role=\"alert\">
        <p class=\"alert-text\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When you delete a language, all related translations in the database will be deleted.", [], "Admin.International.Notification"), "html", null, true);
        echo "</p>
      </div>

      ";
        // line 45
        if ( !($context["isHtaccessFileWriter"] ?? null)) {
            // line 46
            echo "        <div class=\"alert alert-info\" role=\"alert\">
          <p class=\"alert-text\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your .htaccess file must be writable.", [], "Admin.International.Notification"), "html", null, true);
            echo "</p>
        </div>
      ";
        }
        // line 50
        echo "    </div>
  </div>

  ";
        // line 53
        $this->displayBlock('language_listing', $context, $blocks);
    }

    public function block_language_listing($context, array $blocks = [])
    {
        // line 54
        echo "    <div class=\"row\">
      <div class=\"col-sm\">
        ";
        // line 56
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Improve/International/Language/index.html.twig", 56)->display(twig_array_merge($context, ["grid" => ($context["languageGrid"] ?? null)]));
        // line 57
        echo "      </div>
    </div>
  ";
    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        // line 63
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/language.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Language/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 66,  105 => 65,  99 => 63,  96 => 62,  90 => 57,  88 => 56,  84 => 54,  78 => 53,  73 => 50,  67 => 47,  64 => 46,  62 => 45,  56 => 42,  51 => 39,  48 => 38,  44 => 36,  42 => 34,  40 => 33,  38 => 26,  22 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Language/index.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Language/index.html.twig");
    }
}
