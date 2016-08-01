<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_897b1566ce5871257ec5fe5609571d6a4439c2a7f17625621111403f58dfb15c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_a07a3f436a1ae997db27abab018cf2072df4718f94e73b03cfe840011d1c1878 = $this->env->getExtension("native_profiler");
        $__internal_a07a3f436a1ae997db27abab018cf2072df4718f94e73b03cfe840011d1c1878->enter($__internal_a07a3f436a1ae997db27abab018cf2072df4718f94e73b03cfe840011d1c1878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a07a3f436a1ae997db27abab018cf2072df4718f94e73b03cfe840011d1c1878->leave($__internal_a07a3f436a1ae997db27abab018cf2072df4718f94e73b03cfe840011d1c1878_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf7c55f30440bbaace40c7ade1b131af5971f42f9b545fdd13a9c116f23fe8b2 = $this->env->getExtension("native_profiler");
        $__internal_cf7c55f30440bbaace40c7ade1b131af5971f42f9b545fdd13a9c116f23fe8b2->enter($__internal_cf7c55f30440bbaace40c7ade1b131af5971f42f9b545fdd13a9c116f23fe8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_cf7c55f30440bbaace40c7ade1b131af5971f42f9b545fdd13a9c116f23fe8b2->leave($__internal_cf7c55f30440bbaace40c7ade1b131af5971f42f9b545fdd13a9c116f23fe8b2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
