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
        $__internal_d8d8d73f3c913fa92767b66df93a96f0692f92289177feaf0238204c7be37cdf = $this->env->getExtension("native_profiler");
        $__internal_d8d8d73f3c913fa92767b66df93a96f0692f92289177feaf0238204c7be37cdf->enter($__internal_d8d8d73f3c913fa92767b66df93a96f0692f92289177feaf0238204c7be37cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8d8d73f3c913fa92767b66df93a96f0692f92289177feaf0238204c7be37cdf->leave($__internal_d8d8d73f3c913fa92767b66df93a96f0692f92289177feaf0238204c7be37cdf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_762d5e50750ba2f5373413317721736d27e19282341ba5269fcf4f65eaabfbff = $this->env->getExtension("native_profiler");
        $__internal_762d5e50750ba2f5373413317721736d27e19282341ba5269fcf4f65eaabfbff->enter($__internal_762d5e50750ba2f5373413317721736d27e19282341ba5269fcf4f65eaabfbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_762d5e50750ba2f5373413317721736d27e19282341ba5269fcf4f65eaabfbff->leave($__internal_762d5e50750ba2f5373413317721736d27e19282341ba5269fcf4f65eaabfbff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb8c2a2b4da687a6e02ab6c42fb5e0edfba2808bf61d4ffeca9269401d684523 = $this->env->getExtension("native_profiler");
        $__internal_cb8c2a2b4da687a6e02ab6c42fb5e0edfba2808bf61d4ffeca9269401d684523->enter($__internal_cb8c2a2b4da687a6e02ab6c42fb5e0edfba2808bf61d4ffeca9269401d684523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb8c2a2b4da687a6e02ab6c42fb5e0edfba2808bf61d4ffeca9269401d684523->leave($__internal_cb8c2a2b4da687a6e02ab6c42fb5e0edfba2808bf61d4ffeca9269401d684523_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0327ccb0482dbb75e58e8eb215d45968b44c021a4f2710bffd376560c0e6c41b = $this->env->getExtension("native_profiler");
        $__internal_0327ccb0482dbb75e58e8eb215d45968b44c021a4f2710bffd376560c0e6c41b->enter($__internal_0327ccb0482dbb75e58e8eb215d45968b44c021a4f2710bffd376560c0e6c41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0327ccb0482dbb75e58e8eb215d45968b44c021a4f2710bffd376560c0e6c41b->leave($__internal_0327ccb0482dbb75e58e8eb215d45968b44c021a4f2710bffd376560c0e6c41b_prof);

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
