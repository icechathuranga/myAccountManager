<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e7e06eff9e696c84c5517ac95a67988413d8721c24803bf1a3f58256131850b5 extends Twig_Template
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
        $__internal_0b5617c9cf80d516324e1a71c59b4d8bf44dd9144ea73589f7ccf32a4cac59da = $this->env->getExtension("native_profiler");
        $__internal_0b5617c9cf80d516324e1a71c59b4d8bf44dd9144ea73589f7ccf32a4cac59da->enter($__internal_0b5617c9cf80d516324e1a71c59b4d8bf44dd9144ea73589f7ccf32a4cac59da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0b5617c9cf80d516324e1a71c59b4d8bf44dd9144ea73589f7ccf32a4cac59da->leave($__internal_0b5617c9cf80d516324e1a71c59b4d8bf44dd9144ea73589f7ccf32a4cac59da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
