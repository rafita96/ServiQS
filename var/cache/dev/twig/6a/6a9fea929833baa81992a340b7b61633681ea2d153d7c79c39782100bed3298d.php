<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f07c93ebdf513de8b5d91262d5d6cac01bf7d430034cfa41c97b2b207711bedf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0e97642fc3b2b76a7b620c17a2d9347131373e588748ed251b13c8ff2bc2cf61 = $this->env->getExtension("native_profiler");
        $__internal_0e97642fc3b2b76a7b620c17a2d9347131373e588748ed251b13c8ff2bc2cf61->enter($__internal_0e97642fc3b2b76a7b620c17a2d9347131373e588748ed251b13c8ff2bc2cf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e97642fc3b2b76a7b620c17a2d9347131373e588748ed251b13c8ff2bc2cf61->leave($__internal_0e97642fc3b2b76a7b620c17a2d9347131373e588748ed251b13c8ff2bc2cf61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37f0d1d0b304e2592a0ce128098e1d0da982c9f8509a317149c333d702637ea9 = $this->env->getExtension("native_profiler");
        $__internal_37f0d1d0b304e2592a0ce128098e1d0da982c9f8509a317149c333d702637ea9->enter($__internal_37f0d1d0b304e2592a0ce128098e1d0da982c9f8509a317149c333d702637ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_37f0d1d0b304e2592a0ce128098e1d0da982c9f8509a317149c333d702637ea9->leave($__internal_37f0d1d0b304e2592a0ce128098e1d0da982c9f8509a317149c333d702637ea9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
