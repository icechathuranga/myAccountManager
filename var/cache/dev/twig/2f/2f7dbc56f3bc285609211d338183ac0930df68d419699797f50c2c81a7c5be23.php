<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_455398bcc9b54141c8efcfe81582a83257d611103bbd4a458f67d9e947c463f5 extends Twig_Template
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
        $__internal_086863d89363a3d24eb37332b102658741a8e6fd43ca6a7e90960e5c96fe15dd = $this->env->getExtension("native_profiler");
        $__internal_086863d89363a3d24eb37332b102658741a8e6fd43ca6a7e90960e5c96fe15dd->enter($__internal_086863d89363a3d24eb37332b102658741a8e6fd43ca6a7e90960e5c96fe15dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_086863d89363a3d24eb37332b102658741a8e6fd43ca6a7e90960e5c96fe15dd->leave($__internal_086863d89363a3d24eb37332b102658741a8e6fd43ca6a7e90960e5c96fe15dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
