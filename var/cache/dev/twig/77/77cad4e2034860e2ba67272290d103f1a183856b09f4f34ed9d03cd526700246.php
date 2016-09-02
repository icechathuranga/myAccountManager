<?php

/* base.html.twig */
class __TwigTemplate_ed7614c9ec752ee84800f6361bbe2714b289db1bdd6b8eb3f99272136eb05dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dd5920860ee5ac6c15fd9627b8ab74fea2b4652ea5e7fb1bcd1e83b3916642a = $this->env->getExtension("native_profiler");
        $__internal_2dd5920860ee5ac6c15fd9627b8ab74fea2b4652ea5e7fb1bcd1e83b3916642a->enter($__internal_2dd5920860ee5ac6c15fd9627b8ab74fea2b4652ea5e7fb1bcd1e83b3916642a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2dd5920860ee5ac6c15fd9627b8ab74fea2b4652ea5e7fb1bcd1e83b3916642a->leave($__internal_2dd5920860ee5ac6c15fd9627b8ab74fea2b4652ea5e7fb1bcd1e83b3916642a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_810141e7de8d07f4d3b50de4cfce0c033c9f5b64a47105c3f3d669b27993ce6a = $this->env->getExtension("native_profiler");
        $__internal_810141e7de8d07f4d3b50de4cfce0c033c9f5b64a47105c3f3d669b27993ce6a->enter($__internal_810141e7de8d07f4d3b50de4cfce0c033c9f5b64a47105c3f3d669b27993ce6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_810141e7de8d07f4d3b50de4cfce0c033c9f5b64a47105c3f3d669b27993ce6a->leave($__internal_810141e7de8d07f4d3b50de4cfce0c033c9f5b64a47105c3f3d669b27993ce6a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_79d019af685adce100245459a113fdaed40483c3a2413c0e47b39405a4d5426e = $this->env->getExtension("native_profiler");
        $__internal_79d019af685adce100245459a113fdaed40483c3a2413c0e47b39405a4d5426e->enter($__internal_79d019af685adce100245459a113fdaed40483c3a2413c0e47b39405a4d5426e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_79d019af685adce100245459a113fdaed40483c3a2413c0e47b39405a4d5426e->leave($__internal_79d019af685adce100245459a113fdaed40483c3a2413c0e47b39405a4d5426e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e588e113a8a3405b49c4ee5b909e226554045158ac2990c486d7e63717e01a00 = $this->env->getExtension("native_profiler");
        $__internal_e588e113a8a3405b49c4ee5b909e226554045158ac2990c486d7e63717e01a00->enter($__internal_e588e113a8a3405b49c4ee5b909e226554045158ac2990c486d7e63717e01a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e588e113a8a3405b49c4ee5b909e226554045158ac2990c486d7e63717e01a00->leave($__internal_e588e113a8a3405b49c4ee5b909e226554045158ac2990c486d7e63717e01a00_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b67dcfebac3f1bad8060c8c33964230225f20169b1cd3b3e5149fe6398aaf202 = $this->env->getExtension("native_profiler");
        $__internal_b67dcfebac3f1bad8060c8c33964230225f20169b1cd3b3e5149fe6398aaf202->enter($__internal_b67dcfebac3f1bad8060c8c33964230225f20169b1cd3b3e5149fe6398aaf202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b67dcfebac3f1bad8060c8c33964230225f20169b1cd3b3e5149fe6398aaf202->leave($__internal_b67dcfebac3f1bad8060c8c33964230225f20169b1cd3b3e5149fe6398aaf202_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
