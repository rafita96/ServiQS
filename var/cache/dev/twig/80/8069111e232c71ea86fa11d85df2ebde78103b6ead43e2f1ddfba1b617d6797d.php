<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_632c89c62a625e24554d24f60b0533196894511a23cc33bb6a7bdfdfe3460505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_d070795157167b6240c804f5c3287f6db20a4d67ec330a9a674b0e76f40b9f89 = $this->env->getExtension("native_profiler");
        $__internal_d070795157167b6240c804f5c3287f6db20a4d67ec330a9a674b0e76f40b9f89->enter($__internal_d070795157167b6240c804f5c3287f6db20a4d67ec330a9a674b0e76f40b9f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d070795157167b6240c804f5c3287f6db20a4d67ec330a9a674b0e76f40b9f89->leave($__internal_d070795157167b6240c804f5c3287f6db20a4d67ec330a9a674b0e76f40b9f89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5758fe1ff85fec696f7b5a5257490392129badca8247a245e68ac8846337a0a1 = $this->env->getExtension("native_profiler");
        $__internal_5758fe1ff85fec696f7b5a5257490392129badca8247a245e68ac8846337a0a1->enter($__internal_5758fe1ff85fec696f7b5a5257490392129badca8247a245e68ac8846337a0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_5758fe1ff85fec696f7b5a5257490392129badca8247a245e68ac8846337a0a1->leave($__internal_5758fe1ff85fec696f7b5a5257490392129badca8247a245e68ac8846337a0a1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
