<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d309b769921794a0cad822a14af110d3502c26131290974e11c4672951e09009 extends Twig_Template
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
        $__internal_1963b8e6fbcab0539d779ca01dbda1d9318a3b99595b2888d7ae584e955ba786 = $this->env->getExtension("native_profiler");
        $__internal_1963b8e6fbcab0539d779ca01dbda1d9318a3b99595b2888d7ae584e955ba786->enter($__internal_1963b8e6fbcab0539d779ca01dbda1d9318a3b99595b2888d7ae584e955ba786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1963b8e6fbcab0539d779ca01dbda1d9318a3b99595b2888d7ae584e955ba786->leave($__internal_1963b8e6fbcab0539d779ca01dbda1d9318a3b99595b2888d7ae584e955ba786_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
