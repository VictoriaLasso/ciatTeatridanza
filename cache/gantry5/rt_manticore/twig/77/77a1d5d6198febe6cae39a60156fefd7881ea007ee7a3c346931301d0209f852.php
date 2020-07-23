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

/* @particles/pricingtable.html.twig */
class __TwigTemplate_637a3d67ab019a1dc23ee62c06f4780a8a612f0e9ec606b018bfec819eb0f092 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/pricingtable.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"g-pricingtable-particle ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">

        ";
        // line 6
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>";
        }
        // line 7
        echo "
        ";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "headertext", [])) {
            // line 9
            echo "            <div class=\"g-pricingtable-headertext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "headertext", []);
            echo "</div>
        ";
        }
        // line 11
        echo "
        <div id=\"g-pricingtable-";
        // line 12
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-pricingtable-container ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "columns", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "columns", []), "g-pricingtable-3-col")) : ("g-pricingtable-3-col")));
        echo "\">

            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "tables", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 15
            echo "                <div class=\"g-pricingtable-col-item ";
            if (($this->getAttribute($context["table"], "highlight", []) == "enabled")) {
                echo "g-pricingtable-col-item-highlight";
            }
            echo "\" id=\"g-pricingtable-col-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "\">
                    <ul class=\"g-pricingtable ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "class", []));
            echo "\">
                        ";
            // line 17
            if ($this->getAttribute($context["table"], "ribbon", [])) {
                echo "<li class=\"g-pricingtable-ribbon\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "ribbon", []));
                echo "</li> ";
            }
            // line 18
            echo "                        ";
            if ($this->getAttribute($context["table"], "icon", [])) {
                echo "<li class=\"g-pricingtable-icon\"><i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "icon", []));
                echo "\"></i></li>";
            }
            // line 19
            echo "
                        ";
            // line 20
            if ($this->getAttribute($context["table"], "plan", [])) {
                // line 21
                echo "                            <li class=\"g-pricingtable-plan\">
                                ";
                // line 22
                if ($this->getAttribute($context["table"], "buttontext", [])) {
                    // line 23
                    echo "                                <a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["table"], "buttontarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["table"], "buttontarget", []), "_self")) : ("_self")));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttonlink", []));
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttontext", []));
                    echo "\">
                                    ";
                }
                // line 25
                echo "
                                    ";
                // line 26
                echo $this->getAttribute($context["table"], "plan", []);
                echo "

                                    ";
                // line 28
                if ($this->getAttribute($context["table"], "buttontext", [])) {
                    // line 29
                    echo "                                </a>
                                ";
                }
                // line 31
                echo "                            </li>
                        ";
            }
            // line 33
            echo "
                        ";
            // line 34
            if ($this->getAttribute($context["table"], "price", [])) {
                echo "<li class=\"g-pricingtable-price\">";
                echo $this->getAttribute($context["table"], "price", []);
                echo "</li>";
            }
            // line 35
            echo "                        ";
            if ($this->getAttribute($context["table"], "period", [])) {
                echo "<li class=\"g-pricingtable-period\">";
                echo $this->getAttribute($context["table"], "period", []);
                echo "</li>";
            }
            // line 36
            echo "                        ";
            if ($this->getAttribute($context["table"], "desc", [])) {
                echo "<li class=\"g-pricingtable-desc\">";
                echo $this->getAttribute($context["table"], "desc", []);
                echo "</li> ";
            }
            // line 37
            echo "
                        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["table"], "items", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 39
                echo "                            <li class=\"g-pricingtable-item g-pricingtable-item-";
                echo twig_escape_filter($this->env, $context["key"]);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", []));
                echo "\">
                                ";
                // line 40
                echo $this->getAttribute($context["item"], "text", []);
                echo "
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
                        ";
            // line 44
            if ($this->getAttribute($context["table"], "buttontext", [])) {
                // line 45
                echo "                            <li class=\"g-pricingtable-cta\">
                                <a target=\"";
                // line 46
                echo twig_escape_filter($this->env, (($this->getAttribute($context["table"], "buttontarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["table"], "buttontarget", []), "_self")) : ("_self")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttonlink", []));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttontext", []));
                echo "\" class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttonclass", []));
                echo "\">
                                    ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttontext", []));
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 51
            echo "
                    </ul>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
        </div>

        ";
        // line 58
        if ($this->getAttribute(($context["particle"] ?? null), "footertext", [])) {
            // line 59
            echo "            <div class=\"g-pricingtable-footertext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "footertext", []);
            echo "</div>
        ";
        }
        // line 61
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/pricingtable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 61,  251 => 59,  249 => 58,  244 => 55,  227 => 51,  220 => 47,  210 => 46,  207 => 45,  205 => 44,  202 => 43,  193 => 40,  186 => 39,  182 => 38,  179 => 37,  172 => 36,  165 => 35,  159 => 34,  156 => 33,  152 => 31,  148 => 29,  146 => 28,  141 => 26,  138 => 25,  128 => 23,  126 => 22,  123 => 21,  121 => 20,  118 => 19,  111 => 18,  105 => 17,  101 => 16,  92 => 15,  75 => 14,  68 => 12,  65 => 11,  59 => 9,  57 => 8,  54 => 7,  48 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/pricingtable.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatd\\templates\\rt_manticore\\particles\\pricingtable.html.twig");
    }
}
