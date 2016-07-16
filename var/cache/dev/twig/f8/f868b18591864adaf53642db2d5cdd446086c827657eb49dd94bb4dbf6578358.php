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
        $__internal_0154b3fb3694b4a985ddec2b7b73141b6e6701c7dd98ece500c7fd3e2a30558b = $this->env->getExtension("native_profiler");
        $__internal_0154b3fb3694b4a985ddec2b7b73141b6e6701c7dd98ece500c7fd3e2a30558b->enter($__internal_0154b3fb3694b4a985ddec2b7b73141b6e6701c7dd98ece500c7fd3e2a30558b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0154b3fb3694b4a985ddec2b7b73141b6e6701c7dd98ece500c7fd3e2a30558b->leave($__internal_0154b3fb3694b4a985ddec2b7b73141b6e6701c7dd98ece500c7fd3e2a30558b_prof);

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
