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
        $__internal_ef6eac80b9e47789188584eb9b3542c460ddd5cc0eecea7947e9daf185a9644e = $this->env->getExtension("native_profiler");
        $__internal_ef6eac80b9e47789188584eb9b3542c460ddd5cc0eecea7947e9daf185a9644e->enter($__internal_ef6eac80b9e47789188584eb9b3542c460ddd5cc0eecea7947e9daf185a9644e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef6eac80b9e47789188584eb9b3542c460ddd5cc0eecea7947e9daf185a9644e->leave($__internal_ef6eac80b9e47789188584eb9b3542c460ddd5cc0eecea7947e9daf185a9644e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1c6a9c757a35a4078cf5736c56d7799149e5df56027ef9ff38665c859411577 = $this->env->getExtension("native_profiler");
        $__internal_d1c6a9c757a35a4078cf5736c56d7799149e5df56027ef9ff38665c859411577->enter($__internal_d1c6a9c757a35a4078cf5736c56d7799149e5df56027ef9ff38665c859411577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d1c6a9c757a35a4078cf5736c56d7799149e5df56027ef9ff38665c859411577->leave($__internal_d1c6a9c757a35a4078cf5736c56d7799149e5df56027ef9ff38665c859411577_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f82a371ff03d6dbe54f7c6c631e2e016e27e8bafe05b17592467c4a95aa96b4 = $this->env->getExtension("native_profiler");
        $__internal_3f82a371ff03d6dbe54f7c6c631e2e016e27e8bafe05b17592467c4a95aa96b4->enter($__internal_3f82a371ff03d6dbe54f7c6c631e2e016e27e8bafe05b17592467c4a95aa96b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3f82a371ff03d6dbe54f7c6c631e2e016e27e8bafe05b17592467c4a95aa96b4->leave($__internal_3f82a371ff03d6dbe54f7c6c631e2e016e27e8bafe05b17592467c4a95aa96b4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8277909b6853f5cde0809111d80ba47b51ef3a83b407ef997984c5e8f1faa243 = $this->env->getExtension("native_profiler");
        $__internal_8277909b6853f5cde0809111d80ba47b51ef3a83b407ef997984c5e8f1faa243->enter($__internal_8277909b6853f5cde0809111d80ba47b51ef3a83b407ef997984c5e8f1faa243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8277909b6853f5cde0809111d80ba47b51ef3a83b407ef997984c5e8f1faa243->leave($__internal_8277909b6853f5cde0809111d80ba47b51ef3a83b407ef997984c5e8f1faa243_prof);

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
