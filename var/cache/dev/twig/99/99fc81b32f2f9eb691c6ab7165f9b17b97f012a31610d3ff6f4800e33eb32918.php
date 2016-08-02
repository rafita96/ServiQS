<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_f1e36f00e5d5fe2d837b3fbc4d5f2d8bdcb25bc9fb1be55608a24e09615d7efb extends Twig_Template
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
        $__internal_8f63c15a77e5907e2bb9850129f0d7fd004e89d133fabe7b856566d9cee6df70 = $this->env->getExtension("native_profiler");
        $__internal_8f63c15a77e5907e2bb9850129f0d7fd004e89d133fabe7b856566d9cee6df70->enter($__internal_8f63c15a77e5907e2bb9850129f0d7fd004e89d133fabe7b856566d9cee6df70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8f63c15a77e5907e2bb9850129f0d7fd004e89d133fabe7b856566d9cee6df70->leave($__internal_8f63c15a77e5907e2bb9850129f0d7fd004e89d133fabe7b856566d9cee6df70_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
