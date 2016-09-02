<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5d43a2e218c6bd1aef05037eb77aa4290ecc0b9503d1ab2ba1108a5ba473621d extends Twig_Template
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
        $__internal_5d759dd2a5d5de12d369b325f037462e3a5f26d269621ef95070505b91b84443 = $this->env->getExtension("native_profiler");
        $__internal_5d759dd2a5d5de12d369b325f037462e3a5f26d269621ef95070505b91b84443->enter($__internal_5d759dd2a5d5de12d369b325f037462e3a5f26d269621ef95070505b91b84443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5d759dd2a5d5de12d369b325f037462e3a5f26d269621ef95070505b91b84443->leave($__internal_5d759dd2a5d5de12d369b325f037462e3a5f26d269621ef95070505b91b84443_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
