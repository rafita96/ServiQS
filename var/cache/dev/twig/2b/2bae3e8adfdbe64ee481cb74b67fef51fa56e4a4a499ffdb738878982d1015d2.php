<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e681938a27b0020d558093928e1426678a0ef6f8f535ce5eefdc4987de1fdd6a extends Twig_Template
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
        $__internal_af355a3d7937a575a5ef2d47a60868b9ee3a9bd24f4d78a20de7d1116cdccd88 = $this->env->getExtension("native_profiler");
        $__internal_af355a3d7937a575a5ef2d47a60868b9ee3a9bd24f4d78a20de7d1116cdccd88->enter($__internal_af355a3d7937a575a5ef2d47a60868b9ee3a9bd24f4d78a20de7d1116cdccd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_af355a3d7937a575a5ef2d47a60868b9ee3a9bd24f4d78a20de7d1116cdccd88->leave($__internal_af355a3d7937a575a5ef2d47a60868b9ee3a9bd24f4d78a20de7d1116cdccd88_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_acf702e9ef503630e559ed45692567af2438784a9c212fcdbd3c5677fd47471f = $this->env->getExtension("native_profiler");
        $__internal_acf702e9ef503630e559ed45692567af2438784a9c212fcdbd3c5677fd47471f->enter($__internal_acf702e9ef503630e559ed45692567af2438784a9c212fcdbd3c5677fd47471f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_acf702e9ef503630e559ed45692567af2438784a9c212fcdbd3c5677fd47471f->leave($__internal_acf702e9ef503630e559ed45692567af2438784a9c212fcdbd3c5677fd47471f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6089e1aed7bbe1bfc08f3da3f8e69e8ecbfa05fc2d8e1e8cd5d7bd6d5fb6a030 = $this->env->getExtension("native_profiler");
        $__internal_6089e1aed7bbe1bfc08f3da3f8e69e8ecbfa05fc2d8e1e8cd5d7bd6d5fb6a030->enter($__internal_6089e1aed7bbe1bfc08f3da3f8e69e8ecbfa05fc2d8e1e8cd5d7bd6d5fb6a030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6089e1aed7bbe1bfc08f3da3f8e69e8ecbfa05fc2d8e1e8cd5d7bd6d5fb6a030->leave($__internal_6089e1aed7bbe1bfc08f3da3f8e69e8ecbfa05fc2d8e1e8cd5d7bd6d5fb6a030_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b5506f642a783decca763c6303933797ebf1900c1832cf047e729062241acb13 = $this->env->getExtension("native_profiler");
        $__internal_b5506f642a783decca763c6303933797ebf1900c1832cf047e729062241acb13->enter($__internal_b5506f642a783decca763c6303933797ebf1900c1832cf047e729062241acb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b5506f642a783decca763c6303933797ebf1900c1832cf047e729062241acb13->leave($__internal_b5506f642a783decca763c6303933797ebf1900c1832cf047e729062241acb13_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
