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
        $__internal_61523f698513a89652222e2bbb759d1665d0b4a0ef7ecc81929ea6aba44c0c41 = $this->env->getExtension("native_profiler");
        $__internal_61523f698513a89652222e2bbb759d1665d0b4a0ef7ecc81929ea6aba44c0c41->enter($__internal_61523f698513a89652222e2bbb759d1665d0b4a0ef7ecc81929ea6aba44c0c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_61523f698513a89652222e2bbb759d1665d0b4a0ef7ecc81929ea6aba44c0c41->leave($__internal_61523f698513a89652222e2bbb759d1665d0b4a0ef7ecc81929ea6aba44c0c41_prof);

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
