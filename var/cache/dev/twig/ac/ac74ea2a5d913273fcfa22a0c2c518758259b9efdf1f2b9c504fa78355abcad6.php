<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_967949fe12593d03380ca6632f723e9073c556e2124c324d672a31e48b524e80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_0edbb82698e50504a1c45ac14932dea3ce89caa7bcf8ff6bfa8615205ac35517 = $this->env->getExtension("native_profiler");
        $__internal_0edbb82698e50504a1c45ac14932dea3ce89caa7bcf8ff6bfa8615205ac35517->enter($__internal_0edbb82698e50504a1c45ac14932dea3ce89caa7bcf8ff6bfa8615205ac35517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0edbb82698e50504a1c45ac14932dea3ce89caa7bcf8ff6bfa8615205ac35517->leave($__internal_0edbb82698e50504a1c45ac14932dea3ce89caa7bcf8ff6bfa8615205ac35517_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd2a584f741705d61b48a9081e3ff5eaf6bf7ae585a45b22300e85037aa34b8d = $this->env->getExtension("native_profiler");
        $__internal_dd2a584f741705d61b48a9081e3ff5eaf6bf7ae585a45b22300e85037aa34b8d->enter($__internal_dd2a584f741705d61b48a9081e3ff5eaf6bf7ae585a45b22300e85037aa34b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_dd2a584f741705d61b48a9081e3ff5eaf6bf7ae585a45b22300e85037aa34b8d->leave($__internal_dd2a584f741705d61b48a9081e3ff5eaf6bf7ae585a45b22300e85037aa34b8d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
