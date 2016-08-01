<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f98a7986b01265e8497be054e0fe49107c9b860d05bb1ebffeafb6426f4f8bf6 extends Twig_Template
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
        $__internal_8a69d511d234416e147774b9d375c3b4ca1d81a36404f21e9747b1ecf1fbc5bf = $this->env->getExtension("native_profiler");
        $__internal_8a69d511d234416e147774b9d375c3b4ca1d81a36404f21e9747b1ecf1fbc5bf->enter($__internal_8a69d511d234416e147774b9d375c3b4ca1d81a36404f21e9747b1ecf1fbc5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8a69d511d234416e147774b9d375c3b4ca1d81a36404f21e9747b1ecf1fbc5bf->leave($__internal_8a69d511d234416e147774b9d375c3b4ca1d81a36404f21e9747b1ecf1fbc5bf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e14576dcf51abb28223f8b237f96b4d81ca71ff357e6c65bc535a3f310fb8f15 = $this->env->getExtension("native_profiler");
        $__internal_e14576dcf51abb28223f8b237f96b4d81ca71ff357e6c65bc535a3f310fb8f15->enter($__internal_e14576dcf51abb28223f8b237f96b4d81ca71ff357e6c65bc535a3f310fb8f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e14576dcf51abb28223f8b237f96b4d81ca71ff357e6c65bc535a3f310fb8f15->leave($__internal_e14576dcf51abb28223f8b237f96b4d81ca71ff357e6c65bc535a3f310fb8f15_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
