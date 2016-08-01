<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_869e52993ac7ac3b7d38cdbdfa5cab9f209b726d37832da2465490017f61f545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_80f871631a19bdb6df1238317f734bc2aff3084a8f53b9d2788b042e66bb371b = $this->env->getExtension("native_profiler");
        $__internal_80f871631a19bdb6df1238317f734bc2aff3084a8f53b9d2788b042e66bb371b->enter($__internal_80f871631a19bdb6df1238317f734bc2aff3084a8f53b9d2788b042e66bb371b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80f871631a19bdb6df1238317f734bc2aff3084a8f53b9d2788b042e66bb371b->leave($__internal_80f871631a19bdb6df1238317f734bc2aff3084a8f53b9d2788b042e66bb371b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58aff26dd8a25c2452f3b3df4a9876558f248e96e85715a2765b038ff50c11a3 = $this->env->getExtension("native_profiler");
        $__internal_58aff26dd8a25c2452f3b3df4a9876558f248e96e85715a2765b038ff50c11a3->enter($__internal_58aff26dd8a25c2452f3b3df4a9876558f248e96e85715a2765b038ff50c11a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_58aff26dd8a25c2452f3b3df4a9876558f248e96e85715a2765b038ff50c11a3->leave($__internal_58aff26dd8a25c2452f3b3df4a9876558f248e96e85715a2765b038ff50c11a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
