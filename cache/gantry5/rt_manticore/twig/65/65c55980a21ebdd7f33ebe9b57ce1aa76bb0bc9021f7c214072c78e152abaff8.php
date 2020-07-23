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

/* @particles/newsletter.html.twig */
class __TwigTemplate_ad8b472fcee2a027f562e381638305a53e8b15278dd4e570e396139e52ca89bb extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/newsletter.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "
    <div class=\"g-newsletter-particle ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">

        ";
        // line 7
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            // line 8
            echo "            <h2 class=\"title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>
        ";
        }
        // line 10
        echo "
        <div id=\"mc_embed_signup\" class=\"g-newsletter ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", []));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "style", []));
        echo "\">
            ";
        // line 12
        if ($this->getAttribute(($context["particle"] ?? null), "headtext", [])) {
            // line 13
            echo "                <div class=\"g-newsletter-headtext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "headtext", []);
            echo "</div>
            ";
        }
        // line 15
        echo "
            <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "action", []), "html", null, true);
        echo "\" method=\"post\" target=\"_blank\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" novalidate=\"novalidate\">

                <div class=\"mc_embed_signup_scroll g-newsletter-form-wrapper\">
                    <div class=\"mc-field-group g-newsletter-inputbox\">
                        <input type=\"email\" placeholder=\"";
        // line 20
        echo $this->getAttribute(($context["particle"] ?? null), "inputboxtext", []);
        echo "\" name=\"EMAIL\" class=\"required email\" id=\"mce-EMAIL\">
                        <label for=\"mce-EMAIL\" style=\"display:none\">Email</label>
                    </div>

                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\">
                        <input type=\"text\" name=\"b_cb0c9a182648225cba12ab39e_2008961ab4\" id=\"nobotsignup\" tabindex=\"-1\" value=\"\">
                        <label for=\"nobotsignup\" style=\"display:none\">nobotsignup</label>
                    </div>

                    <div class=\"g-newsletter-button\" ";
        // line 30
        if ( !$this->getAttribute(($context["particle"] ?? null), "buttontext", [])) {
            echo " style=\"display: none;\" ";
        }
        echo ">
                        <input type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, _twig_default_filter($this->getAttribute(($context["particle"] ?? null), "buttontext", []), "Join"), "html", null, true);
        echo "\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"g-newsletter-button-submit button ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonclass", []));
        echo "\">
                    </div>
                </div>

                <div id=\"mce-responses\" class=\"center\">
                    <div class=\"response\" id=\"mce-error-response\" style=\"display:none\"></div>
                    <div class=\"response\" id=\"mce-success-response\" style=\"display:none\"></div>
                </div>

            </form>
        </div>

    </div>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>
        (function (\$) {
            window.fnames = new Array();
            window.ftypes = new Array();
            fnames[0] = 'EMAIL';
            ftypes[0] = 'email';
        }(jQuery));
        var \$mcj = jQuery.noConflict(true);
    </script>
";
    }

    public function getTemplateName()
    {
        return "@particles/newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  98 => 30,  85 => 20,  78 => 16,  75 => 15,  69 => 13,  67 => 12,  61 => 11,  58 => 10,  52 => 8,  50 => 7,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/newsletter.html.twig", "D:\\bitn\\w7p\\apache2\\htdocs\\ciatd\\templates\\rt_manticore\\particles\\newsletter.html.twig");
    }
}
