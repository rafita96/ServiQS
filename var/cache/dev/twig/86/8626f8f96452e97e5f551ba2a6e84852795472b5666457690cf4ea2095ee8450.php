<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e21b66ef40a3924ceba7f2b5929e30c07586efa7dff8d2b1e88b72e8ba5a6d2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_bc7759b50bfab929c18c157d0880f8fa676351fd20c7db330bef62eeeec9c946 = $this->env->getExtension("native_profiler");
        $__internal_bc7759b50bfab929c18c157d0880f8fa676351fd20c7db330bef62eeeec9c946->enter($__internal_bc7759b50bfab929c18c157d0880f8fa676351fd20c7db330bef62eeeec9c946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc7759b50bfab929c18c157d0880f8fa676351fd20c7db330bef62eeeec9c946->leave($__internal_bc7759b50bfab929c18c157d0880f8fa676351fd20c7db330bef62eeeec9c946_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f958951b28ef2c32e57e026daf083198d5bf9c7b71976edffea502dc976a6314 = $this->env->getExtension("native_profiler");
        $__internal_f958951b28ef2c32e57e026daf083198d5bf9c7b71976edffea502dc976a6314->enter($__internal_f958951b28ef2c32e57e026daf083198d5bf9c7b71976edffea502dc976a6314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f958951b28ef2c32e57e026daf083198d5bf9c7b71976edffea502dc976a6314->leave($__internal_f958951b28ef2c32e57e026daf083198d5bf9c7b71976edffea502dc976a6314_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
