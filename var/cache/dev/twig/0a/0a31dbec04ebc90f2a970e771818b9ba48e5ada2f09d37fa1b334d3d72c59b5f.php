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
        $__internal_8212cc3485d52e8a67f31a75936cbfcd38ddcddf2ea9797e5d0cf19d30eb11f0 = $this->env->getExtension("native_profiler");
        $__internal_8212cc3485d52e8a67f31a75936cbfcd38ddcddf2ea9797e5d0cf19d30eb11f0->enter($__internal_8212cc3485d52e8a67f31a75936cbfcd38ddcddf2ea9797e5d0cf19d30eb11f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8212cc3485d52e8a67f31a75936cbfcd38ddcddf2ea9797e5d0cf19d30eb11f0->leave($__internal_8212cc3485d52e8a67f31a75936cbfcd38ddcddf2ea9797e5d0cf19d30eb11f0_prof);

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
