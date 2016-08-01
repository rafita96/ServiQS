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
        $__internal_3d78106dab2cc099abcf2369e8b9d7e5287d23cac88f39455274a69e33174bc4 = $this->env->getExtension("native_profiler");
        $__internal_3d78106dab2cc099abcf2369e8b9d7e5287d23cac88f39455274a69e33174bc4->enter($__internal_3d78106dab2cc099abcf2369e8b9d7e5287d23cac88f39455274a69e33174bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3d78106dab2cc099abcf2369e8b9d7e5287d23cac88f39455274a69e33174bc4->leave($__internal_3d78106dab2cc099abcf2369e8b9d7e5287d23cac88f39455274a69e33174bc4_prof);

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
