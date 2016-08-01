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
        $__internal_1f6daf7a804081c914cc0c2347feb40a7e58b2a5327e6fdaf35e8543310b0c5c = $this->env->getExtension("native_profiler");
        $__internal_1f6daf7a804081c914cc0c2347feb40a7e58b2a5327e6fdaf35e8543310b0c5c->enter($__internal_1f6daf7a804081c914cc0c2347feb40a7e58b2a5327e6fdaf35e8543310b0c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1f6daf7a804081c914cc0c2347feb40a7e58b2a5327e6fdaf35e8543310b0c5c->leave($__internal_1f6daf7a804081c914cc0c2347feb40a7e58b2a5327e6fdaf35e8543310b0c5c_prof);

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
