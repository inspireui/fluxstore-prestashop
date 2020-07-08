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

/* @PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig */
class __TwigTemplate_cb46ce43c2a8c4d7ae164b6618847e7b242633c0a07620363832fc3c3ea292a2 extends \Twig\Template
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
<div id=\"modal-prestatrust\" class=\"modal\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module verification", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\"row\">
            <div class=\"col-md-2 text-sm-center\">
              <img id=\"pstrust-img\" src=\"\" alt=\"\"/>
            </div>
            <div class=\"col-md-10\">
              <dl class=\"row\">
                <dt class=\"col-sm-3\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module", [], "Admin.Global"), "html", null, true);
        echo "</dt>
                <dd class=\"col-sm-9\">
                    <strong id=\"pstrust-name\"></strong>
                </dd>
                <dt class=\"col-sm-3\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Author", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</dt>
                <dd class=\"col-sm-9\" id=\"pstrust-author\"></dd>
                <dt class=\"col-sm-3\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "html", null, true);
        echo "</dt>
                <dd class=\"col-sm-9\"><strong><span class=\"text-info\" id=\"pstrust-label\"></span></strong></dd>
              </dl>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"alert alert-info\" id=\"pstrust-message\" role=\"alert\">
                    <p class=\"alert-text\"></p>
                </div>
            </div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <div id=\"pstrust-btn-property-ok\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to modules list", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn btn-primary pstrust-install\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Proceed with the installation", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</button>
        </div>
        <div id=\"pstrust-btn-property-nok\">
            <button type=\"submit\" class=\"btn btn-outline-secondary pstrust-install\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Proceed with the installation", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</button>
            <a href=\"\" class=\"btn btn-primary\" id=\"pstrust-buy\" target=\"_blank\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Buy module", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 68,  92 => 67,  86 => 64,  82 => 63,  64 => 48,  59 => 46,  52 => 42,  37 => 30,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_confirm_prestatrust.html.twig");
    }
}
