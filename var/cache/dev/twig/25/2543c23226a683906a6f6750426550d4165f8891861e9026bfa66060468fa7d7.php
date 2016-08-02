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
        $__internal_871f5993de9850da94427ae469054b58fe990cabfc240836691e75b50293e10f = $this->env->getExtension("native_profiler");
        $__internal_871f5993de9850da94427ae469054b58fe990cabfc240836691e75b50293e10f->enter($__internal_871f5993de9850da94427ae469054b58fe990cabfc240836691e75b50293e10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_871f5993de9850da94427ae469054b58fe990cabfc240836691e75b50293e10f->leave($__internal_871f5993de9850da94427ae469054b58fe990cabfc240836691e75b50293e10f_prof);

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
