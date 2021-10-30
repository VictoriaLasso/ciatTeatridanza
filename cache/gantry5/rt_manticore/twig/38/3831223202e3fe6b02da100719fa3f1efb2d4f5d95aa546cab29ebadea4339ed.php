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

/* @particles/featuredvideos.html.twig */
class __TwigTemplate_8373d8ab0cf2c58a04abe322aea0ecb414e1c6b77b19f3e02060444cf89b7b2d extends \Twig\Template
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
        // line 3
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "lightcase.init"], "method");
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/featuredvideos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_particle($context, array $blocks = [])
    {
        // line 6
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo " g-featuredvideos\" data-featuredvideos-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-featuredvideos-accesstoken=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "token", []), "html", null, true);
        echo "\">
        <div class=\"g-featuredvideos-header\">
            ";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            // line 9
            echo "                <h2 class=\"g-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []), "html", null, true);
            echo "</h2>
            ";
        }
        // line 11
        echo "
            ";
        // line 12
        if ($this->getAttribute(($context["particle"] ?? null), "description", [])) {
            // line 13
            echo "                <p class=\"g-featuredvideos-description\">";
            echo $this->getAttribute(($context["particle"] ?? null), "description", []);
            echo "</p>
            ";
        }
        // line 15
        echo "        </div>

        <div class=\"g-grid\">
            <div class=\"g-block size-50\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "videos", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 20
            echo "                    ";
            if ($this->getAttribute($context["loop"], "first", [])) {
                // line 21
                echo "                        <div class=\"g-featuredvideos-item first\">
                            <div class=\"g-featuredvideos-item-image\">
                                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "url", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []), "html", null, true);
                echo "\" class=\"g-featuredvideos-item-yt\" data-rel=\"lightcase:";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\">
                                    <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["video"], "thumbnail", [])));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "title", []), "html", null, true);
                if ($this->getAttribute($context["video"], "author", [])) {
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "author", []), "html", null, true);
                }
                echo "\"/>
                                    <i aria-hidden=\"true\" class=\"fa fa-play\"></i>
                                </a>
                            </div>

                            <h3>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "title", []), "html", null, true);
                echo "
                                ";
                // line 30
                if (($this->getAttribute(($context["particle"] ?? null), "counts", []) == "show")) {
                    // line 31
                    echo "                                    <span class=\"g-featuredvideos-item-count\">
                                        <i aria-hidden=\"true\" class=\"fa fa-heart-o\"></i>
                                        <span>0</span>
                                    </span>
                                ";
                }
                // line 36
                echo "                            </h3>

                            <div class=\"g-featuredvideos-item-author\">
                                ";
                // line 39
                if (($this->getAttribute($context["video"], "avatar", []) && $this->getAttribute($context["video"], "author", []))) {
                    // line 40
                    echo "                                    <a class=\"g-featuredvideos-item-avatar\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "author_link", []), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["video"], "linktarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["video"], "linktarget", []), "_self")) : ("_self")), "html", null, true);
                    echo "\">
                                        <img src=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["video"], "avatar", [])));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "author", []), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "author", []), "html", null, true);
                    echo "\">
                                    </a>
                                ";
                }
                // line 44
                echo "
                                ";
                // line 45
                if ($this->getAttribute($context["video"], "author", [])) {
                    // line 46
                    echo "                                    <a class=\"g-featuredvideos-item-author-text\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "author_link", []), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["video"], "linktarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["video"], "linktarget", []), "_self")) : ("_self")), "html", null, true);
                    echo "\">
                                        ";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "author", []), "html", null, true);
                    echo "
                                    </a>
                                ";
                }
                // line 50
                echo "                            </div>
                        </div>
                    ";
            }
            // line 53
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>

            <div class=\"g-block size-50\">
                <div class=\"g-grid\">
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "videos", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 59
            echo "                        ";
            if ( !$this->getAttribute($context["loop"], "first", [])) {
                // line 60
                echo "                            <div class=\"g-block size-50\">
                                <div class=\"g-featuredvideos-item\">
                                    <div class=\"g-featuredvideos-item-image\">
                                        <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "url", []), "html", null, true);
                echo "\" class=\"g-featuredvideos-item-yt\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []), "html", null, true);
                echo "\" data-rel=\"lightcase:";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["video"], "thumbnail", [])));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "title", []), "html", null, true);
                if ($this->getAttribute($context["video"], "author", [])) {
                    echo " - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "author", []), "html", null, true);
                }
                echo "\"/>
                                            <i aria-hidden=\"true\" class=\"fa fa-play\"></i>
                                        </a>
                                    </div>

                                    <h3>
                                        ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "title", []), "html", null, true);
                echo "
                                        ";
                // line 71
                if (($this->getAttribute(($context["particle"] ?? null), "counts", []) == "show")) {
                    // line 72
                    echo "                                            <span class=\"g-featuredvideos-item-count\">
                                                <i aria-hidden=\"true\" class=\"fa fa-heart-o\"></i>
                                                <span>0</span>
                                            </span>
                                        ";
                }
                // line 77
                echo "                                    </h3>
                                </div>
                            </div>
                        ";
            }
            // line 81
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 88
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 89
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 90
        echo "    <script src=\"https://apis.google.com/js/api.js\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/featuredvideos.init.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@particles/featuredvideos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 91,  302 => 90,  299 => 89,  296 => 88,  288 => 82,  274 => 81,  268 => 77,  261 => 72,  259 => 71,  255 => 70,  240 => 64,  232 => 63,  227 => 60,  224 => 59,  207 => 58,  201 => 54,  187 => 53,  182 => 50,  176 => 47,  169 => 46,  167 => 45,  164 => 44,  154 => 41,  147 => 40,  145 => 39,  140 => 36,  133 => 31,  131 => 30,  127 => 29,  113 => 24,  105 => 23,  101 => 21,  98 => 20,  81 => 19,  75 => 15,  69 => 13,  67 => 12,  64 => 11,  58 => 9,  56 => 8,  46 => 6,  43 => 5,  38 => 1,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/featuredvideos.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatd\\templates\\rt_manticore\\particles\\featuredvideos.html.twig");
    }
}
