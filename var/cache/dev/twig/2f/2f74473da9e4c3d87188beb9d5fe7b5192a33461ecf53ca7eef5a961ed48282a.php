<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_1dce8850720af526d7f23137be13410741a1b79d6ff1a028da6c93c2706f9f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_94a9c4ddadb23c5144b86c48b0ac0a642163f80adc4a4c6097104400cb13412c = $this->env->getExtension("native_profiler");
        $__internal_94a9c4ddadb23c5144b86c48b0ac0a642163f80adc4a4c6097104400cb13412c->enter($__internal_94a9c4ddadb23c5144b86c48b0ac0a642163f80adc4a4c6097104400cb13412c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94a9c4ddadb23c5144b86c48b0ac0a642163f80adc4a4c6097104400cb13412c->leave($__internal_94a9c4ddadb23c5144b86c48b0ac0a642163f80adc4a4c6097104400cb13412c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f01498377f6e06844250c2a0cae5937e172f6f036a6c7d42866c89b6cfc8b45d = $this->env->getExtension("native_profiler");
        $__internal_f01498377f6e06844250c2a0cae5937e172f6f036a6c7d42866c89b6cfc8b45d->enter($__internal_f01498377f6e06844250c2a0cae5937e172f6f036a6c7d42866c89b6cfc8b45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f01498377f6e06844250c2a0cae5937e172f6f036a6c7d42866c89b6cfc8b45d->leave($__internal_f01498377f6e06844250c2a0cae5937e172f6f036a6c7d42866c89b6cfc8b45d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
