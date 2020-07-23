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

/* @particles/recentreviews.html.twig */
class __TwigTemplate_7249515d046faeba9a1d2808a6322a020eba54081c370bbccd0ded85ea60eaec extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/recentreviews.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo " g-recentreviews\" data-recentreviews-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-recentreviews-accesstoken=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "accesstoken", []), "html", null, true);
        echo "\">
        ";
        // line 5
        if (( !$this->getAttribute(($context["particle"] ?? null), "source", []) || ($this->getAttribute(($context["particle"] ?? null), "source", []) == "particle"))) {
            // line 6
            echo "            <div class=\"g-recentreviews-header\">
                ";
            // line 7
            if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
                // line 8
                echo "                    <div class=\"g-recentreviews-title\">
                        ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 12
            echo "
                <div class=\"g-recentreviews-nav\">
                    <div class=\"g-recentreviews-nav-container\">
                        <i aria-hidden=\"true\" class=\"fa fa-bars\"></i>
                        ";
            // line 16
            if ($this->getAttribute(($context["particle"] ?? null), "allitems", [])) {
                // line 17
                echo "                            <div class=\"g-recentreviews-nav-item ";
                if (($this->getAttribute(($context["particle"] ?? null), "selected", []) == "all")) {
                    echo "selected";
                }
                echo "\" data-group=\"all\">
                                ";
                // line 18
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "allitems", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "allitems", []), "all")) : ("all")));
                echo "
                            </div>
                        ";
            }
            // line 21
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "cases", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "                            <div class=\"g-recentreviews-nav-item ";
                if (($this->getAttribute(($context["particle"] ?? null), "selected", []) == "first")) {
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        echo "selected";
                    }
                }
                echo "\" data-group=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "\">
                                ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                echo "
                            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                    </div>
                </div>
            </div>

            <div class=\"g-recentreviews-grid\">
                <div class=\"g-recentreviews-grid-sizer\"></div>
                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "cases", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["case"]) {
                // line 33
                echo "                    ";
                $context["case_index"] = $this->getAttribute($context["loop"], "index", []);
                // line 34
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["case"], "items", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "                        <div class=\"g-recentreviews-grid-item\" data-groups='[\"";
                    echo twig_escape_filter($this->env, ($context["case_index"] ?? null), "html", null, true);
                    echo "\"]'>
                            <div class=\"g-recentreviews-grid-item-wrapper\">
                                ";
                    // line 37
                    if ($this->getAttribute($context["item"], "image", [])) {
                        // line 38
                        echo "                                    <div class=\"g-recentreviews-grid-item-image\">
                                        <a href=\"";
                        // line 39
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                        echo "\" target=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", []), "_blank")) : ("_blank")), "html", null, true);
                        echo "\">
                                            <img src=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])));
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                        echo "\"/>
                                        </a>
                                    </div>
                                ";
                    }
                    // line 44
                    echo "                                <div class=\"g-recentreviews-grid-item-content\">
                                    <div class=\"g-recentreviews-grid-item-header\">
                                        <div class=\"g-recentreviews-grid-item-category\">
                                            <span>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["case"], "title", []), "html", null, true);
                    echo "</span>
                                        </div>
                                        <div class=\"g-recentreviews-grid-item-date\">
                                            <span>";
                    // line 50
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('date')->getCallable(), [$this->env, $this->getAttribute($context["item"], "date", []), $this->getAttribute(($context["particle"] ?? null), "date_format", [])]), "html", null, true);
                    echo "</span>
                                        </div>
                                    </div>

                                    ";
                    // line 54
                    if ($this->getAttribute($context["item"], "title", [])) {
                        // line 55
                        echo "                                        <div class=\"g-recentreviews-grid-item-title\">
                                            <a href=\"";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                        echo "\" target=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", []), "_blank")) : ("_blank")), "html", null, true);
                        echo "\">
                                                <span>
                                                    ";
                        // line 58
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                        echo "
                                                </span>
                                            </a>
                                        </div>
                                    ";
                    }
                    // line 63
                    echo "
                                    ";
                    // line 64
                    if ($this->getAttribute($context["item"], "description", [])) {
                        // line 65
                        echo "                                        <div class=\"g-recentreviews-grid-item-description\">
                                            ";
                        // line 66
                        echo $this->getAttribute($context["item"], "description", []);
                        echo "
                                        </div>
                                    ";
                    }
                    // line 69
                    echo "
                                    ";
                    // line 70
                    if ($this->getAttribute($context["item"], "author", [])) {
                        // line 71
                        echo "                                        <div class=\"g-recentreviews-grid-item-author\">
                                            ";
                        // line 72
                        if ($this->getAttribute($context["item"], "avatar", [])) {
                            // line 73
                            echo "                                            <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "avatar", [])));
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                            echo "\"/>
                                            ";
                        }
                        // line 75
                        echo "
                                            ";
                        // line 76
                        echo $this->getAttribute($context["item"], "author", []);
                        echo "
                                        </div>
                                    ";
                    }
                    // line 79
                    echo "                                </div>

                            </a>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['case'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "        </div>
    ";
        } else {
            // line 88
            echo "        ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate((("@particles/recentreviews-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "name", [])) . ".html.twig"), "@particles/recentreviews.html.twig", 88);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 89
            echo "    ";
        }
        // line 90
        echo "</div>";
    }

    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 91
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 92
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("//cdn.polyfill.io/v2/polyfill.min.js?features=default,fetch,Array.prototype.includes"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/imagesloaded.pkgd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/shuffle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/recentreviews.init.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@particles/recentreviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 95,  333 => 94,  329 => 93,  324 => 92,  322 => 91,  316 => 90,  313 => 89,  302 => 88,  298 => 86,  284 => 85,  273 => 79,  267 => 76,  264 => 75,  256 => 73,  254 => 72,  251 => 71,  249 => 70,  246 => 69,  240 => 66,  237 => 65,  235 => 64,  232 => 63,  224 => 58,  217 => 56,  214 => 55,  212 => 54,  205 => 50,  199 => 47,  194 => 44,  185 => 40,  179 => 39,  176 => 38,  174 => 37,  168 => 35,  163 => 34,  160 => 33,  143 => 32,  135 => 26,  118 => 23,  107 => 22,  89 => 21,  83 => 18,  76 => 17,  74 => 16,  68 => 12,  62 => 9,  59 => 8,  57 => 7,  54 => 6,  52 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/recentreviews.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatd\\templates\\rt_manticore\\particles\\recentreviews.html.twig");
    }
}
