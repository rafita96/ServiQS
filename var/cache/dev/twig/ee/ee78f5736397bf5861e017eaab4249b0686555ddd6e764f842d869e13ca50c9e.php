<?php

/* :form:fields.html.twig */
class __TwigTemplate_3c28f5be746f84dab8fdc30cdc8d614c82e0ce46e064c837ee794189197c16ee extends Twig_Template
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
        $__internal_b35745437718fd540e9d932f82d63c44c394c7e5e953d03755ba9add049fc2af = $this->env->getExtension("native_profiler");
        $__internal_b35745437718fd540e9d932f82d63c44c394c7e5e953d03755ba9add049fc2af->enter($__internal_b35745437718fd540e9d932f82d63c44c394c7e5e953d03755ba9add049fc2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:fields.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_b35745437718fd540e9d932f82d63c44c394c7e5e953d03755ba9add049fc2af->leave($__internal_b35745437718fd540e9d932f82d63c44c394c7e5e953d03755ba9add049fc2af_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5fad7318b0b86874be8cbf16bb644f27ea8d6746bba8138c357c833f2ce08883 = $this->env->getExtension("native_profiler");
        $__internal_5fad7318b0b86874be8cbf16bb644f27ea8d6746bba8138c357c833f2ce08883->enter($__internal_5fad7318b0b86874be8cbf16bb644f27ea8d6746bba8138c357c833f2ce08883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_5fad7318b0b86874be8cbf16bb644f27ea8d6746bba8138c357c833f2ce08883->leave($__internal_5fad7318b0b86874be8cbf16bb644f27ea8d6746bba8138c357c833f2ce08883_prof);

    }

    public function getTemplateName()
    {
        return ":form:fields.html.twig";
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
