<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_4fbe6ac9b3f1d708ebc68be187f8c37e90f52cecaa3d0b391146785ef1392976 extends Twig_Template
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
        $__internal_25aaf4a5600dd21dd59d6a78d61a4c6218ddbb715c5ac28432df19346d40c1d3 = $this->env->getExtension("native_profiler");
        $__internal_25aaf4a5600dd21dd59d6a78d61a4c6218ddbb715c5ac28432df19346d40c1d3->enter($__internal_25aaf4a5600dd21dd59d6a78d61a4c6218ddbb715c5ac28432df19346d40c1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_25aaf4a5600dd21dd59d6a78d61a4c6218ddbb715c5ac28432df19346d40c1d3->leave($__internal_25aaf4a5600dd21dd59d6a78d61a4c6218ddbb715c5ac28432df19346d40c1d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
