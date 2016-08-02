<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_aa2ae6c1f4aa4394bdbb5dd815a00efbab808953853d6d0dcc069abbb764c9c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_fd9b7d3b1196c131db04e53bd7bcc0afa78e8df726dbfb2f1bcd58cebbdbc16f = $this->env->getExtension("native_profiler");
        $__internal_fd9b7d3b1196c131db04e53bd7bcc0afa78e8df726dbfb2f1bcd58cebbdbc16f->enter($__internal_fd9b7d3b1196c131db04e53bd7bcc0afa78e8df726dbfb2f1bcd58cebbdbc16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd9b7d3b1196c131db04e53bd7bcc0afa78e8df726dbfb2f1bcd58cebbdbc16f->leave($__internal_fd9b7d3b1196c131db04e53bd7bcc0afa78e8df726dbfb2f1bcd58cebbdbc16f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e8912ca9a2e7689925a7f094f92d7670a1a0a3d3df558af0e44855f90e52022 = $this->env->getExtension("native_profiler");
        $__internal_9e8912ca9a2e7689925a7f094f92d7670a1a0a3d3df558af0e44855f90e52022->enter($__internal_9e8912ca9a2e7689925a7f094f92d7670a1a0a3d3df558af0e44855f90e52022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9e8912ca9a2e7689925a7f094f92d7670a1a0a3d3df558af0e44855f90e52022->leave($__internal_9e8912ca9a2e7689925a7f094f92d7670a1a0a3d3df558af0e44855f90e52022_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
