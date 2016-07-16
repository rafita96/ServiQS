<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_b1f790428c3859d6fb670809b3dfa789ae02eb46674a52f741e54024236c46c5 extends Twig_Template
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
        $__internal_0de3064252c1658042a362501a78dc7058be8ceb95baf933220e3b1fa4122856 = $this->env->getExtension("native_profiler");
        $__internal_0de3064252c1658042a362501a78dc7058be8ceb95baf933220e3b1fa4122856->enter($__internal_0de3064252c1658042a362501a78dc7058be8ceb95baf933220e3b1fa4122856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_0de3064252c1658042a362501a78dc7058be8ceb95baf933220e3b1fa4122856->leave($__internal_0de3064252c1658042a362501a78dc7058be8ceb95baf933220e3b1fa4122856_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
