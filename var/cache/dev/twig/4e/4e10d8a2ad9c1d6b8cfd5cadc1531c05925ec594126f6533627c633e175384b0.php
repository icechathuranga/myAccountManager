<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b2fecf824d9aeb259c6217537c2a862b5dbd34252e2a00b245de22d85fe42614 extends Twig_Template
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
        $__internal_0725d7ed98f81612801462388d78f52a9fce68ada21457525557633e42632af0 = $this->env->getExtension("native_profiler");
        $__internal_0725d7ed98f81612801462388d78f52a9fce68ada21457525557633e42632af0->enter($__internal_0725d7ed98f81612801462388d78f52a9fce68ada21457525557633e42632af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0725d7ed98f81612801462388d78f52a9fce68ada21457525557633e42632af0->leave($__internal_0725d7ed98f81612801462388d78f52a9fce68ada21457525557633e42632af0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
