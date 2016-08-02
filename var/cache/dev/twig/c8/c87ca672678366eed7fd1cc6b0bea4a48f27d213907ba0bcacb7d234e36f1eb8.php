<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_42e53078d9b48de474d8a2dbfff4d112cafdecc72339e735978564e3f77029e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_04dd5c9450d2e5846e1ce25ee1c79dc0e9802806c43f9db7f681de3c134d3229 = $this->env->getExtension("native_profiler");
        $__internal_04dd5c9450d2e5846e1ce25ee1c79dc0e9802806c43f9db7f681de3c134d3229->enter($__internal_04dd5c9450d2e5846e1ce25ee1c79dc0e9802806c43f9db7f681de3c134d3229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04dd5c9450d2e5846e1ce25ee1c79dc0e9802806c43f9db7f681de3c134d3229->leave($__internal_04dd5c9450d2e5846e1ce25ee1c79dc0e9802806c43f9db7f681de3c134d3229_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f2caa87490fc9adb98c20835d945451b400a514d19d2dec6613e23f6382c03d = $this->env->getExtension("native_profiler");
        $__internal_6f2caa87490fc9adb98c20835d945451b400a514d19d2dec6613e23f6382c03d->enter($__internal_6f2caa87490fc9adb98c20835d945451b400a514d19d2dec6613e23f6382c03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_6f2caa87490fc9adb98c20835d945451b400a514d19d2dec6613e23f6382c03d->leave($__internal_6f2caa87490fc9adb98c20835d945451b400a514d19d2dec6613e23f6382c03d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
