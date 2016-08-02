<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8148ef316aac31b841e278a5bd87c6c20a548854c100f19a9c2c7c3d461ca3c0 extends Twig_Template
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
        $__internal_7b266445275031408ce98f2c40688abcf61ed37877502be56698bdad31d0b6ad = $this->env->getExtension("native_profiler");
        $__internal_7b266445275031408ce98f2c40688abcf61ed37877502be56698bdad31d0b6ad->enter($__internal_7b266445275031408ce98f2c40688abcf61ed37877502be56698bdad31d0b6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7b266445275031408ce98f2c40688abcf61ed37877502be56698bdad31d0b6ad->leave($__internal_7b266445275031408ce98f2c40688abcf61ed37877502be56698bdad31d0b6ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
