<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_74e02039414399425c5ee58845e555831f7c912f35cd211dc2b7a9f47264683e extends Twig_Template
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
        $__internal_4eee1bc34a6740a583e775667b4077ad4e60ab84c1d8b6d16ccbd808525d13c0 = $this->env->getExtension("native_profiler");
        $__internal_4eee1bc34a6740a583e775667b4077ad4e60ab84c1d8b6d16ccbd808525d13c0->enter($__internal_4eee1bc34a6740a583e775667b4077ad4e60ab84c1d8b6d16ccbd808525d13c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4eee1bc34a6740a583e775667b4077ad4e60ab84c1d8b6d16ccbd808525d13c0->leave($__internal_4eee1bc34a6740a583e775667b4077ad4e60ab84c1d8b6d16ccbd808525d13c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
