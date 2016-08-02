<?php

/* @HeysoftMenu/Default/index.html.twig */
class __TwigTemplate_718db9a61719d47ac84753c321ac03c7d76ac0b0c7c2be2eb968fd7bf8bb4ac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@HeysoftMenu/Default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca21515e01485db7fa8c617468d7938554d5bbe8a39f219bd7304f26fba016fd = $this->env->getExtension("native_profiler");
        $__internal_ca21515e01485db7fa8c617468d7938554d5bbe8a39f219bd7304f26fba016fd->enter($__internal_ca21515e01485db7fa8c617468d7938554d5bbe8a39f219bd7304f26fba016fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HeysoftMenu/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca21515e01485db7fa8c617468d7938554d5bbe8a39f219bd7304f26fba016fd->leave($__internal_ca21515e01485db7fa8c617468d7938554d5bbe8a39f219bd7304f26fba016fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bdedcb9ce20727e13cea4b497e133fa8ee0c01282f8339ceb8dddc913df00a2 = $this->env->getExtension("native_profiler");
        $__internal_7bdedcb9ce20727e13cea4b497e133fa8ee0c01282f8339ceb8dddc913df00a2->enter($__internal_7bdedcb9ce20727e13cea4b497e133fa8ee0c01282f8339ceb8dddc913df00a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Hello
";
        
        $__internal_7bdedcb9ce20727e13cea4b497e133fa8ee0c01282f8339ceb8dddc913df00a2->leave($__internal_7bdedcb9ce20727e13cea4b497e133fa8ee0c01282f8339ceb8dddc913df00a2_prof);

    }

    public function getTemplateName()
    {
        return "@HeysoftMenu/Default/index.html.twig";
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
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/* Hello*/
/* {% endblock %}*/
