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
        $__internal_262597297014cc7eec2bb1fb1c4d9965ac141fd3b46f5235e03cc00054992c6f = $this->env->getExtension("native_profiler");
        $__internal_262597297014cc7eec2bb1fb1c4d9965ac141fd3b46f5235e03cc00054992c6f->enter($__internal_262597297014cc7eec2bb1fb1c4d9965ac141fd3b46f5235e03cc00054992c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_262597297014cc7eec2bb1fb1c4d9965ac141fd3b46f5235e03cc00054992c6f->leave($__internal_262597297014cc7eec2bb1fb1c4d9965ac141fd3b46f5235e03cc00054992c6f_prof);

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
