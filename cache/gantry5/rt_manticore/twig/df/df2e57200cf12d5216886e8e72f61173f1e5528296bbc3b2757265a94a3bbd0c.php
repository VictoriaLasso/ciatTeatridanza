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

/* @particles/slideshow-joomla.html.twig */
class __TwigTemplate_ef2d4ef690d94d717148d6afacb90a6cb92416ea49b3fc4335862e918b205945 extends \Twig\Template
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
        // line 2
        $context["article_settings"] = $this->getAttribute(($context["particle"] ?? null), "article", []);
        // line 3
        $context["filter"] = $this->getAttribute(($context["article_settings"] ?? null), "filter", []);
        // line 4
        $context["sort"] = $this->getAttribute(($context["article_settings"] ?? null), "sort", []);
        // line 5
        $context["limit"] = $this->getAttribute(($context["article_settings"] ?? null), "limit", []);
        // line 6
        $context["display"] = $this->getAttribute(($context["article_settings"] ?? null), "display", []);
        // line 7
        echo "
";
        // line 9
        $context["category_options"] = (($this->getAttribute(($context["filter"] ?? null), "categories", [])) ? (["id" => [0 => twig_split_filter($this->env, $this->getAttribute(        // line 11
($context["filter"] ?? null), "categories", []), ","), 1 => 0]]) : ([]));
        // line 15
        $context["categories"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["joomla"] ?? null), "finder", [0 => "category", 1 => ($context["category_options"] ?? null)], "method"), "published", [0 => 1], "method"), "language", [], "method"), "limit", [0 => 0], "method"), "find", [], "method");
        // line 16
        echo "
";
        // line 18
        if ($this->getAttribute(($context["filter"] ?? null), "articles", [])) {
            // line 19
            echo "    ";
            $context["article_options"] = (($this->getAttribute(($context["filter"] ?? null), "articles", [])) ? (["id" => [0 => twig_split_filter($this->env, twig_replace_filter($this->getAttribute(            // line 20
($context["filter"] ?? null), "articles", []), " ", ""), ",")]]) : ([]));
            // line 22
            echo "    ";
            $context["article_finder"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["joomla"] ?? null), "finder", [0 => "content", 1 => ($context["article_options"] ?? null)], "method"), "published", [0 => 1], "method"), "language", [], "method");
        } else {
            // line 24
            echo "    ";
            $context["article_finder"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["joomla"] ?? null), "finder", [0 => "content"], "method"), "category", [0 => ($context["categories"] ?? null)], "method"), "published", [0 => 1], "method"), "language", [], "method");
        }
        // line 26
        echo "
";
        // line 27
        $context["featured"] = (($this->getAttribute(($context["filter"] ?? null), "featured", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["filter"] ?? null), "featured", []), "include")) : ("include"));
        // line 28
        if ((($context["featured"] ?? null) == "exclude")) {
            // line 29
            echo "    ";
            $this->getAttribute(($context["article_finder"] ?? null), "featured", [0 => false], "method");
        } elseif ((        // line 30
($context["featured"] ?? null) == "only")) {
            // line 31
            echo "    ";
            $this->getAttribute(($context["article_finder"] ?? null), "featured", [0 => true], "method");
        }
        // line 33
        echo "
";
        // line 34
        $this->getAttribute($this->getAttribute($this->getAttribute(($context["article_finder"] ?? null), "order", [0 => $this->getAttribute(($context["sort"] ?? null), "orderby", []), 1 => $this->getAttribute(($context["sort"] ?? null), "ordering", [])], "method"), "limit", [0 => $this->getAttribute(($context["limit"] ?? null), "total", [])], "method"), "start", [0 => $this->getAttribute(($context["limit"] ?? null), "start", [])], "method");
        // line 35
        $context["total"] = $this->getAttribute(($context["article_finder"] ?? null), "count", [], "method");
        // line 36
        $context["articles"] = $this->getAttribute(($context["article_finder"] ?? null), "find", [], "method");
        // line 37
        echo "
