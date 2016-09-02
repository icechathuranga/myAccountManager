<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1023d17680f56709c49bcde23728f71eb14c78984f18e292ba91970779cbebf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d99d6032666efe6e12ba65cbb35e011ae623b6d3c10c71a3e5be62e0f6f57dc6 = $this->env->getExtension("native_profiler");
        $__internal_d99d6032666efe6e12ba65cbb35e011ae623b6d3c10c71a3e5be62e0f6f57dc6->enter($__internal_d99d6032666efe6e12ba65cbb35e011ae623b6d3c10c71a3e5be62e0f6f57dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d99d6032666efe6e12ba65cbb35e011ae623b6d3c10c71a3e5be62e0f6f57dc6->leave($__internal_d99d6032666efe6e12ba65cbb35e011ae623b6d3c10c71a3e5be62e0f6f57dc6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_118dec8261bef79783c679149c2997015261b64b35e7d89213465a683619cac4 = $this->env->getExtension("native_profiler");
        $__internal_118dec8261bef79783c679149c2997015261b64b35e7d89213465a683619cac4->enter($__internal_118dec8261bef79783c679149c2997015261b64b35e7d89213465a683619cac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_118dec8261bef79783c679149c2997015261b64b35e7d89213465a683619cac4->leave($__internal_118dec8261bef79783c679149c2997015261b64b35e7d89213465a683619cac4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bad1094f48ab77c58601ca5aa663cafb225409797ce9a12ae03903dc2df40064 = $this->env->getExtension("native_profiler");
        $__internal_bad1094f48ab77c58601ca5aa663cafb225409797ce9a12ae03903dc2df40064->enter($__internal_bad1094f48ab77c58601ca5aa663cafb225409797ce9a12ae03903dc2df40064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_bad1094f48ab77c58601ca5aa663cafb225409797ce9a12ae03903dc2df40064->leave($__internal_bad1094f48ab77c58601ca5aa663cafb225409797ce9a12ae03903dc2df40064_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
