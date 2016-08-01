<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_7103bea9508346a2b9b7a068670b8db6d916161c4cdf4650307a87868f23d5de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e362a00f66538e25b820c7b38cf974834f0b8f4078047b7ff55e1eb59d7343b2 = $this->env->getExtension("native_profiler");
        $__internal_e362a00f66538e25b820c7b38cf974834f0b8f4078047b7ff55e1eb59d7343b2->enter($__internal_e362a00f66538e25b820c7b38cf974834f0b8f4078047b7ff55e1eb59d7343b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e362a00f66538e25b820c7b38cf974834f0b8f4078047b7ff55e1eb59d7343b2->leave($__internal_e362a00f66538e25b820c7b38cf974834f0b8f4078047b7ff55e1eb59d7343b2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ef29b4fd96d4a90498762af3118883b39c96653fdb8d103f63f366f865dfa30 = $this->env->getExtension("native_profiler");
        $__internal_5ef29b4fd96d4a90498762af3118883b39c96653fdb8d103f63f366f865dfa30->enter($__internal_5ef29b4fd96d4a90498762af3118883b39c96653fdb8d103f63f366f865dfa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5ef29b4fd96d4a90498762af3118883b39c96653fdb8d103f63f366f865dfa30->leave($__internal_5ef29b4fd96d4a90498762af3118883b39c96653fdb8d103f63f366f865dfa30_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
