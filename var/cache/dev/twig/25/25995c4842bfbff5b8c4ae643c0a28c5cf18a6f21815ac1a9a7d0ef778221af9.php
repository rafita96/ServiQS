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
        $__internal_12f234e9b0a53c97ad42c5f2cc5868fdc5297ed221ae1183d7e9909b6cd688cf = $this->env->getExtension("native_profiler");
        $__internal_12f234e9b0a53c97ad42c5f2cc5868fdc5297ed221ae1183d7e9909b6cd688cf->enter($__internal_12f234e9b0a53c97ad42c5f2cc5868fdc5297ed221ae1183d7e9909b6cd688cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12f234e9b0a53c97ad42c5f2cc5868fdc5297ed221ae1183d7e9909b6cd688cf->leave($__internal_12f234e9b0a53c97ad42c5f2cc5868fdc5297ed221ae1183d7e9909b6cd688cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0533e9fe947b0da4cff62fd0543f1cfa5ee417a69429bedcd02e5d022366acdd = $this->env->getExtension("native_profiler");
        $__internal_0533e9fe947b0da4cff62fd0543f1cfa5ee417a69429bedcd02e5d022366acdd->enter($__internal_0533e9fe947b0da4cff62fd0543f1cfa5ee417a69429bedcd02e5d022366acdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_0533e9fe947b0da4cff62fd0543f1cfa5ee417a69429bedcd02e5d022366acdd->leave($__internal_0533e9fe947b0da4cff62fd0543f1cfa5ee417a69429bedcd02e5d022366acdd_prof);

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
