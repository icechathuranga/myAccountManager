<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d77f4c3a318b231d8cc5b8a5e1b9eb74299a62c1d8d29e6188c2d1b02bf89e66 extends Twig_Template
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
        $__internal_6b0fc6cf8495aaa0d885dc8710ed652ce16d3a48b15c2a332f53481fe19d2907 = $this->env->getExtension("native_profiler");
        $__internal_6b0fc6cf8495aaa0d885dc8710ed652ce16d3a48b15c2a332f53481fe19d2907->enter($__internal_6b0fc6cf8495aaa0d885dc8710ed652ce16d3a48b15c2a332f53481fe19d2907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6b0fc6cf8495aaa0d885dc8710ed652ce16d3a48b15c2a332f53481fe19d2907->leave($__internal_6b0fc6cf8495aaa0d885dc8710ed652ce16d3a48b15c2a332f53481fe19d2907_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
