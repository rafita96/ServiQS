<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_da126d0b52980b2f7673a02758d613d1c9c0924700ffc1ecadb7b312349306d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c5fa6d04c00101883e71d6374b2833ef0173f9a380ecbdd44fe5ff042e193f3 = $this->env->getExtension("native_profiler");
        $__internal_3c5fa6d04c00101883e71d6374b2833ef0173f9a380ecbdd44fe5ff042e193f3->enter($__internal_3c5fa6d04c00101883e71d6374b2833ef0173f9a380ecbdd44fe5ff042e193f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c5fa6d04c00101883e71d6374b2833ef0173f9a380ecbdd44fe5ff042e193f3->leave($__internal_3c5fa6d04c00101883e71d6374b2833ef0173f9a380ecbdd44fe5ff042e193f3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6923a6250cd5577ed1ff4963f36a344b940a342e681ae6c08c7578c8cbccc7c5 = $this->env->getExtension("native_profiler");
        $__internal_6923a6250cd5577ed1ff4963f36a344b940a342e681ae6c08c7578c8cbccc7c5->enter($__internal_6923a6250cd5577ed1ff4963f36a344b940a342e681ae6c08c7578c8cbccc7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
";
        
        $__internal_6923a6250cd5577ed1ff4963f36a344b940a342e681ae6c08c7578c8cbccc7c5->leave($__internal_6923a6250cd5577ed1ff4963f36a344b940a342e681ae6c08c7578c8cbccc7c5_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f31232ba452cc2c959388c09df66ab757292c537ba5cb550efaa16c5e999875 = $this->env->getExtension("native_profiler");
        $__internal_6f31232ba452cc2c959388c09df66ab757292c537ba5cb550efaa16c5e999875->enter($__internal_6f31232ba452cc2c959388c09df66ab757292c537ba5cb550efaa16c5e999875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"panel panel-default col-md-offset-3 col-md-6\">
\t\t<div class=\"panel-heading\"><h3 style=\"text-align:center\">Iniciar Sesi&oacute;n</h3></div>

\t\t<div class=\"panel-body\">
\t\t\t";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "\t\t\t    <div class=\"alert alert-danger\">";
            echo "La contraseña que ingresaste es incorrecta";
            echo "</div>
\t\t\t";
        }
        // line 14
        echo "\t\t\t<form class=\"form-horizontal\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t
\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t    <div class=\"form-group\">
\t\t\t    \t<label class=\"col-md-2 control-label\" for=\"username\">Usuario</label>

\t\t\t    \t<div class=\"col-md-8\">
\t\t\t    \t\t<input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t    \t</div>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t    \t<label class=\"col-md-2 control-label\" for=\"password\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

\t\t\t    \t<div class=\"col-md-8\">
\t\t\t    \t\t<input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t    \t</div>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t    \t<div class=\"col-md-offset-2 col-md-8\">
\t\t\t    \t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t    \t\t<label class=\"control-label\" for=\"remember_me\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t    \t</div>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t    \t<div class=\"col-md-offset-2 col-md-8\">
\t\t\t    \t\t<input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t    \t\t<a class=\"pull-right btn btn-primary\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Registrarse</a>
\t\t\t    \t</div>
\t\t\t    </div>
\t\t\t</form>
\t\t</div>
\t</div>
";
        
        $__internal_6f31232ba452cc2c959388c09df66ab757292c537ba5cb550efaa16c5e999875->leave($__internal_6f31232ba452cc2c959388c09df66ab757292c537ba5cb550efaa16c5e999875_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  116 => 43,  107 => 37,  94 => 27,  86 => 22,  77 => 16,  71 => 14,  65 => 12,  63 => 11,  57 => 7,  51 => 6,  43 => 51,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% block body %}*/
/* 	<div class="panel panel-default col-md-offset-3 col-md-6">*/
/* 		<div class="panel-heading"><h3 style="text-align:center">Iniciar Sesi&oacute;n</h3></div>*/
/* */
/* 		<div class="panel-body">*/
/* 			{% if error %}*/
/* 			    <div class="alert alert-danger">{{ "La contraseña que ingresaste es incorrecta" }}</div>*/
/* 			{% endif %}*/
/* 			<form class="form-horizontal" action="{{ path("fos_user_security_check") }}" method="post">*/
/* 				*/
/* 			    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/* 			    <div class="form-group">*/
/* 			    	<label class="col-md-2 control-label" for="username">Usuario</label>*/
/* */
/* 			    	<div class="col-md-8">*/
/* 			    		<input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* 			    	</div>*/
/* 			    </div>*/
/* */
/* 			    <div class="form-group">*/
/* 			    	<label class="col-md-2 control-label" for="password">{{ 'security.login.password'|trans }}</label>*/
/* */
/* 			    	<div class="col-md-8">*/
/* 			    		<input class="form-control" type="password" id="password" name="_password" required="required" />*/
/* 			    	</div>*/
/* 			    </div>*/
/* */
/* 			    <div class="form-group">*/
/* 			    	<div class="col-md-offset-2 col-md-8">*/
/* 			    		<input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* 			    		<label class="control-label" for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* 			    	</div>*/
/* 			    </div>*/
/* */
/* 			    <div class="form-group">*/
/* 			    	<div class="col-md-offset-2 col-md-8">*/
/* 			    		<input class="btn btn-success" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* 			    		<a class="pull-right btn btn-primary" href="{{ path('fos_user_registration_register') }}">Registrarse</a>*/
/* 			    	</div>*/
/* 			    </div>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% endblock fos_user_content %}*/
/* */
