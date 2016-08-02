<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_cd7c5ccc7cd3c437560a7b1b3d38ae88c65cfb81601896e7e99833557ff3d4c5 extends Twig_Template
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
        $__internal_026d3141db0e2e81cc55e417b5cceec2a0cbddeb151afb1c5590eebc736c40b9 = $this->env->getExtension("native_profiler");
        $__internal_026d3141db0e2e81cc55e417b5cceec2a0cbddeb151afb1c5590eebc736c40b9->enter($__internal_026d3141db0e2e81cc55e417b5cceec2a0cbddeb151afb1c5590eebc736c40b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_026d3141db0e2e81cc55e417b5cceec2a0cbddeb151afb1c5590eebc736c40b9->leave($__internal_026d3141db0e2e81cc55e417b5cceec2a0cbddeb151afb1c5590eebc736c40b9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_78375208fe100d786438d9b0089824f86335972155622d1b24521f2f68a6b5a7 = $this->env->getExtension("native_profiler");
        $__internal_78375208fe100d786438d9b0089824f86335972155622d1b24521f2f68a6b5a7->enter($__internal_78375208fe100d786438d9b0089824f86335972155622d1b24521f2f68a6b5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_78375208fe100d786438d9b0089824f86335972155622d1b24521f2f68a6b5a7->leave($__internal_78375208fe100d786438d9b0089824f86335972155622d1b24521f2f68a6b5a7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_24ad014cfcfebb5f5242a27570d47c22f32bcc48377b28aadf02554d3418dde2 = $this->env->getExtension("native_profiler");
        $__internal_24ad014cfcfebb5f5242a27570d47c22f32bcc48377b28aadf02554d3418dde2->enter($__internal_24ad014cfcfebb5f5242a27570d47c22f32bcc48377b28aadf02554d3418dde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_24ad014cfcfebb5f5242a27570d47c22f32bcc48377b28aadf02554d3418dde2->leave($__internal_24ad014cfcfebb5f5242a27570d47c22f32bcc48377b28aadf02554d3418dde2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_64a96735b59d7e4c6102abd88fb5a1d87a92330b77f8577ae6fbdbff49cad15c = $this->env->getExtension("native_profiler");
        $__internal_64a96735b59d7e4c6102abd88fb5a1d87a92330b77f8577ae6fbdbff49cad15c->enter($__internal_64a96735b59d7e4c6102abd88fb5a1d87a92330b77f8577ae6fbdbff49cad15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_64a96735b59d7e4c6102abd88fb5a1d87a92330b77f8577ae6fbdbff49cad15c->leave($__internal_64a96735b59d7e4c6102abd88fb5a1d87a92330b77f8577ae6fbdbff49cad15c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
