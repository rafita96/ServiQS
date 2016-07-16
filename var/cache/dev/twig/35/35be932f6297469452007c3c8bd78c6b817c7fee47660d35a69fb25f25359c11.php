<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d712d145e6691e2b9a62dbfa839a4ca4a63949478b7e2b75c2d8125198c0aff2 extends Twig_Template
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
        $__internal_48e24e0cf0fb11159286b1f82038312c5ebcb19d68d668c122ee76e385221366 = $this->env->getExtension("native_profiler");
        $__internal_48e24e0cf0fb11159286b1f82038312c5ebcb19d68d668c122ee76e385221366->enter($__internal_48e24e0cf0fb11159286b1f82038312c5ebcb19d68d668c122ee76e385221366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_48e24e0cf0fb11159286b1f82038312c5ebcb19d68d668c122ee76e385221366->leave($__internal_48e24e0cf0fb11159286b1f82038312c5ebcb19d68d668c122ee76e385221366_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
