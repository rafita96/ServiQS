<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_7fb5c42fd026193e12055b1f89d055e9040e04800d0a01fe04ee0d39749c77be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_ab62020f45161e0c5142e9b8cd853388ff19f371ee23c7127bf3e6ef6aad77e7 = $this->env->getExtension("native_profiler");
        $__internal_ab62020f45161e0c5142e9b8cd853388ff19f371ee23c7127bf3e6ef6aad77e7->enter($__internal_ab62020f45161e0c5142e9b8cd853388ff19f371ee23c7127bf3e6ef6aad77e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab62020f45161e0c5142e9b8cd853388ff19f371ee23c7127bf3e6ef6aad77e7->leave($__internal_ab62020f45161e0c5142e9b8cd853388ff19f371ee23c7127bf3e6ef6aad77e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3502f9db399d277ce438c09cf4030b50410bc335b3ca5b2d4f285cfe1d2ac7a3 = $this->env->getExtension("native_profiler");
        $__internal_3502f9db399d277ce438c09cf4030b50410bc335b3ca5b2d4f285cfe1d2ac7a3->enter($__internal_3502f9db399d277ce438c09cf4030b50410bc335b3ca5b2d4f285cfe1d2ac7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_3502f9db399d277ce438c09cf4030b50410bc335b3ca5b2d4f285cfe1d2ac7a3->leave($__internal_3502f9db399d277ce438c09cf4030b50410bc335b3ca5b2d4f285cfe1d2ac7a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
