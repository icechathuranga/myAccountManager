<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2b4fbaec6959a8f0603adc7f2fb3f2f4aa24bbb1333e8333cab044a7502f1e05 extends Twig_Template
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
        $__internal_416ff9753d8a85a7c9630bcf4db9f8f051b0618ae9a64b2fe87007d9f2575b40 = $this->env->getExtension("native_profiler");
        $__internal_416ff9753d8a85a7c9630bcf4db9f8f051b0618ae9a64b2fe87007d9f2575b40->enter($__internal_416ff9753d8a85a7c9630bcf4db9f8f051b0618ae9a64b2fe87007d9f2575b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_416ff9753d8a85a7c9630bcf4db9f8f051b0618ae9a64b2fe87007d9f2575b40->leave($__internal_416ff9753d8a85a7c9630bcf4db9f8f051b0618ae9a64b2fe87007d9f2575b40_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
