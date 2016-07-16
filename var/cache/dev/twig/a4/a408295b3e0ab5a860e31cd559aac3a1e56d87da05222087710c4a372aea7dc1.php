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
        $__internal_978cdf5e9c3360dc3681edeef3af56d74315a267026bd7da10089d2fc99a0067 = $this->env->getExtension("native_profiler");
        $__internal_978cdf5e9c3360dc3681edeef3af56d74315a267026bd7da10089d2fc99a0067->enter($__internal_978cdf5e9c3360dc3681edeef3af56d74315a267026bd7da10089d2fc99a0067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_978cdf5e9c3360dc3681edeef3af56d74315a267026bd7da10089d2fc99a0067->leave($__internal_978cdf5e9c3360dc3681edeef3af56d74315a267026bd7da10089d2fc99a0067_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42c67142977b90de6a552c46a358787c41aef2fb2d1018f415add71e64b9d293 = $this->env->getExtension("native_profiler");
        $__internal_42c67142977b90de6a552c46a358787c41aef2fb2d1018f415add71e64b9d293->enter($__internal_42c67142977b90de6a552c46a358787c41aef2fb2d1018f415add71e64b9d293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_42c67142977b90de6a552c46a358787c41aef2fb2d1018f415add71e64b9d293->leave($__internal_42c67142977b90de6a552c46a358787c41aef2fb2d1018f415add71e64b9d293_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4bb2b983921358dc012e2b1a7612ba5e004dba021e0230e9acb116938f8d68e = $this->env->getExtension("native_profiler");
        $__internal_d4bb2b983921358dc012e2b1a7612ba5e004dba021e0230e9acb116938f8d68e->enter($__internal_d4bb2b983921358dc012e2b1a7612ba5e004dba021e0230e9acb116938f8d68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d4bb2b983921358dc012e2b1a7612ba5e004dba021e0230e9acb116938f8d68e->leave($__internal_d4bb2b983921358dc012e2b1a7612ba5e004dba021e0230e9acb116938f8d68e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fd0db1b735e94d2a8eeadaa80b1a7faec5eb4281bee6ae50510ca20263bf183 = $this->env->getExtension("native_profiler");
        $__internal_0fd0db1b735e94d2a8eeadaa80b1a7faec5eb4281bee6ae50510ca20263bf183->enter($__internal_0fd0db1b735e94d2a8eeadaa80b1a7faec5eb4281bee6ae50510ca20263bf183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0fd0db1b735e94d2a8eeadaa80b1a7faec5eb4281bee6ae50510ca20263bf183->leave($__internal_0fd0db1b735e94d2a8eeadaa80b1a7faec5eb4281bee6ae50510ca20263bf183_prof);

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
