<?php

/* HeysoftMenuBundle:Default:index.html.twig */
class __TwigTemplate_391a20b0734a41fdf0b55aaa5b78f39c60eee50e151deea4b30e258dfab282d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "HeysoftMenuBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52d9bac8147e9d9a1eb85063621fdbd58f2963a7e19df2d6bdf43c23a123bc50 = $this->env->getExtension("native_profiler");
        $__internal_52d9bac8147e9d9a1eb85063621fdbd58f2963a7e19df2d6bdf43c23a123bc50->enter($__internal_52d9bac8147e9d9a1eb85063621fdbd58f2963a7e19df2d6bdf43c23a123bc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeysoftMenuBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d9bac8147e9d9a1eb85063621fdbd58f2963a7e19df2d6bdf43c23a123bc50->leave($__internal_52d9bac8147e9d9a1eb85063621fdbd58f2963a7e19df2d6bdf43c23a123bc50_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e56a31aa2691f49cf1d7bcfb5e30300cee0c8ece42a93aa8adb50e9f4a322fdc = $this->env->getExtension("native_profiler");
        $__internal_e56a31aa2691f49cf1d7bcfb5e30300cee0c8ece42a93aa8adb50e9f4a322fdc->enter($__internal_e56a31aa2691f49cf1d7bcfb5e30300cee0c8ece42a93aa8adb50e9f4a322fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "hola
";
        
        $__internal_e56a31aa2691f49cf1d7bcfb5e30300cee0c8ece42a93aa8adb50e9f4a322fdc->leave($__internal_e56a31aa2691f49cf1d7bcfb5e30300cee0c8ece42a93aa8adb50e9f4a322fdc_prof);

    }

    public function getTemplateName()
    {
        return "HeysoftMenuBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/* hola*/
/* {% endblock %}*/
