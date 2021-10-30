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

/* @particles/promo.html.twig */
class __TwigTemplate_036f34eaaecee6499fd3204854fcecb4bbaa519e9cd212809f83142b7f95ca6f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/promo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "id", []), "html", null, true);
        echo "\" class=\"g-promo\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])));
        echo ");\">
        ";
        // line 5
        if ($this->getAttribute(($context["particle"] ?? null), "text", [])) {
            echo $this->getAttribute(($context["particle"] ?? null), "text", []);
        }
        // line 6
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/promo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/promo.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatTeatridanza\\templates\\rt_manticore\\particles\\promo.html.twig");
    }
}
