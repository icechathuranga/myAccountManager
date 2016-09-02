<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_40186a9f0b55c2d7552d468cdb44091aa5bd9792608d9694f1edf35b158cadc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6eecb82f753e21a68a5f57020d45c93b2523c1cec9ed18d46d02f8240d0c8022 = $this->env->getExtension("native_profiler");
        $__internal_6eecb82f753e21a68a5f57020d45c93b2523c1cec9ed18d46d02f8240d0c8022->enter($__internal_6eecb82f753e21a68a5f57020d45c93b2523c1cec9ed18d46d02f8240d0c8022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6eecb82f753e21a68a5f57020d45c93b2523c1cec9ed18d46d02f8240d0c8022->leave($__internal_6eecb82f753e21a68a5f57020d45c93b2523c1cec9ed18d46d02f8240d0c8022_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_739ebf9b6d540d0679e8daef4b799dd8cce59a58886d7caa3975150b7a1ff31b = $this->env->getExtension("native_profiler");
        $__internal_739ebf9b6d540d0679e8daef4b799dd8cce59a58886d7caa3975150b7a1ff31b->enter($__internal_739ebf9b6d540d0679e8daef4b799dd8cce59a58886d7caa3975150b7a1ff31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_739ebf9b6d540d0679e8daef4b799dd8cce59a58886d7caa3975150b7a1ff31b->leave($__internal_739ebf9b6d540d0679e8daef4b799dd8cce59a58886d7caa3975150b7a1ff31b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
