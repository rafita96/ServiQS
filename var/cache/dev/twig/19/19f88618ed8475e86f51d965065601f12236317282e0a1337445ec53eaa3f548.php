<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1787ce34451802f2ff21751c52e083248356705e789b2529cdc09beddf4ec6c6 extends Twig_Template
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
        $__internal_9720e6587573c05a2559367a2fb8ff08fa482d5f8d7537cf5c27648861d43b78 = $this->env->getExtension("native_profiler");
        $__internal_9720e6587573c05a2559367a2fb8ff08fa482d5f8d7537cf5c27648861d43b78->enter($__internal_9720e6587573c05a2559367a2fb8ff08fa482d5f8d7537cf5c27648861d43b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9720e6587573c05a2559367a2fb8ff08fa482d5f8d7537cf5c27648861d43b78->leave($__internal_9720e6587573c05a2559367a2fb8ff08fa482d5f8d7537cf5c27648861d43b78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
