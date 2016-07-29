<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f79b6b06c970561c41aa8c87ece2cc6d1efc065f525cc25e8243be934c36cbb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_2f1642de22e9d2bde1b2d0c9628919ecdf0ca37ce6c79090964f837168e84be0 = $this->env->getExtension("native_profiler");
        $__internal_2f1642de22e9d2bde1b2d0c9628919ecdf0ca37ce6c79090964f837168e84be0->enter($__internal_2f1642de22e9d2bde1b2d0c9628919ecdf0ca37ce6c79090964f837168e84be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f1642de22e9d2bde1b2d0c9628919ecdf0ca37ce6c79090964f837168e84be0->leave($__internal_2f1642de22e9d2bde1b2d0c9628919ecdf0ca37ce6c79090964f837168e84be0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_147357ca43cdcd2ff5ff9a2cb7c250aa60703f81b616b6cb57cbc28d7b0e8adf = $this->env->getExtension("native_profiler");
        $__internal_147357ca43cdcd2ff5ff9a2cb7c250aa60703f81b616b6cb57cbc28d7b0e8adf->enter($__internal_147357ca43cdcd2ff5ff9a2cb7c250aa60703f81b616b6cb57cbc28d7b0e8adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_147357ca43cdcd2ff5ff9a2cb7c250aa60703f81b616b6cb57cbc28d7b0e8adf->leave($__internal_147357ca43cdcd2ff5ff9a2cb7c250aa60703f81b616b6cb57cbc28d7b0e8adf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
