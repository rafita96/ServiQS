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
        $__internal_73ed96852f122bf5859feb3c81f82b589c29699bd04a3dd89ac24d99b4e8523e = $this->env->getExtension("native_profiler");
        $__internal_73ed96852f122bf5859feb3c81f82b589c29699bd04a3dd89ac24d99b4e8523e->enter($__internal_73ed96852f122bf5859feb3c81f82b589c29699bd04a3dd89ac24d99b4e8523e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_73ed96852f122bf5859feb3c81f82b589c29699bd04a3dd89ac24d99b4e8523e->leave($__internal_73ed96852f122bf5859feb3c81f82b589c29699bd04a3dd89ac24d99b4e8523e_prof);

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
