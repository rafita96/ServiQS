<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0cfbf2d77efc8baa9a9d2e8ff8b688128068ebd2a4bfd3a2e2ad995f126249b0 extends Twig_Template
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
        $__internal_1c8b96b93b5e301cf267c1f0045ca037af26f4946dbc3c743a0eef2fe1288ad9 = $this->env->getExtension("native_profiler");
        $__internal_1c8b96b93b5e301cf267c1f0045ca037af26f4946dbc3c743a0eef2fe1288ad9->enter($__internal_1c8b96b93b5e301cf267c1f0045ca037af26f4946dbc3c743a0eef2fe1288ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1c8b96b93b5e301cf267c1f0045ca037af26f4946dbc3c743a0eef2fe1288ad9->leave($__internal_1c8b96b93b5e301cf267c1f0045ca037af26f4946dbc3c743a0eef2fe1288ad9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
