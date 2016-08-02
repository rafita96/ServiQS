<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4c344b97538399a67532da0afca27645ce63827c4e4a9159d5a4e9b86d402929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_d81d70b2da105fbfe93b74901d573220aa01224d4fd045f59d7f1f9e473077f6 = $this->env->getExtension("native_profiler");
        $__internal_d81d70b2da105fbfe93b74901d573220aa01224d4fd045f59d7f1f9e473077f6->enter($__internal_d81d70b2da105fbfe93b74901d573220aa01224d4fd045f59d7f1f9e473077f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d81d70b2da105fbfe93b74901d573220aa01224d4fd045f59d7f1f9e473077f6->leave($__internal_d81d70b2da105fbfe93b74901d573220aa01224d4fd045f59d7f1f9e473077f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6aa13b4b176df82d432646d9ec2389661f3961efd65c65e516d8cc24d69f47f3 = $this->env->getExtension("native_profiler");
        $__internal_6aa13b4b176df82d432646d9ec2389661f3961efd65c65e516d8cc24d69f47f3->enter($__internal_6aa13b4b176df82d432646d9ec2389661f3961efd65c65e516d8cc24d69f47f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6aa13b4b176df82d432646d9ec2389661f3961efd65c65e516d8cc24d69f47f3->leave($__internal_6aa13b4b176df82d432646d9ec2389661f3961efd65c65e516d8cc24d69f47f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
