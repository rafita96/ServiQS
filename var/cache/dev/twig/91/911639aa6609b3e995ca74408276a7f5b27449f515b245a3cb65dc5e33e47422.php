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
        $__internal_3747fde1276894837b8cd8950bbe93d6a57d746b2b602c7884e4c94f1d5c6128 = $this->env->getExtension("native_profiler");
        $__internal_3747fde1276894837b8cd8950bbe93d6a57d746b2b602c7884e4c94f1d5c6128->enter($__internal_3747fde1276894837b8cd8950bbe93d6a57d746b2b602c7884e4c94f1d5c6128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3747fde1276894837b8cd8950bbe93d6a57d746b2b602c7884e4c94f1d5c6128->leave($__internal_3747fde1276894837b8cd8950bbe93d6a57d746b2b602c7884e4c94f1d5c6128_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcf3735f0c4be73a1f08b61c53e7b237998408e1a1b1f6bbd8003205878856d1 = $this->env->getExtension("native_profiler");
        $__internal_fcf3735f0c4be73a1f08b61c53e7b237998408e1a1b1f6bbd8003205878856d1->enter($__internal_fcf3735f0c4be73a1f08b61c53e7b237998408e1a1b1f6bbd8003205878856d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "
";
        
        $__internal_fcf3735f0c4be73a1f08b61c53e7b237998408e1a1b1f6bbd8003205878856d1->leave($__internal_fcf3735f0c4be73a1f08b61c53e7b237998408e1a1b1f6bbd8003205878856d1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_02535669cf181a2bf979c982045590a017779b850e2463f329e0995edcf1cdc3 = $this->env->getExtension("native_profiler");
        $__internal_02535669cf181a2bf979c982045590a017779b850e2463f329e0995edcf1cdc3->enter($__internal_02535669cf181a2bf979c982045590a017779b850e2463f329e0995edcf1cdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div class=\"container\">
\t\t<div class=\"panel panel-default col-md-offset-3 col-md-6\">
\t\t\t<div class=\"panel-heading\"><h3 style=\"text-align:center\">Iniciar Sesi&oacute;n</h3></div>

\t\t\t<div class=\"panel-body\">
\t\t\t\t<form class=\"form-horizontal\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t
\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t\t    <div class=\"form-group\">
\t\t\t\t    \t<label class=\"col-md-2 control-label\" for=\"username\">Usuario</label>

\t\t\t\t    \t<div class=\"col-md-8\">
\t\t\t\t    \t\t<input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t    \t</div>
\t\t\t\t    </div>

\t\t\t\t    <div class=\"form-group\">
\t\t\t\t    \t<label class=\"col-md-2 control-label\" for=\"password\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

\t\t\t\t    \t<div class=\"col-md-8\">
\t\t\t\t    \t\t<input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t    \t</div>
\t\t\t\t    </div>

\t\t\t\t    <div class=\"form-group\">
\t\t\t\t    \t<div class=\"col-md-offset-2 col-md-8\">
\t\t\t\t    \t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t    \t\t<label class=\"control-label\" for=\"remember_me\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t    \t</div>
\t\t\t\t    </div>

\t\t\t\t    <div class=\"form-group\">
\t\t\t\t    \t<div class=\"col-md-offset-2 col-md-8\">
\t\t\t\t    \t\t<input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t    \t\t<a class=\"pull-right btn btn-primary\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Registrarse</a>
\t\t\t\t    \t</div>
\t\t\t\t    </div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_02535669cf181a2bf979c982045590a017779b850e2463f329e0995edcf1cdc3->leave($__internal_02535669cf181a2bf979c982045590a017779b850e2463f329e0995edcf1cdc3_prof);

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
        return array (  123 => 46,  119 => 45,  110 => 39,  97 => 29,  89 => 24,  80 => 18,  75 => 16,  68 => 11,  62 => 10,  54 => 54,  52 => 10,  49 => 9,  43 => 7,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* {% block body %}*/
/* 	<div class="container">*/
/* 		<div class="panel panel-default col-md-offset-3 col-md-6">*/
/* 			<div class="panel-heading"><h3 style="text-align:center">Iniciar Sesi&oacute;n</h3></div>*/
/* */
/* 			<div class="panel-body">*/
/* 				<form class="form-horizontal" action="{{ path("fos_user_security_check") }}" method="post">*/
/* 					*/
/* 				    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/* 				    <div class="form-group">*/
/* 				    	<label class="col-md-2 control-label" for="username">Usuario</label>*/
/* */
/* 				    	<div class="col-md-8">*/
/* 				    		<input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* 				    	</div>*/
/* 				    </div>*/
/* */
/* 				    <div class="form-group">*/
/* 				    	<label class="col-md-2 control-label" for="password">{{ 'security.login.password'|trans }}</label>*/
/* */
/* 				    	<div class="col-md-8">*/
/* 				    		<input class="form-control" type="password" id="password" name="_password" required="required" />*/
/* 				    	</div>*/
/* 				    </div>*/
/* */
/* 				    <div class="form-group">*/
/* 				    	<div class="col-md-offset-2 col-md-8">*/
/* 				    		<input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* 				    		<label class="control-label" for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* 				    	</div>*/
/* 				    </div>*/
/* */
/* 				    <div class="form-group">*/
/* 				    	<div class="col-md-offset-2 col-md-8">*/
/* 				    		<input class="btn btn-success" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* 				    		<a class="pull-right btn btn-primary" href="{{ path('fos_user_registration_register') }}">Registrarse</a>*/
/* 				    	</div>*/
/* 				    </div>*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% endblock fos_user_content %}*/
/* */
