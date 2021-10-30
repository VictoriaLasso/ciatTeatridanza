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

/* @particles/testimonials.html.twig */
class __TwigTemplate_3defcf1f7fbd6346f46241a6f0b9df57991e1aa2ee848118a5bf131d87c7aaa8 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/testimonials.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_particle($context, array $blocks = [])
    {
        // line 3
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo " g-testimonials\" data-testimonials-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-testimonials-autoplay=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", []) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-testimonials-loop=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "loop", []) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-testimonials-timeout=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "autoplayTimeout", []), "html", null, true);
        echo "\" data-testimonials-speed=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "speed", []), "html", null, true);
        echo "\">
        ";
        // line 4
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            // line 5
            echo "            <div class=\"g-testimonials-header\">
                ";
            // line 6
            if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
                // line 7
                echo "                    <div class=\"g-testimonials-title\">
                        ";
                // line 8
                echo $this->getAttribute(($context["particle"] ?? null), "title", []);
                echo "
                    </div>
                ";
            }
            // line 11
            echo "            </div>
        ";
        }
        // line 13
        echo "        <!-- Swiper -->
        <div class=\"g-testimonials-container\" ";
        // line 14
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", []), "direction", []) == "rtl")) {
            echo "dir=\"rtl\"";
        }
        echo ">
            ";
        // line 15
        if (( !$this->getAttribute(($context["particle"] ?? null), "source", []) || ($this->getAttribute(($context["particle"] ?? null), "source", []) == "particle"))) {
            // line 16
            echo "                <div class=\"swiper-wrapper testimony-wrapper\">
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "testimony", []));
            foreach ($context['_seq'] as $context["_key"] => $context["testimony"]) {
                // line 18
                echo "                        <div class=\"swiper-slide\">
                            ";
                // line 19
                if ($this->getAttribute($context["testimony"], "content", [])) {
                    // line 20
                    echo "                                <h2 class=\"g-testimonials-content\">
                                    ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["testimony"], "content", []), "html", null, true);
                    echo "
                                </h2>
                            ";
                }
                // line 24
                echo "                            ";
                if ($this->getAttribute($context["testimony"], "author", [])) {
                    // line 25
                    echo "                                <p class=\"g-testimonials-author\">
                                    ";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["testimony"], "author", []), "html", null, true);
                    echo "
                                </p>
                            ";
                }
                // line 29
                echo "                            ";
                if ($this->getAttribute($context["testimony"], "position", [])) {
                    // line 30
                    echo "                                <span class=\"g-testimonials-position\">
                                    ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["testimony"], "position", []), "html", null, true);
                    echo "
                                </span>
                            ";
                }
                // line 34
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimony'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </div>
                <div class=\"g-testimonials-pagination\">
                    <div class=\"swiper-wrapper\">
                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "testimony", []));
            foreach ($context['_seq'] as $context["_key"] => $context["testimony"]) {
                // line 40
                echo "                            <div class=\"swiper-slide g-testimonials-image-nav\" style=\"background-image:url('";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["testimony"], "photo", [])), "html", null, true);
                echo "')\">
                                <span>
                                    ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["testimony"], "author", []), "html", null, true);
                echo "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimony'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                    </div>

                </div>

                <!-- If we need navigation buttons -->
                <div class=\"mobile-nav-wrapper\">
                    <div class=\"swiper-button-prev\">
                        <i class=\"fa fa-angle-left\"></i>
                    </div>
                    <div class=\"swiper-button-next\">
                        <i class=\"fa fa-angle-right\"></i>
                    </div>
                </div>
            ";
        } else {
            // line 59
            echo "                ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate((("@particles/testimonials-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "name", [])) . ".html.twig"), "@particles/testimonials.html.twig", 59);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 60
            echo "            ";
        }
        // line 61
        echo "        </div>
    </div>
";
    }

    // line 64
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 65
        echo "    ";
        $this->getAttribute(        // line 66
($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 67
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/swiper.js"), 1 => 10, 2 => "footer"], "method");
        // line 68
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", []), "addScript", [0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/testimonials.init.js"), 1 => 10, 2 => "footer"], "method");
    }

    public function getTemplateName()
    {
        return "@particles/testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 68,  216 => 67,  214 => 66,  212 => 65,  209 => 64,  203 => 61,  200 => 60,  189 => 59,  173 => 45,  164 => 42,  158 => 40,  154 => 39,  149 => 36,  142 => 34,  136 => 31,  133 => 30,  130 => 29,  124 => 26,  121 => 25,  118 => 24,  112 => 21,  109 => 20,  107 => 19,  104 => 18,  100 => 17,  97 => 16,  95 => 15,  89 => 14,  86 => 13,  82 => 11,  76 => 8,  73 => 7,  71 => 6,  68 => 5,  66 => 4,  43 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/testimonials.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatTeatridanza\\templates\\rt_manticore\\particles\\testimonials.html.twig");
    }
}
