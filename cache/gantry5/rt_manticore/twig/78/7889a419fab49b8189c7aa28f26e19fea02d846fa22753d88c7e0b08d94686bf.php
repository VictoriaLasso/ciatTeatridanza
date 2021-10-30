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

/* @particles/testimonials-joomla.html.twig */
class __TwigTemplate_14ca10a6c8804d7f961dd28f1c09ff3066dd89bf136fd7c162c8435653728c46 extends \Twig\Template
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
        // line 8
        $context["category_options"] = (($this->getAttribute(($context["filter"] ?? null), "categories", [])) ? (["id" => [0 => twig_split_filter($this->env, $this->getAttribute(        // line 10
($context["filter"] ?? null), "categories", []), ","), 1 => 0]]) : ([]));
        // line 14
        $context["categories"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["joomla"] ?? null), "finder", [0 => "category", 1 => ($context["category_options"] ?? null)], "method"), "published", [0 => 1], "method"), "language", [], "method"), "limit", [0 => 0], "method"), "find", [], "method");
        // line 16
        if ($this->getAttribute(($context["filter"] ?? null), "articles", [])) {
            // line 17
            echo "    ";
            $context["article_options"] = (($this->getAttribute(($context["filter"] ?? null), "articles", [])) ? (["id" => [0 => twig_split_filter($this->env, twig_replace_filter($this->getAttribute(            // line 18
($context["filter"] ?? null), "articles", []), " ", ""), ",")]]) : ([]));
            // line 20
            echo "    ";
            $context["article_finder"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["joomla"] ?? null), "finder", [0 => "content", 1 => ($context["article_options"] ?? null)], "method"), "published", [0 => 1], "method"), "language", [], "method");
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "    ";
            $context["article_finder"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["joomla"] ?? null), "finder", [0 => "content"], "method"), "category", [0 => ($context["categories"] ?? null)], "method"), "published", [0 => 1], "method"), "language", [], "method");
        }
        // line 24
        $context["featured"] = (($this->getAttribute(($context["filter"] ?? null), "featured", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["filter"] ?? null), "featured", []), "include")) : ("include"));
        // line 25
        if ((($context["featured"] ?? null) == "exclude")) {
            // line 26
            echo "    ";
            $this->getAttribute(($context["article_finder"] ?? null), "featured", [0 => false], "method");
            // line 27
            echo "    ";
        } elseif ((($context["featured"] ?? null) == "only")) {
            // line 28
            echo "    ";
            $this->getAttribute(($context["article_finder"] ?? null), "featured", [0 => true], "method");
        }
        // line 30
        $this->getAttribute($this->getAttribute($this->getAttribute(($context["article_finder"] ?? null), "order", [0 => $this->getAttribute(($context["sort"] ?? null), "orderby", []), 1 => $this->getAttribute(($context["sort"] ?? null), "ordering", [])], "method"), "limit", [0 => $this->getAttribute(($context["limit"] ?? null), "total", [])], "method"), "start", [0 => $this->getAttribute(($context["limit"] ?? null), "start", [])], "method");
        // line 31
        $context["total"] = $this->getAttribute(($context["article_finder"] ?? null), "count", [], "method");
        // line 32
        $context["articles"] = $this->getAttribute(($context["article_finder"] ?? null), "find", [], "method");
        // line 33
        echo "<div class=\"swiper-wrapper testimony-wrapper\">
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 35
            echo "        ";
            if ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) && $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", [])) || $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []))) {
                // line 36
                echo "            ";
                if (($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", []) && ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) == "intro"))) {
                    // line 37
                    echo "                ";
                    $context["article_image"] = $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", []);
                    // line 38
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []) && ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) == "full"))) {
                    // line 39
                    echo "                ";
                    $context["article_image"] = $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []);
                    // line 40
                    echo "            ";
                }
                // line 41
                echo "        ";
            }
            // line 42
            echo "        <div class=\"swiper-slide\">
            ";
            // line 43
            if (( !$this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "type", []) == "")) {
                // line 44
                echo "                ";
                $context["article_text"] = ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "type", []) == "intro")) ? ($this->getAttribute($context["article"], "introtext", [])) : ($this->getAttribute($context["article"], "text", [])));
                // line 45
                echo "                <h2 class=\"g-testimonials-content\">
                    ";
                // line 46
                if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "formatting", []) == "text")) {
                    // line 47
                    echo "                        ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText(($context["article_text"] ?? null), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "limit", []));
                    echo "
                        ";
                } else {
                    // line 49
                    echo "                        ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml(($context["article_text"] ?? null), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", []), "limit", []));
                    echo "
                    ";
                }
                // line 51
                echo "                </h2>
            ";
            }
            // line 53
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "author", []), "enabled", [])) {
                // line 54
                echo "                <p class=\"g-testimonials-author\">
                    ";
                // line 55
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", [])) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", []), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", []))) : ($this->getAttribute($context["article"], "title", []))), "html", null, true);
                echo "
                </p>
            ";
            }
            // line 58
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 59
                echo "                <span class=\"g-testimonials-position\">
                    ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", []), "html", null, true);
                echo "
                </span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</div>
<div class=\"g-testimonials-pagination\">
    <div class=\"swiper-wrapper\">
        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 69
            echo "            ";
            if ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) && $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", [])) || $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []))) {
                // line 70
                echo "                ";
                if (($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", []) && ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) == "intro"))) {
                    // line 71
                    echo "                    ";
                    $context["article_image"] = $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_intro", []);
                    // line 72
                    echo "                    ";
                } elseif (($this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []) && ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", []), "enabled", []) == "full"))) {
                    // line 73
                    echo "                    ";
                    $context["article_image"] = $this->getAttribute($this->getAttribute($context["article"], "images", []), "image_fulltext", []);
                    // line 74
                    echo "                ";
                }
                // line 75
                echo "            ";
            }
            // line 76
            echo "            <div class=\"swiper-slide g-testimonials-image-nav\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc(($context["article_image"] ?? null)), "html", null, true);
            echo "')\">
                ";
            // line 77
            if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "author", []), "enabled", [])) {
                // line 78
                echo "                    <span>
                        ";
                // line 79
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", [])) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", []), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", []), "limit", []))) : ($this->getAttribute($context["article"], "title", []))), "html", null, true);
                echo "
                    </span>
                ";
            }
            // line 82
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@particles/testimonials-joomla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 84,  220 => 82,  214 => 79,  211 => 78,  209 => 77,  204 => 76,  201 => 75,  198 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  183 => 69,  179 => 68,  174 => 65,  167 => 63,  158 => 60,  155 => 59,  150 => 58,  144 => 55,  141 => 54,  138 => 53,  134 => 51,  128 => 49,  122 => 47,  120 => 46,  117 => 45,  114 => 44,  112 => 43,  109 => 42,  106 => 41,  103 => 40,  100 => 39,  97 => 38,  94 => 37,  91 => 36,  88 => 35,  84 => 34,  81 => 33,  79 => 32,  77 => 31,  75 => 30,  71 => 28,  68 => 27,  65 => 26,  63 => 25,  61 => 24,  57 => 22,  54 => 21,  51 => 20,  49 => 18,  47 => 17,  45 => 16,  43 => 14,  41 => 10,  40 => 8,  38 => 6,  36 => 5,  34 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/testimonials-joomla.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatTeatridanza\\templates\\rt_manticore\\particles\\testimonials-joomla.html.twig");
    }
}
