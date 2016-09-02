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
        $__internal_a3fcfe516740fc2885ae5d6f684e488bd0b4ac5d739bfccc1c36337748739fb9 = $this->env->getExtension("native_profiler");
        $__internal_a3fcfe516740fc2885ae5d6f684e488bd0b4ac5d739bfccc1c36337748739fb9->enter($__internal_a3fcfe516740fc2885ae5d6f684e488bd0b4ac5d739bfccc1c36337748739fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3fcfe516740fc2885ae5d6f684e488bd0b4ac5d739bfccc1c36337748739fb9->leave($__internal_a3fcfe516740fc2885ae5d6f684e488bd0b4ac5d739bfccc1c36337748739fb9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bc513c130a5494990b2400485026f6d72d9643c5a36240a38b0efdd861bf4fe = $this->env->getExtension("native_profiler");
        $__internal_4bc513c130a5494990b2400485026f6d72d9643c5a36240a38b0efdd861bf4fe->enter($__internal_4bc513c130a5494990b2400485026f6d72d9643c5a36240a38b0efdd861bf4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4bc513c130a5494990b2400485026f6d72d9643c5a36240a38b0efdd861bf4fe->leave($__internal_4bc513c130a5494990b2400485026f6d72d9643c5a36240a38b0efdd861bf4fe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_60f441234477fb2540c18267ee6cc0036ca6ab39a8291cf90fc6f9dad8633c5e = $this->env->getExtension("native_profiler");
        $__internal_60f441234477fb2540c18267ee6cc0036ca6ab39a8291cf90fc6f9dad8633c5e->enter($__internal_60f441234477fb2540c18267ee6cc0036ca6ab39a8291cf90fc6f9dad8633c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_60f441234477fb2540c18267ee6cc0036ca6ab39a8291cf90fc6f9dad8633c5e->leave($__internal_60f441234477fb2540c18267ee6cc0036ca6ab39a8291cf90fc6f9dad8633c5e_prof);

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
