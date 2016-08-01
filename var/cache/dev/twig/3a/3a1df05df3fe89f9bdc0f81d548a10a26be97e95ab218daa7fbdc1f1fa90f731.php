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
        $__internal_9001d8532a174e6f22a69947c3b2b978782f739584fa0a23d006d7d2854c9be4 = $this->env->getExtension("native_profiler");
        $__internal_9001d8532a174e6f22a69947c3b2b978782f739584fa0a23d006d7d2854c9be4->enter($__internal_9001d8532a174e6f22a69947c3b2b978782f739584fa0a23d006d7d2854c9be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_9001d8532a174e6f22a69947c3b2b978782f739584fa0a23d006d7d2854c9be4->leave($__internal_9001d8532a174e6f22a69947c3b2b978782f739584fa0a23d006d7d2854c9be4_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_686955e5e6d91d7c2538e7a98a28a74a523d83f9be83d3d1a56afe860d872ab7 = $this->env->getExtension("native_profiler");
        $__internal_686955e5e6d91d7c2538e7a98a28a74a523d83f9be83d3d1a56afe860d872ab7->enter($__internal_686955e5e6d91d7c2538e7a98a28a74a523d83f9be83d3d1a56afe860d872ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_686955e5e6d91d7c2538e7a98a28a74a523d83f9be83d3d1a56afe860d872ab7->leave($__internal_686955e5e6d91d7c2538e7a98a28a74a523d83f9be83d3d1a56afe860d872ab7_prof);

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
