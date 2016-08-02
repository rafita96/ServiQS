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
        $__internal_de046605833a7483dec61483ac0dcf8904f7887e1072c01c24b5c6fce7460a0f = $this->env->getExtension("native_profiler");
        $__internal_de046605833a7483dec61483ac0dcf8904f7887e1072c01c24b5c6fce7460a0f->enter($__internal_de046605833a7483dec61483ac0dcf8904f7887e1072c01c24b5c6fce7460a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_de046605833a7483dec61483ac0dcf8904f7887e1072c01c24b5c6fce7460a0f->leave($__internal_de046605833a7483dec61483ac0dcf8904f7887e1072c01c24b5c6fce7460a0f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_33b87f49464a05f790d9af2097f1b090db769b22c7ce2f5b81549a41ff76730d = $this->env->getExtension("native_profiler");
        $__internal_33b87f49464a05f790d9af2097f1b090db769b22c7ce2f5b81549a41ff76730d->enter($__internal_33b87f49464a05f790d9af2097f1b090db769b22c7ce2f5b81549a41ff76730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_33b87f49464a05f790d9af2097f1b090db769b22c7ce2f5b81549a41ff76730d->leave($__internal_33b87f49464a05f790d9af2097f1b090db769b22c7ce2f5b81549a41ff76730d_prof);

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
