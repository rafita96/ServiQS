<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_bb4177af8b411ec6a3d09a08e20b2eff32d3b999e56f72525421ca64a0bd0526 extends Twig_Template
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
        $__internal_44aba52686b85490fd86fd6f385257046c3bb00257f34eeaed723134bbe8314d = $this->env->getExtension("native_profiler");
        $__internal_44aba52686b85490fd86fd6f385257046c3bb00257f34eeaed723134bbe8314d->enter($__internal_44aba52686b85490fd86fd6f385257046c3bb00257f34eeaed723134bbe8314d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_44aba52686b85490fd86fd6f385257046c3bb00257f34eeaed723134bbe8314d->leave($__internal_44aba52686b85490fd86fd6f385257046c3bb00257f34eeaed723134bbe8314d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */