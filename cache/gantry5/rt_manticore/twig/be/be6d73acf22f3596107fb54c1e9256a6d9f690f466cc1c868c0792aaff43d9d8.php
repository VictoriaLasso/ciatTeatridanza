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

/* @particles/logo.html.twig */
class __TwigTemplate_78cf72e52b2fa93756297b9de1b36a0cc93fd12e5024eb425b3c9ea70c12fdc2 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/logo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $context["url"] = _twig_default_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "url", [])), $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"));
        // line 5
        echo "    ";
        if ((($context["url"] ?? null) == $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"))) {
            $context["rel"] = "rel=\"home\"";
        }
        // line 6
        echo "    ";
        $context["image"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", []));
        // line 7
        echo "    
    ";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "link", [])) {
            // line 9
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_self")) : ("_self")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []), "html", null, true);
            echo "\" ";
            echo (((isset($context["rel"]) || array_key_exists("rel", $context))) ? (_twig_default_filter(($context["rel"] ?? null), "")) : (""));
            echo ">
    ";
        } else {
            // line 11
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
            echo "\">
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ( !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "svg", []))) {
            // line 15
            echo "        ";
            echo $this->getAttribute(($context["particle"] ?? null), "svg", []);
            echo "
    ";
        } elseif (        // line 16
($context["image"] ?? null)) {
            // line 17
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 19
            echo "        ";
            echo (($this->getAttribute(($context["particle"] ?? null), "text", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "text", []), "Logo")) : ("Logo"));
            echo "
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if ($this->getAttribute(($context["particle"] ?? null), "link", [])) {
            // line 23
            echo "        </a>
    ";
        } else {
            // line 25
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@particles/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 25,  109 => 23,  107 => 22,  104 => 21,  98 => 19,  90 => 17,  88 => 16,  83 => 15,  81 => 14,  78 => 13,  72 => 11,  58 => 9,  56 => 8,  53 => 7,  50 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/logo.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatd\\templates\\rt_manticore\\particles\\logo.html.twig");
    }
}
