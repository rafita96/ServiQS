<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c29bdd8785711ef630dd76b7c86c32d853f195d1199742cb6c8f4afc451c19c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d9813dcfe8ddbccf955ee1c4c85052e84fb81763aee49559fbae29a3709e1c45 = $this->env->getExtension("native_profiler");
        $__internal_d9813dcfe8ddbccf955ee1c4c85052e84fb81763aee49559fbae29a3709e1c45->enter($__internal_d9813dcfe8ddbccf955ee1c4c85052e84fb81763aee49559fbae29a3709e1c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9813dcfe8ddbccf955ee1c4c85052e84fb81763aee49559fbae29a3709e1c45->leave($__internal_d9813dcfe8ddbccf955ee1c4c85052e84fb81763aee49559fbae29a3709e1c45_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7dab87e650bcbac1208279e873bfca561739b3960a2bbf3cb07ab12d7847eef4 = $this->env->getExtension("native_profiler");
        $__internal_7dab87e650bcbac1208279e873bfca561739b3960a2bbf3cb07ab12d7847eef4->enter($__internal_7dab87e650bcbac1208279e873bfca561739b3960a2bbf3cb07ab12d7847eef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_7dab87e650bcbac1208279e873bfca561739b3960a2bbf3cb07ab12d7847eef4->leave($__internal_7dab87e650bcbac1208279e873bfca561739b3960a2bbf3cb07ab12d7847eef4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
