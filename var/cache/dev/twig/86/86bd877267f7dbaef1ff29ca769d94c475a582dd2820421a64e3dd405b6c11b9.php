<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_869e52993ac7ac3b7d38cdbdfa5cab9f209b726d37832da2465490017f61f545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_1be75df7733c6d95aece47b35d5ffc7bae6e1bd3c028f71e8fffa065423b6cbb = $this->env->getExtension("native_profiler");
        $__internal_1be75df7733c6d95aece47b35d5ffc7bae6e1bd3c028f71e8fffa065423b6cbb->enter($__internal_1be75df7733c6d95aece47b35d5ffc7bae6e1bd3c028f71e8fffa065423b6cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1be75df7733c6d95aece47b35d5ffc7bae6e1bd3c028f71e8fffa065423b6cbb->leave($__internal_1be75df7733c6d95aece47b35d5ffc7bae6e1bd3c028f71e8fffa065423b6cbb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_878d3bc3885d6b45840308068b59d60f7ee36ced2050ee573d9eb6ad4c8e9767 = $this->env->getExtension("native_profiler");
        $__internal_878d3bc3885d6b45840308068b59d60f7ee36ced2050ee573d9eb6ad4c8e9767->enter($__internal_878d3bc3885d6b45840308068b59d60f7ee36ced2050ee573d9eb6ad4c8e9767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_878d3bc3885d6b45840308068b59d60f7ee36ced2050ee573d9eb6ad4c8e9767->leave($__internal_878d3bc3885d6b45840308068b59d60f7ee36ced2050ee573d9eb6ad4c8e9767_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
