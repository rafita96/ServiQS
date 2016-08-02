<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_084b201965352164b84b0af028db5cfa3c88d6054e0348b8899118387e23315e extends Twig_Template
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
        $__internal_0f2fd73d7dc64d28fa513ce580d49e9677603c456a99d7d82cc013153d411130 = $this->env->getExtension("native_profiler");
        $__internal_0f2fd73d7dc64d28fa513ce580d49e9677603c456a99d7d82cc013153d411130->enter($__internal_0f2fd73d7dc64d28fa513ce580d49e9677603c456a99d7d82cc013153d411130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_0f2fd73d7dc64d28fa513ce580d49e9677603c456a99d7d82cc013153d411130->leave($__internal_0f2fd73d7dc64d28fa513ce580d49e9677603c456a99d7d82cc013153d411130_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
