<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4d762f191c1dbe7d73a8b9f0f24f105cfb13a35ec60052702cd2153adea92baf extends Twig_Template
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
        $__internal_b263b4fc90d61536b0a0f088ec46c85bd894185a1ae260fd5362b30679c47bec = $this->env->getExtension("native_profiler");
        $__internal_b263b4fc90d61536b0a0f088ec46c85bd894185a1ae260fd5362b30679c47bec->enter($__internal_b263b4fc90d61536b0a0f088ec46c85bd894185a1ae260fd5362b30679c47bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b263b4fc90d61536b0a0f088ec46c85bd894185a1ae260fd5362b30679c47bec->leave($__internal_b263b4fc90d61536b0a0f088ec46c85bd894185a1ae260fd5362b30679c47bec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
