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

/* @particles/latestnews.html.twig */
class __TwigTemplate_56af5571ea83dad4ca7d9f6a9d6defd989e192d7e7c396e4b1db6e2e7fadc84e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/latestnews.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo " g-latestnews\" data-latestnews-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-latestnews-accesstoken=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "accesstoken", []), "html", null, true);
        echo "\">
        ";
        // line 5
        if (( !$this->getAttribute(($context["particle"] ?? null), "source", []) || ($this->getAttribute(($context["particle"] ?? null), "source", []) == "particle"))) {
            // line 6
            echo "            <div class=\"g-latestnews-header\">
                ";
            // line 7
            if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
                // line 8
                echo "                    <div class=\"g-latestnews-title\">
                        ";
                // line 9
                if ($this->getAttribute(($context["particle"] ?? null), "uppertitle", [])) {
                    // line 10
                    echo "                            <span class=\"g-latestnews-uppertitle\">";
                    echo $this->getAttribute(($context["particle"] ?? null), "uppertitle", []);
                    echo "</span>
                        ";
                }
                // line 12
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 15
            echo "
                <div class=\"g-latestnews-nav\">
                    <div class=\"g-latestnews-nav-container\">
                        <i aria-hidden=\"true\" class=\"fa fa-bars\"></i>
                        ";
            // line 19
            if ($this->getAttribute(($context["particle"] ?? null), "allitems", [])) {
                // line 20
                echo "                            <div class=\"g-latestnews-nav-item ";
                if (($this->getAttribute(($context["particle"] ?? null), "selected", []) == "all")) {
                    echo "selected";
                }
                echo "\" data-group=\"all\">
                                ";
                // line 21
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "allitems", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "allitems", []), "all")) : ("all")));
                echo "
                            </div>
                        ";
            }
            // line 23
            echo " 
                        ";
            // line 24
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
                // line 25
                echo "                            <div class=\"g-latestnews-nav-item ";
                if (($this->getAttribute(($context["particle"] ?? null), "selected", []) == "first")) {
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        echo "selected";
                    }
                }
                echo "\" data-group=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "\">
                                ";
                // line 26
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
            // line 29
            echo "                    </div>
                </div>
            </div>

            <div class=\"g-latestnews-grid ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cols", []), "html", null, true);
            echo "\">
                <div class=\"g-latestnews-grid-sizer\"></div>
                ";
            // line 35
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
                // line 36
                echo "                    ";
                $context["case_index"] = $this->getAttribute($context["loop"], "index", []);
                // line 37
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["case"], "items", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    echo "                        <div class=\"g-latestnews-grid-item ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "layout", []), "html", null, true);
                    echo "\" data-groups='[\"";
                    echo twig_escape_filter($this->env, ($context["case_index"] ?? null), "html", null, true);
                    echo "\"]'>
                            <div class=\"g-latestnews-grid-item-wrapper g-latestnews-layout-";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "layout", []), "html", null, true);
                    echo "\">
                                ";
                    // line 40
                    if ($this->getAttribute($context["item"], "image", [])) {
                        // line 41
                        echo "                                    <div class=\"g-latestnews-grid-item-image\">
                                        <img src=\"";
                        // line 42
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", [])));
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                        echo "\"/>
                                        ";
                        // line 43
                        if (($this->getAttribute(($context["particle"] ?? null), "counts", []) == "show")) {
                            // line 44
                            echo "                                        <div class=\"g-latestnews-grid-item-icons\" data-latestnews-url=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                            echo "\">
                                            <span class=\"g-latestnews-grid-item-icon\">
                                                <i aria-hidden=\"true\" class=\"fa fa-heart-o\"></i>
                                                <span class=\"reactions\">0</span>
                                            </span>
                                            <span>
                                                <i aria-hidden=\"true\" class=\"fa fa-comment-o\"></i>
                                                <span class=\"comments\">0</span>
                                            </span>
                                        </div>
                                        ";
                        }
                        // line 55
                        echo "                                    </div>
                                ";
                    }
                    // line 57
                    echo "
                                <div class=\"g-latestnews-grid-item-content\">
                                    ";
                    // line 59
                    if ($this->getAttribute($context["item"], "date", [])) {
                        // line 60
                        echo "                                        <div class=\"g-latestnews-grid-item-date\">
                                            <span>";
                        // line 61
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('date')->getCallable(), [$this->env, $this->getAttribute($context["item"], "date", []), $this->getAttribute(($context["particle"] ?? null), "date_format", [])]), "html", null, true);
                        echo "</span>
                                        </div>
                                    ";
                    }
                    // line 64
                    echo "
                                    ";
                    // line 65
                    if ($this->getAttribute($context["item"], "title", [])) {
                        // line 66
                        echo "                                        <div class=\"g-latestnews-grid-item-title\">
                                            <span>";
                        // line 67
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                        echo "</span>
                                        </div>
                                    ";
                    }
                    // line 70
                    echo "
                                    ";
                    // line 71
                    if (($this->getAttribute($context["item"], "layout", []) == "text")) {
                        // line 72
                        echo "                                        ";
                        if ($this->getAttribute($context["item"], "description", [])) {
                            // line 73
                            echo "                                            <div class=\"g-latestnews-grid-item-description\">
                                                ";
                            // line 74
                            echo $this->getAttribute($context["item"], "description", []);
                            echo "
                                            </div>
                                        ";
                        }
                        // line 77
                        echo "                                    ";
                    }
                    // line 78
                    echo "                                </div>

                                <a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", []), "_blank")) : ("_blank")), "html", null, true);
                    echo "\" class=\"g-latestnews-link-overlay\"></a>
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                ";
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
            // line 85
            echo "            </div>
        ";
        } else {
            // line 87
            echo "            ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate((("@particles/latestnews-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "name", [])) . ".html.twig"), "@particles/latestnews.html.twig", 87);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 88
            echo "        ";
        }
        // line 89
        echo "    </div>
";
    }

    // line 91
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 92
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 93
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("//cdn.polyfill.io/v2/polyfill.min.js?features=default,fetch,Array.prototype.includes"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/imagesloaded.pkgd.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/shuffle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/latestnews.init.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@particles/latestnews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 96,  342 => 95,  338 => 94,  333 => 93,  330 => 92,  327 => 91,  322 => 89,  319 => 88,  308 => 87,  304 => 85,  290 => 84,  278 => 80,  274 => 78,  271 => 77,  265 => 74,  262 => 73,  259 => 72,  257 => 71,  254 => 70,  248 => 67,  245 => 66,  243 => 65,  240 => 64,  234 => 61,  231 => 60,  229 => 59,  225 => 57,  221 => 55,  206 => 44,  204 => 43,  198 => 42,  195 => 41,  193 => 40,  189 => 39,  182 => 38,  177 => 37,  174 => 36,  157 => 35,  152 => 33,  146 => 29,  129 => 26,  118 => 25,  101 => 24,  98 => 23,  92 => 21,  85 => 20,  83 => 19,  77 => 15,  70 => 12,  64 => 10,  62 => 9,  59 => 8,  57 => 7,  54 => 6,  52 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/latestnews.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatd\\templates\\rt_manticore\\particles\\latestnews.html.twig");
    }
}
