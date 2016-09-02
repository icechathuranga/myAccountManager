<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d7bc79f22db6ef58cd1b3e257983848d15edfe22e7f903b16e22397a22199655 extends Twig_Template
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
        $__internal_422e33d126451e7a11e4b68e1f6edc8e0693c7c99ca199c33db2e07e012d73d5 = $this->env->getExtension("native_profiler");
        $__internal_422e33d126451e7a11e4b68e1f6edc8e0693c7c99ca199c33db2e07e012d73d5->enter($__internal_422e33d126451e7a11e4b68e1f6edc8e0693c7c99ca199c33db2e07e012d73d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_422e33d126451e7a11e4b68e1f6edc8e0693c7c99ca199c33db2e07e012d73d5->leave($__internal_422e33d126451e7a11e4b68e1f6edc8e0693c7c99ca199c33db2e07e012d73d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
