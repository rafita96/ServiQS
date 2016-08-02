<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e87164ecec7566482a1a5313cf8c42ab91b676b776b663d5443f614ed9b43cfd extends Twig_Template
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
        $__internal_87743eabc472f98cbe7d5df21740d68d704e8cfc488631c3669fbd3addfe943b = $this->env->getExtension("native_profiler");
        $__internal_87743eabc472f98cbe7d5df21740d68d704e8cfc488631c3669fbd3addfe943b->enter($__internal_87743eabc472f98cbe7d5df21740d68d704e8cfc488631c3669fbd3addfe943b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_87743eabc472f98cbe7d5df21740d68d704e8cfc488631c3669fbd3addfe943b->leave($__internal_87743eabc472f98cbe7d5df21740d68d704e8cfc488631c3669fbd3addfe943b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
