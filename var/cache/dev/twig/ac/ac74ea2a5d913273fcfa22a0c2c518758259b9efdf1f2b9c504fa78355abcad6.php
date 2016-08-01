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
        $__internal_1f4faa45e5e1aa160e7d043bb37df8dc3617c03801a29b13a5a650b3a4db6418 = $this->env->getExtension("native_profiler");
        $__internal_1f4faa45e5e1aa160e7d043bb37df8dc3617c03801a29b13a5a650b3a4db6418->enter($__internal_1f4faa45e5e1aa160e7d043bb37df8dc3617c03801a29b13a5a650b3a4db6418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f4faa45e5e1aa160e7d043bb37df8dc3617c03801a29b13a5a650b3a4db6418->leave($__internal_1f4faa45e5e1aa160e7d043bb37df8dc3617c03801a29b13a5a650b3a4db6418_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb4274ec17ad41d110dab645eda3f54e6a3d3edd68b13196419d94bb21dcffd2 = $this->env->getExtension("native_profiler");
        $__internal_eb4274ec17ad41d110dab645eda3f54e6a3d3edd68b13196419d94bb21dcffd2->enter($__internal_eb4274ec17ad41d110dab645eda3f54e6a3d3edd68b13196419d94bb21dcffd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_eb4274ec17ad41d110dab645eda3f54e6a3d3edd68b13196419d94bb21dcffd2->leave($__internal_eb4274ec17ad41d110dab645eda3f54e6a3d3edd68b13196419d94bb21dcffd2_prof);

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
