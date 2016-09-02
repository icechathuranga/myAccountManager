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
        $__internal_ab4b29345c232f0514ee1d0a8aeec6d56b6cba89c662c6167ecf43a99910b7ca = $this->env->getExtension("native_profiler");
        $__internal_ab4b29345c232f0514ee1d0a8aeec6d56b6cba89c662c6167ecf43a99910b7ca->enter($__internal_ab4b29345c232f0514ee1d0a8aeec6d56b6cba89c662c6167ecf43a99910b7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ab4b29345c232f0514ee1d0a8aeec6d56b6cba89c662c6167ecf43a99910b7ca->leave($__internal_ab4b29345c232f0514ee1d0a8aeec6d56b6cba89c662c6167ecf43a99910b7ca_prof);

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
