<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6a33a96c5fa9185410d4c201cfd9a76175f8238cf869135a64771c19371b3c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ee971343bdacffc7ea0d4581021f597093187b1a56ce473433fc9441f3102b2 = $this->env->getExtension("native_profiler");
        $__internal_2ee971343bdacffc7ea0d4581021f597093187b1a56ce473433fc9441f3102b2->enter($__internal_2ee971343bdacffc7ea0d4581021f597093187b1a56ce473433fc9441f3102b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ee971343bdacffc7ea0d4581021f597093187b1a56ce473433fc9441f3102b2->leave($__internal_2ee971343bdacffc7ea0d4581021f597093187b1a56ce473433fc9441f3102b2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d7b78a9fedf944a2ddf68deca239274ec3239d599693bac10b140cc17ea942f4 = $this->env->getExtension("native_profiler");
        $__internal_d7b78a9fedf944a2ddf68deca239274ec3239d599693bac10b140cc17ea942f4->enter($__internal_d7b78a9fedf944a2ddf68deca239274ec3239d599693bac10b140cc17ea942f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d7b78a9fedf944a2ddf68deca239274ec3239d599693bac10b140cc17ea942f4->leave($__internal_d7b78a9fedf944a2ddf68deca239274ec3239d599693bac10b140cc17ea942f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c076887726a9de17dd021698a87709517346cd1bf89bb06fe044a3b8567e3085 = $this->env->getExtension("native_profiler");
        $__internal_c076887726a9de17dd021698a87709517346cd1bf89bb06fe044a3b8567e3085->enter($__internal_c076887726a9de17dd021698a87709517346cd1bf89bb06fe044a3b8567e3085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c076887726a9de17dd021698a87709517346cd1bf89bb06fe044a3b8567e3085->leave($__internal_c076887726a9de17dd021698a87709517346cd1bf89bb06fe044a3b8567e3085_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e673bb7e854991848b30d24b3772caa74524a7acf8ee2ff7d77df4c6603ade0 = $this->env->getExtension("native_profiler");
        $__internal_4e673bb7e854991848b30d24b3772caa74524a7acf8ee2ff7d77df4c6603ade0->enter($__internal_4e673bb7e854991848b30d24b3772caa74524a7acf8ee2ff7d77df4c6603ade0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e673bb7e854991848b30d24b3772caa74524a7acf8ee2ff7d77df4c6603ade0->leave($__internal_4e673bb7e854991848b30d24b3772caa74524a7acf8ee2ff7d77df4c6603ade0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
