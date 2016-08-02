<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_897b1566ce5871257ec5fe5609571d6a4439c2a7f17625621111403f58dfb15c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_e6fecde791d77b7874d6165f6ecfb4e92d6feabffb36e401182a8d9c18fcab3d = $this->env->getExtension("native_profiler");
        $__internal_e6fecde791d77b7874d6165f6ecfb4e92d6feabffb36e401182a8d9c18fcab3d->enter($__internal_e6fecde791d77b7874d6165f6ecfb4e92d6feabffb36e401182a8d9c18fcab3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6fecde791d77b7874d6165f6ecfb4e92d6feabffb36e401182a8d9c18fcab3d->leave($__internal_e6fecde791d77b7874d6165f6ecfb4e92d6feabffb36e401182a8d9c18fcab3d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e978624c05b8997e1febc3bafe42451825d92156c4391ddd7be540013ed4ce80 = $this->env->getExtension("native_profiler");
        $__internal_e978624c05b8997e1febc3bafe42451825d92156c4391ddd7be540013ed4ce80->enter($__internal_e978624c05b8997e1febc3bafe42451825d92156c4391ddd7be540013ed4ce80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e978624c05b8997e1febc3bafe42451825d92156c4391ddd7be540013ed4ce80->leave($__internal_e978624c05b8997e1febc3bafe42451825d92156c4391ddd7be540013ed4ce80_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
