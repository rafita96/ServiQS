<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_42e53078d9b48de474d8a2dbfff4d112cafdecc72339e735978564e3f77029e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_28936670274482252db0482997f930bd8cbd8e0bf1e945473fc5baf11ce0ce93 = $this->env->getExtension("native_profiler");
        $__internal_28936670274482252db0482997f930bd8cbd8e0bf1e945473fc5baf11ce0ce93->enter($__internal_28936670274482252db0482997f930bd8cbd8e0bf1e945473fc5baf11ce0ce93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28936670274482252db0482997f930bd8cbd8e0bf1e945473fc5baf11ce0ce93->leave($__internal_28936670274482252db0482997f930bd8cbd8e0bf1e945473fc5baf11ce0ce93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_774a27e46e8a9b618c95f38f2aa71df7a85b6388ec234742ed3ff65eac7d1b88 = $this->env->getExtension("native_profiler");
        $__internal_774a27e46e8a9b618c95f38f2aa71df7a85b6388ec234742ed3ff65eac7d1b88->enter($__internal_774a27e46e8a9b618c95f38f2aa71df7a85b6388ec234742ed3ff65eac7d1b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_774a27e46e8a9b618c95f38f2aa71df7a85b6388ec234742ed3ff65eac7d1b88->leave($__internal_774a27e46e8a9b618c95f38f2aa71df7a85b6388ec234742ed3ff65eac7d1b88_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
