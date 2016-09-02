<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7aedbb86208c724c3c97c2d59541636251fd50a6ed3d1a1502298dce22abfb2f extends Twig_Template
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
        $__internal_2ec58749f23b6644d715b8c645dfd46d99b7c25abc3b6d9e1c7e95cd0d7758da = $this->env->getExtension("native_profiler");
        $__internal_2ec58749f23b6644d715b8c645dfd46d99b7c25abc3b6d9e1c7e95cd0d7758da->enter($__internal_2ec58749f23b6644d715b8c645dfd46d99b7c25abc3b6d9e1c7e95cd0d7758da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2ec58749f23b6644d715b8c645dfd46d99b7c25abc3b6d9e1c7e95cd0d7758da->leave($__internal_2ec58749f23b6644d715b8c645dfd46d99b7c25abc3b6d9e1c7e95cd0d7758da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
