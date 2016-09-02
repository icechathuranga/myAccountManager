<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3f6a0b6cebc8c2d4c38c4787a846e516540f0830a108d16af5dd1a4810f5a3a8 extends Twig_Template
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
        $__internal_630b42ea04076850a0be00c32e7df1ee9f9af0d903986ef7256160428dc2e53f = $this->env->getExtension("native_profiler");
        $__internal_630b42ea04076850a0be00c32e7df1ee9f9af0d903986ef7256160428dc2e53f->enter($__internal_630b42ea04076850a0be00c32e7df1ee9f9af0d903986ef7256160428dc2e53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_630b42ea04076850a0be00c32e7df1ee9f9af0d903986ef7256160428dc2e53f->leave($__internal_630b42ea04076850a0be00c32e7df1ee9f9af0d903986ef7256160428dc2e53f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
