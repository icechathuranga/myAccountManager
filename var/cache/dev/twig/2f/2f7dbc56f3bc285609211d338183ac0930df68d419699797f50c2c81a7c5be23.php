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
        $__internal_b5b560291850dddb26f98e56fe245cf57e9c6629b1e8969c4502c7cc5da1952b = $this->env->getExtension("native_profiler");
        $__internal_b5b560291850dddb26f98e56fe245cf57e9c6629b1e8969c4502c7cc5da1952b->enter($__internal_b5b560291850dddb26f98e56fe245cf57e9c6629b1e8969c4502c7cc5da1952b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b5b560291850dddb26f98e56fe245cf57e9c6629b1e8969c4502c7cc5da1952b->leave($__internal_b5b560291850dddb26f98e56fe245cf57e9c6629b1e8969c4502c7cc5da1952b_prof);

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
