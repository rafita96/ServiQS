<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_e0b4a5f31e59dae5e8eafb49d56c126ce5f8e146279aa56a52792c801e5956e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cdde3661953bb6fa4f62d51def9481907dc4ecdae7cbc2bd3ddc3f78c70131c = $this->env->getExtension("native_profiler");
        $__internal_5cdde3661953bb6fa4f62d51def9481907dc4ecdae7cbc2bd3ddc3f78c70131c->enter($__internal_5cdde3661953bb6fa4f62d51def9481907dc4ecdae7cbc2bd3ddc3f78c70131c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5cdde3661953bb6fa4f62d51def9481907dc4ecdae7cbc2bd3ddc3f78c70131c->leave($__internal_5cdde3661953bb6fa4f62d51def9481907dc4ecdae7cbc2bd3ddc3f78c70131c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
