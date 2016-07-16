<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a600720a8fd3941d264e36f6d5fca70d31ab46bc012ade1431305457c44f9e6c extends Twig_Template
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
        $__internal_8722366105333254dfa852efce13b67ade15eea538270b97aae81571e2e73956 = $this->env->getExtension("native_profiler");
        $__internal_8722366105333254dfa852efce13b67ade15eea538270b97aae81571e2e73956->enter($__internal_8722366105333254dfa852efce13b67ade15eea538270b97aae81571e2e73956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8722366105333254dfa852efce13b67ade15eea538270b97aae81571e2e73956->leave($__internal_8722366105333254dfa852efce13b67ade15eea538270b97aae81571e2e73956_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
