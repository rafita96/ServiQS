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
        $__internal_53a2db7136336458ebdb81da82891c84162cde74dcc9e43f7eed072e7ccaae79 = $this->env->getExtension("native_profiler");
        $__internal_53a2db7136336458ebdb81da82891c84162cde74dcc9e43f7eed072e7ccaae79->enter($__internal_53a2db7136336458ebdb81da82891c84162cde74dcc9e43f7eed072e7ccaae79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_53a2db7136336458ebdb81da82891c84162cde74dcc9e43f7eed072e7ccaae79->leave($__internal_53a2db7136336458ebdb81da82891c84162cde74dcc9e43f7eed072e7ccaae79_prof);

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
