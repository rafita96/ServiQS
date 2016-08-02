<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_61ae4df3e8e0e2133f1e5100041132ea87a831dc1ba58d67d5d78c98eab4ff3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_931d9b0f1fec2d00903e986b812a59b7152adeba8d67dcd812cdb3acf2e487d3 = $this->env->getExtension("native_profiler");
        $__internal_931d9b0f1fec2d00903e986b812a59b7152adeba8d67dcd812cdb3acf2e487d3->enter($__internal_931d9b0f1fec2d00903e986b812a59b7152adeba8d67dcd812cdb3acf2e487d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_931d9b0f1fec2d00903e986b812a59b7152adeba8d67dcd812cdb3acf2e487d3->leave($__internal_931d9b0f1fec2d00903e986b812a59b7152adeba8d67dcd812cdb3acf2e487d3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a88253fb4f313861ec0856cc77f405adb31fb0be0f1af5efa43ee4e92a9dd296 = $this->env->getExtension("native_profiler");
        $__internal_a88253fb4f313861ec0856cc77f405adb31fb0be0f1af5efa43ee4e92a9dd296->enter($__internal_a88253fb4f313861ec0856cc77f405adb31fb0be0f1af5efa43ee4e92a9dd296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a88253fb4f313861ec0856cc77f405adb31fb0be0f1af5efa43ee4e92a9dd296->leave($__internal_a88253fb4f313861ec0856cc77f405adb31fb0be0f1af5efa43ee4e92a9dd296_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
