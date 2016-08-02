<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_86df3ad96e9325acce5dd7c09fe0225b935702bce955e0cb860e8e2a2d50ce78 extends Twig_Template
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
        $__internal_26df850623f18baa2365689850e6e7749a9f0584de9d3fed01b59c4c75451b2c = $this->env->getExtension("native_profiler");
        $__internal_26df850623f18baa2365689850e6e7749a9f0584de9d3fed01b59c4c75451b2c->enter($__internal_26df850623f18baa2365689850e6e7749a9f0584de9d3fed01b59c4c75451b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_26df850623f18baa2365689850e6e7749a9f0584de9d3fed01b59c4c75451b2c->leave($__internal_26df850623f18baa2365689850e6e7749a9f0584de9d3fed01b59c4c75451b2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
