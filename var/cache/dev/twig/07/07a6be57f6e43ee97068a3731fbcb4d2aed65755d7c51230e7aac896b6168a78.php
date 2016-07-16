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
        $__internal_7e38339a316959fd0a576a2746091180b773f3461955591eaad66703cf5ecfce = $this->env->getExtension("native_profiler");
        $__internal_7e38339a316959fd0a576a2746091180b773f3461955591eaad66703cf5ecfce->enter($__internal_7e38339a316959fd0a576a2746091180b773f3461955591eaad66703cf5ecfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7e38339a316959fd0a576a2746091180b773f3461955591eaad66703cf5ecfce->leave($__internal_7e38339a316959fd0a576a2746091180b773f3461955591eaad66703cf5ecfce_prof);

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
