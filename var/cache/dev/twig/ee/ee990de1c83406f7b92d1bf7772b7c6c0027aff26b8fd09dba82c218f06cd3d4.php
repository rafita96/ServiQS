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
        $__internal_27cbdeb2798fec199612d12b5d08defff61e437ed00da023a582cbf9c563f32d = $this->env->getExtension("native_profiler");
        $__internal_27cbdeb2798fec199612d12b5d08defff61e437ed00da023a582cbf9c563f32d->enter($__internal_27cbdeb2798fec199612d12b5d08defff61e437ed00da023a582cbf9c563f32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_27cbdeb2798fec199612d12b5d08defff61e437ed00da023a582cbf9c563f32d->leave($__internal_27cbdeb2798fec199612d12b5d08defff61e437ed00da023a582cbf9c563f32d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a66318e6a3b8fc9d79665ab0078419ca241649a00b99e5ab444fddd59cbc39c1 = $this->env->getExtension("native_profiler");
        $__internal_a66318e6a3b8fc9d79665ab0078419ca241649a00b99e5ab444fddd59cbc39c1->enter($__internal_a66318e6a3b8fc9d79665ab0078419ca241649a00b99e5ab444fddd59cbc39c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a66318e6a3b8fc9d79665ab0078419ca241649a00b99e5ab444fddd59cbc39c1->leave($__internal_a66318e6a3b8fc9d79665ab0078419ca241649a00b99e5ab444fddd59cbc39c1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_06ac8ac8774236a8bf6b198d3265bea3f935908dc70643a6cd38dd049177fe2a = $this->env->getExtension("native_profiler");
        $__internal_06ac8ac8774236a8bf6b198d3265bea3f935908dc70643a6cd38dd049177fe2a->enter($__internal_06ac8ac8774236a8bf6b198d3265bea3f935908dc70643a6cd38dd049177fe2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_06ac8ac8774236a8bf6b198d3265bea3f935908dc70643a6cd38dd049177fe2a->leave($__internal_06ac8ac8774236a8bf6b198d3265bea3f935908dc70643a6cd38dd049177fe2a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c6d8363206b9ebfa15c1ceed31cd938016288e75f1331b190605aa44df8784bd = $this->env->getExtension("native_profiler");
        $__internal_c6d8363206b9ebfa15c1ceed31cd938016288e75f1331b190605aa44df8784bd->enter($__internal_c6d8363206b9ebfa15c1ceed31cd938016288e75f1331b190605aa44df8784bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c6d8363206b9ebfa15c1ceed31cd938016288e75f1331b190605aa44df8784bd->leave($__internal_c6d8363206b9ebfa15c1ceed31cd938016288e75f1331b190605aa44df8784bd_prof);

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
