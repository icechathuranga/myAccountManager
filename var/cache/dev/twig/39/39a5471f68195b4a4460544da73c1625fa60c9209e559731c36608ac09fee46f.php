<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f5d3b2fcd048d44c308a5fbcf5d64afd01147125150f095868668298e24e6f4d extends Twig_Template
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
        $__internal_105eabe7a8466a4b2706e230b55ec5b8455a2109d4e5fd22f1fca0ac765a90cc = $this->env->getExtension("native_profiler");
        $__internal_105eabe7a8466a4b2706e230b55ec5b8455a2109d4e5fd22f1fca0ac765a90cc->enter($__internal_105eabe7a8466a4b2706e230b55ec5b8455a2109d4e5fd22f1fca0ac765a90cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_105eabe7a8466a4b2706e230b55ec5b8455a2109d4e5fd22f1fca0ac765a90cc->leave($__internal_105eabe7a8466a4b2706e230b55ec5b8455a2109d4e5fd22f1fca0ac765a90cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
