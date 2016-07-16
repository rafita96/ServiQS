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
        $__internal_0b7401b7fd6d7cc69becd5d03ab0e77e5edab5058bc83b9fc98fdf47ccd17b1c = $this->env->getExtension("native_profiler");
        $__internal_0b7401b7fd6d7cc69becd5d03ab0e77e5edab5058bc83b9fc98fdf47ccd17b1c->enter($__internal_0b7401b7fd6d7cc69becd5d03ab0e77e5edab5058bc83b9fc98fdf47ccd17b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0b7401b7fd6d7cc69becd5d03ab0e77e5edab5058bc83b9fc98fdf47ccd17b1c->leave($__internal_0b7401b7fd6d7cc69becd5d03ab0e77e5edab5058bc83b9fc98fdf47ccd17b1c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_330d03b8fbec65a90034bffa89b455b619a5dd1527d3ae7bcc8decca3bd7e6ad = $this->env->getExtension("native_profiler");
        $__internal_330d03b8fbec65a90034bffa89b455b619a5dd1527d3ae7bcc8decca3bd7e6ad->enter($__internal_330d03b8fbec65a90034bffa89b455b619a5dd1527d3ae7bcc8decca3bd7e6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_330d03b8fbec65a90034bffa89b455b619a5dd1527d3ae7bcc8decca3bd7e6ad->leave($__internal_330d03b8fbec65a90034bffa89b455b619a5dd1527d3ae7bcc8decca3bd7e6ad_prof);

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
