<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_8f86b452097b41b9fd46f3477f354c958baec991e2f7c6b879f360e58f791a03 extends Twig_Template
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
        $__internal_bd66808d48b3f6fffdb591b5b3c7d25604a25f3d15744e2c0f4a13a50ef9c054 = $this->env->getExtension("native_profiler");
        $__internal_bd66808d48b3f6fffdb591b5b3c7d25604a25f3d15744e2c0f4a13a50ef9c054->enter($__internal_bd66808d48b3f6fffdb591b5b3c7d25604a25f3d15744e2c0f4a13a50ef9c054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bd66808d48b3f6fffdb591b5b3c7d25604a25f3d15744e2c0f4a13a50ef9c054->leave($__internal_bd66808d48b3f6fffdb591b5b3c7d25604a25f3d15744e2c0f4a13a50ef9c054_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
