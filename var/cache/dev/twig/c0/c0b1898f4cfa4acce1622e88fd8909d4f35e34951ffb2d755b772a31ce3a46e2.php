<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_21f3ea97979f0f978cfe19fbc30d983277d00054a0e185d02220034bf96d8d15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_eab9b6a2d0c847744faaa77530f55a4f706aee0e17fbb916b989ff43bbd181f3 = $this->env->getExtension("native_profiler");
        $__internal_eab9b6a2d0c847744faaa77530f55a4f706aee0e17fbb916b989ff43bbd181f3->enter($__internal_eab9b6a2d0c847744faaa77530f55a4f706aee0e17fbb916b989ff43bbd181f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eab9b6a2d0c847744faaa77530f55a4f706aee0e17fbb916b989ff43bbd181f3->leave($__internal_eab9b6a2d0c847744faaa77530f55a4f706aee0e17fbb916b989ff43bbd181f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d47ddb3b50449251821d59e92b2b2a3b305a8b6b7d816458368db6d7f27954ff = $this->env->getExtension("native_profiler");
        $__internal_d47ddb3b50449251821d59e92b2b2a3b305a8b6b7d816458368db6d7f27954ff->enter($__internal_d47ddb3b50449251821d59e92b2b2a3b305a8b6b7d816458368db6d7f27954ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d47ddb3b50449251821d59e92b2b2a3b305a8b6b7d816458368db6d7f27954ff->leave($__internal_d47ddb3b50449251821d59e92b2b2a3b305a8b6b7d816458368db6d7f27954ff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
