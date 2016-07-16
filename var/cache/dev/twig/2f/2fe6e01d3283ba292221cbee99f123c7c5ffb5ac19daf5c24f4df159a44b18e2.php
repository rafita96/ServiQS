<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9066b0cd12d94d92aec9ae46b70d03b9804bbf5fe389bc427f2e75e8c4b35f65 extends Twig_Template
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
        $__internal_9648259b039a4ae51a6858005fed6eff91058643fa2a9194953f7960913da30c = $this->env->getExtension("native_profiler");
        $__internal_9648259b039a4ae51a6858005fed6eff91058643fa2a9194953f7960913da30c->enter($__internal_9648259b039a4ae51a6858005fed6eff91058643fa2a9194953f7960913da30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9648259b039a4ae51a6858005fed6eff91058643fa2a9194953f7960913da30c->leave($__internal_9648259b039a4ae51a6858005fed6eff91058643fa2a9194953f7960913da30c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
