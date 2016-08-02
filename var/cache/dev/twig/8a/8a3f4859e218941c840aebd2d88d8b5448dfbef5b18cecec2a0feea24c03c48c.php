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
        $__internal_d1bd934eaeb8e0b465de777fdfe8a6ef263ae0b0e49571fe282df0b716c97838 = $this->env->getExtension("native_profiler");
        $__internal_d1bd934eaeb8e0b465de777fdfe8a6ef263ae0b0e49571fe282df0b716c97838->enter($__internal_d1bd934eaeb8e0b465de777fdfe8a6ef263ae0b0e49571fe282df0b716c97838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_d1bd934eaeb8e0b465de777fdfe8a6ef263ae0b0e49571fe282df0b716c97838->leave($__internal_d1bd934eaeb8e0b465de777fdfe8a6ef263ae0b0e49571fe282df0b716c97838_prof);

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
