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
        $__internal_cc2b077e94fb2599d70697697b8fc4f6a3b23e353c47d4ed5d3273c8990265df = $this->env->getExtension("native_profiler");
        $__internal_cc2b077e94fb2599d70697697b8fc4f6a3b23e353c47d4ed5d3273c8990265df->enter($__internal_cc2b077e94fb2599d70697697b8fc4f6a3b23e353c47d4ed5d3273c8990265df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cc2b077e94fb2599d70697697b8fc4f6a3b23e353c47d4ed5d3273c8990265df->leave($__internal_cc2b077e94fb2599d70697697b8fc4f6a3b23e353c47d4ed5d3273c8990265df_prof);

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
