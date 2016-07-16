<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_30f72c2a3e711f66c9999e426497ded816b36d2269cc5ff7af546829e0be2dc3 extends Twig_Template
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
        $__internal_169aeda48503718a822b025ce0fd0e2b864640c7a304c49a32962b488377aadf = $this->env->getExtension("native_profiler");
        $__internal_169aeda48503718a822b025ce0fd0e2b864640c7a304c49a32962b488377aadf->enter($__internal_169aeda48503718a822b025ce0fd0e2b864640c7a304c49a32962b488377aadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_169aeda48503718a822b025ce0fd0e2b864640c7a304c49a32962b488377aadf->leave($__internal_169aeda48503718a822b025ce0fd0e2b864640c7a304c49a32962b488377aadf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
