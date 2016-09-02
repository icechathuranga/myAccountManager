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
        $__internal_170e79552bdd7513af5bcbf0dd3ec63246f58b92820f3a2152e8174551bdac15 = $this->env->getExtension("native_profiler");
        $__internal_170e79552bdd7513af5bcbf0dd3ec63246f58b92820f3a2152e8174551bdac15->enter($__internal_170e79552bdd7513af5bcbf0dd3ec63246f58b92820f3a2152e8174551bdac15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_170e79552bdd7513af5bcbf0dd3ec63246f58b92820f3a2152e8174551bdac15->leave($__internal_170e79552bdd7513af5bcbf0dd3ec63246f58b92820f3a2152e8174551bdac15_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3e601ef64750fbed51e1837c3c13014e23948a08b84f27d78650ae282783989 = $this->env->getExtension("native_profiler");
        $__internal_d3e601ef64750fbed51e1837c3c13014e23948a08b84f27d78650ae282783989->enter($__internal_d3e601ef64750fbed51e1837c3c13014e23948a08b84f27d78650ae282783989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d3e601ef64750fbed51e1837c3c13014e23948a08b84f27d78650ae282783989->leave($__internal_d3e601ef64750fbed51e1837c3c13014e23948a08b84f27d78650ae282783989_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e750df2eb6067a1ac57aa63cedb02392b3cfee09a3249b605ac0ec6accb3689 = $this->env->getExtension("native_profiler");
        $__internal_7e750df2eb6067a1ac57aa63cedb02392b3cfee09a3249b605ac0ec6accb3689->enter($__internal_7e750df2eb6067a1ac57aa63cedb02392b3cfee09a3249b605ac0ec6accb3689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7e750df2eb6067a1ac57aa63cedb02392b3cfee09a3249b605ac0ec6accb3689->leave($__internal_7e750df2eb6067a1ac57aa63cedb02392b3cfee09a3249b605ac0ec6accb3689_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_80cdbd18d2f606fcceba0020d2c995ee44e8c96147dfd20062e857561113d66c = $this->env->getExtension("native_profiler");
        $__internal_80cdbd18d2f606fcceba0020d2c995ee44e8c96147dfd20062e857561113d66c->enter($__internal_80cdbd18d2f606fcceba0020d2c995ee44e8c96147dfd20062e857561113d66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_80cdbd18d2f606fcceba0020d2c995ee44e8c96147dfd20062e857561113d66c->leave($__internal_80cdbd18d2f606fcceba0020d2c995ee44e8c96147dfd20062e857561113d66c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f82128b06aa9ad924537a8f9b66760d04c44a7b0f3cf7300bdcbfd052987b888 = $this->env->getExtension("native_profiler");
        $__internal_f82128b06aa9ad924537a8f9b66760d04c44a7b0f3cf7300bdcbfd052987b888->enter($__internal_f82128b06aa9ad924537a8f9b66760d04c44a7b0f3cf7300bdcbfd052987b888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f82128b06aa9ad924537a8f9b66760d04c44a7b0f3cf7300bdcbfd052987b888->leave($__internal_f82128b06aa9ad924537a8f9b66760d04c44a7b0f3cf7300bdcbfd052987b888_prof);

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
