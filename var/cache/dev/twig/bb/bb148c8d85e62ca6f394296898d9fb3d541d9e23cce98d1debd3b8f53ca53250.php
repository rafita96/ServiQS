<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_01cbb7d6269b12e5ce993a259ba226f376592375db175654964c6430653d3974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_c3eb0f4fac2682e8ac8006e438058e85106bc515388218a099def2a1e273a4d6 = $this->env->getExtension("native_profiler");
        $__internal_c3eb0f4fac2682e8ac8006e438058e85106bc515388218a099def2a1e273a4d6->enter($__internal_c3eb0f4fac2682e8ac8006e438058e85106bc515388218a099def2a1e273a4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3eb0f4fac2682e8ac8006e438058e85106bc515388218a099def2a1e273a4d6->leave($__internal_c3eb0f4fac2682e8ac8006e438058e85106bc515388218a099def2a1e273a4d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b008aa7bcddf8eba1f170fa5b0482e62ac00315f6448429d3d198b360d14d546 = $this->env->getExtension("native_profiler");
        $__internal_b008aa7bcddf8eba1f170fa5b0482e62ac00315f6448429d3d198b360d14d546->enter($__internal_b008aa7bcddf8eba1f170fa5b0482e62ac00315f6448429d3d198b360d14d546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_b008aa7bcddf8eba1f170fa5b0482e62ac00315f6448429d3d198b360d14d546->leave($__internal_b008aa7bcddf8eba1f170fa5b0482e62ac00315f6448429d3d198b360d14d546_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
