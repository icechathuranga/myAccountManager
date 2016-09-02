<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8731e2fb83e70ae6862a7a4ca9a54cae1f6fce35aa12dcf481b700f7d1f0df39 extends Twig_Template
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
        $__internal_5a074f634bb2e281ff7de9cf40f02c5769aa05be52ea33e82e3176177c5c10e2 = $this->env->getExtension("native_profiler");
        $__internal_5a074f634bb2e281ff7de9cf40f02c5769aa05be52ea33e82e3176177c5c10e2->enter($__internal_5a074f634bb2e281ff7de9cf40f02c5769aa05be52ea33e82e3176177c5c10e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5a074f634bb2e281ff7de9cf40f02c5769aa05be52ea33e82e3176177c5c10e2->leave($__internal_5a074f634bb2e281ff7de9cf40f02c5769aa05be52ea33e82e3176177c5c10e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
