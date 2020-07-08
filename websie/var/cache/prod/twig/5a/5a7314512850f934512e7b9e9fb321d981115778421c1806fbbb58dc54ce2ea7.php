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

/* @PrestaShop/Admin/macros.html.twig */
class __TwigTemplate_e891db180116f2c28e2b2696b9047f2e22063f620b8ef92390070af1536e4850 extends \Twig\Template
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
        // line 28
        echo "
";
        // line 32
        echo "
";
        // line 38
        echo "
";
        // line 46
        echo "
";
        // line 54
        echo "
";
        // line 70
        echo "
";
        // line 88
        echo "
";
        // line 95
        echo "
";
        // line 125
        echo "
";
        // line 245
        echo "
 ";
        // line 280
        echo "
";
    }

    // line 25
    public function getform_label_tooltip($__name__ = null, $__tooltip__ = null, $__placement__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "tooltip" => $__tooltip__,
            "placement" => $__placement__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 26
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["name"] ?? null), 'label', ["label_attr" => ["tooltip" => ($context["tooltip"] ?? null), "tooltip_placement" => (((isset($context["placement"]) || array_key_exists("placement", $context))) ? (_twig_default_filter(($context["placement"] ?? null), "top")) : ("top"))]]);
            echo "
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

    // line 29
    public function getcheck($__variable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "variable" => $__variable__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            echo "  ";
            echo twig_escape_filter($this->env, ((((isset($context["variable"]) || array_key_exists("variable", $context)) && (twig_length_filter($this->env, ($context["variable"] ?? null)) > 0))) ? (($context["variable"] ?? null)) : (false)), "html", null, true);
            echo "
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

    // line 33
    public function gettooltip($__text__ = null, $__icon__ = null, $__position__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "icon" => $__icon__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 34
            echo "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "\" data-html=\"true\" data-placement=\"";
            echo twig_escape_filter($this->env, (((isset($context["position"]) || array_key_exists("position", $context))) ? (_twig_default_filter(($context["position"] ?? null), "top")) : ("top")), "html", null, true);
            echo "\">
    <i class=\"material-icons\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "</i>
  </span>
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

    // line 39
    public function getinfotip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 40
            echo "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 42
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "
  </p>
</div>
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

    // line 47
    public function getwarningtip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 48
            echo "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 50
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "
  </p>
</div>
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

    // line 55
    public function getlabel_with_help($__label__ = null, $__help__ = null, $__class__ = "", $__for__ = "", $__isRequired__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "help" => $__help__,
            "class" => $__class__,
            "for" => $__for__,
            "isRequired" => $__isRequired__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 56
            echo "<label";
            if ( !twig_test_empty(($context["for"] ?? null))) {
                echo " for=\"";
                echo twig_escape_filter($this->env, ($context["for"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " class=\"form-control-label ";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\">
  ";
            // line 57
            if (($context["isRequired"] ?? null)) {
                // line 58
                echo "    <span class=\"text-danger\">*</span>
  ";
            }
            // line 60
            echo "
  ";
            // line 61
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
  <span
    class=\"help-box\"
    data-toggle=\"popover\"
    data-content=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            echo "\">
  </span>
</label>
<p class=\"sr-only\">";
            // line 68
            echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            echo "</p>
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

    // line 72
    public function getsortable_column_header($__title__ = null, $__sortColumnName__ = null, $__orderBy__ = null, $__sortOrder__ = null, $__prefix__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "sortColumnName" => $__sortColumnName__,
            "orderBy" => $__orderBy__,
            "sortOrder" => $__sortOrder__,
            "prefix" => $__prefix__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 73
            echo "  ";
            list($context["sortOrder"], $context["orderBy"], $context["prefix"]) =             [(((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context))) ? (_twig_default_filter(($context["sortOrder"] ?? null), "")) : ("")), (((isset($context["orderBy"]) || array_key_exists("orderBy", $context))) ? (_twig_default_filter(($context["orderBy"] ?? null))) : ("")), (((isset($context["prefix"]) || array_key_exists("prefix", $context))) ? (_twig_default_filter(($context["prefix"] ?? null), "")) : (""))];
            // line 74
            echo "  <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"";
            // line 76
            echo twig_escape_filter($this->env, ($context["sortColumnName"] ?? null), "html", null, true);
            echo "\"
      data-sort-prefix=\"";
            // line 77
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "\"
      ";
            // line 78
            if ((($context["orderBy"] ?? null) == ($context["sortColumnName"] ?? null))) {
                // line 79
                echo "        data-sort-is-current=\"true\"
        data-sort-direction=\"";
                // line 80
                echo (((($context["sortOrder"] ?? null) == "desc")) ? ("desc") : ("asc"));
                echo "\"
      ";
            }
            // line 82
            echo "    >
      <span role=\"columnheader\">";
            // line 83
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", [], "Admin.Actions"), "html", null, true);
            echo "\"></span>
    </div>
  </th>
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

    // line 90
    public function getimport_file_sample($__label__ = null, $__filename__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "filename" => $__filename__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 91
            echo "    <a class=\"list-group-item list-group-item-action\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_sample_download", ["sampleName" => ($context["filename"] ?? null)]), "html", null, true);
            echo "\">
        ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
    </a>
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

    // line 105
    public function getform_widget_with_error($__form__ = null, $__vars__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "vars" => $__vars__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 106
            echo "  ";
            $context["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 106);
            // line 107
            echo "
  ";
            // line 108
            $context["vars"] = (((isset($context["vars"]) || array_key_exists("vars", $context))) ? (_twig_default_filter(($context["vars"] ?? null), [])) : ([]));
            // line 109
            echo "  ";
            $context["extraVars"] = (((isset($context["extraVars"]) || array_key_exists("extraVars", $context))) ? (_twig_default_filter(($context["extraVars"] ?? null), [])) : ([]));
            // line 110
            echo "  ";
            $context["attr"] = (($this->getAttribute(($context["vars"] ?? null), "attr", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["vars"] ?? null), "attr", []), [])) : ([]));
            // line 111
            echo "  ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? ($this->getAttribute(($context["attr"] ?? null), "class", [])) : (""))]);
            // line 112
            echo "  ";
            $context["vars"] = twig_array_merge(($context["vars"] ?? null), ["attr" => ($context["attr"] ?? null)]);
            // line 113
            echo "
  ";
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["vars"] ?? null));
            echo "

  ";
            // line 116
            if (($this->getAttribute(($context["extraVars"] ?? null), "help", [], "any", true, true) && $this->getAttribute(($context["extraVars"] ?? null), "help", []))) {
                // line 117
                echo "      <small class=\"form-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["extraVars"] ?? null), "help", []), "html", null, true);
                echo "</small>
    ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 118
($context["form"] ?? null), "vars", [], "any", false, true), "help", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "help", []))) {
                // line 119
                echo "      <small class=\"form-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "help", []), "html", null, true);
                echo "</small>
  ";
            }
            // line 121
            echo "
  ";
            // line 122
            echo $context["self"]->getform_error_with_popover(($context["form"] ?? null));
            echo "

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

    // line 135
    public function getform_error_with_popover($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 136
            echo "  ";
            $context["errors"] = [];
            // line 137
            echo "
  ";
            // line 138
            if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "valid", [], "any", true, true) &&  !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "valid", []))) {
                // line 139
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "errors", []));
                foreach ($context['_seq'] as $context["_key"] => $context["parentError"]) {
                    // line 140
                    echo "      ";
                    $context["errors"] = twig_array_merge(($context["errors"] ?? null), [0 => $this->getAttribute($context["parentError"], "message", [])]);
                    // line 141
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parentError'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "
    ";
                // line 144
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 145
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "vars", []), "errors", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 146
                        echo "        ";
                        $context["errors"] = twig_array_merge(($context["errors"] ?? null), [0 => $this->getAttribute($context["error"], "message", [])]);
                        // line 147
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "  ";
            }
            // line 150
            echo "
  ";
            // line 151
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 152
                echo "    ";
                // line 153
                echo "    ";
                $context["errorPopover"] = null;
                // line 154
                echo "
    ";
                // line 155
                if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                    // line 156
                    echo "      ";
                    $context["popoverContainer"] = ("popover-error-container-" . $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []));
                    // line 157
                    echo "      <div class=\"";
                    echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                    echo "\"></div>


      ";
                    // line 160
                    if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "errors_by_locale", [], "any", true, true)) {
                        // line 161
                        echo "          ";
                        $context["popoverErrors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "errors_by_locale", []);
                        // line 162
                        echo "
          ";
                        // line 164
                        echo "          ";
                        $context["translatableErrors"] = [];
                        // line 165
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["popoverErrors"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["translatableError"]) {
                            // line 166
                            echo "            ";
                            $context["translatableErrors"] = twig_array_merge(($context["translatableErrors"] ?? null), [0 => $this->getAttribute($context["translatableError"], "error_message", [])]);
                            // line 167
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translatableError'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 168
                        echo "
          ";
                        // line 170
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 171
                            echo "            ";
                            if (!twig_in_filter($context["error"], ($context["translatableErrors"] ?? null))) {
                                // line 172
                                echo "              ";
                                $context["popoverErrors"] = twig_array_merge(($context["popoverErrors"] ?? null), [0 => $context["error"]]);
                                // line 173
                                echo "            ";
                            }
                            // line 174
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 175
                        echo "
        ";
                    } else {
                        // line 177
                        echo "          ";
                        $context["popoverErrors"] = ($context["errors"] ?? null);
                        // line 178
                        echo "      ";
                    }
                    // line 179
                    echo "
      ";
                    // line 180
                    $context["errorMessages"] = [];
                    // line 181
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["popoverErrors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                        // line 182
                        echo "        ";
                        $context["errorMessage"] = $context["popoverError"];
                        // line 183
                        echo "
        ";
                        // line 184
                        if (($this->getAttribute($context["popoverError"], "error_message", [], "any", true, true) && $this->getAttribute($context["popoverError"], "locale_name", [], "any", true, true))) {
                            // line 185
                            echo "          ";
                            $context["errorMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%error_message% - Language: %language_name%", ["%error_message%" => $this->getAttribute($context["popoverError"], "error_message", []), "%language_name%" => $this->getAttribute($context["popoverError"], "locale_name", [])], "Admin.Notifications.Error");
                            // line 186
                            echo "        ";
                        }
                        // line 187
                        echo "
        ";
                        // line 188
                        $context["errorMessages"] = twig_array_merge(($context["errorMessages"] ?? null), [0 => ($context["errorMessage"] ?? null)]);
                        // line 189
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['popoverError'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 190
                    echo "
      ";
                    // line 191
                    ob_start();
                    // line 192
                    echo "        <div class=\"popover-error-list\">
          <ul>
            ";
                    // line 194
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["errorMessages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                        // line 195
                        echo "              <li class=\"text-danger\">
                ";
                        // line 196
                        echo twig_escape_filter($this->env, $context["popoverError"], "html", null, true);
                        echo "
              </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['popoverError'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    echo "          </ul>
        </div>
      ";
                    $context["popoverErrorContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 202
                    echo "
      <template class=\"js-popover-error-content\" data-id=\"";
                    // line 203
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                    echo "\">
        ";
                    // line 204
                    echo twig_escape_filter($this->env, ($context["popoverErrorContent"] ?? null), "html", null, true);
                    echo "
      </template>

      ";
                    // line 207
                    ob_start();
                    // line 208
                    echo "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                    // line 210
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                    echo "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                    // line 214
                    echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                    echo "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u>";
                    // line 216
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("%count% errors", twig_length_filter($this->env, ($context["popoverErrors"] ?? null)), [], "Admin.Global"), "html", null, true);
                    echo "</u>
        </span>
      ";
                    $context["errorPopover"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 219
                    echo "
    ";
                } elseif ($this->getAttribute($this->getAttribute(                // line 220
($context["form"] ?? null), "vars", [], "any", false, true), "error_by_locale", [], "any", true, true)) {
                    // line 221
                    echo "      ";
                    $context["errorByLocale"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%error_message% - Language: %language_name%", ["%error_message%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "error_by_locale", []), "error_message", []), "%language_name%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "error_by_locale", []), "locale_name", [])], "Admin.Notifications.Error");
                    // line 222
                    echo "      ";
                    $context["errors"] = [0 => ($context["errorByLocale"] ?? null)];
                    // line 223
                    echo "    ";
                }
                // line 224
                echo "
    <div class=\"invalid-feedback-container\">
      ";
                // line 226
                if ( !(null === ($context["errorPopover"] ?? null))) {
                    // line 227
                    echo "        <div class=\"text-danger\">
          ";
                    // line 228
                    echo twig_escape_filter($this->env, ($context["errorPopover"] ?? null), "html", null, true);
                    echo "
        </div>
      ";
                } else {
                    // line 231
                    echo "        <div class=\"d-inline-block text-danger align-top\">
          <i class=\"material-icons form-error-icon\">error_outline</i>
        </div>
        <div class=\"d-inline-block\">
          ";
                    // line 235
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 236
                        echo "            <div class=\"text-danger\">
              ";
                        // line 237
                        echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                        echo "
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 240
                    echo "        </div>
      ";
                }
                // line 242
                echo "    </div>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 252
    public function getform_group_row($__form__ = null, $__vars__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "vars" => $__vars__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 253
            echo "  ";
            $context["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 253);
            // line 254
            echo "
  ";
            // line 255
            $context["class"] = (($this->getAttribute(($context["extraVars"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["extraVars"] ?? null), "class", []), "")) : (""));
            // line 256
            echo "
  <div class=\"form-group row ";
            // line 257
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\">
    ";
            // line 258
            $context["extraVars"] = (((isset($context["extraVars"]) || array_key_exists("extraVars", $context))) ? (_twig_default_filter(($context["extraVars"] ?? null), [])) : ([]));
            // line 259
            echo "
    ";
            // line 260
            if ($this->getAttribute(($context["extraVars"] ?? null), "label", [], "any", true, true)) {
                // line 261
                echo "      ";
                $context["isRequired"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "required", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "required", []), false)) : (false));
                // line 262
                echo "
      ";
                // line 263
                if ($this->getAttribute(($context["extraVars"] ?? null), "required", [], "any", true, true)) {
                    // line 264
                    echo "        ";
                    $context["isRequired"] = $this->getAttribute(($context["extraVars"] ?? null), "required", []);
                    // line 265
                    echo "      ";
                }
                // line 266
                echo "
      <label for=\"";
                // line 267
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                echo "\" class=\"form-control-label\">
        ";
                // line 268
                if (($context["isRequired"] ?? null)) {
                    // line 269
                    echo "          <span class=\"text-danger\">*</span>
        ";
                }
                // line 271
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["extraVars"] ?? null), "label", []), "html", null, true);
                echo "
      </label>
    ";
            }
            // line 274
            echo "
    <div class=\"col-sm\">
      ";
            // line 276
            echo $context["self"]->getform_widget_with_error(($context["form"] ?? null), ($context["vars"] ?? null), ($context["extraVars"] ?? null));
            echo "
    </div>
  </div>
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

    // line 281
    public function getmultistore_switch($__form__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 282
            echo "  ";
            $context["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 282);
            // line 283
            echo "  ";
            if ($this->getAttribute(($context["form"] ?? null), "shop_restriction_switch", [], "any", true, true)) {
                // line 284
                echo "    ";
                ob_start();
                // line 285
                echo "      <strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check / Uncheck all", [], "Admin.Actions"), "html", null, true);
                echo "</strong> <br>
      ";
                // line 286
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are editing this page for a specific shop or group. Click \"Yes\" to check all fields, \"No\" to uncheck all.", [], "Admin.Design.Help"), "html", null, true);
                echo " <br>
      ";
                // line 287
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you check a field, change its value, and save, the multistore behavior will not apply to this shop (or group), for this particular parameter.", [], "Admin.Design.Help"), "html", null, true);
                echo "
    ";
                $context["defaultLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 289
                echo "
    ";
                // line 290
                if ( !$this->getAttribute(($context["extraVars"] ?? null), "help", [], "any", true, true)) {
                    // line 291
                    echo "      ";
                    $context["extraVars"] = twig_array_merge(($context["extraVars"] ?? null), ["help" => ($context["defaultLabel"] ?? null)]);
                    // line 292
                    echo "    ";
                }
                // line 293
                echo "
    ";
                // line 294
                $context["vars"] = ["attr" => ["class" => "js-multi-store-restriction-switch"]];
                // line 295
                echo "
    ";
                // line 296
                echo $context["self"]->getform_group_row($this->getAttribute(($context["form"] ?? null), "shop_restriction_switch", []), ($context["vars"] ?? null), ($context["extraVars"] ?? null));
                echo "
  ";
            }
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
        return "@PrestaShop/Admin/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  953 => 296,  950 => 295,  948 => 294,  945 => 293,  942 => 292,  939 => 291,  937 => 290,  934 => 289,  929 => 287,  925 => 286,  920 => 285,  917 => 284,  914 => 283,  911 => 282,  898 => 281,  879 => 276,  875 => 274,  868 => 271,  864 => 269,  862 => 268,  858 => 267,  855 => 266,  852 => 265,  849 => 264,  847 => 263,  844 => 262,  841 => 261,  839 => 260,  836 => 259,  834 => 258,  830 => 257,  827 => 256,  825 => 255,  822 => 254,  819 => 253,  805 => 252,  788 => 242,  784 => 240,  775 => 237,  772 => 236,  768 => 235,  762 => 231,  756 => 228,  753 => 227,  751 => 226,  747 => 224,  744 => 223,  741 => 222,  738 => 221,  736 => 220,  733 => 219,  727 => 216,  722 => 214,  715 => 210,  711 => 208,  709 => 207,  703 => 204,  699 => 203,  696 => 202,  691 => 199,  682 => 196,  679 => 195,  675 => 194,  671 => 192,  669 => 191,  666 => 190,  660 => 189,  658 => 188,  655 => 187,  652 => 186,  649 => 185,  647 => 184,  644 => 183,  641 => 182,  636 => 181,  634 => 180,  631 => 179,  628 => 178,  625 => 177,  621 => 175,  615 => 174,  612 => 173,  609 => 172,  606 => 171,  601 => 170,  598 => 168,  592 => 167,  589 => 166,  584 => 165,  581 => 164,  578 => 162,  575 => 161,  573 => 160,  566 => 157,  563 => 156,  561 => 155,  558 => 154,  555 => 153,  553 => 152,  551 => 151,  548 => 150,  545 => 149,  539 => 148,  533 => 147,  530 => 146,  525 => 145,  520 => 144,  517 => 142,  511 => 141,  508 => 140,  503 => 139,  501 => 138,  498 => 137,  495 => 136,  483 => 135,  465 => 122,  462 => 121,  456 => 119,  454 => 118,  449 => 117,  447 => 116,  442 => 114,  439 => 113,  436 => 112,  433 => 111,  430 => 110,  427 => 109,  425 => 108,  422 => 107,  419 => 106,  405 => 105,  387 => 92,  382 => 91,  369 => 90,  350 => 84,  346 => 83,  343 => 82,  338 => 80,  335 => 79,  333 => 78,  329 => 77,  325 => 76,  321 => 74,  318 => 73,  302 => 72,  285 => 68,  279 => 65,  272 => 61,  269 => 60,  265 => 58,  263 => 57,  252 => 56,  236 => 55,  217 => 50,  213 => 48,  201 => 47,  182 => 42,  178 => 40,  166 => 39,  148 => 35,  141 => 34,  127 => 33,  109 => 30,  97 => 29,  79 => 26,  65 => 25,  60 => 280,  57 => 245,  54 => 125,  51 => 95,  48 => 88,  45 => 70,  42 => 54,  39 => 46,  36 => 38,  33 => 32,  30 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/macros.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/macros.html.twig");
    }
}
