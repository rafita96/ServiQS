<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_40cb3b9e1980100cd5103b412ec3b7da903816a3a2b03d2528adc9d988f18b8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_fa612b97e053d33a69818692faf9b65cc0b035597209f5c878a3ba6aa75ef6ca = $this->env->getExtension("native_profiler");
        $__internal_fa612b97e053d33a69818692faf9b65cc0b035597209f5c878a3ba6aa75ef6ca->enter($__internal_fa612b97e053d33a69818692faf9b65cc0b035597209f5c878a3ba6aa75ef6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa612b97e053d33a69818692faf9b65cc0b035597209f5c878a3ba6aa75ef6ca->leave($__internal_fa612b97e053d33a69818692faf9b65cc0b035597209f5c878a3ba6aa75ef6ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cba9ef88d83f087da773417ed81a226f4e901a6f034c2eeba2af2b64c6e5f13d = $this->env->getExtension("native_profiler");
        $__internal_cba9ef88d83f087da773417ed81a226f4e901a6f034c2eeba2af2b64c6e5f13d->enter($__internal_cba9ef88d83f087da773417ed81a226f4e901a6f034c2eeba2af2b64c6e5f13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cba9ef88d83f087da773417ed81a226f4e901a6f034c2eeba2af2b64c6e5f13d->leave($__internal_cba9ef88d83f087da773417ed81a226f4e901a6f034c2eeba2af2b64c6e5f13d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_38ff850c60a231ce8041f32903f58c8a2e350907fbfe6b98c5923926c322bbde = $this->env->getExtension("native_profiler");
        $__internal_38ff850c60a231ce8041f32903f58c8a2e350907fbfe6b98c5923926c322bbde->enter($__internal_38ff850c60a231ce8041f32903f58c8a2e350907fbfe6b98c5923926c322bbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_38ff850c60a231ce8041f32903f58c8a2e350907fbfe6b98c5923926c322bbde->leave($__internal_38ff850c60a231ce8041f32903f58c8a2e350907fbfe6b98c5923926c322bbde_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_47c2a487bdbf19484342c2dec59c849962161bb00e6039e77926b1cbaa50fc60 = $this->env->getExtension("native_profiler");
        $__internal_47c2a487bdbf19484342c2dec59c849962161bb00e6039e77926b1cbaa50fc60->enter($__internal_47c2a487bdbf19484342c2dec59c849962161bb00e6039e77926b1cbaa50fc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_47c2a487bdbf19484342c2dec59c849962161bb00e6039e77926b1cbaa50fc60->leave($__internal_47c2a487bdbf19484342c2dec59c849962161bb00e6039e77926b1cbaa50fc60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
