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
        $__internal_b1dad69f96c2d0014d56b6a87b26b5228da07ed59c8fc88c4aceddcc5e0c09df = $this->env->getExtension("native_profiler");
        $__internal_b1dad69f96c2d0014d56b6a87b26b5228da07ed59c8fc88c4aceddcc5e0c09df->enter($__internal_b1dad69f96c2d0014d56b6a87b26b5228da07ed59c8fc88c4aceddcc5e0c09df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b1dad69f96c2d0014d56b6a87b26b5228da07ed59c8fc88c4aceddcc5e0c09df->leave($__internal_b1dad69f96c2d0014d56b6a87b26b5228da07ed59c8fc88c4aceddcc5e0c09df_prof);

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
