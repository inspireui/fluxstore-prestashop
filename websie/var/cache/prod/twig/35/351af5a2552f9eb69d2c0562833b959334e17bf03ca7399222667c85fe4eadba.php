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

/* @PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig */
class __TwigTemplate_4ec51c542ba4f68eed8ff0430456ae1ee7e4f728d6f5529854e9a08f34b5e26c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "<div class=\"row\">
    <div class=\"col-lg-6\">
        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configuration information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This information must be provided when you report an issue on our bug tracker or forum.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        ";
        // line 41
        if ($this->getAttribute(($context["system"] ?? null), "notHostMode", [])) {
            // line 42
            echo "        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Server information", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    ";
            // line 48
            if ( !twig_test_empty($this->getAttribute(($context["system"] ?? null), "uname", []))) {
                // line 49
                echo "                        <p>
                            <strong>";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Server information", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["system"] ?? null), "uname", []), "html", null, true);
                echo "
                        </p>
                    ";
            }
            // line 53
            echo "                    <p>
                        <strong>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Server software version:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "server", []), "version", []), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP version:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "server", []), "php", []), "version", []), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Memory limit:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "server", []), "php", []), "memoryLimit", []), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max execution time:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "server", []), "php", []), "maxExecutionTime", []), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload Max File size:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "server", []), "php", []), "maxFileSizeUpload", []), "html", null, true);
            echo "
                    </p>
                    ";
            // line 68
            if ($this->getAttribute(($context["system"] ?? null), "instaWebInstalled", [])) {
                // line 69
                echo "                        <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PageSpeed module for Apache installed (mod_instaweb)", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</p>
                    ";
            }
            // line 71
            echo "                </div>
            </div>
        </div>

        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Database information", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL version:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", []), "version", []), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL server:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", []), "server", []), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL name:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", []), "name", []), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL user:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", []), "user", []), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tables prefix:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", []), "prefix", []), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL engine:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", []), "engine", []), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL driver:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", []), "driver", []), "html", null, true);
            echo "
                    </p>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 107
        echo "    <div class=\"col-lg-6\">
        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Store information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PrestaShop version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "shop", []), "version", []), "html", null, true);
        echo "
                    </p>
                    <p>
                        <strong>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop URL:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "shop", []), "url", []), "html", null, true);
        echo "
                    </p>
                    <p>
                        <strong>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop path:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "shop", []), "path", []), "html", null, true);
        echo "
                    </p>
                    <p>
                        <strong>";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current theme in use:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "shop", []), "theme", []), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail method:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong>

                        ";
        // line 139
        if ($this->getAttribute(($context["system"] ?? null), "isNativePHPmail", [])) {
            // line 140
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are using the PHP mail() function.", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
                        ";
        } else {
            // line 142
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are using your own SMTP parameters.", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</p>
                    <p>
                        <strong>";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP server:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "smtp", []), "server", []), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP username:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
                        ";
            // line 148
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["system"] ?? null), "smtp", []), "user", []))) {
                // line 149
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "
                        ";
            } else {
                // line 151
                echo "                            <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 153
            echo "                    </p>
                    <p>
                        <strong>";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP password:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
                        ";
            // line 156
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["system"] ?? null), "smtp", []), "password", []))) {
                // line 157
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "
                        ";
            } else {
                // line 159
                echo "                            <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 161
            echo "                    </p>
                    <p>
                        <strong>";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Encryption:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "smtp", []), "encryption", []), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP port:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "smtp", []), "port", []), "html", null, true);
            echo "
                    </p>
                    ";
        }
        // line 169
        echo "                </div>
            </div>
        </div>

        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your web browser:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, ($context["userAgent"] ?? null), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>

        <div class=\"card\" id=\"checkConfiguration\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check your configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Required parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong>
                    ";
        // line 194
        if (($this->getAttribute(($context["requirements"] ?? null), "failRequired", []) == false)) {
            // line 195
            echo "                        <span class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("OK", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
                    </p>
                    ";
        } else {
            // line 198
            echo "                        <span class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please fix the following error(s)", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
                        </p>
                        <ul>
                            ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["requirements"] ?? null), "testsRequired", []));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 202
                echo "                                ";
                if (("fail" == $context["value"])) {
                    // line 203
                    echo "                                    <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["requirements"] ?? null), "testsErrors", []), $context["key"], [], "array"), "html", null, true);
                    echo "</li>
                                ";
                }
                // line 205
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "                        </ul>
                    ";
        }
        // line 208
        echo "                    ";
        if ($this->getAttribute(($context["requirements"] ?? null), "failOptional", [], "any", true, true)) {
            // line 209
            echo "                        <p>
                        <strong>";
            // line 210
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Optional parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
                        ";
            // line 211
            if (($this->getAttribute(($context["requirements"] ?? null), "failOptional", []) == false)) {
                // line 212
                echo "                            <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("OK", [], "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
                            </p>
                        ";
            } else {
                // line 215
                echo "                            <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please fix the following error(s)", [], "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
                            </p>
                            <ul>
                                ";
                // line 218
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["requirements"] ?? null), "testsOptional", []));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 219
                    echo "                                    ";
                    if (("fail" == $context["value"])) {
                        // line 220
                        echo "                                        <li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["requirements"] ?? null), "testsErrors", []), $context["key"], [], "array"), "html", null, true);
                        echo "</li>
                                    ";
                    }
                    // line 222
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 223
                echo "                            </ul>
                        ";
            }
            // line 225
            echo "                    ";
        }
        // line 226
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 231
        if ($this->getAttribute(($context["system"] ?? null), "notHostMode", [])) {
            // line 232
            echo "    <div class=\"card\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">info_outline</i> ";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of changed files", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
        </h3>
        <div class=\"card-block\">
            <div class=\"card-text\" id=\"changedFiles\">
                <i class=\"material-icons\">loop</i> ";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Checking files...", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 243
        if ($this->getAttribute(($context["system"] ?? null), "notHostMode", [])) {
            // line 244
            echo "    <script>
        \$(document).ready(function()
        {
            var translations = {
                missing: '";
            // line 248
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Missing files", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
            echo "',
                updated: '";
            // line 249
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated files", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
            echo "',
                changesDetected: '";
            // line 250
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changed/missing files have been detected.", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
            echo "',
                noChangeDetected: '";
            // line 251
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No change has been detected in your files.", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
            echo "'
            };

            \$.ajax({
                type: 'POST',
                url: '";
            // line 256
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_system_information_check_files");
            echo "',
                data: {},
                dataType: 'json',
                success: function(json)
                {
                    var tab = {
                        'missing': translations.missing,
                        'updated': translations.updated,
                    };

                    if (json.missing.length || json.updated.length)
                        \$('#changedFiles').html('<div class=\"alert alert-warning\" role=\"alert\"><p class=\"alert-text\">'+ translations.changesDetected +'</p></div>');
                    else
                        \$('#changedFiles').html('<div class=\"alert alert-success\" role=\"alert\"><p class=\"alert-text\">'+ translations.noChangeDetected +'</p></div>');

                    \$.each(tab, function(key, lang) {
                        if (json[key].length) {
                            var html = \$('<ul>').attr('id', key+'_files');
                            \$(json[key]).each(function(key, file) {
                                html.append(\$('<li>').html(file))
                            });
                            \$('#changedFiles')
                                .append(\$('<h4>').html(lang+' ('+json[key].length+')'))
                                .append(html);
                        }
                    });
                }
            });
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 256,  539 => 251,  535 => 250,  531 => 249,  527 => 248,  521 => 244,  519 => 243,  511 => 238,  504 => 234,  500 => 232,  498 => 231,  491 => 226,  488 => 225,  484 => 223,  478 => 222,  472 => 220,  469 => 219,  465 => 218,  458 => 215,  451 => 212,  449 => 211,  445 => 210,  442 => 209,  439 => 208,  435 => 206,  429 => 205,  423 => 203,  420 => 202,  416 => 201,  409 => 198,  402 => 195,  400 => 194,  396 => 193,  388 => 188,  375 => 180,  367 => 175,  359 => 169,  351 => 166,  343 => 163,  339 => 161,  333 => 159,  327 => 157,  325 => 156,  321 => 155,  317 => 153,  311 => 151,  305 => 149,  303 => 148,  299 => 147,  291 => 144,  285 => 142,  279 => 140,  277 => 139,  272 => 137,  264 => 132,  251 => 124,  243 => 121,  235 => 118,  227 => 115,  219 => 110,  214 => 107,  202 => 100,  194 => 97,  186 => 94,  178 => 91,  170 => 88,  162 => 85,  154 => 82,  146 => 77,  138 => 71,  132 => 69,  130 => 68,  123 => 66,  115 => 63,  107 => 60,  99 => 57,  91 => 54,  88 => 53,  80 => 50,  77 => 49,  75 => 48,  68 => 44,  64 => 42,  62 => 41,  55 => 37,  48 => 33,  42 => 29,  39 => 28,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig", "/home/inspireu/prestashop.inspireui.com/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/system_information.html.twig");
    }
}
