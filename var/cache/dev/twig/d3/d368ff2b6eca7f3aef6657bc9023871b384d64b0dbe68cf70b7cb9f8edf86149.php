<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_9f4d197e696bd40ed48462a0fe067e4dbc9beb615fbd026559b98ca755bbe045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_34c3e773e5398de591b81b8854c24417bafbab75cec054eedf376bb457f1884d = $this->env->getExtension("native_profiler");
        $__internal_34c3e773e5398de591b81b8854c24417bafbab75cec054eedf376bb457f1884d->enter($__internal_34c3e773e5398de591b81b8854c24417bafbab75cec054eedf376bb457f1884d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34c3e773e5398de591b81b8854c24417bafbab75cec054eedf376bb457f1884d->leave($__internal_34c3e773e5398de591b81b8854c24417bafbab75cec054eedf376bb457f1884d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53dbe002a97bdb8689b1dd95ab2ebd33de8169f3697f63aaa7f9d77c274fbd44 = $this->env->getExtension("native_profiler");
        $__internal_53dbe002a97bdb8689b1dd95ab2ebd33de8169f3697f63aaa7f9d77c274fbd44->enter($__internal_53dbe002a97bdb8689b1dd95ab2ebd33de8169f3697f63aaa7f9d77c274fbd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_53dbe002a97bdb8689b1dd95ab2ebd33de8169f3697f63aaa7f9d77c274fbd44->leave($__internal_53dbe002a97bdb8689b1dd95ab2ebd33de8169f3697f63aaa7f9d77c274fbd44_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
