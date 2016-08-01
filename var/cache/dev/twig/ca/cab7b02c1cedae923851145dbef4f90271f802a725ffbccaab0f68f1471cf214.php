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
        $__internal_78237307ce7e2be5ac39a2d75b616a7f6eab5fc9a39597287a6b3c85b6b8962c = $this->env->getExtension("native_profiler");
        $__internal_78237307ce7e2be5ac39a2d75b616a7f6eab5fc9a39597287a6b3c85b6b8962c->enter($__internal_78237307ce7e2be5ac39a2d75b616a7f6eab5fc9a39597287a6b3c85b6b8962c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeysoftMenuBundle:Default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78237307ce7e2be5ac39a2d75b616a7f6eab5fc9a39597287a6b3c85b6b8962c->leave($__internal_78237307ce7e2be5ac39a2d75b616a7f6eab5fc9a39597287a6b3c85b6b8962c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b35d18452d11f3995c3f50c36aeda8d0f44e3e1d35ceb0e82cba47df2ed27879 = $this->env->getExtension("native_profiler");
        $__internal_b35d18452d11f3995c3f50c36aeda8d0f44e3e1d35ceb0e82cba47df2ed27879->enter($__internal_b35d18452d11f3995c3f50c36aeda8d0f44e3e1d35ceb0e82cba47df2ed27879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b35d18452d11f3995c3f50c36aeda8d0f44e3e1d35ceb0e82cba47df2ed27879->leave($__internal_b35d18452d11f3995c3f50c36aeda8d0f44e3e1d35ceb0e82cba47df2ed27879_prof);

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
