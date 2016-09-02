<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1828778eae1600b18acddec834e4dd091c03e41ce1affe8365b1130617538fca extends Twig_Template
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
        $__internal_9ce005edfdad8163bb4e8f01695e90b72fc44b58a8b89a2e81d0005fb520ff94 = $this->env->getExtension("native_profiler");
        $__internal_9ce005edfdad8163bb4e8f01695e90b72fc44b58a8b89a2e81d0005fb520ff94->enter($__internal_9ce005edfdad8163bb4e8f01695e90b72fc44b58a8b89a2e81d0005fb520ff94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9ce005edfdad8163bb4e8f01695e90b72fc44b58a8b89a2e81d0005fb520ff94->leave($__internal_9ce005edfdad8163bb4e8f01695e90b72fc44b58a8b89a2e81d0005fb520ff94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
