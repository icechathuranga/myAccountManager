<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bc269cdfe6ee53b12f81fac175aaefb57aee20e05972165b5dac322ef0059c1b extends Twig_Template
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
        $__internal_eaf1a0bae11259a2b88b288c79f7d5f2e29abb9541d6f5a8e58e442114fec1b2 = $this->env->getExtension("native_profiler");
        $__internal_eaf1a0bae11259a2b88b288c79f7d5f2e29abb9541d6f5a8e58e442114fec1b2->enter($__internal_eaf1a0bae11259a2b88b288c79f7d5f2e29abb9541d6f5a8e58e442114fec1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_eaf1a0bae11259a2b88b288c79f7d5f2e29abb9541d6f5a8e58e442114fec1b2->leave($__internal_eaf1a0bae11259a2b88b288c79f7d5f2e29abb9541d6f5a8e58e442114fec1b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
