<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_f78cb6c2525dfe113716d86a934da66400a888d95626756647dd71f8f35e1c98 extends Twig_Template
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
        $__internal_cef0ad2beae95109b845b5bf972f2cee3ba13d7f30f78476f2c48caef69044f7 = $this->env->getExtension("native_profiler");
        $__internal_cef0ad2beae95109b845b5bf972f2cee3ba13d7f30f78476f2c48caef69044f7->enter($__internal_cef0ad2beae95109b845b5bf972f2cee3ba13d7f30f78476f2c48caef69044f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cef0ad2beae95109b845b5bf972f2cee3ba13d7f30f78476f2c48caef69044f7->leave($__internal_cef0ad2beae95109b845b5bf972f2cee3ba13d7f30f78476f2c48caef69044f7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6a7a2683102bdbad2bdad687da469982c242fe70989f051b36d639d498576bdb = $this->env->getExtension("native_profiler");
        $__internal_6a7a2683102bdbad2bdad687da469982c242fe70989f051b36d639d498576bdb->enter($__internal_6a7a2683102bdbad2bdad687da469982c242fe70989f051b36d639d498576bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_6a7a2683102bdbad2bdad687da469982c242fe70989f051b36d639d498576bdb->leave($__internal_6a7a2683102bdbad2bdad687da469982c242fe70989f051b36d639d498576bdb_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6603654f99ff402da2d88621a72b83d7b05ee81c3e38594ebbf5481423fe8520 = $this->env->getExtension("native_profiler");
        $__internal_6603654f99ff402da2d88621a72b83d7b05ee81c3e38594ebbf5481423fe8520->enter($__internal_6603654f99ff402da2d88621a72b83d7b05ee81c3e38594ebbf5481423fe8520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6603654f99ff402da2d88621a72b83d7b05ee81c3e38594ebbf5481423fe8520->leave($__internal_6603654f99ff402da2d88621a72b83d7b05ee81c3e38594ebbf5481423fe8520_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a86f660994e5cb350c2339d86529bae4edbd9a005a54d2eb55157ef305dff1c8 = $this->env->getExtension("native_profiler");
        $__internal_a86f660994e5cb350c2339d86529bae4edbd9a005a54d2eb55157ef305dff1c8->enter($__internal_a86f660994e5cb350c2339d86529bae4edbd9a005a54d2eb55157ef305dff1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a86f660994e5cb350c2339d86529bae4edbd9a005a54d2eb55157ef305dff1c8->leave($__internal_a86f660994e5cb350c2339d86529bae4edbd9a005a54d2eb55157ef305dff1c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
