<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cd46bd0c6dc5dd57babc509c1297c48b778953cefbd96be93cb2896de2d596e6 extends Twig_Template
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
        $__internal_b4fb318dbe8c53b52601fb1c2ca2a2b0824110d2c189230fb7c4b708eca1b1fd = $this->env->getExtension("native_profiler");
        $__internal_b4fb318dbe8c53b52601fb1c2ca2a2b0824110d2c189230fb7c4b708eca1b1fd->enter($__internal_b4fb318dbe8c53b52601fb1c2ca2a2b0824110d2c189230fb7c4b708eca1b1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b4fb318dbe8c53b52601fb1c2ca2a2b0824110d2c189230fb7c4b708eca1b1fd->leave($__internal_b4fb318dbe8c53b52601fb1c2ca2a2b0824110d2c189230fb7c4b708eca1b1fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
