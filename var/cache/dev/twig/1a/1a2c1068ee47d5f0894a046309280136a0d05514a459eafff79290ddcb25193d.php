<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a6fe4e07b0c94808ca1ec94c2a17b3b91af83e3e36a84191344fc64e96edc677 extends Twig_Template
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
        $__internal_9cc2b5ae5864e19b070ff08eebc282ffbd7693f2643451efe41b91063861ad18 = $this->env->getExtension("native_profiler");
        $__internal_9cc2b5ae5864e19b070ff08eebc282ffbd7693f2643451efe41b91063861ad18->enter($__internal_9cc2b5ae5864e19b070ff08eebc282ffbd7693f2643451efe41b91063861ad18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9cc2b5ae5864e19b070ff08eebc282ffbd7693f2643451efe41b91063861ad18->leave($__internal_9cc2b5ae5864e19b070ff08eebc282ffbd7693f2643451efe41b91063861ad18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
