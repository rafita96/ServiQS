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
        $__internal_7c18240873524ca1ce57df8191b70cd743fbd2275e5ac7271099a9280813e9c1 = $this->env->getExtension("native_profiler");
        $__internal_7c18240873524ca1ce57df8191b70cd743fbd2275e5ac7271099a9280813e9c1->enter($__internal_7c18240873524ca1ce57df8191b70cd743fbd2275e5ac7271099a9280813e9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7c18240873524ca1ce57df8191b70cd743fbd2275e5ac7271099a9280813e9c1->leave($__internal_7c18240873524ca1ce57df8191b70cd743fbd2275e5ac7271099a9280813e9c1_prof);

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
