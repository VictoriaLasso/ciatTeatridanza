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

/* @particles/particlesjs.html.twig */
class __TwigTemplate_020c2d5514e4520be737427eeb06ac73dcbe1310adc0f6c962d2dc5de79b08dc extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/particlesjs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "preset", [])) {
            // line 5
            echo "        ";
            $context["accent"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "presets", []), $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "preset", []), [], "array"), "styles", []), "accent", []), "color-1", [], "array");
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            $context["accent"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", []), "get", [0 => "styles.accent.color-1"], "method");
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    <div id=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-particlesjs\" data-particlejs-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-particlejs-shape=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "shape", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "shape", []), "square")) : ("square")), "html", null, true);
        echo "\" data-particlejs-count=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "count", []), "html", null, true);
        echo "\" data-particlejs-size=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "shape_size", []), "html", null, true);
        echo "\" data-particlejs-color=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "colorsrc", []) == "accent")) {
            echo twig_escape_filter($this->env, ($context["accent"] ?? null), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "color", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "color", []), "#5a63ff")) : ("#5a63ff")), "html", null, true);
        }
        echo "\"></div>
";
    }

    // line 13
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 14
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/particlejs.init.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@particles/particlesjs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  84 => 14,  81 => 13,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/particlesjs.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatd\\templates\\rt_manticore\\particles\\particlesjs.html.twig");
    }
}