<div class=\"g-slideshow-slider swiper-wrapper\" style=\"height: ";
        // line 38
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "height", []), "600px")) : ("600px")), "html", null, true);
        echo ";\">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 40
            echo "        ";
            if ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) && $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", [])) || $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []))) {
                // line 41
                echo "            ";
                if (($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", []) && ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) == "intro"))) {
                    // line 42
                    echo "                ";
                    $context["article_image"] = $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", []);
                    // line 43
                    echo "            ";
                } elseif (($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []) && ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) == "full"))) {
                    // line 44
                    echo "                ";
                    $context["article_image"] = $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []);
                    // line 45
                    echo "            ";
                }
                // line 46
                echo "        ";
            }
            // line 47
            echo "        ";
            if ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "author_image", []), "enabled", []) && $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", [])) || $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []))) {
                // line 48
                echo "            ";
                if (($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", []) && ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "author_image", []), "enabled", []) == "intro"))) {
                    // line 49
                    echo "                ";
                    $context["article_author_image"] = $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", []);
                    // line 50
                    echo "            ";
                } elseif (($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []) && ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "author_image", []), "enabled", []) == "full"))) {
                    // line 51
                    echo "                ";
                    $context["article_author_image"] = $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []);
                    // line 52
                    echo "            ";
                }
                // line 53
                echo "        ";
            }
            // line 54
            echo "        <div class=\"swiper-slide ";
            if (($this->getAttribute(($context["particle"] ?? null), "overlay", []) == "enabled")) {
                echo "overlay";
            }
            echo "\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc(($context["article_image"] ?? null)));
            echo "); background-position: center center;\">
            <div class=\"slide\">
                <h3 class=\"g-slideshow-top-title \">
                    ";
            // line 57
            $context["cat"] = twig_last($this->env, $this->getAttribute($context["article"], "categories", []));
            // line 58
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cat"] ?? null), "title", []), "html", null, true);
            echo "
                </h3>
                ";
            // line 60
            if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "enabled", []) && $this->getAttribute($context["article"], "title", []))) {
                // line 61
                echo "                    <h1 class=\"g-slideshow-main-title\">
                        ";
                // line 62
                if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "link", []), "enabled", []) == "enabled")) {
                    // line 63
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["article"], "route", [])));
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "link", [], "any", false, true), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["display"] ?? null), "link", [], "any", false, true), "target", []), "_self")) : ("_self")), "html", null, true);
                    echo "\">
                            ";
                    // line 64
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", [])) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", []), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", []))) : ($this->getAttribute($context["article"], "title", []))), "html", null, true);
                    echo "
                        </a>
                        ";
                } else {
                    // line 67
                    echo "                            ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", [])) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", []), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", []))) : ($this->getAttribute($context["article"], "title", []))), "html", null, true);
                    echo "
                        ";
                }
                // line 68
                echo "        
                    </h1>
                ";
            }
            // line 71
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "author_image", []), "enabled", [])) {
                // line 72
                echo "                    <span class=\"g-slideshow-avatar\">
                        <img src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc(($context["article_author_image"] ?? null)));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "created_by_alias", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "created_by_alias", []), "html", null, true);
                echo "\">
                    </span>
                ";
            }
            // line 76
            echo "          
                ";
            // line 77
            if ($this->getAttribute($context["article"], "created_by_alias", [])) {
                // line 78
                echo "                    <span class=\"g-slideshow-author\">
                        ";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "created_by_alias", []), "html", null, true);
                echo "
                    </span>
                ";
            }
            // line 82
            echo "            </div>
             
        </div>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "</div>
";
        // line 89
        if (($this->getAttribute(($context["particle"] ?? null), "thumbs", []) == "enabled")) {
            // line 90
            echo "    <div class=\"g-slideshow-thumbs swiper-container gallery-thumbs\">
        <div class=\"swiper-wrapper\">
            ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 93
                echo "                ";
                if ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) && $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", [])) || $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []))) {
                    // line 94
                    echo "                    ";
                    if (($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", []) && ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) == "intro"))) {
                        // line 95
                        echo "                        ";
                        $context["article_image"] = $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", []);
                        // line 96
                        echo "                    ";
                    } elseif (($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []) && ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) == "full"))) {
                        // line 97
                        echo "                        ";
                        $context["article_image"] = $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []);
                        // line 98
                        echo "                    ";
                    }
                    // line 99
                    echo "                ";
                }
                // line 100
                echo "                <div class=\"swiper-slide\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc(($context["article_image"] ?? null)));
                echo ");\">
                    <div class=\"g-slideshow-thumbs-title\">
                        <span>
                            ";
                // line 103
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", [])) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", []), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", []))) : ($this->getAttribute($context["article"], "title", []))), "html", null, true);
                echo "</span>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "        </div>
    </div>
";
        }
        // line 110
        echo "
";
    }

    public function getTemplateName()
    {
        return "@particles/slideshow-joomla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 110,  284 => 107,  274 => 103,  267 => 100,  264 => 99,  261 => 98,  258 => 97,  255 => 96,  252 => 95,  249 => 94,  246 => 93,  242 => 92,  238 => 90,  236 => 89,  233 => 87,  223 => 82,  217 => 79,  214 => 78,  212 => 77,  209 => 76,  199 => 73,  196 => 72,  193 => 71,  188 => 68,  182 => 67,  176 => 64,  169 => 63,  167 => 62,  164 => 61,  162 => 60,  156 => 58,  154 => 57,  143 => 54,  140 => 53,  137 => 52,  134 => 51,  131 => 50,  128 => 49,  125 => 48,  122 => 47,  119 => 46,  116 => 45,  113 => 44,  110 => 43,  107 => 42,  104 => 41,  101 => 40,  97 => 39,  93 => 38,  90 => 37,  88 => 36,  86 => 35,  84 => 34,  81 => 33,  77 => 31,  75 => 30,  72 => 29,  70 => 28,  68 => 27,  65 => 26,  61 => 24,  57 => 22,  55 => 20,  53 => 19,  51 => 18,  48 => 16,  46 => 15,  44 => 11,  43 => 9,  40 => 7,  38 => 6,  36 => 5,  34 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/slideshow-joomla.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatTeatridanza\\templates\\rt_manticore\\particles\\slideshow-joomla.html.twig");
    }
}
