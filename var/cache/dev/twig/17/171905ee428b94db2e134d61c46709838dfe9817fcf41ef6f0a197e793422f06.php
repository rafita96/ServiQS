<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_7cfb4336d2b4c1f98a429c06e104f836d717d8dfe6a0196e57ff17a9bf52d928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_fa05262dc9df9f018b02d8e968dce1c836146eb298f3d37850720da0a4a272e0 = $this->env->getExtension("native_profiler");
        $__internal_fa05262dc9df9f018b02d8e968dce1c836146eb298f3d37850720da0a4a272e0->enter($__internal_fa05262dc9df9f018b02d8e968dce1c836146eb298f3d37850720da0a4a272e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa05262dc9df9f018b02d8e968dce1c836146eb298f3d37850720da0a4a272e0->leave($__internal_fa05262dc9df9f018b02d8e968dce1c836146eb298f3d37850720da0a4a272e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7844638f3ece4bc23608661ba9583ace4cb591c143702486391c9e8d843a1e86 = $this->env->getExtension("native_profiler");
        $__internal_7844638f3ece4bc23608661ba9583ace4cb591c143702486391c9e8d843a1e86->enter($__internal_7844638f3ece4bc23608661ba9583ace4cb591c143702486391c9e8d843a1e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_7844638f3ece4bc23608661ba9583ace4cb591c143702486391c9e8d843a1e86->leave($__internal_7844638f3ece4bc23608661ba9583ace4cb591c143702486391c9e8d843a1e86_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
