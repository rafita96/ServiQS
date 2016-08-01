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
        $__internal_16da976eb4b7260af474dd63409520da8e7254f1a7d6e1ccf897530e48bfe735 = $this->env->getExtension("native_profiler");
        $__internal_16da976eb4b7260af474dd63409520da8e7254f1a7d6e1ccf897530e48bfe735->enter($__internal_16da976eb4b7260af474dd63409520da8e7254f1a7d6e1ccf897530e48bfe735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_16da976eb4b7260af474dd63409520da8e7254f1a7d6e1ccf897530e48bfe735->leave($__internal_16da976eb4b7260af474dd63409520da8e7254f1a7d6e1ccf897530e48bfe735_prof);

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
