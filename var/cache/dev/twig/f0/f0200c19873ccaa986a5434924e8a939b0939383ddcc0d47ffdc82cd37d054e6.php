<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_7464cdadbb618e23b219aa015140cb1b40e624f81b404132ac2e9d13ae3be092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77032633cd147aa8b3790a43ab366c79f624e2d76d1278e43ecd01fac980e8dc = $this->env->getExtension("native_profiler");
        $__internal_77032633cd147aa8b3790a43ab366c79f624e2d76d1278e43ecd01fac980e8dc->enter($__internal_77032633cd147aa8b3790a43ab366c79f624e2d76d1278e43ecd01fac980e8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77032633cd147aa8b3790a43ab366c79f624e2d76d1278e43ecd01fac980e8dc->leave($__internal_77032633cd147aa8b3790a43ab366c79f624e2d76d1278e43ecd01fac980e8dc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21ebf02a76129bd98d06d7f43e771f090a80e5a05d3cfc4af5bedb8fe1bccb6f = $this->env->getExtension("native_profiler");
        $__internal_21ebf02a76129bd98d06d7f43e771f090a80e5a05d3cfc4af5bedb8fe1bccb6f->enter($__internal_21ebf02a76129bd98d06d7f43e771f090a80e5a05d3cfc4af5bedb8fe1bccb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "\t<div class=\"container\">
\t\t<div class=\"panel panel-default col-md-offset-3 col-md-6\">
\t\t\t<div class=\"panel-body\">
\t\t    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
\t\t    ";
        // line 10
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 11
            echo "\t\t    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
\t\t    </div>
\t    </div>
    </div>
    ";
        }
        
        $__internal_21ebf02a76129bd98d06d7f43e771f090a80e5a05d3cfc4af5bedb8fe1bccb6f->leave($__internal_21ebf02a76129bd98d06d7f43e771f090a80e5a05d3cfc4af5bedb8fe1bccb6f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  49 => 10,  45 => 9,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* 	<div class="container">*/
/* 		<div class="panel panel-default col-md-offset-3 col-md-6">*/
/* 			<div class="panel-body">*/
/* 		    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/* 		    {% if targetUrl %}*/
/* 		    <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/* 		    </div>*/
/* 	    </div>*/
/*     </div>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
