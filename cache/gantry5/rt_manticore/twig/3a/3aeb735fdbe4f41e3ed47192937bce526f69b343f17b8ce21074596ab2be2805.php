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

/* @particles/upcgames.html.twig */
class __TwigTemplate_47d6b61990971ff959678ca35cbbcbd5c46641704a10d8ddcf7fe07df382103c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/upcgames.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"g-upcgames-particle ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
        ";
        // line 5
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            // line 6
            echo "            <h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>
        ";
        }
        // line 8
        echo "
        <ul class=\"g-upcgames\">
            ";
        // line 10
        if (( !$this->getAttribute(($context["particle"] ?? null), "source", []) || ($this->getAttribute(($context["particle"] ?? null), "source", []) == "particle"))) {
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "games", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
                // line 12
                echo "                    <li>
                        <span class=\"g-upcgames-number\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</span>
                        <a target=\"";
                // line 14
                echo twig_escape_filter($this->env, (($this->getAttribute($context["game"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["game"], "target", []), "_blank")) : ("_blank")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "link", []));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "title", []), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["game"], "title", []);
                echo "
                            <span>
                                ";
                // line 16
                echo $this->getAttribute($context["game"], "date", []);
                echo "
                            </span>
                        </a>
                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            ";
        } else {
            // line 22
            echo "                ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate((("@particles/upcgames-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "name", [])) . ".html.twig"), "@particles/upcgames.html.twig", 22);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 23
            echo "            ";
        }
        // line 24
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/upcgames.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 24,  130 => 23,  119 => 22,  116 => 21,  97 => 16,  86 => 14,  82 => 13,  79 => 12,  61 => 11,  59 => 10,  55 => 8,  49 => 6,  47 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/upcgames.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatd\\templates\\rt_manticore\\particles\\upcgames.html.twig");
    }
}
