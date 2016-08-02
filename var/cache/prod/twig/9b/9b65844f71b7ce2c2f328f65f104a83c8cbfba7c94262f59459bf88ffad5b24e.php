<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_786a5039fbc264597b6e8a00b62eecdba7ba7b2d44385a435291f6cac28d2fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9adcc1f6d99e5951aef614ec529031fa4e15a39e302bdba5690223811780893b = $this->env->getExtension("native_profiler");
        $__internal_9adcc1f6d99e5951aef614ec529031fa4e15a39e302bdba5690223811780893b->enter($__internal_9adcc1f6d99e5951aef614ec529031fa4e15a39e302bdba5690223811780893b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9adcc1f6d99e5951aef614ec529031fa4e15a39e302bdba5690223811780893b->leave($__internal_9adcc1f6d99e5951aef614ec529031fa4e15a39e302bdba5690223811780893b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0d97dbc76bbbb4b1b34d512fe66f69994b56350be1ca5832dca3661dca7e5bc = $this->env->getExtension("native_profiler");
        $__internal_d0d97dbc76bbbb4b1b34d512fe66f69994b56350be1ca5832dca3661dca7e5bc->enter($__internal_d0d97dbc76bbbb4b1b34d512fe66f69994b56350be1ca5832dca3661dca7e5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d0d97dbc76bbbb4b1b34d512fe66f69994b56350be1ca5832dca3661dca7e5bc->leave($__internal_d0d97dbc76bbbb4b1b34d512fe66f69994b56350be1ca5832dca3661dca7e5bc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_55e6c6cb3179d3c6f6edd7b3e14cab61bd3efb38f93e1a1296ca14db696617d1 = $this->env->getExtension("native_profiler");
        $__internal_55e6c6cb3179d3c6f6edd7b3e14cab61bd3efb38f93e1a1296ca14db696617d1->enter($__internal_55e6c6cb3179d3c6f6edd7b3e14cab61bd3efb38f93e1a1296ca14db696617d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_55e6c6cb3179d3c6f6edd7b3e14cab61bd3efb38f93e1a1296ca14db696617d1->leave($__internal_55e6c6cb3179d3c6f6edd7b3e14cab61bd3efb38f93e1a1296ca14db696617d1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd4e8dc1680248605ead6c7ebb491dde1ed333c26b11573c2ca83bec78fb6bde = $this->env->getExtension("native_profiler");
        $__internal_cd4e8dc1680248605ead6c7ebb491dde1ed333c26b11573c2ca83bec78fb6bde->enter($__internal_cd4e8dc1680248605ead6c7ebb491dde1ed333c26b11573c2ca83bec78fb6bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cd4e8dc1680248605ead6c7ebb491dde1ed333c26b11573c2ca83bec78fb6bde->leave($__internal_cd4e8dc1680248605ead6c7ebb491dde1ed333c26b11573c2ca83bec78fb6bde_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
