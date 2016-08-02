<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8646e514f90a5891b9c96fdc6acfdda13dc9880fb08232358a299ac465bc4d59 extends Twig_Template
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
        $__internal_0b8b931302066f62486cfb12a4e5a9560d930d52eb9444dee369646a6768902d = $this->env->getExtension("native_profiler");
        $__internal_0b8b931302066f62486cfb12a4e5a9560d930d52eb9444dee369646a6768902d->enter($__internal_0b8b931302066f62486cfb12a4e5a9560d930d52eb9444dee369646a6768902d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0b8b931302066f62486cfb12a4e5a9560d930d52eb9444dee369646a6768902d->leave($__internal_0b8b931302066f62486cfb12a4e5a9560d930d52eb9444dee369646a6768902d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
