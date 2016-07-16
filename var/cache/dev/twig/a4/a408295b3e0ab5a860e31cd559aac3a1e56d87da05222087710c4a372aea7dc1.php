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
        $__internal_eb0ea02180cc49e063b733f987e50aa7098b10f56bc6689e99ae918b2eef4857 = $this->env->getExtension("native_profiler");
        $__internal_eb0ea02180cc49e063b733f987e50aa7098b10f56bc6689e99ae918b2eef4857->enter($__internal_eb0ea02180cc49e063b733f987e50aa7098b10f56bc6689e99ae918b2eef4857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb0ea02180cc49e063b733f987e50aa7098b10f56bc6689e99ae918b2eef4857->leave($__internal_eb0ea02180cc49e063b733f987e50aa7098b10f56bc6689e99ae918b2eef4857_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee9dec84fc68614f0cc911e965f7d09798f1557ae23f2833f743e57d329bbeb2 = $this->env->getExtension("native_profiler");
        $__internal_ee9dec84fc68614f0cc911e965f7d09798f1557ae23f2833f743e57d329bbeb2->enter($__internal_ee9dec84fc68614f0cc911e965f7d09798f1557ae23f2833f743e57d329bbeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ee9dec84fc68614f0cc911e965f7d09798f1557ae23f2833f743e57d329bbeb2->leave($__internal_ee9dec84fc68614f0cc911e965f7d09798f1557ae23f2833f743e57d329bbeb2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_805ed93dc82384d9672be43799da16554caf6be3b6f3b13fddea65c9c53926db = $this->env->getExtension("native_profiler");
        $__internal_805ed93dc82384d9672be43799da16554caf6be3b6f3b13fddea65c9c53926db->enter($__internal_805ed93dc82384d9672be43799da16554caf6be3b6f3b13fddea65c9c53926db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_805ed93dc82384d9672be43799da16554caf6be3b6f3b13fddea65c9c53926db->leave($__internal_805ed93dc82384d9672be43799da16554caf6be3b6f3b13fddea65c9c53926db_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a438ce39c52fcece890a9fde97d5a056f6814022898a3cbfa558d8b7567934e = $this->env->getExtension("native_profiler");
        $__internal_4a438ce39c52fcece890a9fde97d5a056f6814022898a3cbfa558d8b7567934e->enter($__internal_4a438ce39c52fcece890a9fde97d5a056f6814022898a3cbfa558d8b7567934e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4a438ce39c52fcece890a9fde97d5a056f6814022898a3cbfa558d8b7567934e->leave($__internal_4a438ce39c52fcece890a9fde97d5a056f6814022898a3cbfa558d8b7567934e_prof);

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
