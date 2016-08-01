<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7c9bfe847ea4edf867abd8d207b7d3b7cd7a8af265f30cc432a0b04a0819d02b extends Twig_Template
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
        $__internal_0d84503efd1fa3a9a0996c164f6734e16214bfdd45b2a52f7ba819f00f11b0bf = $this->env->getExtension("native_profiler");
        $__internal_0d84503efd1fa3a9a0996c164f6734e16214bfdd45b2a52f7ba819f00f11b0bf->enter($__internal_0d84503efd1fa3a9a0996c164f6734e16214bfdd45b2a52f7ba819f00f11b0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0d84503efd1fa3a9a0996c164f6734e16214bfdd45b2a52f7ba819f00f11b0bf->leave($__internal_0d84503efd1fa3a9a0996c164f6734e16214bfdd45b2a52f7ba819f00f11b0bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
