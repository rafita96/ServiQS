<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_40d80e2e56ca50bf60c94a267d7ce192698eaad07e5c8d48e1b3edd55537a15a extends Twig_Template
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
        $__internal_32a66db2f1364557ed04fa3301439d78d66b7c97ab560bdff6240086e49fb239 = $this->env->getExtension("native_profiler");
        $__internal_32a66db2f1364557ed04fa3301439d78d66b7c97ab560bdff6240086e49fb239->enter($__internal_32a66db2f1364557ed04fa3301439d78d66b7c97ab560bdff6240086e49fb239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "<div class=\"container\">
\t<div class=\"panel panel-default col-md-offset-3 col-md-6\">
\t\t<div class=\"panel-heading\"><h3 style=\"text-align:center\">Registrarse</h3></div>
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("placeholder" => "ejemplo@uabc.edu.mx")));
        echo "
\t\t\t    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
\t\t\t    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
\t\t\t    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
\t\t\t    <div class=\"col-md-offset-4 col-md-8\">
\t\t\t        <input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t        <div class=\"pull-right\">
\t\t\t        \t<a class=\"btn btn-default\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Regresar</a>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
</div>
";
        
        $__internal_32a66db2f1364557ed04fa3301439d78d66b7c97ab560bdff6240086e49fb239->leave($__internal_32a66db2f1364557ed04fa3301439d78d66b7c97ab560bdff6240086e49fb239_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  54 => 14,  49 => 12,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 6,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="container">*/
/* 	<div class="panel panel-default col-md-offset-3 col-md-6">*/
/* 		<div class="panel-heading"><h3 style="text-align:center">Registrarse</h3></div>*/
/* 		<div class="panel-body">*/
/* 			{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'form-horizontal'}}) }}*/
/* 			    {{ form_row(form.email, {'attr': {'placeholder': 'ejemplo@uabc.edu.mx'} }) }}*/
/* 			    {{ form_row(form.username) }}*/
/* 			    {{ form_row(form.plainPassword.first) }}*/
/* 			    {{ form_row(form.plainPassword.second) }}*/
/* 			    <div class="col-md-offset-4 col-md-8">*/
/* 			        <input class="btn btn-success" type="submit" value="{{ 'registration.submit'|trans }}" />*/
/* 			        <div class="pull-right">*/
/* 			        	<a class="btn btn-default" href="{{ path('fos_user_security_login') }}">Regresar</a>*/
/* 			        </div>*/
/* 			    </div>*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */