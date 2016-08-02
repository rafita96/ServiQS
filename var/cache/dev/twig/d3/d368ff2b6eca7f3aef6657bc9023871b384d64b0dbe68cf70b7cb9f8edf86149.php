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
        $__internal_50b36df9eafccf9fd000afe1b634e6cdb4c6402e6629057c90b33e6b56d4e92a = $this->env->getExtension("native_profiler");
        $__internal_50b36df9eafccf9fd000afe1b634e6cdb4c6402e6629057c90b33e6b56d4e92a->enter($__internal_50b36df9eafccf9fd000afe1b634e6cdb4c6402e6629057c90b33e6b56d4e92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b36df9eafccf9fd000afe1b634e6cdb4c6402e6629057c90b33e6b56d4e92a->leave($__internal_50b36df9eafccf9fd000afe1b634e6cdb4c6402e6629057c90b33e6b56d4e92a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_914f84bffa82b7d9f0402a19fb3b285e615b9844b336b45df4d2fba0874463a9 = $this->env->getExtension("native_profiler");
        $__internal_914f84bffa82b7d9f0402a19fb3b285e615b9844b336b45df4d2fba0874463a9->enter($__internal_914f84bffa82b7d9f0402a19fb3b285e615b9844b336b45df4d2fba0874463a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_914f84bffa82b7d9f0402a19fb3b285e615b9844b336b45df4d2fba0874463a9->leave($__internal_914f84bffa82b7d9f0402a19fb3b285e615b9844b336b45df4d2fba0874463a9_prof);

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
