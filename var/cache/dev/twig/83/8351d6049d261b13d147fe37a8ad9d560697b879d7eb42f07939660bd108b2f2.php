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
        $__internal_112b98802d206d5f88c000a32d31bd05d42b2b748cc561057408aad012dad545 = $this->env->getExtension("native_profiler");
        $__internal_112b98802d206d5f88c000a32d31bd05d42b2b748cc561057408aad012dad545->enter($__internal_112b98802d206d5f88c000a32d31bd05d42b2b748cc561057408aad012dad545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_112b98802d206d5f88c000a32d31bd05d42b2b748cc561057408aad012dad545->leave($__internal_112b98802d206d5f88c000a32d31bd05d42b2b748cc561057408aad012dad545_prof);

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
