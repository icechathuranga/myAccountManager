<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_679f5d489a2c194914ea9f99fe07511a78cf88b0df4f733412c826eaf716b526 extends Twig_Template
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
        $__internal_4e113b6e003016f2f4bf78083aad5d767f2c29646529572bb13075b2d99cd98e = $this->env->getExtension("native_profiler");
        $__internal_4e113b6e003016f2f4bf78083aad5d767f2c29646529572bb13075b2d99cd98e->enter($__internal_4e113b6e003016f2f4bf78083aad5d767f2c29646529572bb13075b2d99cd98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4e113b6e003016f2f4bf78083aad5d767f2c29646529572bb13075b2d99cd98e->leave($__internal_4e113b6e003016f2f4bf78083aad5d767f2c29646529572bb13075b2d99cd98e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
