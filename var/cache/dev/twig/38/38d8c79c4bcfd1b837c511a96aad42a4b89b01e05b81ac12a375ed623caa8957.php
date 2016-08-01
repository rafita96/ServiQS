<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_95e08661fbd31b30b49d5563bd18b0afd6af51bd69720d4744fe7e91e50fed74 extends Twig_Template
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
        $__internal_bb1e8936066840ee4ddd5f5004f7fc292075368850d9a9e8cb2fb249849657ac = $this->env->getExtension("native_profiler");
        $__internal_bb1e8936066840ee4ddd5f5004f7fc292075368850d9a9e8cb2fb249849657ac->enter($__internal_bb1e8936066840ee4ddd5f5004f7fc292075368850d9a9e8cb2fb249849657ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bb1e8936066840ee4ddd5f5004f7fc292075368850d9a9e8cb2fb249849657ac->leave($__internal_bb1e8936066840ee4ddd5f5004f7fc292075368850d9a9e8cb2fb249849657ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
