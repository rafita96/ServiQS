<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_21f3ea97979f0f978cfe19fbc30d983277d00054a0e185d02220034bf96d8d15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_5a28eb262c32979751880997ded13c1399f1bf40091b871d0c07ae06522b16a4 = $this->env->getExtension("native_profiler");
        $__internal_5a28eb262c32979751880997ded13c1399f1bf40091b871d0c07ae06522b16a4->enter($__internal_5a28eb262c32979751880997ded13c1399f1bf40091b871d0c07ae06522b16a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a28eb262c32979751880997ded13c1399f1bf40091b871d0c07ae06522b16a4->leave($__internal_5a28eb262c32979751880997ded13c1399f1bf40091b871d0c07ae06522b16a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99fb96fd67d87ffcfe891142d8ccca05f6339df7a07d47328bfbc56a53189ae1 = $this->env->getExtension("native_profiler");
        $__internal_99fb96fd67d87ffcfe891142d8ccca05f6339df7a07d47328bfbc56a53189ae1->enter($__internal_99fb96fd67d87ffcfe891142d8ccca05f6339df7a07d47328bfbc56a53189ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_99fb96fd67d87ffcfe891142d8ccca05f6339df7a07d47328bfbc56a53189ae1->leave($__internal_99fb96fd67d87ffcfe891142d8ccca05f6339df7a07d47328bfbc56a53189ae1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
