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

/* @particles/slideshow.html.twig */
class __TwigTemplate_6ff95c4e557404ce4efe4d96eedae2e878b60f0521879df9aed40aaef6bf3f94 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/slideshow.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_particle($context, array $blocks = [])
    {
        // line 3
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-slideshow swiper-container ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\" data-slideshow-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-slideshow-thumbnails=\"";
        if (((($this->getAttribute(($context["particle"] ?? null), "thumbs", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "thumbs", []), "enabled")) : ("enabled")) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-slideshow-effect=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "effect", []), "html", null, true);
        echo "\" data-slideshow-autoplay=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-slideshow-loop=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "loop", []) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-slideshow-timeout=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "autoplayTimeout", []), "html", null, true);
        echo "\" data-slideshow-speed=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "speed", []), "html", null, true);
        echo "\" data-slideshow-touchmove=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "touchmove", []) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "direction", []) == "rtl")) {
            echo " dir=\"rtl\" ";
        }
        echo ">
        ";
        // line 4
        if (( !$this->getAttribute(($context["particle"] ?? null), "source", []) || ($this->getAttribute(($context["particle"] ?? null), "source", []) == "particle"))) {
            // line 5
            echo "            <div class=\"g-slideshow-slider swiper-wrapper\" style=\"height: ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "height", []), "600px")) : ("600px")), "html", null, true);
            echo ";\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "                    <div class=\"swiper-slide ";
                if (($this->getAttribute(($context["particle"] ?? null), "overlay", []) == "enabled")) {
                    echo "overlay";
                }
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []));
                echo "\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])));
                echo "); background-position: ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "bg_horizontal", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "bg_horizontal", []), "center")) : ("center")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "bg_vertical", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "bg_vertical", []), "center")) : ("center")), "html", null, true);
                echo "\">
                        <div class=\"slide\">
                            ";
                // line 9
                if ($this->getAttribute($context["item"], "top_title", [])) {
                    // line 10
                    echo "                                <h3 class=\"g-slideshow-top-title \">
                                    ";
                    // line 11
                    echo $this->getAttribute($context["item"], "top_title", []);
                    echo "
                                </h3>
                            ";
                }
                // line 14
                echo "                            ";
                if ($this->getAttribute($context["item"], "main_title", [])) {
                    // line 15
                    echo "                                <h1 class=\"g-slideshow-main-title\">
                                   ";
                    // line 16
                    if ($this->getAttribute($context["item"], "link", [])) {
                        // line 17
                        echo "                                   <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []), "html", null, true);
                        echo "\" target=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "linktarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "linktarget", []), "_self")) : ("_self")), "html", null, true);
                        echo "\">";
                        echo $this->getAttribute($context["item"], "main_title", []);
                        echo "</a>
                                   ";
                    } else {
                        // line 19
                        echo "                                   ";
                        echo $this->getAttribute($context["item"], "main_title", []);
                        echo "
                                   ";
                    }
                    // line 21
                    echo "                                </h1>
                            ";
                }
                // line 23
                echo "                            ";
                if (($this->getAttribute($context["item"], "author_image", []) && $this->getAttribute($context["item"], "author_link", []))) {
                    // line 24
                    echo "                                <a class=\"g-slideshow-avatar\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author_link", []), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "author_linktarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "author_linktarget", []), "_self")) : ("_self")), "html", null, true);
                    echo "\">
                                    <img src=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "author_image", [])));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author_text", []), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author_text", []), "html", null, true);
                    echo "\">
                                </a>
                            ";
                }
                // line 28
                echo "                            ";
                if ($this->getAttribute($context["item"], "author_text", [])) {
                    // line 29
                    echo "                                <a class=\"g-slideshow-author\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author_link", []), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "author_linktarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "author_linktarget", []), "_self")) : ("_self")), "html", null, true);
                    echo "\">
                                    ";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author_text", []), "html", null, true);
                    echo "
                                </a>
                            ";
                }
                // line 33
                echo "                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </div>

            ";
            // line 39
            echo "            ";
            if (($this->getAttribute(($context["particle"] ?? null), "thumbs", []) == "enabled")) {
                // line 40
                echo "                <div class=\"g-slideshow-thumbs swiper-container gallery-thumbs\">
                    <div class=\"swiper-wrapper\">
                        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 43
                    echo "                            <div class=\"swiper-slide\" style=\"background-image: url(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])));
                    echo ");\">
                                <div class=\"g-slideshow-thumbs-title\">
                                    <span>";
                    // line 45
                    echo $this->getAttribute($context["item"], "main_title", []);
                    echo "</span>
                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                    </div>
                </div>
            ";
            }
            // line 52
            echo "        ";
        } else {
            // line 53
            echo "            ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate((("@particles/slideshow-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "name", [])) . ".html.twig"), "@particles/slideshow.html.twig", 53);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 54
            echo "        ";
        }
        // line 55
        echo "        ";
        // line 56
        echo "        <div class=\"navigation\">
            ";
        // line 57
        if (($this->getAttribute(($context["particle"] ?? null), "nav", []) == "enabled")) {
            // line 58
            echo "                <div class=\"swiper-button-prev\">
                    <i class=\"fa fa-angle-up\"></i>
                </div>
            ";
        }
        // line 62
        echo "            ";
        if (($this->getAttribute(($context["particle"] ?? null), "dots", []) == "enabled")) {
            // line 63
            echo "                <div class=\"swiper-pagination\"></div>
            ";
        }
        // line 65
        echo "            ";
        if (($this->getAttribute(($context["particle"] ?? null), "nav", []) == "enabled")) {
            // line 66
            echo "                <div class=\"swiper-button-next\">
                    <i class=\"fa fa-angle-down\"></i>
                </div>
            ";
        }
        // line 70
        echo "        </div>
    </div>
";
    }

    // line 73
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 74
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 75
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/swiper.js"), 1 => 10, 2 => "footer"], "method");
        // line 76
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/slideshow.init.js"), 1 => 10, 2 => "footer"], "method");
    }

    public function getTemplateName()
    {
        return "@particles/slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 76,  290 => 75,  287 => 74,  284 => 73,  278 => 70,  272 => 66,  269 => 65,  265 => 63,  262 => 62,  256 => 58,  254 => 57,  251 => 56,  249 => 55,  246 => 54,  235 => 53,  232 => 52,  227 => 49,  217 => 45,  211 => 43,  207 => 42,  203 => 40,  200 => 39,  196 => 36,  188 => 33,  182 => 30,  175 => 29,  172 => 28,  162 => 25,  155 => 24,  152 => 23,  148 => 21,  142 => 19,  132 => 17,  130 => 16,  127 => 15,  124 => 14,  118 => 11,  115 => 10,  113 => 9,  97 => 7,  93 => 6,  88 => 5,  86 => 4,  43 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/slideshow.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatd\\templates\\rt_manticore\\particles\\slideshow.html.twig");
    }
}
