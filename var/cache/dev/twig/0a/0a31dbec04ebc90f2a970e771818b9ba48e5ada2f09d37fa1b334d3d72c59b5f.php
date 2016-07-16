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
        $__internal_efe97a11e8c3f7b58f96a057afde20c45c8ca0a64c22d52f592b8d3932449e8a = $this->env->getExtension("native_profiler");
        $__internal_efe97a11e8c3f7b58f96a057afde20c45c8ca0a64c22d52f592b8d3932449e8a->enter($__internal_efe97a11e8c3f7b58f96a057afde20c45c8ca0a64c22d52f592b8d3932449e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_efe97a11e8c3f7b58f96a057afde20c45c8ca0a64c22d52f592b8d3932449e8a->leave($__internal_efe97a11e8c3f7b58f96a057afde20c45c8ca0a64c22d52f592b8d3932449e8a_prof);

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
