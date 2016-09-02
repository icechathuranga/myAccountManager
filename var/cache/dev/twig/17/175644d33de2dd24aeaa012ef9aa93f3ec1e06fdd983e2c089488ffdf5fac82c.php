<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ea8407811c942eaf190006b2d16349d867f108fa2dbaae4d7fa2b8c93e74cfa4 extends Twig_Template
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
        $__internal_04a082fdc72b35fd5f919d4ac0b3a327b7517e89ea9696007d1f7fe51a11057d = $this->env->getExtension("native_profiler");
        $__internal_04a082fdc72b35fd5f919d4ac0b3a327b7517e89ea9696007d1f7fe51a11057d->enter($__internal_04a082fdc72b35fd5f919d4ac0b3a327b7517e89ea9696007d1f7fe51a11057d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_04a082fdc72b35fd5f919d4ac0b3a327b7517e89ea9696007d1f7fe51a11057d->leave($__internal_04a082fdc72b35fd5f919d4ac0b3a327b7517e89ea9696007d1f7fe51a11057d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
