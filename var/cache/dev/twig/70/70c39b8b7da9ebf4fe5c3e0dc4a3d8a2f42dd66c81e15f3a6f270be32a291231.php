<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0bde7f5239cbee7f8c0ffcd98124d12b62f481e992da5f0c00eb4bc02571ae03 extends Twig_Template
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
        $__internal_01b34136b48e4b5814cebedc4a519159704d37a279e177d637e14862607e6334 = $this->env->getExtension("native_profiler");
        $__internal_01b34136b48e4b5814cebedc4a519159704d37a279e177d637e14862607e6334->enter($__internal_01b34136b48e4b5814cebedc4a519159704d37a279e177d637e14862607e6334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_01b34136b48e4b5814cebedc4a519159704d37a279e177d637e14862607e6334->leave($__internal_01b34136b48e4b5814cebedc4a519159704d37a279e177d637e14862607e6334_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
