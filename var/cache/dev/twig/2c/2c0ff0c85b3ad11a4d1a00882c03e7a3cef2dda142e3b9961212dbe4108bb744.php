<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_3cd73d83019f11a9de5d607db90e9a2ded21c46ae874660fcdf409843d76245b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_f7f1c7b0bfd146d423a92da373ba5895fa84325e065250a58192e9f8db45674d = $this->env->getExtension("native_profiler");
        $__internal_f7f1c7b0bfd146d423a92da373ba5895fa84325e065250a58192e9f8db45674d->enter($__internal_f7f1c7b0bfd146d423a92da373ba5895fa84325e065250a58192e9f8db45674d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7f1c7b0bfd146d423a92da373ba5895fa84325e065250a58192e9f8db45674d->leave($__internal_f7f1c7b0bfd146d423a92da373ba5895fa84325e065250a58192e9f8db45674d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91618a4814ef03c1e6b9b9e63043dfbc752c0f20018e65e130b957a1771c7a2e = $this->env->getExtension("native_profiler");
        $__internal_91618a4814ef03c1e6b9b9e63043dfbc752c0f20018e65e130b957a1771c7a2e->enter($__internal_91618a4814ef03c1e6b9b9e63043dfbc752c0f20018e65e130b957a1771c7a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_91618a4814ef03c1e6b9b9e63043dfbc752c0f20018e65e130b957a1771c7a2e->leave($__internal_91618a4814ef03c1e6b9b9e63043dfbc752c0f20018e65e130b957a1771c7a2e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
