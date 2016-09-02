<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_685d28ee697a958cc3a6d9533e743f93b76193606ca57279b0f6ac55cacd084e extends Twig_Template
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
        $__internal_6436f64241dc75baa9791cac17e67e4c3b8908c83868858405e233ed5189f81a = $this->env->getExtension("native_profiler");
        $__internal_6436f64241dc75baa9791cac17e67e4c3b8908c83868858405e233ed5189f81a->enter($__internal_6436f64241dc75baa9791cac17e67e4c3b8908c83868858405e233ed5189f81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6436f64241dc75baa9791cac17e67e4c3b8908c83868858405e233ed5189f81a->leave($__internal_6436f64241dc75baa9791cac17e67e4c3b8908c83868858405e233ed5189f81a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
