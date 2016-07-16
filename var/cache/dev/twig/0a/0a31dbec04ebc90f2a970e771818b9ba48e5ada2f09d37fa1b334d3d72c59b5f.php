<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ee745fe427148f1344f3443c07675d414127521b2a076d29d145105fbb333e58 extends Twig_Template
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
        $__internal_71e29fcadc36df95b7f80707b00ec3deca3c880748a39f4b9e26ee8bc9c1213b = $this->env->getExtension("native_profiler");
        $__internal_71e29fcadc36df95b7f80707b00ec3deca3c880748a39f4b9e26ee8bc9c1213b->enter($__internal_71e29fcadc36df95b7f80707b00ec3deca3c880748a39f4b9e26ee8bc9c1213b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_71e29fcadc36df95b7f80707b00ec3deca3c880748a39f4b9e26ee8bc9c1213b->leave($__internal_71e29fcadc36df95b7f80707b00ec3deca3c880748a39f4b9e26ee8bc9c1213b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
