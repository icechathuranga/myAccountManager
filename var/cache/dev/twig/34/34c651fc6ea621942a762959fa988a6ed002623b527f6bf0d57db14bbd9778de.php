<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0130b54e52dd53be886957ba64838bbb8f34bb3248c741423335d0ad4fbf0cf0 extends Twig_Template
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
        $__internal_a0fb162d4a326118864bb0340d6a95ed4b2c2f890b5bc686e24acedef9a7c816 = $this->env->getExtension("native_profiler");
        $__internal_a0fb162d4a326118864bb0340d6a95ed4b2c2f890b5bc686e24acedef9a7c816->enter($__internal_a0fb162d4a326118864bb0340d6a95ed4b2c2f890b5bc686e24acedef9a7c816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a0fb162d4a326118864bb0340d6a95ed4b2c2f890b5bc686e24acedef9a7c816->leave($__internal_a0fb162d4a326118864bb0340d6a95ed4b2c2f890b5bc686e24acedef9a7c816_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
