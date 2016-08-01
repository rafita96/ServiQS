<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_4c715765b53941e01bb542736c20d158765e29152ce991758a4e0ec5d15551e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_e67d86327cc38033708215f53e8ffaeea6065593c92e7b26137a7674def50c88 = $this->env->getExtension("native_profiler");
        $__internal_e67d86327cc38033708215f53e8ffaeea6065593c92e7b26137a7674def50c88->enter($__internal_e67d86327cc38033708215f53e8ffaeea6065593c92e7b26137a7674def50c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e67d86327cc38033708215f53e8ffaeea6065593c92e7b26137a7674def50c88->leave($__internal_e67d86327cc38033708215f53e8ffaeea6065593c92e7b26137a7674def50c88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5f7290b0b908e6e0790e57b2034c9973170942923987435ce6e707859c499c9 = $this->env->getExtension("native_profiler");
        $__internal_e5f7290b0b908e6e0790e57b2034c9973170942923987435ce6e707859c499c9->enter($__internal_e5f7290b0b908e6e0790e57b2034c9973170942923987435ce6e707859c499c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_e5f7290b0b908e6e0790e57b2034c9973170942923987435ce6e707859c499c9->leave($__internal_e5f7290b0b908e6e0790e57b2034c9973170942923987435ce6e707859c499c9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
