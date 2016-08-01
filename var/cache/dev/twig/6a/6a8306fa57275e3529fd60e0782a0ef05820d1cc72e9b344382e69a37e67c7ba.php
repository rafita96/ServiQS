<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_6c4d6fdeb1ed458207ab6bf056e9a1ceb3c6fe1078979244708f0086af038629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_6f86ff7dd568afc9097d50cb5e0d49e2ef37be353daabc3a488344197040f458 = $this->env->getExtension("native_profiler");
        $__internal_6f86ff7dd568afc9097d50cb5e0d49e2ef37be353daabc3a488344197040f458->enter($__internal_6f86ff7dd568afc9097d50cb5e0d49e2ef37be353daabc3a488344197040f458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f86ff7dd568afc9097d50cb5e0d49e2ef37be353daabc3a488344197040f458->leave($__internal_6f86ff7dd568afc9097d50cb5e0d49e2ef37be353daabc3a488344197040f458_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_776960d6defc7288fae1b137035eed131e654ddcad5830ed36d8c568a1d50248 = $this->env->getExtension("native_profiler");
        $__internal_776960d6defc7288fae1b137035eed131e654ddcad5830ed36d8c568a1d50248->enter($__internal_776960d6defc7288fae1b137035eed131e654ddcad5830ed36d8c568a1d50248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_776960d6defc7288fae1b137035eed131e654ddcad5830ed36d8c568a1d50248->leave($__internal_776960d6defc7288fae1b137035eed131e654ddcad5830ed36d8c568a1d50248_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
