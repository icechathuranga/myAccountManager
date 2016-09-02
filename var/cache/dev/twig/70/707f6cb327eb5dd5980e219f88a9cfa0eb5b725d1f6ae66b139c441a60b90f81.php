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
        $__internal_07574f85bb0431d9bc3980dccbff6a516e1f7f87f853e9a23f19fee607d3b7be = $this->env->getExtension("native_profiler");
        $__internal_07574f85bb0431d9bc3980dccbff6a516e1f7f87f853e9a23f19fee607d3b7be->enter($__internal_07574f85bb0431d9bc3980dccbff6a516e1f7f87f853e9a23f19fee607d3b7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_07574f85bb0431d9bc3980dccbff6a516e1f7f87f853e9a23f19fee607d3b7be->leave($__internal_07574f85bb0431d9bc3980dccbff6a516e1f7f87f853e9a23f19fee607d3b7be_prof);

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
