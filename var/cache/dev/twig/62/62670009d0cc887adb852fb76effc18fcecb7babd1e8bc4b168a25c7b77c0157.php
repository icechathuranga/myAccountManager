<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a73b4035d9380e4b71cccd392244fca3e3e7351008925bf496b26c710b2feebc extends Twig_Template
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
        $__internal_18b394f98069914f8d16cf867873ebd21c174b870e56b624ba2a71599e2ba0d1 = $this->env->getExtension("native_profiler");
        $__internal_18b394f98069914f8d16cf867873ebd21c174b870e56b624ba2a71599e2ba0d1->enter($__internal_18b394f98069914f8d16cf867873ebd21c174b870e56b624ba2a71599e2ba0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_18b394f98069914f8d16cf867873ebd21c174b870e56b624ba2a71599e2ba0d1->leave($__internal_18b394f98069914f8d16cf867873ebd21c174b870e56b624ba2a71599e2ba0d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
