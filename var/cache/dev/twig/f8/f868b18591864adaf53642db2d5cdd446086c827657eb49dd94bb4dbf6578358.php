<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ac76fe625c5c4d30e90dae2e4c26582d1a12188b6c6a4939dd40b72c6b425da3 extends Twig_Template
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
        $__internal_abd8eb7de24154c8855818e1c7a8b78f873946aa552252a309a1aaee451c97f9 = $this->env->getExtension("native_profiler");
        $__internal_abd8eb7de24154c8855818e1c7a8b78f873946aa552252a309a1aaee451c97f9->enter($__internal_abd8eb7de24154c8855818e1c7a8b78f873946aa552252a309a1aaee451c97f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_abd8eb7de24154c8855818e1c7a8b78f873946aa552252a309a1aaee451c97f9->leave($__internal_abd8eb7de24154c8855818e1c7a8b78f873946aa552252a309a1aaee451c97f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
