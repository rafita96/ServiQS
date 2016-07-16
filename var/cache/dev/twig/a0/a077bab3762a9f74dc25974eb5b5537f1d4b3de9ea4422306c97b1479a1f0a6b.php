<?php

/* HeysoftMenuBundle:Default:index.html.twig */
class __TwigTemplate_391a20b0734a41fdf0b55aaa5b78f39c60eee50e151deea4b30e258dfab282d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "HeysoftMenuBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdb601bdd5299e0bd23c31082e2cd8eaa3afa6dd4ef78052edc938f726aed0e2 = $this->env->getExtension("native_profiler");
        $__internal_bdb601bdd5299e0bd23c31082e2cd8eaa3afa6dd4ef78052edc938f726aed0e2->enter($__internal_bdb601bdd5299e0bd23c31082e2cd8eaa3afa6dd4ef78052edc938f726aed0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeysoftMenuBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdb601bdd5299e0bd23c31082e2cd8eaa3afa6dd4ef78052edc938f726aed0e2->leave($__internal_bdb601bdd5299e0bd23c31082e2cd8eaa3afa6dd4ef78052edc938f726aed0e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5bc5e22fade499d0500d6c8b59487f07194fc5d1f10b7500677e7e4c8b49eb6 = $this->env->getExtension("native_profiler");
        $__internal_b5bc5e22fade499d0500d6c8b59487f07194fc5d1f10b7500677e7e4c8b49eb6->enter($__internal_b5bc5e22fade499d0500d6c8b59487f07194fc5d1f10b7500677e7e4c8b49eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Hello
";
        
        $__internal_b5bc5e22fade499d0500d6c8b59487f07194fc5d1f10b7500677e7e4c8b49eb6->leave($__internal_b5bc5e22fade499d0500d6c8b59487f07194fc5d1f10b7500677e7e4c8b49eb6_prof);

    }

    public function getTemplateName()
    {
        return "HeysoftMenuBundle:Default:index.html.twig";
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
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/* Hello*/
/* {% endblock %}*/
