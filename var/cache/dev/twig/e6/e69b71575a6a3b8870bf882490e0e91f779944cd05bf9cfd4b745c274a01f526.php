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
        $__internal_2eee4522cde4ad63095599550330fdd2ad96f09f4f876aba61293fa544d92cbf = $this->env->getExtension("native_profiler");
        $__internal_2eee4522cde4ad63095599550330fdd2ad96f09f4f876aba61293fa544d92cbf->enter($__internal_2eee4522cde4ad63095599550330fdd2ad96f09f4f876aba61293fa544d92cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2eee4522cde4ad63095599550330fdd2ad96f09f4f876aba61293fa544d92cbf->leave($__internal_2eee4522cde4ad63095599550330fdd2ad96f09f4f876aba61293fa544d92cbf_prof);

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
