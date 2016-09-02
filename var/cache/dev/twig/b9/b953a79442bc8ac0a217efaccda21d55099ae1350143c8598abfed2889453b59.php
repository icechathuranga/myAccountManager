<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5ee2cad108f242983a7790328cce9c67b0cfd6c5bb26b9b69bf23d82e67c3036 extends Twig_Template
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
        $__internal_ef55356d3b9fc863acbc1c0f6aa08fc1ddcd9602fc28270d64afc329b894a33d = $this->env->getExtension("native_profiler");
        $__internal_ef55356d3b9fc863acbc1c0f6aa08fc1ddcd9602fc28270d64afc329b894a33d->enter($__internal_ef55356d3b9fc863acbc1c0f6aa08fc1ddcd9602fc28270d64afc329b894a33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ef55356d3b9fc863acbc1c0f6aa08fc1ddcd9602fc28270d64afc329b894a33d->leave($__internal_ef55356d3b9fc863acbc1c0f6aa08fc1ddcd9602fc28270d64afc329b894a33d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
