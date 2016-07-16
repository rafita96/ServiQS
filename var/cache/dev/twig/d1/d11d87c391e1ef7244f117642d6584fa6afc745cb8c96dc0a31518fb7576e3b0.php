<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1382da5a146a16c7d92239e30bf8a8365fd6222438cb67d7c45669dfa516e16d extends Twig_Template
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
        $__internal_c3151aae04eff58a13ba55accb2e2a35d1acc949690f31e12bbc40034cb383d0 = $this->env->getExtension("native_profiler");
        $__internal_c3151aae04eff58a13ba55accb2e2a35d1acc949690f31e12bbc40034cb383d0->enter($__internal_c3151aae04eff58a13ba55accb2e2a35d1acc949690f31e12bbc40034cb383d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c3151aae04eff58a13ba55accb2e2a35d1acc949690f31e12bbc40034cb383d0->leave($__internal_c3151aae04eff58a13ba55accb2e2a35d1acc949690f31e12bbc40034cb383d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
