<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_98130af2371e668c748b97facdb6f71c2a6f3c66ca5a36192b688a115c3b82b3 extends Twig_Template
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
        $__internal_4b0f2e580f2158b983b5c6cb78aa6699872e955664d698920ae771d61e8440d8 = $this->env->getExtension("native_profiler");
        $__internal_4b0f2e580f2158b983b5c6cb78aa6699872e955664d698920ae771d61e8440d8->enter($__internal_4b0f2e580f2158b983b5c6cb78aa6699872e955664d698920ae771d61e8440d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4b0f2e580f2158b983b5c6cb78aa6699872e955664d698920ae771d61e8440d8->leave($__internal_4b0f2e580f2158b983b5c6cb78aa6699872e955664d698920ae771d61e8440d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
