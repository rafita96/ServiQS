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
        $__internal_6889c8b4a1e4c1bb5afcc0c81b1647d840d7e322c976c954e20746c66d84704c = $this->env->getExtension("native_profiler");
        $__internal_6889c8b4a1e4c1bb5afcc0c81b1647d840d7e322c976c954e20746c66d84704c->enter($__internal_6889c8b4a1e4c1bb5afcc0c81b1647d840d7e322c976c954e20746c66d84704c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6889c8b4a1e4c1bb5afcc0c81b1647d840d7e322c976c954e20746c66d84704c->leave($__internal_6889c8b4a1e4c1bb5afcc0c81b1647d840d7e322c976c954e20746c66d84704c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc8c4b92265bc180eef6565aacd84137b1e56041fda5eac81dc18b6f1e02d521 = $this->env->getExtension("native_profiler");
        $__internal_dc8c4b92265bc180eef6565aacd84137b1e56041fda5eac81dc18b6f1e02d521->enter($__internal_dc8c4b92265bc180eef6565aacd84137b1e56041fda5eac81dc18b6f1e02d521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_dc8c4b92265bc180eef6565aacd84137b1e56041fda5eac81dc18b6f1e02d521->leave($__internal_dc8c4b92265bc180eef6565aacd84137b1e56041fda5eac81dc18b6f1e02d521_prof);

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
