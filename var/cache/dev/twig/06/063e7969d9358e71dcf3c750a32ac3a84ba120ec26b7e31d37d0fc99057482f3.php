<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_22aef82d62fa4ea72353cd8e51ed37c8efa86afe828f005d0aa081b35ad0156f extends Twig_Template
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
        $__internal_deaba01438eacee3d2c9ea4d203f751e67f2875ecef0388190a185e9cd86f161 = $this->env->getExtension("native_profiler");
        $__internal_deaba01438eacee3d2c9ea4d203f751e67f2875ecef0388190a185e9cd86f161->enter($__internal_deaba01438eacee3d2c9ea4d203f751e67f2875ecef0388190a185e9cd86f161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_deaba01438eacee3d2c9ea4d203f751e67f2875ecef0388190a185e9cd86f161->leave($__internal_deaba01438eacee3d2c9ea4d203f751e67f2875ecef0388190a185e9cd86f161_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
