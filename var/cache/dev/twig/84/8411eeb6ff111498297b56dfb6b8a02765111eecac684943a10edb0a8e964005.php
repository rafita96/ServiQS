<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d4ba5db8fdeda4e51e8611ca29933f341d2d93f55c6f4b66ea586c96ce2ffabf extends Twig_Template
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
        $__internal_24a06c0dc5984b670c7d09704bbbb4f195b42772b54b46cbe9d329a38e9bb3e7 = $this->env->getExtension("native_profiler");
        $__internal_24a06c0dc5984b670c7d09704bbbb4f195b42772b54b46cbe9d329a38e9bb3e7->enter($__internal_24a06c0dc5984b670c7d09704bbbb4f195b42772b54b46cbe9d329a38e9bb3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_24a06c0dc5984b670c7d09704bbbb4f195b42772b54b46cbe9d329a38e9bb3e7->leave($__internal_24a06c0dc5984b670c7d09704bbbb4f195b42772b54b46cbe9d329a38e9bb3e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
