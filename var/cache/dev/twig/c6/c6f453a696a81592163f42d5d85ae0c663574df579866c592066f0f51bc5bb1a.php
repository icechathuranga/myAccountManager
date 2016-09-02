<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f8707bddc8fabbeeb4c3472345ed6bcceddb7eae61b47800370a685a9d420ee5 extends Twig_Template
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
        $__internal_03cd77e3673a8ac33c5ffa26787fa772a6dcc61f3e296ecf3eeee5cf7be9c318 = $this->env->getExtension("native_profiler");
        $__internal_03cd77e3673a8ac33c5ffa26787fa772a6dcc61f3e296ecf3eeee5cf7be9c318->enter($__internal_03cd77e3673a8ac33c5ffa26787fa772a6dcc61f3e296ecf3eeee5cf7be9c318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_03cd77e3673a8ac33c5ffa26787fa772a6dcc61f3e296ecf3eeee5cf7be9c318->leave($__internal_03cd77e3673a8ac33c5ffa26787fa772a6dcc61f3e296ecf3eeee5cf7be9c318_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
