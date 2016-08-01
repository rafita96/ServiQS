<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a3a75ee1e5b064a0edfeca741357dcda1543af5a4739bb0d81aa0694918f7940 extends Twig_Template
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
        $__internal_f0b78d246870331ba180b39a70f54bfa73f7ba277181e3c6e1f950544d2ed38f = $this->env->getExtension("native_profiler");
        $__internal_f0b78d246870331ba180b39a70f54bfa73f7ba277181e3c6e1f950544d2ed38f->enter($__internal_f0b78d246870331ba180b39a70f54bfa73f7ba277181e3c6e1f950544d2ed38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f0b78d246870331ba180b39a70f54bfa73f7ba277181e3c6e1f950544d2ed38f->leave($__internal_f0b78d246870331ba180b39a70f54bfa73f7ba277181e3c6e1f950544d2ed38f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
