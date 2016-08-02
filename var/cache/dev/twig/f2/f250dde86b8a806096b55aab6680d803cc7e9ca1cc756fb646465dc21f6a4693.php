<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_ec766aff0e78d4294ae854b882b3bf8a6d0be7224bf82c51a0c0bb602fc9cdf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_1a98f1eadcbc3f09990d037c58f364c45608e7a24d382962282bab0256d8d14e = $this->env->getExtension("native_profiler");
        $__internal_1a98f1eadcbc3f09990d037c58f364c45608e7a24d382962282bab0256d8d14e->enter($__internal_1a98f1eadcbc3f09990d037c58f364c45608e7a24d382962282bab0256d8d14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a98f1eadcbc3f09990d037c58f364c45608e7a24d382962282bab0256d8d14e->leave($__internal_1a98f1eadcbc3f09990d037c58f364c45608e7a24d382962282bab0256d8d14e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fff9c2c9065bc5719111cf6f6b527e86f167c7b796f71c1c002c47484a43be13 = $this->env->getExtension("native_profiler");
        $__internal_fff9c2c9065bc5719111cf6f6b527e86f167c7b796f71c1c002c47484a43be13->enter($__internal_fff9c2c9065bc5719111cf6f6b527e86f167c7b796f71c1c002c47484a43be13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fff9c2c9065bc5719111cf6f6b527e86f167c7b796f71c1c002c47484a43be13->leave($__internal_fff9c2c9065bc5719111cf6f6b527e86f167c7b796f71c1c002c47484a43be13_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
