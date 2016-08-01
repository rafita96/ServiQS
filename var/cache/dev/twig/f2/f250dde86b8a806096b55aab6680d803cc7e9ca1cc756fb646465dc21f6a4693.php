<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_ec766aff0e78d4294ae854b882b3bf8a6d0be7224bf82c51a0c0bb602fc9cdf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_02c6a1de380c391a1ad69dedd87babdf0b0fa323d2c1b308d46be76573c608c9 = $this->env->getExtension("native_profiler");
        $__internal_02c6a1de380c391a1ad69dedd87babdf0b0fa323d2c1b308d46be76573c608c9->enter($__internal_02c6a1de380c391a1ad69dedd87babdf0b0fa323d2c1b308d46be76573c608c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02c6a1de380c391a1ad69dedd87babdf0b0fa323d2c1b308d46be76573c608c9->leave($__internal_02c6a1de380c391a1ad69dedd87babdf0b0fa323d2c1b308d46be76573c608c9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11ae2dd54cb9443508c663556af5f57ee34590a3f75f9c4b40c98063a29bb45b = $this->env->getExtension("native_profiler");
        $__internal_11ae2dd54cb9443508c663556af5f57ee34590a3f75f9c4b40c98063a29bb45b->enter($__internal_11ae2dd54cb9443508c663556af5f57ee34590a3f75f9c4b40c98063a29bb45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_11ae2dd54cb9443508c663556af5f57ee34590a3f75f9c4b40c98063a29bb45b->leave($__internal_11ae2dd54cb9443508c663556af5f57ee34590a3f75f9c4b40c98063a29bb45b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
