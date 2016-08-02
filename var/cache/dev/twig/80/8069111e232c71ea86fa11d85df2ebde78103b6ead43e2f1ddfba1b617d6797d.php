<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_632c89c62a625e24554d24f60b0533196894511a23cc33bb6a7bdfdfe3460505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_21f8b11e61040e71189c37aaf283ba49e2534675b0264d2574d7eaae6783aa33 = $this->env->getExtension("native_profiler");
        $__internal_21f8b11e61040e71189c37aaf283ba49e2534675b0264d2574d7eaae6783aa33->enter($__internal_21f8b11e61040e71189c37aaf283ba49e2534675b0264d2574d7eaae6783aa33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21f8b11e61040e71189c37aaf283ba49e2534675b0264d2574d7eaae6783aa33->leave($__internal_21f8b11e61040e71189c37aaf283ba49e2534675b0264d2574d7eaae6783aa33_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66edcbbba3206de388b967998c8b3f9cc045d44478556cefe98ab27cf93bf141 = $this->env->getExtension("native_profiler");
        $__internal_66edcbbba3206de388b967998c8b3f9cc045d44478556cefe98ab27cf93bf141->enter($__internal_66edcbbba3206de388b967998c8b3f9cc045d44478556cefe98ab27cf93bf141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_66edcbbba3206de388b967998c8b3f9cc045d44478556cefe98ab27cf93bf141->leave($__internal_66edcbbba3206de388b967998c8b3f9cc045d44478556cefe98ab27cf93bf141_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
