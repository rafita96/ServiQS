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
        $__internal_05c2afbe40b5eff6af04eb887a5ca0848e39933778b81911e57103c7a893a2c6 = $this->env->getExtension("native_profiler");
        $__internal_05c2afbe40b5eff6af04eb887a5ca0848e39933778b81911e57103c7a893a2c6->enter($__internal_05c2afbe40b5eff6af04eb887a5ca0848e39933778b81911e57103c7a893a2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_05c2afbe40b5eff6af04eb887a5ca0848e39933778b81911e57103c7a893a2c6->leave($__internal_05c2afbe40b5eff6af04eb887a5ca0848e39933778b81911e57103c7a893a2c6_prof);

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
