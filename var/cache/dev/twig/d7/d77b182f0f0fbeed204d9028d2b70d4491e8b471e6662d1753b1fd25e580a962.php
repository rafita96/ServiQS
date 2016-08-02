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
        $__internal_c000c9cc6a0badfcabe9116e5084f74ea2a675088f378906b2f58e826a952294 = $this->env->getExtension("native_profiler");
        $__internal_c000c9cc6a0badfcabe9116e5084f74ea2a675088f378906b2f58e826a952294->enter($__internal_c000c9cc6a0badfcabe9116e5084f74ea2a675088f378906b2f58e826a952294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c000c9cc6a0badfcabe9116e5084f74ea2a675088f378906b2f58e826a952294->leave($__internal_c000c9cc6a0badfcabe9116e5084f74ea2a675088f378906b2f58e826a952294_prof);

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
