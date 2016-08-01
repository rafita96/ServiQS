<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_f1d868d5f5b62b6008c7b2135552f5184078518113986eb83757cdb617c321ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56f5889d7a2e1d109ae1d13b52a32bdabc5312046301ef19c3860a98af8afa99 = $this->env->getExtension("native_profiler");
        $__internal_56f5889d7a2e1d109ae1d13b52a32bdabc5312046301ef19c3860a98af8afa99->enter($__internal_56f5889d7a2e1d109ae1d13b52a32bdabc5312046301ef19c3860a98af8afa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_56f5889d7a2e1d109ae1d13b52a32bdabc5312046301ef19c3860a98af8afa99->leave($__internal_56f5889d7a2e1d109ae1d13b52a32bdabc5312046301ef19c3860a98af8afa99_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a026d2e6c67717dc4a007c2cc64447ca754a546c86f5e77c76768b0e24bdb3a4 = $this->env->getExtension("native_profiler");
        $__internal_a026d2e6c67717dc4a007c2cc64447ca754a546c86f5e77c76768b0e24bdb3a4->enter($__internal_a026d2e6c67717dc4a007c2cc64447ca754a546c86f5e77c76768b0e24bdb3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a026d2e6c67717dc4a007c2cc64447ca754a546c86f5e77c76768b0e24bdb3a4->leave($__internal_a026d2e6c67717dc4a007c2cc64447ca754a546c86f5e77c76768b0e24bdb3a4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_667d79fc0003f711d6a4fc40cdd061bd8ee883dc4475e59db0cc632fdf20599d = $this->env->getExtension("native_profiler");
        $__internal_667d79fc0003f711d6a4fc40cdd061bd8ee883dc4475e59db0cc632fdf20599d->enter($__internal_667d79fc0003f711d6a4fc40cdd061bd8ee883dc4475e59db0cc632fdf20599d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_667d79fc0003f711d6a4fc40cdd061bd8ee883dc4475e59db0cc632fdf20599d->leave($__internal_667d79fc0003f711d6a4fc40cdd061bd8ee883dc4475e59db0cc632fdf20599d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a46d5ee17dd81b143d912926cb4aae3d450868a62fa75a94be772b3fac5f7b5d = $this->env->getExtension("native_profiler");
        $__internal_a46d5ee17dd81b143d912926cb4aae3d450868a62fa75a94be772b3fac5f7b5d->enter($__internal_a46d5ee17dd81b143d912926cb4aae3d450868a62fa75a94be772b3fac5f7b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a46d5ee17dd81b143d912926cb4aae3d450868a62fa75a94be772b3fac5f7b5d->leave($__internal_a46d5ee17dd81b143d912926cb4aae3d450868a62fa75a94be772b3fac5f7b5d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
