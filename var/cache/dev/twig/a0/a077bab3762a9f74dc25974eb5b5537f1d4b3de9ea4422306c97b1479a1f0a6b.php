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
        $__internal_b8e4c4165e431cae554e70367405d565d0c1dfe70fe9c27c422c3528440f544b = $this->env->getExtension("native_profiler");
        $__internal_b8e4c4165e431cae554e70367405d565d0c1dfe70fe9c27c422c3528440f544b->enter($__internal_b8e4c4165e431cae554e70367405d565d0c1dfe70fe9c27c422c3528440f544b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeysoftMenuBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8e4c4165e431cae554e70367405d565d0c1dfe70fe9c27c422c3528440f544b->leave($__internal_b8e4c4165e431cae554e70367405d565d0c1dfe70fe9c27c422c3528440f544b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0b66486e27ebdb3e2b3b03bd734a7ef3a57f4da9801413b300cb868ba209d06 = $this->env->getExtension("native_profiler");
        $__internal_b0b66486e27ebdb3e2b3b03bd734a7ef3a57f4da9801413b300cb868ba209d06->enter($__internal_b0b66486e27ebdb3e2b3b03bd734a7ef3a57f4da9801413b300cb868ba209d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Hello
";
        
        $__internal_b0b66486e27ebdb3e2b3b03bd734a7ef3a57f4da9801413b300cb868ba209d06->leave($__internal_b0b66486e27ebdb3e2b3b03bd734a7ef3a57f4da9801413b300cb868ba209d06_prof);

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
