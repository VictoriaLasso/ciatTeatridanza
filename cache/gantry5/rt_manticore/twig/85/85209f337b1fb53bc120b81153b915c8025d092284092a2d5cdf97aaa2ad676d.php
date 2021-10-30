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

/* @particles/search.html.twig */
class __TwigTemplate_183262bcf4c7a3d1efb6982771f355859294fd0a8349fe695dfb4153e08e2404 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "
    <div id=\"g-search-";
        // line 5
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-search ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
        ";
        // line 6
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "name", []) == "joomla")) {
            // line 7
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", [0 => "index.php?option=com_search"], "method"), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"text\" name=\"searchword\" placeholder=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "placeholder", []), "html", null, true);
            echo "\" size=\"30\" maxlength=\"200\" value=\"\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []), "html", null, true);
            echo "\">
        </form>
        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 10
($context["gantry"] ?? null), "platform", []), "name", []) == "wordpress")) {
            // line 11
            echo "        <form method=\"get\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"), "html", null, true);
            echo "\" role=\"search\">
            <input type=\"search\" placeholder=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "placeholder", []), "html", null, true);
            echo "\" value=\"\" name=\"s\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []), "html", null, true);
            echo "\">
        </form>
        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 14
($context["gantry"] ?? null), "platform", []), "name", []) == "grav")) {
            // line 15
            echo "                <form name=\"search\" onSubmit=\"return validateSearch(event);\" data-simplesearch-form>
                    <input
                        name=\"searchfield\"
                        class=\"search-input\"
                        type=\"text\"
                        required
                        value=\"\"
                        placeholder=\"";
            // line 22
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", []), "")) : ("")), "html", null, true);
            echo "\"
                        data-search-separator=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
            echo "\"
                        data-search-input=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method"), "html", null, true);
            ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []) == "@self")) ? (print ("")) : (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []) == "/")) ? (print ("")) : (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []), "html", null, true))))));
            echo "/query\"
                        title=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []), "html", null, true);
            echo "\"
                    />
                </form>
        ";
        }
        // line 29
        echo "    </div>

";
    }

    // line 33
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 34
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 35
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "lightcase.init"], "method");
        echo " 
    ";
        // line 36
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "name", []) == "grav")) {
            // line 37
            echo "        <script>
            ";
            // line 38
            $context["min_chars"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "simplesearch", [], "any", false, true), "min_query_length", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "simplesearch", [], "any", false, true), "min_query_length", []), "3")) : ("3"));
            // line 39
            echo "            function validateSearch(event) {
                var input = document.forms[\"search\"][\"searchfield\"];
                var location = input.getAttribute('data-search-input');
                var separator = input.getAttribute('data-search-separator');
                if (input.value.length >= ";
            // line 43
            echo twig_escape_filter($this->env, ($context["min_chars"] ?? null), "html", null, true);
            echo ") {
                    event.preventDefault();
                    window.location.href = location + separator + input.value;
                } else {
                    event.preventDefault();
                }
            }
        </script>
    ";
        }
        // line 51
        echo "    
";
    }

    public function getTemplateName()
    {
        return "@particles/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 51,  141 => 43,  135 => 39,  133 => 38,  130 => 37,  128 => 36,  123 => 35,  120 => 34,  117 => 33,  111 => 29,  104 => 25,  99 => 24,  95 => 23,  91 => 22,  82 => 15,  80 => 14,  73 => 12,  68 => 11,  66 => 10,  59 => 8,  54 => 7,  52 => 6,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/search.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatTeatridanza\\templates\\rt_manticore\\particles\\search.html.twig");
    }
}
