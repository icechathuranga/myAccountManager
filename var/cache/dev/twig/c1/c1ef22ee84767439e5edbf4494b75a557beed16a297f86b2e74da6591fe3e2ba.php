<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c80e24a74ad768c4dd0e5cdb7faa16ef57dd9632197154db7418a7e094d001c9 extends Twig_Template
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
        $__internal_4ca42b3acfdf0d832f29528d72e9be9c3c4f86e3fde3f4c0758419338748847f = $this->env->getExtension("native_profiler");
        $__internal_4ca42b3acfdf0d832f29528d72e9be9c3c4f86e3fde3f4c0758419338748847f->enter($__internal_4ca42b3acfdf0d832f29528d72e9be9c3c4f86e3fde3f4c0758419338748847f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4ca42b3acfdf0d832f29528d72e9be9c3c4f86e3fde3f4c0758419338748847f->leave($__internal_4ca42b3acfdf0d832f29528d72e9be9c3c4f86e3fde3f4c0758419338748847f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
