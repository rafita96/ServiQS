<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_1dce8850720af526d7f23137be13410741a1b79d6ff1a028da6c93c2706f9f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_1b3d47bc32d4456e14d31edd3cbedc32c173094256314442c0864d588594ea60 = $this->env->getExtension("native_profiler");
        $__internal_1b3d47bc32d4456e14d31edd3cbedc32c173094256314442c0864d588594ea60->enter($__internal_1b3d47bc32d4456e14d31edd3cbedc32c173094256314442c0864d588594ea60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b3d47bc32d4456e14d31edd3cbedc32c173094256314442c0864d588594ea60->leave($__internal_1b3d47bc32d4456e14d31edd3cbedc32c173094256314442c0864d588594ea60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7195f2187ed41c9ff8e428843370fcea31d301007608390dd0fd4d3f7a3e8c9f = $this->env->getExtension("native_profiler");
        $__internal_7195f2187ed41c9ff8e428843370fcea31d301007608390dd0fd4d3f7a3e8c9f->enter($__internal_7195f2187ed41c9ff8e428843370fcea31d301007608390dd0fd4d3f7a3e8c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_7195f2187ed41c9ff8e428843370fcea31d301007608390dd0fd4d3f7a3e8c9f->leave($__internal_7195f2187ed41c9ff8e428843370fcea31d301007608390dd0fd4d3f7a3e8c9f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
