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
        $__internal_7eef6953634bc274c1170c855a3d6b49cdb7973e1822615b06db7d0657c67190 = $this->env->getExtension("native_profiler");
        $__internal_7eef6953634bc274c1170c855a3d6b49cdb7973e1822615b06db7d0657c67190->enter($__internal_7eef6953634bc274c1170c855a3d6b49cdb7973e1822615b06db7d0657c67190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7eef6953634bc274c1170c855a3d6b49cdb7973e1822615b06db7d0657c67190->leave($__internal_7eef6953634bc274c1170c855a3d6b49cdb7973e1822615b06db7d0657c67190_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1e80425ab3af13f2caed80afcdcf26aec43900afd7db9cf5da1cdc75129d5865 = $this->env->getExtension("native_profiler");
        $__internal_1e80425ab3af13f2caed80afcdcf26aec43900afd7db9cf5da1cdc75129d5865->enter($__internal_1e80425ab3af13f2caed80afcdcf26aec43900afd7db9cf5da1cdc75129d5865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1e80425ab3af13f2caed80afcdcf26aec43900afd7db9cf5da1cdc75129d5865->leave($__internal_1e80425ab3af13f2caed80afcdcf26aec43900afd7db9cf5da1cdc75129d5865_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0fea35b592147bdd7d757e74d59d632f5aeab34973d03bbbac6ffc5d0ff2dd3e = $this->env->getExtension("native_profiler");
        $__internal_0fea35b592147bdd7d757e74d59d632f5aeab34973d03bbbac6ffc5d0ff2dd3e->enter($__internal_0fea35b592147bdd7d757e74d59d632f5aeab34973d03bbbac6ffc5d0ff2dd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0fea35b592147bdd7d757e74d59d632f5aeab34973d03bbbac6ffc5d0ff2dd3e->leave($__internal_0fea35b592147bdd7d757e74d59d632f5aeab34973d03bbbac6ffc5d0ff2dd3e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c9d5489fc358fcf2ad710ea2a07cc8f44d0e1b8ae9b6ab5f44ea500d4b241f99 = $this->env->getExtension("native_profiler");
        $__internal_c9d5489fc358fcf2ad710ea2a07cc8f44d0e1b8ae9b6ab5f44ea500d4b241f99->enter($__internal_c9d5489fc358fcf2ad710ea2a07cc8f44d0e1b8ae9b6ab5f44ea500d4b241f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c9d5489fc358fcf2ad710ea2a07cc8f44d0e1b8ae9b6ab5f44ea500d4b241f99->leave($__internal_c9d5489fc358fcf2ad710ea2a07cc8f44d0e1b8ae9b6ab5f44ea500d4b241f99_prof);

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
