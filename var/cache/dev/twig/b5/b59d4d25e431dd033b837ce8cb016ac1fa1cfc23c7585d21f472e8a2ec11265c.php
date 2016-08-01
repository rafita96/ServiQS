<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_39cb593f64d8e1031e15e193404b3a2cfcd91cc2e5dd21fab21d4854988a47fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_54c9cf4d1ee995a7791ca54ab18ab79456f4947725b27021e6aab8315e44c71e = $this->env->getExtension("native_profiler");
        $__internal_54c9cf4d1ee995a7791ca54ab18ab79456f4947725b27021e6aab8315e44c71e->enter($__internal_54c9cf4d1ee995a7791ca54ab18ab79456f4947725b27021e6aab8315e44c71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54c9cf4d1ee995a7791ca54ab18ab79456f4947725b27021e6aab8315e44c71e->leave($__internal_54c9cf4d1ee995a7791ca54ab18ab79456f4947725b27021e6aab8315e44c71e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9ad420339f9593ccfc43acb712d7628693512c3a0ee22775ea29d14b04e3a1e = $this->env->getExtension("native_profiler");
        $__internal_c9ad420339f9593ccfc43acb712d7628693512c3a0ee22775ea29d14b04e3a1e->enter($__internal_c9ad420339f9593ccfc43acb712d7628693512c3a0ee22775ea29d14b04e3a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_c9ad420339f9593ccfc43acb712d7628693512c3a0ee22775ea29d14b04e3a1e->leave($__internal_c9ad420339f9593ccfc43acb712d7628693512c3a0ee22775ea29d14b04e3a1e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
