<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_6c4d6fdeb1ed458207ab6bf056e9a1ceb3c6fe1078979244708f0086af038629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_180a7a100e961e9122a38659c39a5fe8d3da5a399466b870282de680974d735a = $this->env->getExtension("native_profiler");
        $__internal_180a7a100e961e9122a38659c39a5fe8d3da5a399466b870282de680974d735a->enter($__internal_180a7a100e961e9122a38659c39a5fe8d3da5a399466b870282de680974d735a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_180a7a100e961e9122a38659c39a5fe8d3da5a399466b870282de680974d735a->leave($__internal_180a7a100e961e9122a38659c39a5fe8d3da5a399466b870282de680974d735a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e64e5450b2e8ece290602636d923d4411e726cef5c8faf8bf04aeb373bfc2ee2 = $this->env->getExtension("native_profiler");
        $__internal_e64e5450b2e8ece290602636d923d4411e726cef5c8faf8bf04aeb373bfc2ee2->enter($__internal_e64e5450b2e8ece290602636d923d4411e726cef5c8faf8bf04aeb373bfc2ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e64e5450b2e8ece290602636d923d4411e726cef5c8faf8bf04aeb373bfc2ee2->leave($__internal_e64e5450b2e8ece290602636d923d4411e726cef5c8faf8bf04aeb373bfc2ee2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
