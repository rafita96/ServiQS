<?php

/* @HeysoftMenu/Default/index.html.twig */
class __TwigTemplate_718db9a61719d47ac84753c321ac03c7d76ac0b0c7c2be2eb968fd7bf8bb4ac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@HeysoftMenu/Default/index.html.twig", 1);
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
        $__internal_a6ccc854e26a0a7b17943ea6d189f535a35fd61ee8d1ab587f6836065831f458 = $this->env->getExtension("native_profiler");
        $__internal_a6ccc854e26a0a7b17943ea6d189f535a35fd61ee8d1ab587f6836065831f458->enter($__internal_a6ccc854e26a0a7b17943ea6d189f535a35fd61ee8d1ab587f6836065831f458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HeysoftMenu/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6ccc854e26a0a7b17943ea6d189f535a35fd61ee8d1ab587f6836065831f458->leave($__internal_a6ccc854e26a0a7b17943ea6d189f535a35fd61ee8d1ab587f6836065831f458_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc82463aa8f9346dfaf8ce75428f1e44f303768dda96751aa322037daf3065c7 = $this->env->getExtension("native_profiler");
        $__internal_dc82463aa8f9346dfaf8ce75428f1e44f303768dda96751aa322037daf3065c7->enter($__internal_dc82463aa8f9346dfaf8ce75428f1e44f303768dda96751aa322037daf3065c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "hola
";
        
        $__internal_dc82463aa8f9346dfaf8ce75428f1e44f303768dda96751aa322037daf3065c7->leave($__internal_dc82463aa8f9346dfaf8ce75428f1e44f303768dda96751aa322037daf3065c7_prof);

    }

    public function getTemplateName()
    {
        return "@HeysoftMenu/Default/index.html.twig";
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
