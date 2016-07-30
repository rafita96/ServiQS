<?php

/* form/fields.html.twig */
class __TwigTemplate_4a1b8540b286f384f64df9049a24394cf84012931567e8a5db32408dc421d2e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0744cf54b165a422c26d52cad0d6771c1a7f13ee5b560399d7f909c7a6b9525 = $this->env->getExtension("native_profiler");
        $__internal_e0744cf54b165a422c26d52cad0d6771c1a7f13ee5b560399d7f909c7a6b9525->enter($__internal_e0744cf54b165a422c26d52cad0d6771c1a7f13ee5b560399d7f909c7a6b9525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_e0744cf54b165a422c26d52cad0d6771c1a7f13ee5b560399d7f909c7a6b9525->leave($__internal_e0744cf54b165a422c26d52cad0d6771c1a7f13ee5b560399d7f909c7a6b9525_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ef37db645e17da34f0fbd2397c79fdc33059d58a2f743340c55907c71adb10d6 = $this->env->getExtension("native_profiler");
        $__internal_ef37db645e17da34f0fbd2397c79fdc33059d58a2f743340c55907c71adb10d6->enter($__internal_ef37db645e17da34f0fbd2397c79fdc33059d58a2f743340c55907c71adb10d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 2
        echo "\t";
        ob_start();
        // line 3
        echo "\t\t<div class=\"form-group\">
\t\t    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => array("class" => "control-label col-md-4")));
        echo "
\t\t    <div class=\"col-md-8\">
\t\t    \t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t</div>
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ef37db645e17da34f0fbd2397c79fdc33059d58a2f743340c55907c71adb10d6->leave($__internal_ef37db645e17da34f0fbd2397c79fdc33059d58a2f743340c55907c71adb10d6_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  46 => 6,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block form_row %}*/
/* 	{% spaceless %}*/
/* 		<div class="form-group">*/
/* 		    {{ form_label(form, null, {'label_attr': {'class': 'control-label col-md-4'}}) }}*/
/* 		    <div class="col-md-8">*/
/* 		    	{{ form_widget(form, {'attr': {'class': 'form-control'} } ) }}*/
/* 		    </div>*/
/* 		    {{ form_errors(form) }}*/
/* 		</div>*/
/* 	{% endspaceless %}*/
/* {% endblock form_row %}*/
