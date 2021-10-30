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

/* @particles/blockcontent.html.twig */
class __TwigTemplate_3cb1943200fa43c873f5a923f478ffb785165c63e51f7a9a58090d3437a4a117 extends \Twig\Template
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
        // line 2
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "lightcase.init"], "method");
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/blockcontent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
        <div class=\"g-blockcontent\">
            ";
        // line 6
        if (((((($this->getAttribute(($context["particle"] ?? null), "icon", []) || $this->getAttribute(($context["particle"] ?? null), "image", [])) || $this->getAttribute(($context["particle"] ?? null), "headline", [])) || $this->getAttribute(($context["particle"] ?? null), "description", [])) || $this->getAttribute(($context["particle"] ?? null), "linktext", [])) || $this->getAttribute(($context["particle"] ?? null), "title", []))) {
            // line 7
            echo "                <div class=\"g-grid\">
                    <div class=\"g-block\">
                        <div class=\"g-content g-blockcontent-header\">
                            ";
            // line 10
            if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
                // line 11
                echo "                                <h2 class=\"g-title\">
                                    ";
                // line 12
                echo $this->getAttribute(($context["particle"] ?? null), "title", []);
                echo "</h2>
                            ";
            }
            // line 14
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])), "html", null, true);
                echo "\" class=\"g-blockcontent-image\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "headline", []));
                echo "\"/>
                            ";
            }
            // line 16
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "icon", [])) {
                // line 17
                echo "                                <span class=\"g-blockcontent-title-icon\">
                                    <i class=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "icon", []), "html", null, true);
                echo "\"></i>
                                </span>
                            ";
            }
            // line 21
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "headline", [])) {
                // line 22
                echo "                                <h2 class=\"g-title g-blockcontent-headline\">
                                    ";
                // line 23
                echo $this->getAttribute(($context["particle"] ?? null), "headline", []);
                echo "</h2>
                            ";
            }
            // line 25
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "description", [])) {
                // line 26
                echo "                                <div class=\"g-blockcontent-description\">
                                    ";
                // line 27
                echo $this->getAttribute(($context["particle"] ?? null), "description", []);
                echo "</div>
                            ";
            }
            // line 29
            echo "                            ";
            if ($this->getAttribute(($context["particle"] ?? null), "linktext", [])) {
                // line 30
                echo "                                <p class=\"g-blockcontent-buttons\">
                                    <a target=\"";
                // line 31
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "linktarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "linktarget", []), "_self")) : ("_self")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
                echo "\" class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linkclass", []));
                echo "\">
                                        ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "linktext", []));
                echo "</a>
                                </p>
                            ";
            }
            // line 35
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        // line 39
        echo "
            <div class=\"g-grid g-blockcontent-subcontent\">
                ";
        // line 41
        if (( !$this->getAttribute(($context["particle"] ?? null), "source", []) || ($this->getAttribute(($context["particle"] ?? null), "source", []) == "particle"))) {
            // line 42
            echo "                    ";
            if ( !twig_test_empty($this->getAttribute(($context["particle"] ?? null), "subcontents", []))) {
                // line 43
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "subcontents", []));
                foreach ($context['_seq'] as $context["_key"] => $context["subcontent"]) {
                    // line 44
                    echo "                            <div class=\"g-block g-blockcontent-subcontent-block ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "class", []), "html", null, true);
                    echo " ";
                    if ($this->getAttribute($context["subcontent"], "accent", [])) {
                        echo "g-blockcontent-subcontent-block-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "accent", []), "html", null, true);
                    }
                    echo "\">
                                <div class=\"g-content g-blockcontent-subcontent-block-content\">
                                    ";
                    // line 46
                    if ($this->getAttribute($context["subcontent"], "rokboximage", [])) {
                        // line 47
                        echo "                                        <a data-rel=\"lightcase\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "rokboxcaption", []));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["subcontent"], "rokboximage", [])), "html", null, true);
                        echo "\">
                                        ";
                    }
                    // line 49
                    echo "                                        ";
                    if ($this->getAttribute($context["subcontent"], "img", [])) {
                        echo "<img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["subcontent"], "img", [])), "html", null, true);
                        echo "\" class=\"g-blockcontent-subcontent-img\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "title", []));
                        echo "\"/>
                                        ";
                    }
                    // line 51
                    echo "                                        ";
                    if ($this->getAttribute($context["subcontent"], "rokboximage", [])) {
                        // line 52
                        echo "                                        </a>
                                    ";
                    }
                    // line 54
                    echo "                                    ";
                    if ($this->getAttribute($context["subcontent"], "subtitle", [])) {
                        // line 55
                        echo "                                        <h5 class=\"g-blockcontent-subcontent-subtitle\">
                                            ";
                        // line 56
                        echo $this->getAttribute($context["subcontent"], "subtitle", []);
                        echo "</h5>
                                    ";
                    }
                    // line 58
                    echo "                                    ";
                    if ($this->getAttribute($context["subcontent"], "icon", [])) {
                        // line 59
                        echo "                                        <span class=\"g-blockcontent-subcontent-title-icon\">
                                            <i class=\"";
                        // line 60
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "icon", []), "html", null, true);
                        echo "\"></i>
                                        </span>
                                    ";
                    }
                    // line 63
                    echo "                                    ";
                    if ($this->getAttribute($context["subcontent"], "name", [])) {
                        // line 64
                        echo "                                        <h4 class=\"g-blockcontent-subcontent-title\">
                                            <span class=\"g-blockcontent-subcontent-title-text\">
                                                ";
                        // line 66
                        echo $this->getAttribute($context["subcontent"], "name", []);
                        echo "</span>
                                        </h4>
                                    ";
                    }
                    // line 69
                    echo "                                    ";
                    if ($this->getAttribute($context["subcontent"], "description", [])) {
                        // line 70
                        echo "                                        <div class=\"g-blockcontent-subcontent-desc\">
                                            ";
                        // line 71
                        echo $this->getAttribute($context["subcontent"], "description", []);
                        echo "</div>
                                    ";
                    }
                    // line 73
                    echo "                                    ";
                    if ($this->getAttribute($context["subcontent"], "button", [])) {
                        // line 74
                        echo "                                        <p class=\"g-blockcontent-buttons\">
                                            <a target=\"";
                        // line 75
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["subcontent"], "buttontarget", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["subcontent"], "buttontarget", []), "_self")) : ("_self")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "buttonlink", []));
                        echo "\" class=\"button link ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcontent"], "buttonclass", []));
                        echo "\">
                                                ";
                        // line 76
                        echo $this->getAttribute($context["subcontent"], "button", []);
                        echo "</a>
                                        </p>
                                    ";
                    }
                    // line 79
                    echo "                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcontent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "                    ";
            }
            // line 83
            echo "                ";
        } else {
            // line 84
            echo "                    ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate((("@particles/blockcontent-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "name", [])) . ".html.twig"), "@particles/blockcontent.html.twig", 84);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 85
            echo "
                </div>
            ";
        }
        // line 88
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/blockcontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 88,  282 => 85,  271 => 84,  268 => 83,  265 => 82,  257 => 79,  251 => 76,  243 => 75,  240 => 74,  237 => 73,  232 => 71,  229 => 70,  226 => 69,  220 => 66,  216 => 64,  213 => 63,  207 => 60,  204 => 59,  201 => 58,  196 => 56,  193 => 55,  190 => 54,  186 => 52,  183 => 51,  173 => 49,  165 => 47,  163 => 46,  152 => 44,  147 => 43,  144 => 42,  142 => 41,  138 => 39,  132 => 35,  126 => 32,  118 => 31,  115 => 30,  112 => 29,  107 => 27,  104 => 26,  101 => 25,  96 => 23,  93 => 22,  90 => 21,  84 => 18,  81 => 17,  78 => 16,  68 => 14,  63 => 12,  60 => 11,  58 => 10,  53 => 7,  51 => 6,  45 => 4,  42 => 3,  37 => 1,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/blockcontent.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatTeatridanza\\templates\\rt_manticore\\particles\\blockcontent.html.twig");
    }
}
