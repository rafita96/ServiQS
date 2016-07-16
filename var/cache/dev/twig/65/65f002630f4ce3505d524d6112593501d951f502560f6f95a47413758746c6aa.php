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
        $__internal_e3e858f126a04997fba0abba7670b1838d97e5898ced05abc01bc2eb47647be8 = $this->env->getExtension("native_profiler");
        $__internal_e3e858f126a04997fba0abba7670b1838d97e5898ced05abc01bc2eb47647be8->enter($__internal_e3e858f126a04997fba0abba7670b1838d97e5898ced05abc01bc2eb47647be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e3e858f126a04997fba0abba7670b1838d97e5898ced05abc01bc2eb47647be8->leave($__internal_e3e858f126a04997fba0abba7670b1838d97e5898ced05abc01bc2eb47647be8_prof);

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
