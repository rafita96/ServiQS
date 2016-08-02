<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bcc8305ff553273238708a35f2be42814506edd57461f02dbe3f0faf47fde35d extends Twig_Template
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
        $__internal_740592f482e24d966fbc197bbb854c066d37458b6a46dea4bf83a3c10a26a54a = $this->env->getExtension("native_profiler");
        $__internal_740592f482e24d966fbc197bbb854c066d37458b6a46dea4bf83a3c10a26a54a->enter($__internal_740592f482e24d966fbc197bbb854c066d37458b6a46dea4bf83a3c10a26a54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_740592f482e24d966fbc197bbb854c066d37458b6a46dea4bf83a3c10a26a54a->leave($__internal_740592f482e24d966fbc197bbb854c066d37458b6a46dea4bf83a3c10a26a54a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
