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
        $__internal_7a8a007ff86cab3786e64a284d1a87d8c9e0181f84a1db49a2abb0eade25ad2b = $this->env->getExtension("native_profiler");
        $__internal_7a8a007ff86cab3786e64a284d1a87d8c9e0181f84a1db49a2abb0eade25ad2b->enter($__internal_7a8a007ff86cab3786e64a284d1a87d8c9e0181f84a1db49a2abb0eade25ad2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7a8a007ff86cab3786e64a284d1a87d8c9e0181f84a1db49a2abb0eade25ad2b->leave($__internal_7a8a007ff86cab3786e64a284d1a87d8c9e0181f84a1db49a2abb0eade25ad2b_prof);

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
