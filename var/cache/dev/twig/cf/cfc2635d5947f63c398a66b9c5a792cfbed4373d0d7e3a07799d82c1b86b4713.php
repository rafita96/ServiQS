<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f79b6b06c970561c41aa8c87ece2cc6d1efc065f525cc25e8243be934c36cbb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e78f1a644efc825850a7dba22983f99cad60444f47afbb57573654dac731caa3 = $this->env->getExtension("native_profiler");
        $__internal_e78f1a644efc825850a7dba22983f99cad60444f47afbb57573654dac731caa3->enter($__internal_e78f1a644efc825850a7dba22983f99cad60444f47afbb57573654dac731caa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e78f1a644efc825850a7dba22983f99cad60444f47afbb57573654dac731caa3->leave($__internal_e78f1a644efc825850a7dba22983f99cad60444f47afbb57573654dac731caa3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e8b660ad57800459a4600a078d01d77e4d760f5989f4bccddfd408d08c6417e = $this->env->getExtension("native_profiler");
        $__internal_3e8b660ad57800459a4600a078d01d77e4d760f5989f4bccddfd408d08c6417e->enter($__internal_3e8b660ad57800459a4600a078d01d77e4d760f5989f4bccddfd408d08c6417e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3e8b660ad57800459a4600a078d01d77e4d760f5989f4bccddfd408d08c6417e->leave($__internal_3e8b660ad57800459a4600a078d01d77e4d760f5989f4bccddfd408d08c6417e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
