<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bd4efd49caad756ba8cc25edb2e1e125b5f3147faa0cf985babba72c093ba8de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45867376699c1d94d677d443c863ae9812402937751774f92ba3916576f9c5ca = $this->env->getExtension("native_profiler");
        $__internal_45867376699c1d94d677d443c863ae9812402937751774f92ba3916576f9c5ca->enter($__internal_45867376699c1d94d677d443c863ae9812402937751774f92ba3916576f9c5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45867376699c1d94d677d443c863ae9812402937751774f92ba3916576f9c5ca->leave($__internal_45867376699c1d94d677d443c863ae9812402937751774f92ba3916576f9c5ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac95a9a691707ca6750e5d60893e2ebd3931af3b6f734ff10b9b710527458114 = $this->env->getExtension("native_profiler");
        $__internal_ac95a9a691707ca6750e5d60893e2ebd3931af3b6f734ff10b9b710527458114->enter($__internal_ac95a9a691707ca6750e5d60893e2ebd3931af3b6f734ff10b9b710527458114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ac95a9a691707ca6750e5d60893e2ebd3931af3b6f734ff10b9b710527458114->leave($__internal_ac95a9a691707ca6750e5d60893e2ebd3931af3b6f734ff10b9b710527458114_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b02099128774260b5d9efa328adc999805a04af9f843d8b6a4d48b01cf7937a = $this->env->getExtension("native_profiler");
        $__internal_8b02099128774260b5d9efa328adc999805a04af9f843d8b6a4d48b01cf7937a->enter($__internal_8b02099128774260b5d9efa328adc999805a04af9f843d8b6a4d48b01cf7937a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8b02099128774260b5d9efa328adc999805a04af9f843d8b6a4d48b01cf7937a->leave($__internal_8b02099128774260b5d9efa328adc999805a04af9f843d8b6a4d48b01cf7937a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b267b237f652335e1d735d6910849040fa9e9939bce8464c34bf02f87bb7d2f = $this->env->getExtension("native_profiler");
        $__internal_4b267b237f652335e1d735d6910849040fa9e9939bce8464c34bf02f87bb7d2f->enter($__internal_4b267b237f652335e1d735d6910849040fa9e9939bce8464c34bf02f87bb7d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4b267b237f652335e1d735d6910849040fa9e9939bce8464c34bf02f87bb7d2f->leave($__internal_4b267b237f652335e1d735d6910849040fa9e9939bce8464c34bf02f87bb7d2f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
