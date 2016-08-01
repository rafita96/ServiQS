<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_01cbb7d6269b12e5ce993a259ba226f376592375db175654964c6430653d3974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_366dc1d923d6c7f7eafac050aa77666a9029760e0795dbaa0c75875baeac719b = $this->env->getExtension("native_profiler");
        $__internal_366dc1d923d6c7f7eafac050aa77666a9029760e0795dbaa0c75875baeac719b->enter($__internal_366dc1d923d6c7f7eafac050aa77666a9029760e0795dbaa0c75875baeac719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_366dc1d923d6c7f7eafac050aa77666a9029760e0795dbaa0c75875baeac719b->leave($__internal_366dc1d923d6c7f7eafac050aa77666a9029760e0795dbaa0c75875baeac719b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9e62a9730b1c0bb60a4dbc76bd7021d4e352794cc3e3f02a309eb0e0500d9d4 = $this->env->getExtension("native_profiler");
        $__internal_f9e62a9730b1c0bb60a4dbc76bd7021d4e352794cc3e3f02a309eb0e0500d9d4->enter($__internal_f9e62a9730b1c0bb60a4dbc76bd7021d4e352794cc3e3f02a309eb0e0500d9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_f9e62a9730b1c0bb60a4dbc76bd7021d4e352794cc3e3f02a309eb0e0500d9d4->leave($__internal_f9e62a9730b1c0bb60a4dbc76bd7021d4e352794cc3e3f02a309eb0e0500d9d4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
