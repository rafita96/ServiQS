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
        $__internal_82b47750065ba40404cdbf2de62c8bbd2de2080f87974ac0feb0b781e27f6b1d = $this->env->getExtension("native_profiler");
        $__internal_82b47750065ba40404cdbf2de62c8bbd2de2080f87974ac0feb0b781e27f6b1d->enter($__internal_82b47750065ba40404cdbf2de62c8bbd2de2080f87974ac0feb0b781e27f6b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_82b47750065ba40404cdbf2de62c8bbd2de2080f87974ac0feb0b781e27f6b1d->leave($__internal_82b47750065ba40404cdbf2de62c8bbd2de2080f87974ac0feb0b781e27f6b1d_prof);

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
