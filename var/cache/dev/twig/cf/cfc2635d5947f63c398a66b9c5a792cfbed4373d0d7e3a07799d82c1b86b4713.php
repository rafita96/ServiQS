<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f79b6b06c970561c41aa8c87ece2cc6d1efc065f525cc25e8243be934c36cbb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_c92e7ee4a8f70aec5a196271e6bc53c7e8f06a1d7c16a558ef11a4f481fd92d9 = $this->env->getExtension("native_profiler");
        $__internal_c92e7ee4a8f70aec5a196271e6bc53c7e8f06a1d7c16a558ef11a4f481fd92d9->enter($__internal_c92e7ee4a8f70aec5a196271e6bc53c7e8f06a1d7c16a558ef11a4f481fd92d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c92e7ee4a8f70aec5a196271e6bc53c7e8f06a1d7c16a558ef11a4f481fd92d9->leave($__internal_c92e7ee4a8f70aec5a196271e6bc53c7e8f06a1d7c16a558ef11a4f481fd92d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53e4d99c7c10fcf49d567d8a8663ec4d428d92412b52be6c1cdf93d6a3087c79 = $this->env->getExtension("native_profiler");
        $__internal_53e4d99c7c10fcf49d567d8a8663ec4d428d92412b52be6c1cdf93d6a3087c79->enter($__internal_53e4d99c7c10fcf49d567d8a8663ec4d428d92412b52be6c1cdf93d6a3087c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_53e4d99c7c10fcf49d567d8a8663ec4d428d92412b52be6c1cdf93d6a3087c79->leave($__internal_53e4d99c7c10fcf49d567d8a8663ec4d428d92412b52be6c1cdf93d6a3087c79_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
