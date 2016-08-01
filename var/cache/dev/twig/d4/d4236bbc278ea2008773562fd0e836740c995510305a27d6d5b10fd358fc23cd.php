<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_87c7007ce6752750cb59f1e9124ef94cb40ac0e1b00fc3e75a76df2bf164243c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c7012a379d9e5f7ba6eb462917715638472e41d3bfbc6d8508126219b1d79465 = $this->env->getExtension("native_profiler");
        $__internal_c7012a379d9e5f7ba6eb462917715638472e41d3bfbc6d8508126219b1d79465->enter($__internal_c7012a379d9e5f7ba6eb462917715638472e41d3bfbc6d8508126219b1d79465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7012a379d9e5f7ba6eb462917715638472e41d3bfbc6d8508126219b1d79465->leave($__internal_c7012a379d9e5f7ba6eb462917715638472e41d3bfbc6d8508126219b1d79465_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f115a90e7169aa16f686ae0083e1f37a5a4008575fad0f62c051829c523fd31e = $this->env->getExtension("native_profiler");
        $__internal_f115a90e7169aa16f686ae0083e1f37a5a4008575fad0f62c051829c523fd31e->enter($__internal_f115a90e7169aa16f686ae0083e1f37a5a4008575fad0f62c051829c523fd31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f115a90e7169aa16f686ae0083e1f37a5a4008575fad0f62c051829c523fd31e->leave($__internal_f115a90e7169aa16f686ae0083e1f37a5a4008575fad0f62c051829c523fd31e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
