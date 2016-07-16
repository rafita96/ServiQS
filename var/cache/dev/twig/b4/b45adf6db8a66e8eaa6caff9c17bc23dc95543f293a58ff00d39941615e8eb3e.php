<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_451b52724e7bb64d011b59cb2950b6d3695549888a058d9e21e55d4e8309117f extends Twig_Template
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
        $__internal_8983cf95ef96500870eec08168059aa45265aadcdaa82d062bbcb88e2c97eb40 = $this->env->getExtension("native_profiler");
        $__internal_8983cf95ef96500870eec08168059aa45265aadcdaa82d062bbcb88e2c97eb40->enter($__internal_8983cf95ef96500870eec08168059aa45265aadcdaa82d062bbcb88e2c97eb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8983cf95ef96500870eec08168059aa45265aadcdaa82d062bbcb88e2c97eb40->leave($__internal_8983cf95ef96500870eec08168059aa45265aadcdaa82d062bbcb88e2c97eb40_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
