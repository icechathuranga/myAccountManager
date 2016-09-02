<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_80eeb97d20cb66025ef4711163c07a9b72cdf231cfe2f633710af1783800a01d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15e9c72c1a07d13275146daddff93314a5f16b03dab46f3a02c7c964c4d22560 = $this->env->getExtension("native_profiler");
        $__internal_15e9c72c1a07d13275146daddff93314a5f16b03dab46f3a02c7c964c4d22560->enter($__internal_15e9c72c1a07d13275146daddff93314a5f16b03dab46f3a02c7c964c4d22560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_15e9c72c1a07d13275146daddff93314a5f16b03dab46f3a02c7c964c4d22560->leave($__internal_15e9c72c1a07d13275146daddff93314a5f16b03dab46f3a02c7c964c4d22560_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
