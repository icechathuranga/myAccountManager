<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_bc08cc5c592f51f41672fcd72aceecff7c0849756ac5537cf42966b9dd60a1e2 extends Twig_Template
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
        $__internal_a62a43eee511a15ab4f71d10bf3043d498d0855d01c02bc6869ed3a8ca2bbc5b = $this->env->getExtension("native_profiler");
        $__internal_a62a43eee511a15ab4f71d10bf3043d498d0855d01c02bc6869ed3a8ca2bbc5b->enter($__internal_a62a43eee511a15ab4f71d10bf3043d498d0855d01c02bc6869ed3a8ca2bbc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a62a43eee511a15ab4f71d10bf3043d498d0855d01c02bc6869ed3a8ca2bbc5b->leave($__internal_a62a43eee511a15ab4f71d10bf3043d498d0855d01c02bc6869ed3a8ca2bbc5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
