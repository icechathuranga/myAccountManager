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
        $__internal_a7a7fff76a333c9dd677369d77370771546043e164a339e7adf4c2cd0c668dcc = $this->env->getExtension("native_profiler");
        $__internal_a7a7fff76a333c9dd677369d77370771546043e164a339e7adf4c2cd0c668dcc->enter($__internal_a7a7fff76a333c9dd677369d77370771546043e164a339e7adf4c2cd0c668dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a7a7fff76a333c9dd677369d77370771546043e164a339e7adf4c2cd0c668dcc->leave($__internal_a7a7fff76a333c9dd677369d77370771546043e164a339e7adf4c2cd0c668dcc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b707f80158ecbac38e1261f80fd8cbf6be7c1685c51a64899dde1380c46954d = $this->env->getExtension("native_profiler");
        $__internal_9b707f80158ecbac38e1261f80fd8cbf6be7c1685c51a64899dde1380c46954d->enter($__internal_9b707f80158ecbac38e1261f80fd8cbf6be7c1685c51a64899dde1380c46954d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9b707f80158ecbac38e1261f80fd8cbf6be7c1685c51a64899dde1380c46954d->leave($__internal_9b707f80158ecbac38e1261f80fd8cbf6be7c1685c51a64899dde1380c46954d_prof);

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
