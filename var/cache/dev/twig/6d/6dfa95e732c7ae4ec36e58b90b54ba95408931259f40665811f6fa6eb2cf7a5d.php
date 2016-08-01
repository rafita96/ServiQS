<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_92621fa3865a344179efa5076bcd7e5296959cf232756aa41bb1ebbb9bb9e2b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_948b0aa31f5f763acc40d7bfd3646808d8a70f1bd547b3e4d6bddb82489afc8e = $this->env->getExtension("native_profiler");
        $__internal_948b0aa31f5f763acc40d7bfd3646808d8a70f1bd547b3e4d6bddb82489afc8e->enter($__internal_948b0aa31f5f763acc40d7bfd3646808d8a70f1bd547b3e4d6bddb82489afc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_948b0aa31f5f763acc40d7bfd3646808d8a70f1bd547b3e4d6bddb82489afc8e->leave($__internal_948b0aa31f5f763acc40d7bfd3646808d8a70f1bd547b3e4d6bddb82489afc8e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c1d099c74f1b9af3af886f870f321ed7412bc71376bc2bc876457663d5ddc09 = $this->env->getExtension("native_profiler");
        $__internal_9c1d099c74f1b9af3af886f870f321ed7412bc71376bc2bc876457663d5ddc09->enter($__internal_9c1d099c74f1b9af3af886f870f321ed7412bc71376bc2bc876457663d5ddc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_9c1d099c74f1b9af3af886f870f321ed7412bc71376bc2bc876457663d5ddc09->leave($__internal_9c1d099c74f1b9af3af886f870f321ed7412bc71376bc2bc876457663d5ddc09_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
