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
        $__internal_359c2729f27f01760aa1416018ebdb99c5c999e1d6618952ba393dab16a80be7 = $this->env->getExtension("native_profiler");
        $__internal_359c2729f27f01760aa1416018ebdb99c5c999e1d6618952ba393dab16a80be7->enter($__internal_359c2729f27f01760aa1416018ebdb99c5c999e1d6618952ba393dab16a80be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_359c2729f27f01760aa1416018ebdb99c5c999e1d6618952ba393dab16a80be7->leave($__internal_359c2729f27f01760aa1416018ebdb99c5c999e1d6618952ba393dab16a80be7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da50f9e18f4c49a9f81155c861ac864d171b9eac47a6359d1e99db13cbc72f8f = $this->env->getExtension("native_profiler");
        $__internal_da50f9e18f4c49a9f81155c861ac864d171b9eac47a6359d1e99db13cbc72f8f->enter($__internal_da50f9e18f4c49a9f81155c861ac864d171b9eac47a6359d1e99db13cbc72f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_da50f9e18f4c49a9f81155c861ac864d171b9eac47a6359d1e99db13cbc72f8f->leave($__internal_da50f9e18f4c49a9f81155c861ac864d171b9eac47a6359d1e99db13cbc72f8f_prof);

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
