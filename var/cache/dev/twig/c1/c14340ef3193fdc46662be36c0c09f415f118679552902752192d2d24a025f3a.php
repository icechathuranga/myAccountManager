<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8b3aa10182ec3f8d4bbc10db31a007e4ff54e3fea46f5b2fb0c6f35a43a88c95 extends Twig_Template
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
        $__internal_2d62dc02abcc1d48b0425993c956783caf0352bf436b528b6fe8ea18025e2558 = $this->env->getExtension("native_profiler");
        $__internal_2d62dc02abcc1d48b0425993c956783caf0352bf436b528b6fe8ea18025e2558->enter($__internal_2d62dc02abcc1d48b0425993c956783caf0352bf436b528b6fe8ea18025e2558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2d62dc02abcc1d48b0425993c956783caf0352bf436b528b6fe8ea18025e2558->leave($__internal_2d62dc02abcc1d48b0425993c956783caf0352bf436b528b6fe8ea18025e2558_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
