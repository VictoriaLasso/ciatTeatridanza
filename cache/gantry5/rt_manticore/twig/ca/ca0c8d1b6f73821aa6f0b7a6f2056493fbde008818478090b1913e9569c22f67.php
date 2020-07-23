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

/* @particles/toprated.html.twig */
class __TwigTemplate_73a465adaa25b3297bfd76f637aaf03da1ef57b0f9d28c1c06b6b1eb41b87e75 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/toprated.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-toprated ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\" data-toprated-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-toprated-slides=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "slides", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "slides", []), 6)) : (6)), "html", null, true);
        echo "\" data-toprated-slides-scroll=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "slides_scroll", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "slides_scroll", []), 1)) : (1)), "html", null, true);
        echo "\" data-toprated-nav=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "nav", []) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-toprated-autoplay=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-toprated-autoplay-timeout=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "autoplayTimeout", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "autoplayTimeout", []), 8000)) : (8000)), "html", null, true);
        echo "\" data-toprated-loop=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "loop", []) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-toprated-rtl=\"";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "direction", []) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\">
        ";
        // line 5
        if (( !$this->getAttribute(($context["particle"] ?? null), "source", []) || ($this->getAttribute(($context["particle"] ?? null), "source", []) == "particle"))) {
            // line 6
            echo "            <div class=\"g-toprated-header\">
                ";
            // line 7
            if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
                echo "<h2 class=\"g-title\">";
                echo $this->getAttribute(($context["particle"] ?? null), "title", []);
                echo "</h2>";
            }
            // line 8
            echo "
                ";
            // line 9
            if (($this->getAttribute(($context["particle"] ?? null), "filtering", []) == "enabled")) {
                // line 10
                echo "                    <div class=\"g-toprated-filtering\">
                        <span class=\"g-toprated-group active\" data-toprated-group=\"all\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "filtering_all", []));
                echo "</span>

                        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "groups", []));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 14
                    echo "                            <span class=\"g-toprated-group\" data-toprated-group=\"";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_lower_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", []))), [" " => "_"]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", []));
                    echo "</span>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "                    </div>
                ";
            }
            // line 18
            echo "
                ";
            // line 19
            if (($this->getAttribute(($context["particle"] ?? null), "nav", []) == "enabled")) {
                // line 20
                echo "                    <div class=\"g-toprated-nav\"></div>
                ";
            }
            // line 22
            echo "            </div>

            <div class=\"g-toprated-slider\">
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "groups", []));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 26
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 27
                    echo "                        <div class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []));
                    echo "\" data-toprated-group=\"";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_lower_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", []))), [" " => "_"]), "html", null, true);
                    echo "\">
                            <div class=\"slide-content-wrapper\">
                                ";
                    // line 29
                    if ($this->getAttribute($context["item"], "image", [])) {
                        // line 30
                        echo "                                    <div class=\"g-toprated-image\">
                                        ";
                        // line 31
                        if ($this->getAttribute($context["item"], "link", [])) {
                            // line 32
                            echo "                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                            echo "\" target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", []), "_self")) : ("_self")), "html", null, true);
                            echo "\">
                                        ";
                        }
                        // line 34
                        echo "
                                            <img src=\"";
                        // line 35
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])));
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
                        echo "\" />

                                        ";
                        // line 37
                        if ($this->getAttribute($context["item"], "link", [])) {
                            // line 38
                            echo "                                            </a>
                                        ";
                        }
                        // line 40
                        echo "
                                        ";
                        // line 41
                        if ($this->getAttribute($context["item"], "score", [])) {
                            // line 42
                            echo "                                            <span class=\"g-toprated-score\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "score", []));
                            echo "</span>
                                        ";
                        }
                        // line 44
                        echo "
                                        ";
                        // line 45
                        if ($this->getAttribute($context["item"], "ribbon", [])) {
                            // line 46
                            echo "                                            <span class=\"g-toprated-ribbon\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ribbon", []));
                            echo "</span>
                                        ";
                        }
                        // line 48
                        echo "                                    </div>
                                ";
                    }
                    // line 50
                    echo "
                                ";
                    // line 51
                    if ($this->getAttribute($context["item"], "title", [])) {
                        // line 52
                        echo "                                    <div class=\"g-toprated-title\">
                                        ";
                        // line 53
                        if ($this->getAttribute($context["item"], "link", [])) {
                            // line 54
                            echo "                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                            echo "\" target=\"";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", []), "_self")) : ("_self")), "html", null, true);
                            echo "\">
                                        ";
                        }
                        // line 56
                        echo "
                                        <h3>
                                            ";
                        // line 58
                        echo $this->getAttribute($context["item"], "title", []);
                        echo "
                                        </h3>

                                        ";
                        // line 61
                        if ($this->getAttribute($context["item"], "link", [])) {
                            // line 62
                            echo "                                            </a>
                                        ";
                        }
                        // line 64
                        echo "                                    </div>
                                ";
                    }
                    // line 66
                    echo "
                                ";
                    // line 67
                    if ($this->getAttribute($context["item"], "subtitle", [])) {
                        // line 68
                        echo "                                    <div class=\"g-toprated-subtitle\">
                                        ";
                        // line 69
                        echo $this->getAttribute($context["item"], "subtitle", []);
                        echo "
                                    </div>
                                ";
                    }
                    // line 72
                    echo "
                                ";
                    // line 73
                    if ($this->getAttribute($context["item"], "description", [])) {
                        // line 74
                        echo "                                    <div class=\"g-toprated-description\">
                                        ";
                        // line 75
                        echo $this->getAttribute($context["item"], "description", []);
                        echo "
                                    </div>
                                ";
                    }
                    // line 78
                    echo "                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "            </div>
        ";
        } else {
            // line 84
            echo "            ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate((("@particles/toprated-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "name", [])) . ".html.twig"), "@particles/toprated.html.twig", 84);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 85
            echo "        ";
        }
        // line 86
        echo "    </div>
";
    }

    // line 89
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 90
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 91
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/slick.min.js"), 1 => 10, 2 => "footer"], "method");
        // line 92
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/toprated.init.js"), 1 => 10, 2 => "footer"], "method");
    }

    public function getTemplateName()
    {
        return "@particles/toprated.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 92,  322 => 91,  319 => 90,  316 => 89,  311 => 86,  308 => 85,  297 => 84,  293 => 82,  287 => 81,  279 => 78,  273 => 75,  270 => 74,  268 => 73,  265 => 72,  259 => 69,  256 => 68,  254 => 67,  251 => 66,  247 => 64,  243 => 62,  241 => 61,  235 => 58,  231 => 56,  223 => 54,  221 => 53,  218 => 52,  216 => 51,  213 => 50,  209 => 48,  203 => 46,  201 => 45,  198 => 44,  192 => 42,  190 => 41,  187 => 40,  183 => 38,  181 => 37,  174 => 35,  171 => 34,  163 => 32,  161 => 31,  158 => 30,  156 => 29,  148 => 27,  143 => 26,  139 => 25,  134 => 22,  130 => 20,  128 => 19,  125 => 18,  121 => 16,  110 => 14,  106 => 13,  101 => 11,  98 => 10,  96 => 9,  93 => 8,  87 => 7,  84 => 6,  82 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/toprated.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatd\\templates\\rt_manticore\\particles\\toprated.html.twig");
    }
}
