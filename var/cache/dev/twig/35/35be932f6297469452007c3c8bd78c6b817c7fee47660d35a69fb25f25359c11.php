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
        $__internal_bc36a3d0822fca859f0156a946225e3a3f8bec5cc7caaf69f385014d5de60531 = $this->env->getExtension("native_profiler");
        $__internal_bc36a3d0822fca859f0156a946225e3a3f8bec5cc7caaf69f385014d5de60531->enter($__internal_bc36a3d0822fca859f0156a946225e3a3f8bec5cc7caaf69f385014d5de60531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bc36a3d0822fca859f0156a946225e3a3f8bec5cc7caaf69f385014d5de60531->leave($__internal_bc36a3d0822fca859f0156a946225e3a3f8bec5cc7caaf69f385014d5de60531_prof);

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