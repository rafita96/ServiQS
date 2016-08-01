<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_f447e5e792a78d5a15a329f62e24ae64727b10216639f8ab3f529a29964af28e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_81fc544be704f17f40b0722b140580d322c08a5a8fd09e8a726c88bdfdc9434e = $this->env->getExtension("native_profiler");
        $__internal_81fc544be704f17f40b0722b140580d322c08a5a8fd09e8a726c88bdfdc9434e->enter($__internal_81fc544be704f17f40b0722b140580d322c08a5a8fd09e8a726c88bdfdc9434e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fc544be704f17f40b0722b140580d322c08a5a8fd09e8a726c88bdfdc9434e->leave($__internal_81fc544be704f17f40b0722b140580d322c08a5a8fd09e8a726c88bdfdc9434e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3149b0f44004bca6ad8b609ca22b69090f997808867b7c983fa6a84ffee91024 = $this->env->getExtension("native_profiler");
        $__internal_3149b0f44004bca6ad8b609ca22b69090f997808867b7c983fa6a84ffee91024->enter($__internal_3149b0f44004bca6ad8b609ca22b69090f997808867b7c983fa6a84ffee91024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_3149b0f44004bca6ad8b609ca22b69090f997808867b7c983fa6a84ffee91024->leave($__internal_3149b0f44004bca6ad8b609ca22b69090f997808867b7c983fa6a84ffee91024_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
