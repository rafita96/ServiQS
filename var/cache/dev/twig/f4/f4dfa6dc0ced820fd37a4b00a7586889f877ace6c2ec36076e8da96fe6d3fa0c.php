<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6cc62bb879e5817e083f780747a2f13d16ebcc506d72a5b7bdeb2e4b0e1b2564 extends Twig_Template
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
        $__internal_d5cf3e2b91865c15deed5029e4537a546f3ec55eb52764c4e0fa047723b79819 = $this->env->getExtension("native_profiler");
        $__internal_d5cf3e2b91865c15deed5029e4537a546f3ec55eb52764c4e0fa047723b79819->enter($__internal_d5cf3e2b91865c15deed5029e4537a546f3ec55eb52764c4e0fa047723b79819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5cf3e2b91865c15deed5029e4537a546f3ec55eb52764c4e0fa047723b79819->leave($__internal_d5cf3e2b91865c15deed5029e4537a546f3ec55eb52764c4e0fa047723b79819_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f1a1c54301369ba5683d80d2678fd98cafa08fe1664e8b14fdf6b6e1e203a0e = $this->env->getExtension("native_profiler");
        $__internal_0f1a1c54301369ba5683d80d2678fd98cafa08fe1664e8b14fdf6b6e1e203a0e->enter($__internal_0f1a1c54301369ba5683d80d2678fd98cafa08fe1664e8b14fdf6b6e1e203a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0f1a1c54301369ba5683d80d2678fd98cafa08fe1664e8b14fdf6b6e1e203a0e->leave($__internal_0f1a1c54301369ba5683d80d2678fd98cafa08fe1664e8b14fdf6b6e1e203a0e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_54cdf68d4fed344ef260807e5e8600ac7fee70f98e9076f6150df55fa417b2ba = $this->env->getExtension("native_profiler");
        $__internal_54cdf68d4fed344ef260807e5e8600ac7fee70f98e9076f6150df55fa417b2ba->enter($__internal_54cdf68d4fed344ef260807e5e8600ac7fee70f98e9076f6150df55fa417b2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_54cdf68d4fed344ef260807e5e8600ac7fee70f98e9076f6150df55fa417b2ba->leave($__internal_54cdf68d4fed344ef260807e5e8600ac7fee70f98e9076f6150df55fa417b2ba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a2b2560f7fb99011a706cf7fd69d6053fa87fd65c0035a85c276635ded4ee1c = $this->env->getExtension("native_profiler");
        $__internal_1a2b2560f7fb99011a706cf7fd69d6053fa87fd65c0035a85c276635ded4ee1c->enter($__internal_1a2b2560f7fb99011a706cf7fd69d6053fa87fd65c0035a85c276635ded4ee1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1a2b2560f7fb99011a706cf7fd69d6053fa87fd65c0035a85c276635ded4ee1c->leave($__internal_1a2b2560f7fb99011a706cf7fd69d6053fa87fd65c0035a85c276635ded4ee1c_prof);

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
