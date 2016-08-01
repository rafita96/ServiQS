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
        $__internal_7616b8bcba0d41979f98d2fefae3c4da507d2809734d22438914a40e3d3153bf = $this->env->getExtension("native_profiler");
        $__internal_7616b8bcba0d41979f98d2fefae3c4da507d2809734d22438914a40e3d3153bf->enter($__internal_7616b8bcba0d41979f98d2fefae3c4da507d2809734d22438914a40e3d3153bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7616b8bcba0d41979f98d2fefae3c4da507d2809734d22438914a40e3d3153bf->leave($__internal_7616b8bcba0d41979f98d2fefae3c4da507d2809734d22438914a40e3d3153bf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c8ea7dbcc62da1e78cbd0fdcd86646945087437961ca0a1199dfa425ad79c8f = $this->env->getExtension("native_profiler");
        $__internal_1c8ea7dbcc62da1e78cbd0fdcd86646945087437961ca0a1199dfa425ad79c8f->enter($__internal_1c8ea7dbcc62da1e78cbd0fdcd86646945087437961ca0a1199dfa425ad79c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_1c8ea7dbcc62da1e78cbd0fdcd86646945087437961ca0a1199dfa425ad79c8f->leave($__internal_1c8ea7dbcc62da1e78cbd0fdcd86646945087437961ca0a1199dfa425ad79c8f_prof);

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
