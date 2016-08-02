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
        $__internal_9cbc18b7ec109f0302baaa0bb85345374daca95e42157504c0976d632ef80649 = $this->env->getExtension("native_profiler");
        $__internal_9cbc18b7ec109f0302baaa0bb85345374daca95e42157504c0976d632ef80649->enter($__internal_9cbc18b7ec109f0302baaa0bb85345374daca95e42157504c0976d632ef80649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9cbc18b7ec109f0302baaa0bb85345374daca95e42157504c0976d632ef80649->leave($__internal_9cbc18b7ec109f0302baaa0bb85345374daca95e42157504c0976d632ef80649_prof);

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
