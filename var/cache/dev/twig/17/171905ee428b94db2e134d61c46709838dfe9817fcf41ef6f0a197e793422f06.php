<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_7cfb4336d2b4c1f98a429c06e104f836d717d8dfe6a0196e57ff17a9bf52d928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d5ddbd882cbf71b708dda7cc9a350df80744cd1e242ecfbd25123982297d498 = $this->env->getExtension("native_profiler");
        $__internal_5d5ddbd882cbf71b708dda7cc9a350df80744cd1e242ecfbd25123982297d498->enter($__internal_5d5ddbd882cbf71b708dda7cc9a350df80744cd1e242ecfbd25123982297d498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d5ddbd882cbf71b708dda7cc9a350df80744cd1e242ecfbd25123982297d498->leave($__internal_5d5ddbd882cbf71b708dda7cc9a350df80744cd1e242ecfbd25123982297d498_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bced76ccef2d0ad4686772d0e9ca2ca9a8aa1af2bf2ef88430b629355e9455b5 = $this->env->getExtension("native_profiler");
        $__internal_bced76ccef2d0ad4686772d0e9ca2ca9a8aa1af2bf2ef88430b629355e9455b5->enter($__internal_bced76ccef2d0ad4686772d0e9ca2ca9a8aa1af2bf2ef88430b629355e9455b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_bced76ccef2d0ad4686772d0e9ca2ca9a8aa1af2bf2ef88430b629355e9455b5->leave($__internal_bced76ccef2d0ad4686772d0e9ca2ca9a8aa1af2bf2ef88430b629355e9455b5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
