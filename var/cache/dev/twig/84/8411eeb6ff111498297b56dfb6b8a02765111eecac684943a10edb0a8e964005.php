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
        $__internal_20b5a5d8af9d696c651e01c2070dbac8fab26cddb66080353b59c6cd952f1e3b = $this->env->getExtension("native_profiler");
        $__internal_20b5a5d8af9d696c651e01c2070dbac8fab26cddb66080353b59c6cd952f1e3b->enter($__internal_20b5a5d8af9d696c651e01c2070dbac8fab26cddb66080353b59c6cd952f1e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_20b5a5d8af9d696c651e01c2070dbac8fab26cddb66080353b59c6cd952f1e3b->leave($__internal_20b5a5d8af9d696c651e01c2070dbac8fab26cddb66080353b59c6cd952f1e3b_prof);

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
