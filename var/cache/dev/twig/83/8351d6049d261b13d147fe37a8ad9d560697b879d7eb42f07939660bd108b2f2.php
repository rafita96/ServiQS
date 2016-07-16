<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a5440a710a95325cec592f70208ad938aa181715291b54b6505de7894c0a22dd extends Twig_Template
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
        $__internal_650557f7f3c49c68bef1743ca5345fa5f561523d9069c8136a5b07cf507b4f99 = $this->env->getExtension("native_profiler");
        $__internal_650557f7f3c49c68bef1743ca5345fa5f561523d9069c8136a5b07cf507b4f99->enter($__internal_650557f7f3c49c68bef1743ca5345fa5f561523d9069c8136a5b07cf507b4f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_650557f7f3c49c68bef1743ca5345fa5f561523d9069c8136a5b07cf507b4f99->leave($__internal_650557f7f3c49c68bef1743ca5345fa5f561523d9069c8136a5b07cf507b4f99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
