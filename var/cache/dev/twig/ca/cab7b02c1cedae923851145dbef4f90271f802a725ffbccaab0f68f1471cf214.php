<?php

/* HeysoftMenuBundle:Default:register.html.twig */
class __TwigTemplate_eb6fae87dda501b41f9cf5e1531c2d98389b9226fef28fa94c02ebeb3c53e5f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default/baseexterior.html.twig", "HeysoftMenuBundle:Default:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::default/baseexterior.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_140f9bb052f9af682b914e61a0889a5f1ba6a6c60ec3e8a84480b57ea55d8ca8 = $this->env->getExtension("native_profiler");
        $__internal_140f9bb052f9af682b914e61a0889a5f1ba6a6c60ec3e8a84480b57ea55d8ca8->enter($__internal_140f9bb052f9af682b914e61a0889a5f1ba6a6c60ec3e8a84480b57ea55d8ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeysoftMenuBundle:Default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_140f9bb052f9af682b914e61a0889a5f1ba6a6c60ec3e8a84480b57ea55d8ca8->leave($__internal_140f9bb052f9af682b914e61a0889a5f1ba6a6c60ec3e8a84480b57ea55d8ca8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcff949469c3db22e6a293c749b3ea8f1bac35e4d16fc50be43db31ceba7e6b7 = $this->env->getExtension("native_profiler");
        $__internal_dcff949469c3db22e6a293c749b3ea8f1bac35e4d16fc50be43db31ceba7e6b7->enter($__internal_dcff949469c3db22e6a293c749b3ea8f1bac35e4d16fc50be43db31ceba7e6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'row');
        echo "

    <button type=\"submit\">Registrarse!</button>
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_dcff949469c3db22e6a293c749b3ea8f1bac35e4d16fc50be43db31ceba7e6b7->leave($__internal_dcff949469c3db22e6a293c749b3ea8f1bac35e4d16fc50be43db31ceba7e6b7_prof);

    }

    public function getTemplateName()
    {
        return "HeysoftMenuBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::default/baseexterior.html.twig" %}*/
/* */
/* {% block body %}*/
/* {{ form_start(form) }}*/
/*     {{ form_row(form.username) }}*/
/*     {{ form_row(form.email) }}*/
/*     {{ form_row(form.password.first) }}*/
/*     {{ form_row(form.password.second) }}*/
/* */
/*     <button type="submit">Registrarse!</button>*/
/* {{ form_end(form) }}*/
/* {% endblock %}*/
