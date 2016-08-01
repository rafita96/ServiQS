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
        $__internal_1b5b26fe922af7dab6f3ffa6e3bbad5270b6c8b3d0e411e52f3062f78e322476 = $this->env->getExtension("native_profiler");
        $__internal_1b5b26fe922af7dab6f3ffa6e3bbad5270b6c8b3d0e411e52f3062f78e322476->enter($__internal_1b5b26fe922af7dab6f3ffa6e3bbad5270b6c8b3d0e411e52f3062f78e322476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1b5b26fe922af7dab6f3ffa6e3bbad5270b6c8b3d0e411e52f3062f78e322476->leave($__internal_1b5b26fe922af7dab6f3ffa6e3bbad5270b6c8b3d0e411e52f3062f78e322476_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2653e2c2365a7ef2eb5b27d419afe7bac278094ef0cb8623995d5dbec94017f4 = $this->env->getExtension("native_profiler");
        $__internal_2653e2c2365a7ef2eb5b27d419afe7bac278094ef0cb8623995d5dbec94017f4->enter($__internal_2653e2c2365a7ef2eb5b27d419afe7bac278094ef0cb8623995d5dbec94017f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2653e2c2365a7ef2eb5b27d419afe7bac278094ef0cb8623995d5dbec94017f4->leave($__internal_2653e2c2365a7ef2eb5b27d419afe7bac278094ef0cb8623995d5dbec94017f4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_38e43cf243d4aefb7fd2630d4423ecdd9eef992789a31baed302bc66abf0fb0a = $this->env->getExtension("native_profiler");
        $__internal_38e43cf243d4aefb7fd2630d4423ecdd9eef992789a31baed302bc66abf0fb0a->enter($__internal_38e43cf243d4aefb7fd2630d4423ecdd9eef992789a31baed302bc66abf0fb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_38e43cf243d4aefb7fd2630d4423ecdd9eef992789a31baed302bc66abf0fb0a->leave($__internal_38e43cf243d4aefb7fd2630d4423ecdd9eef992789a31baed302bc66abf0fb0a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_be514fe13d012fe12128a6ce47a278a0db478a3d6699f25b108e5b82085107d3 = $this->env->getExtension("native_profiler");
        $__internal_be514fe13d012fe12128a6ce47a278a0db478a3d6699f25b108e5b82085107d3->enter($__internal_be514fe13d012fe12128a6ce47a278a0db478a3d6699f25b108e5b82085107d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_be514fe13d012fe12128a6ce47a278a0db478a3d6699f25b108e5b82085107d3->leave($__internal_be514fe13d012fe12128a6ce47a278a0db478a3d6699f25b108e5b82085107d3_prof);

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
