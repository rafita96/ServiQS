<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_3cd73d83019f11a9de5d607db90e9a2ded21c46ae874660fcdf409843d76245b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_332340e3f51f16a9631efbc1634dcdb24dc3642d6a36b234ca4c0476084c0ae4 = $this->env->getExtension("native_profiler");
        $__internal_332340e3f51f16a9631efbc1634dcdb24dc3642d6a36b234ca4c0476084c0ae4->enter($__internal_332340e3f51f16a9631efbc1634dcdb24dc3642d6a36b234ca4c0476084c0ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332340e3f51f16a9631efbc1634dcdb24dc3642d6a36b234ca4c0476084c0ae4->leave($__internal_332340e3f51f16a9631efbc1634dcdb24dc3642d6a36b234ca4c0476084c0ae4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8bc1a9ed272dff0e1fbc619f9a8104415f4a0df639c35935fd7a98051deb31b = $this->env->getExtension("native_profiler");
        $__internal_f8bc1a9ed272dff0e1fbc619f9a8104415f4a0df639c35935fd7a98051deb31b->enter($__internal_f8bc1a9ed272dff0e1fbc619f9a8104415f4a0df639c35935fd7a98051deb31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f8bc1a9ed272dff0e1fbc619f9a8104415f4a0df639c35935fd7a98051deb31b->leave($__internal_f8bc1a9ed272dff0e1fbc619f9a8104415f4a0df639c35935fd7a98051deb31b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
