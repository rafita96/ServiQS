<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_98d947fa616d834555b6541c5460f27e12c3acde9e25ef398005159482b0a119 extends Twig_Template
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
        $__internal_c306031b33e4baac05e5303a97b5b9f8d851d2e5b48e3844bb653c9b94dca403 = $this->env->getExtension("native_profiler");
        $__internal_c306031b33e4baac05e5303a97b5b9f8d851d2e5b48e3844bb653c9b94dca403->enter($__internal_c306031b33e4baac05e5303a97b5b9f8d851d2e5b48e3844bb653c9b94dca403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c306031b33e4baac05e5303a97b5b9f8d851d2e5b48e3844bb653c9b94dca403->leave($__internal_c306031b33e4baac05e5303a97b5b9f8d851d2e5b48e3844bb653c9b94dca403_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
