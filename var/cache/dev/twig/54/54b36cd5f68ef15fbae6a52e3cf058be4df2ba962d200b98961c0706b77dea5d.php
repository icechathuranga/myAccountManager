<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bd4efd49caad756ba8cc25edb2e1e125b5f3147faa0cf985babba72c093ba8de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_97ac2e06ba89fd6566be358b1f3769f2faa7632bb1cca70aa1ce9fe8c1c139e1 = $this->env->getExtension("native_profiler");
        $__internal_97ac2e06ba89fd6566be358b1f3769f2faa7632bb1cca70aa1ce9fe8c1c139e1->enter($__internal_97ac2e06ba89fd6566be358b1f3769f2faa7632bb1cca70aa1ce9fe8c1c139e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97ac2e06ba89fd6566be358b1f3769f2faa7632bb1cca70aa1ce9fe8c1c139e1->leave($__internal_97ac2e06ba89fd6566be358b1f3769f2faa7632bb1cca70aa1ce9fe8c1c139e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0217b176e9b5708b377d008101f421f61b1cebe7729043bb7a43d22b33ba4bb = $this->env->getExtension("native_profiler");
        $__internal_a0217b176e9b5708b377d008101f421f61b1cebe7729043bb7a43d22b33ba4bb->enter($__internal_a0217b176e9b5708b377d008101f421f61b1cebe7729043bb7a43d22b33ba4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a0217b176e9b5708b377d008101f421f61b1cebe7729043bb7a43d22b33ba4bb->leave($__internal_a0217b176e9b5708b377d008101f421f61b1cebe7729043bb7a43d22b33ba4bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11561cd31f17c75ebb55da04ab058e37e1542fd1effc6e5f4a9a63416fbcfbd0 = $this->env->getExtension("native_profiler");
        $__internal_11561cd31f17c75ebb55da04ab058e37e1542fd1effc6e5f4a9a63416fbcfbd0->enter($__internal_11561cd31f17c75ebb55da04ab058e37e1542fd1effc6e5f4a9a63416fbcfbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_11561cd31f17c75ebb55da04ab058e37e1542fd1effc6e5f4a9a63416fbcfbd0->leave($__internal_11561cd31f17c75ebb55da04ab058e37e1542fd1effc6e5f4a9a63416fbcfbd0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_40660f57943c8460e889c9942eb9aedef468e33f5d70d62881c7450e8b102f70 = $this->env->getExtension("native_profiler");
        $__internal_40660f57943c8460e889c9942eb9aedef468e33f5d70d62881c7450e8b102f70->enter($__internal_40660f57943c8460e889c9942eb9aedef468e33f5d70d62881c7450e8b102f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_40660f57943c8460e889c9942eb9aedef468e33f5d70d62881c7450e8b102f70->leave($__internal_40660f57943c8460e889c9942eb9aedef468e33f5d70d62881c7450e8b102f70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
