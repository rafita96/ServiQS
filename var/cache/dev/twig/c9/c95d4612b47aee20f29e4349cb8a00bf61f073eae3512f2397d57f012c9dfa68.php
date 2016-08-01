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
        $__internal_d1daa1a776bc69f2e7494e8652fa1dd711fa9e5ca81fdb1dc5d2346e9838b555 = $this->env->getExtension("native_profiler");
        $__internal_d1daa1a776bc69f2e7494e8652fa1dd711fa9e5ca81fdb1dc5d2346e9838b555->enter($__internal_d1daa1a776bc69f2e7494e8652fa1dd711fa9e5ca81fdb1dc5d2346e9838b555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d1daa1a776bc69f2e7494e8652fa1dd711fa9e5ca81fdb1dc5d2346e9838b555->leave($__internal_d1daa1a776bc69f2e7494e8652fa1dd711fa9e5ca81fdb1dc5d2346e9838b555_prof);

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
