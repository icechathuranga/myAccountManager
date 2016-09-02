<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a24f3ed2b32e4fe28a54c17104e021cb48421acf3320ded03479b73e95d87504 extends Twig_Template
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
        $__internal_8e1aec6b877365c13a3ae951e05e4885db109f40ffaaf2ed5a950aafb7257683 = $this->env->getExtension("native_profiler");
        $__internal_8e1aec6b877365c13a3ae951e05e4885db109f40ffaaf2ed5a950aafb7257683->enter($__internal_8e1aec6b877365c13a3ae951e05e4885db109f40ffaaf2ed5a950aafb7257683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8e1aec6b877365c13a3ae951e05e4885db109f40ffaaf2ed5a950aafb7257683->leave($__internal_8e1aec6b877365c13a3ae951e05e4885db109f40ffaaf2ed5a950aafb7257683_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
