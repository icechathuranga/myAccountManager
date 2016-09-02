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
        $__internal_26a65d95d410b56057f6b56fdbd8c79678f3a3ff34d3fdb9f64a329e842f16b6 = $this->env->getExtension("native_profiler");
        $__internal_26a65d95d410b56057f6b56fdbd8c79678f3a3ff34d3fdb9f64a329e842f16b6->enter($__internal_26a65d95d410b56057f6b56fdbd8c79678f3a3ff34d3fdb9f64a329e842f16b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_26a65d95d410b56057f6b56fdbd8c79678f3a3ff34d3fdb9f64a329e842f16b6->leave($__internal_26a65d95d410b56057f6b56fdbd8c79678f3a3ff34d3fdb9f64a329e842f16b6_prof);

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
