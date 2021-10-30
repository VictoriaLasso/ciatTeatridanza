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

/* @particles/simplemenu.html.twig */
class __TwigTemplate_50335e5ac77fa5cd492998080f923004e59904ca56b04dc79683a30d62ab55b2 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/simplemenu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"g-simplemenu-particle ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
    ";
        // line 5
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>";
        }
        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "menus", []));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 8
            echo "    <div class=\"g-simplemenu-container\">
        <h6>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "title", []), "html", null, true);
            echo "</h6>
        <ul class=\"g-simplemenu\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "            <li>
                ";
                // line 13
                if ($this->getAttribute($context["item"], "icon", [])) {
                    // line 14
                    echo "                <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                    echo "\"></i>
                ";
                }
                // line 16
                echo "                <a target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", []), "_blank")) : ("_blank")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["item"], "title", []);
                echo "</a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </ul>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/simplemenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 22,  99 => 19,  83 => 16,  77 => 14,  75 => 13,  72 => 12,  68 => 11,  63 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/simplemenu.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatd\\templates\\rt_manticore\\particles\\simplemenu.html.twig");
    }
}
