<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f07c93ebdf513de8b5d91262d5d6cac01bf7d430034cfa41c97b2b207711bedf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f3acb46430461d1c768c8bc30cb8f25d3a0fcce45d552fee6c834ef98ef611c0 = $this->env->getExtension("native_profiler");
        $__internal_f3acb46430461d1c768c8bc30cb8f25d3a0fcce45d552fee6c834ef98ef611c0->enter($__internal_f3acb46430461d1c768c8bc30cb8f25d3a0fcce45d552fee6c834ef98ef611c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3acb46430461d1c768c8bc30cb8f25d3a0fcce45d552fee6c834ef98ef611c0->leave($__internal_f3acb46430461d1c768c8bc30cb8f25d3a0fcce45d552fee6c834ef98ef611c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8014e811a7958ae580e66510fd37c5640ad5b8caf79ecd46e4ed23fa905ec85 = $this->env->getExtension("native_profiler");
        $__internal_e8014e811a7958ae580e66510fd37c5640ad5b8caf79ecd46e4ed23fa905ec85->enter($__internal_e8014e811a7958ae580e66510fd37c5640ad5b8caf79ecd46e4ed23fa905ec85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e8014e811a7958ae580e66510fd37c5640ad5b8caf79ecd46e4ed23fa905ec85->leave($__internal_e8014e811a7958ae580e66510fd37c5640ad5b8caf79ecd46e4ed23fa905ec85_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
