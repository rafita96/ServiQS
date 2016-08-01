<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ba2dbf9d3d363087c00525d4eae5f8e2f3c8b1014f196e7fec2ca4d7b7c545b2 extends Twig_Template
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
        $__internal_125842a59fa6f17ef2ecdb944b845189215038100b6e66b61d8c2a9a4970383f = $this->env->getExtension("native_profiler");
        $__internal_125842a59fa6f17ef2ecdb944b845189215038100b6e66b61d8c2a9a4970383f->enter($__internal_125842a59fa6f17ef2ecdb944b845189215038100b6e66b61d8c2a9a4970383f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_125842a59fa6f17ef2ecdb944b845189215038100b6e66b61d8c2a9a4970383f->leave($__internal_125842a59fa6f17ef2ecdb944b845189215038100b6e66b61d8c2a9a4970383f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
