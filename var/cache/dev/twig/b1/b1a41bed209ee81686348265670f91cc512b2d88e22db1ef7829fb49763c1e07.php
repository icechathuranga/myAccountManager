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
        $__internal_5856148aa29894db9d0c055ceea036b0a2af02ab2176772fb91ba32ff95e5ea7 = $this->env->getExtension("native_profiler");
        $__internal_5856148aa29894db9d0c055ceea036b0a2af02ab2176772fb91ba32ff95e5ea7->enter($__internal_5856148aa29894db9d0c055ceea036b0a2af02ab2176772fb91ba32ff95e5ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5856148aa29894db9d0c055ceea036b0a2af02ab2176772fb91ba32ff95e5ea7->leave($__internal_5856148aa29894db9d0c055ceea036b0a2af02ab2176772fb91ba32ff95e5ea7_prof);

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
