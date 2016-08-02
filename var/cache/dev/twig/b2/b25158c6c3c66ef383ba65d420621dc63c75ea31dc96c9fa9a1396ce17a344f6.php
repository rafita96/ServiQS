<?php

/* @HeysoftMenu/Default/register.html.twig */
class __TwigTemplate_3955f889b8b14292a2877abf769367cdda215c946813d04502f1574ce8b0d4c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default/baseexterior.html.twig", "@HeysoftMenu/Default/register.html.twig", 1);
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
        $__internal_11ad33c834a074e1db433bf14fdb8fdcf88707c902ff8abc64cf8d93331512a9 = $this->env->getExtension("native_profiler");
        $__internal_11ad33c834a074e1db433bf14fdb8fdcf88707c902ff8abc64cf8d93331512a9->enter($__internal_11ad33c834a074e1db433bf14fdb8fdcf88707c902ff8abc64cf8d93331512a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HeysoftMenu/Default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11ad33c834a074e1db433bf14fdb8fdcf88707c902ff8abc64cf8d93331512a9->leave($__internal_11ad33c834a074e1db433bf14fdb8fdcf88707c902ff8abc64cf8d93331512a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78b74c8dbd00f36bbbad222a61412e8262d659b2715ccebc5f51c027d255b06e = $this->env->getExtension("native_profiler");
        $__internal_78b74c8dbd00f36bbbad222a61412e8262d659b2715ccebc5f51c027d255b06e->enter($__internal_78b74c8dbd00f36bbbad222a61412e8262d659b2715ccebc5f51c027d255b06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_78b74c8dbd00f36bbbad222a61412e8262d659b2715ccebc5f51c027d255b06e->leave($__internal_78b74c8dbd00f36bbbad222a61412e8262d659b2715ccebc5f51c027d255b06e_prof);

    }

    public function getTemplateName()
    {
        return "@HeysoftMenu/Default/register.html.twig";
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
