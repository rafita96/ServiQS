<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3ca753f340c6e5956fc1eb2a6400c08e73c718ba5439121d8510d75b21e8f353 extends Twig_Template
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
        $__internal_75030c71ab1bb26cf9ebafeb046f991003af8aa14601aed0464dd491b88198a8 = $this->env->getExtension("native_profiler");
        $__internal_75030c71ab1bb26cf9ebafeb046f991003af8aa14601aed0464dd491b88198a8->enter($__internal_75030c71ab1bb26cf9ebafeb046f991003af8aa14601aed0464dd491b88198a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_75030c71ab1bb26cf9ebafeb046f991003af8aa14601aed0464dd491b88198a8->leave($__internal_75030c71ab1bb26cf9ebafeb046f991003af8aa14601aed0464dd491b88198a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
