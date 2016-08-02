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
        $__internal_38c69ec165a1ab0562b6fc127ecfba5f482dcd226be37a7bbe50f5618e0d6491 = $this->env->getExtension("native_profiler");
        $__internal_38c69ec165a1ab0562b6fc127ecfba5f482dcd226be37a7bbe50f5618e0d6491->enter($__internal_38c69ec165a1ab0562b6fc127ecfba5f482dcd226be37a7bbe50f5618e0d6491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_38c69ec165a1ab0562b6fc127ecfba5f482dcd226be37a7bbe50f5618e0d6491->leave($__internal_38c69ec165a1ab0562b6fc127ecfba5f482dcd226be37a7bbe50f5618e0d6491_prof);

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
