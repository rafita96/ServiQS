<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7a36726f3f7d3e7fcd46356b3503c8ee1bece51e5d780b0106400e4abc1f202c extends Twig_Template
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
        $__internal_01397f0998b88d42c6a558a6edc4c27e888ef6c1a3ac623c91f2be37a1db4a63 = $this->env->getExtension("native_profiler");
        $__internal_01397f0998b88d42c6a558a6edc4c27e888ef6c1a3ac623c91f2be37a1db4a63->enter($__internal_01397f0998b88d42c6a558a6edc4c27e888ef6c1a3ac623c91f2be37a1db4a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_01397f0998b88d42c6a558a6edc4c27e888ef6c1a3ac623c91f2be37a1db4a63->leave($__internal_01397f0998b88d42c6a558a6edc4c27e888ef6c1a3ac623c91f2be37a1db4a63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
