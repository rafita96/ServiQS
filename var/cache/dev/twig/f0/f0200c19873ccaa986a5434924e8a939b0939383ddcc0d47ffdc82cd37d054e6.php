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
        $__internal_7b83796bc133d66f27d840a42879c52b8994b2f5bc2674b053c7d292a6d0cdf9 = $this->env->getExtension("native_profiler");
        $__internal_7b83796bc133d66f27d840a42879c52b8994b2f5bc2674b053c7d292a6d0cdf9->enter($__internal_7b83796bc133d66f27d840a42879c52b8994b2f5bc2674b053c7d292a6d0cdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b83796bc133d66f27d840a42879c52b8994b2f5bc2674b053c7d292a6d0cdf9->leave($__internal_7b83796bc133d66f27d840a42879c52b8994b2f5bc2674b053c7d292a6d0cdf9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7efc05eecd0b2d9d4976df476dc10e37addbdfb541e27e5f26790a3d151169a = $this->env->getExtension("native_profiler");
        $__internal_e7efc05eecd0b2d9d4976df476dc10e37addbdfb541e27e5f26790a3d151169a->enter($__internal_e7efc05eecd0b2d9d4976df476dc10e37addbdfb541e27e5f26790a3d151169a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e7efc05eecd0b2d9d4976df476dc10e37addbdfb541e27e5f26790a3d151169a->leave($__internal_e7efc05eecd0b2d9d4976df476dc10e37addbdfb541e27e5f26790a3d151169a_prof);

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
