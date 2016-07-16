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
        $__internal_20d07734a19d7209a0b9a8a742275ac9a04d8740b42aff2845a54995455e9b3c = $this->env->getExtension("native_profiler");
        $__internal_20d07734a19d7209a0b9a8a742275ac9a04d8740b42aff2845a54995455e9b3c->enter($__internal_20d07734a19d7209a0b9a8a742275ac9a04d8740b42aff2845a54995455e9b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_20d07734a19d7209a0b9a8a742275ac9a04d8740b42aff2845a54995455e9b3c->leave($__internal_20d07734a19d7209a0b9a8a742275ac9a04d8740b42aff2845a54995455e9b3c_prof);

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
