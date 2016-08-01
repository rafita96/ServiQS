<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_61ae4df3e8e0e2133f1e5100041132ea87a831dc1ba58d67d5d78c98eab4ff3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_eeb17f58615c8da25c509afd4483c6f80e9483a686fc1d4922b683ae461465bf = $this->env->getExtension("native_profiler");
        $__internal_eeb17f58615c8da25c509afd4483c6f80e9483a686fc1d4922b683ae461465bf->enter($__internal_eeb17f58615c8da25c509afd4483c6f80e9483a686fc1d4922b683ae461465bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeb17f58615c8da25c509afd4483c6f80e9483a686fc1d4922b683ae461465bf->leave($__internal_eeb17f58615c8da25c509afd4483c6f80e9483a686fc1d4922b683ae461465bf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_517c8acb054297e04fb6d95eed22b5f861c536b31bb11267002d7623b4526675 = $this->env->getExtension("native_profiler");
        $__internal_517c8acb054297e04fb6d95eed22b5f861c536b31bb11267002d7623b4526675->enter($__internal_517c8acb054297e04fb6d95eed22b5f861c536b31bb11267002d7623b4526675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_517c8acb054297e04fb6d95eed22b5f861c536b31bb11267002d7623b4526675->leave($__internal_517c8acb054297e04fb6d95eed22b5f861c536b31bb11267002d7623b4526675_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
