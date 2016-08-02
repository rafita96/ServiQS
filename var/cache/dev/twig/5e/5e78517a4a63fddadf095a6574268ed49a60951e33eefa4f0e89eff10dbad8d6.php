<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_f447e5e792a78d5a15a329f62e24ae64727b10216639f8ab3f529a29964af28e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_83d900e210644828556842286452a428faa9d420022151407e0239f6d9cde2b6 = $this->env->getExtension("native_profiler");
        $__internal_83d900e210644828556842286452a428faa9d420022151407e0239f6d9cde2b6->enter($__internal_83d900e210644828556842286452a428faa9d420022151407e0239f6d9cde2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83d900e210644828556842286452a428faa9d420022151407e0239f6d9cde2b6->leave($__internal_83d900e210644828556842286452a428faa9d420022151407e0239f6d9cde2b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b4d85b924455ce4093970f025e9745d15ca5ae5289a17173f8c3f65f8afd92a = $this->env->getExtension("native_profiler");
        $__internal_9b4d85b924455ce4093970f025e9745d15ca5ae5289a17173f8c3f65f8afd92a->enter($__internal_9b4d85b924455ce4093970f025e9745d15ca5ae5289a17173f8c3f65f8afd92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_9b4d85b924455ce4093970f025e9745d15ca5ae5289a17173f8c3f65f8afd92a->leave($__internal_9b4d85b924455ce4093970f025e9745d15ca5ae5289a17173f8c3f65f8afd92a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
