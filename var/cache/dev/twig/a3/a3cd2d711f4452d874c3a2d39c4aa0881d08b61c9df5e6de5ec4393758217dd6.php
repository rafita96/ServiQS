<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_4ffa0d6cc098b96c20e19796156eb2f04e3647d31b960d691cda945e31b047e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_51154219b030a1628ee3ec844be3bb5757dac71e49e8d7e9d2fd75d01d4c5fa8 = $this->env->getExtension("native_profiler");
        $__internal_51154219b030a1628ee3ec844be3bb5757dac71e49e8d7e9d2fd75d01d4c5fa8->enter($__internal_51154219b030a1628ee3ec844be3bb5757dac71e49e8d7e9d2fd75d01d4c5fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51154219b030a1628ee3ec844be3bb5757dac71e49e8d7e9d2fd75d01d4c5fa8->leave($__internal_51154219b030a1628ee3ec844be3bb5757dac71e49e8d7e9d2fd75d01d4c5fa8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2675d94ba9147890b39272f0f91332e4cdb8d70e222b80c7b89a6a3cb3187e7 = $this->env->getExtension("native_profiler");
        $__internal_b2675d94ba9147890b39272f0f91332e4cdb8d70e222b80c7b89a6a3cb3187e7->enter($__internal_b2675d94ba9147890b39272f0f91332e4cdb8d70e222b80c7b89a6a3cb3187e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b2675d94ba9147890b39272f0f91332e4cdb8d70e222b80c7b89a6a3cb3187e7->leave($__internal_b2675d94ba9147890b39272f0f91332e4cdb8d70e222b80c7b89a6a3cb3187e7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
