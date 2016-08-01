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
        $__internal_47633283ebfdd8e94bf453c83de156b679cb195460c085cf2b8718a69d1a064b = $this->env->getExtension("native_profiler");
        $__internal_47633283ebfdd8e94bf453c83de156b679cb195460c085cf2b8718a69d1a064b->enter($__internal_47633283ebfdd8e94bf453c83de156b679cb195460c085cf2b8718a69d1a064b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_47633283ebfdd8e94bf453c83de156b679cb195460c085cf2b8718a69d1a064b->leave($__internal_47633283ebfdd8e94bf453c83de156b679cb195460c085cf2b8718a69d1a064b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_840d895c7c7d88bb72e263e2cc2c4703c6c8998b1f39ffe18c4a45b06c6f72d1 = $this->env->getExtension("native_profiler");
        $__internal_840d895c7c7d88bb72e263e2cc2c4703c6c8998b1f39ffe18c4a45b06c6f72d1->enter($__internal_840d895c7c7d88bb72e263e2cc2c4703c6c8998b1f39ffe18c4a45b06c6f72d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_840d895c7c7d88bb72e263e2cc2c4703c6c8998b1f39ffe18c4a45b06c6f72d1->leave($__internal_840d895c7c7d88bb72e263e2cc2c4703c6c8998b1f39ffe18c4a45b06c6f72d1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_52cea6d04059e5a15a073c32d72cf609667eddd02ca62d81e1ea196cc930b939 = $this->env->getExtension("native_profiler");
        $__internal_52cea6d04059e5a15a073c32d72cf609667eddd02ca62d81e1ea196cc930b939->enter($__internal_52cea6d04059e5a15a073c32d72cf609667eddd02ca62d81e1ea196cc930b939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_52cea6d04059e5a15a073c32d72cf609667eddd02ca62d81e1ea196cc930b939->leave($__internal_52cea6d04059e5a15a073c32d72cf609667eddd02ca62d81e1ea196cc930b939_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b64c510d9252f58eb47bb914e4a0f1b4abbe84135d5daa1a09b65a65b10bf843 = $this->env->getExtension("native_profiler");
        $__internal_b64c510d9252f58eb47bb914e4a0f1b4abbe84135d5daa1a09b65a65b10bf843->enter($__internal_b64c510d9252f58eb47bb914e4a0f1b4abbe84135d5daa1a09b65a65b10bf843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b64c510d9252f58eb47bb914e4a0f1b4abbe84135d5daa1a09b65a65b10bf843->leave($__internal_b64c510d9252f58eb47bb914e4a0f1b4abbe84135d5daa1a09b65a65b10bf843_prof);

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
