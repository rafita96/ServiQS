<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f98a7986b01265e8497be054e0fe49107c9b860d05bb1ebffeafb6426f4f8bf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4b1826e8a70039bf5d9032d643efcdfeaf81e8368be1be46226af8305cd7998 = $this->env->getExtension("native_profiler");
        $__internal_e4b1826e8a70039bf5d9032d643efcdfeaf81e8368be1be46226af8305cd7998->enter($__internal_e4b1826e8a70039bf5d9032d643efcdfeaf81e8368be1be46226af8305cd7998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e4b1826e8a70039bf5d9032d643efcdfeaf81e8368be1be46226af8305cd7998->leave($__internal_e4b1826e8a70039bf5d9032d643efcdfeaf81e8368be1be46226af8305cd7998_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a3f52a74ba28be9c3e1c0d0f3d08593d5b6b9ece2cd6f5a779e5cc028350ebf = $this->env->getExtension("native_profiler");
        $__internal_4a3f52a74ba28be9c3e1c0d0f3d08593d5b6b9ece2cd6f5a779e5cc028350ebf->enter($__internal_4a3f52a74ba28be9c3e1c0d0f3d08593d5b6b9ece2cd6f5a779e5cc028350ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4a3f52a74ba28be9c3e1c0d0f3d08593d5b6b9ece2cd6f5a779e5cc028350ebf->leave($__internal_4a3f52a74ba28be9c3e1c0d0f3d08593d5b6b9ece2cd6f5a779e5cc028350ebf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
