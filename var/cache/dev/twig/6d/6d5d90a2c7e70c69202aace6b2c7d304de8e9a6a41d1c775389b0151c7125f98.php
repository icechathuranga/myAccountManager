<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_827480ae3c5009de2366e9c2cca8577be146312dbd713e15dfba0d92df6630df extends Twig_Template
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
        $__internal_34cc99a890a9cb7175e3f64aa4a1c45b5a41ea2f27123440d7538bc64937d4a2 = $this->env->getExtension("native_profiler");
        $__internal_34cc99a890a9cb7175e3f64aa4a1c45b5a41ea2f27123440d7538bc64937d4a2->enter($__internal_34cc99a890a9cb7175e3f64aa4a1c45b5a41ea2f27123440d7538bc64937d4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_34cc99a890a9cb7175e3f64aa4a1c45b5a41ea2f27123440d7538bc64937d4a2->leave($__internal_34cc99a890a9cb7175e3f64aa4a1c45b5a41ea2f27123440d7538bc64937d4a2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
