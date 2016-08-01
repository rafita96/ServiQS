<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_506f247e8817472b380282954557f26bb244add7ece0aa6a00423fe08126851f extends Twig_Template
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
        $__internal_b3744628ef0ab75c5507b5454c311aafb6b605ccd63ad9a2633aa5c109145af5 = $this->env->getExtension("native_profiler");
        $__internal_b3744628ef0ab75c5507b5454c311aafb6b605ccd63ad9a2633aa5c109145af5->enter($__internal_b3744628ef0ab75c5507b5454c311aafb6b605ccd63ad9a2633aa5c109145af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b3744628ef0ab75c5507b5454c311aafb6b605ccd63ad9a2633aa5c109145af5->leave($__internal_b3744628ef0ab75c5507b5454c311aafb6b605ccd63ad9a2633aa5c109145af5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
