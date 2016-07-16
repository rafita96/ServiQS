<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_cf8a4825ad8f083a307ad4fd0f8c2e0624ca6892ccdbc5753e002b635e7fb958 extends Twig_Template
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
        $__internal_5e74b4ce4e3068d7e2e03c6bfe1371ef36bcfea4da7d442c3b3ef28a82a7dbfc = $this->env->getExtension("native_profiler");
        $__internal_5e74b4ce4e3068d7e2e03c6bfe1371ef36bcfea4da7d442c3b3ef28a82a7dbfc->enter($__internal_5e74b4ce4e3068d7e2e03c6bfe1371ef36bcfea4da7d442c3b3ef28a82a7dbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5e74b4ce4e3068d7e2e03c6bfe1371ef36bcfea4da7d442c3b3ef28a82a7dbfc->leave($__internal_5e74b4ce4e3068d7e2e03c6bfe1371ef36bcfea4da7d442c3b3ef28a82a7dbfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
