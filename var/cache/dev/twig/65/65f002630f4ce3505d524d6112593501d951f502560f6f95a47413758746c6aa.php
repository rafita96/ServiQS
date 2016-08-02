<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_703d5600ed1fd2be768ac3aaacffc305f37d53e890fd159344a21089cb0873e7 extends Twig_Template
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
        $__internal_371ee950617ad2be2c2a14d2a4bf5778695f9758fc4994a3d786ed5181ce780f = $this->env->getExtension("native_profiler");
        $__internal_371ee950617ad2be2c2a14d2a4bf5778695f9758fc4994a3d786ed5181ce780f->enter($__internal_371ee950617ad2be2c2a14d2a4bf5778695f9758fc4994a3d786ed5181ce780f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_371ee950617ad2be2c2a14d2a4bf5778695f9758fc4994a3d786ed5181ce780f->leave($__internal_371ee950617ad2be2c2a14d2a4bf5778695f9758fc4994a3d786ed5181ce780f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
