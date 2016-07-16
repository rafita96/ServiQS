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
        $__internal_05c398e712ac20762c02a57fa6b68339133ca964217b239b082386ddf8656d08 = $this->env->getExtension("native_profiler");
        $__internal_05c398e712ac20762c02a57fa6b68339133ca964217b239b082386ddf8656d08->enter($__internal_05c398e712ac20762c02a57fa6b68339133ca964217b239b082386ddf8656d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_05c398e712ac20762c02a57fa6b68339133ca964217b239b082386ddf8656d08->leave($__internal_05c398e712ac20762c02a57fa6b68339133ca964217b239b082386ddf8656d08_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b19c57c4907a6d571649b25deb0a32f738d5f83f18c1f3faabd57cba8ba882ab = $this->env->getExtension("native_profiler");
        $__internal_b19c57c4907a6d571649b25deb0a32f738d5f83f18c1f3faabd57cba8ba882ab->enter($__internal_b19c57c4907a6d571649b25deb0a32f738d5f83f18c1f3faabd57cba8ba882ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b19c57c4907a6d571649b25deb0a32f738d5f83f18c1f3faabd57cba8ba882ab->leave($__internal_b19c57c4907a6d571649b25deb0a32f738d5f83f18c1f3faabd57cba8ba882ab_prof);

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
