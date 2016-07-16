<?php

/* base.html.twig */
class __TwigTemplate_d6b8765ee2c4d1a3dd75ea944d99d2ed7e85b61181283e0575d35500a6086130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c0bf53d4155ed258d2cb4517d281e6b7f0a9958ca70b958e567c85bd3c08441 = $this->env->getExtension("native_profiler");
        $__internal_6c0bf53d4155ed258d2cb4517d281e6b7f0a9958ca70b958e567c85bd3c08441->enter($__internal_6c0bf53d4155ed258d2cb4517d281e6b7f0a9958ca70b958e567c85bd3c08441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6c0bf53d4155ed258d2cb4517d281e6b7f0a9958ca70b958e567c85bd3c08441->leave($__internal_6c0bf53d4155ed258d2cb4517d281e6b7f0a9958ca70b958e567c85bd3c08441_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_308848216c449ba551d768f4678e6d47ea897d5566fd8578bbddc509259f3b59 = $this->env->getExtension("native_profiler");
        $__internal_308848216c449ba551d768f4678e6d47ea897d5566fd8578bbddc509259f3b59->enter($__internal_308848216c449ba551d768f4678e6d47ea897d5566fd8578bbddc509259f3b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_308848216c449ba551d768f4678e6d47ea897d5566fd8578bbddc509259f3b59->leave($__internal_308848216c449ba551d768f4678e6d47ea897d5566fd8578bbddc509259f3b59_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05eac45d9d3fe0b142b06539528ee10695b05300b09030e44d0744f84ad5df5e = $this->env->getExtension("native_profiler");
        $__internal_05eac45d9d3fe0b142b06539528ee10695b05300b09030e44d0744f84ad5df5e->enter($__internal_05eac45d9d3fe0b142b06539528ee10695b05300b09030e44d0744f84ad5df5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_05eac45d9d3fe0b142b06539528ee10695b05300b09030e44d0744f84ad5df5e->leave($__internal_05eac45d9d3fe0b142b06539528ee10695b05300b09030e44d0744f84ad5df5e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5416dad21f87e0b31200b822900bbd6ef70f9fe286fbeb5087ae26d22aa8dbe = $this->env->getExtension("native_profiler");
        $__internal_d5416dad21f87e0b31200b822900bbd6ef70f9fe286fbeb5087ae26d22aa8dbe->enter($__internal_d5416dad21f87e0b31200b822900bbd6ef70f9fe286fbeb5087ae26d22aa8dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d5416dad21f87e0b31200b822900bbd6ef70f9fe286fbeb5087ae26d22aa8dbe->leave($__internal_d5416dad21f87e0b31200b822900bbd6ef70f9fe286fbeb5087ae26d22aa8dbe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_398a777663681e2603b02144470648f6fa390621c070299217a60c11ae048634 = $this->env->getExtension("native_profiler");
        $__internal_398a777663681e2603b02144470648f6fa390621c070299217a60c11ae048634->enter($__internal_398a777663681e2603b02144470648f6fa390621c070299217a60c11ae048634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_398a777663681e2603b02144470648f6fa390621c070299217a60c11ae048634->leave($__internal_398a777663681e2603b02144470648f6fa390621c070299217a60c11ae048634_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
