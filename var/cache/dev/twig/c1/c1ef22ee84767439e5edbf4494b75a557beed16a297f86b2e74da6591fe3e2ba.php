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
        $__internal_ab2f9f641b610f1713eb37bd4f812e8e2fe26b2578c08b72aa3ca6575598d7aa = $this->env->getExtension("native_profiler");
        $__internal_ab2f9f641b610f1713eb37bd4f812e8e2fe26b2578c08b72aa3ca6575598d7aa->enter($__internal_ab2f9f641b610f1713eb37bd4f812e8e2fe26b2578c08b72aa3ca6575598d7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ab2f9f641b610f1713eb37bd4f812e8e2fe26b2578c08b72aa3ca6575598d7aa->leave($__internal_ab2f9f641b610f1713eb37bd4f812e8e2fe26b2578c08b72aa3ca6575598d7aa_prof);

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
