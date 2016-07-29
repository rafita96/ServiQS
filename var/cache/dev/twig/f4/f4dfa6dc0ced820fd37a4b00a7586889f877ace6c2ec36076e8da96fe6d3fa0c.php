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
        $__internal_5f4870e1be9016a17e4da6202c6916a1ef23d4c7fa7ded52a46a3b103481e091 = $this->env->getExtension("native_profiler");
        $__internal_5f4870e1be9016a17e4da6202c6916a1ef23d4c7fa7ded52a46a3b103481e091->enter($__internal_5f4870e1be9016a17e4da6202c6916a1ef23d4c7fa7ded52a46a3b103481e091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f4870e1be9016a17e4da6202c6916a1ef23d4c7fa7ded52a46a3b103481e091->leave($__internal_5f4870e1be9016a17e4da6202c6916a1ef23d4c7fa7ded52a46a3b103481e091_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fcdcc2517dce3aa847c46e029ea9dea9aa7fcea88ae7ce090e69d41d41fd063d = $this->env->getExtension("native_profiler");
        $__internal_fcdcc2517dce3aa847c46e029ea9dea9aa7fcea88ae7ce090e69d41d41fd063d->enter($__internal_fcdcc2517dce3aa847c46e029ea9dea9aa7fcea88ae7ce090e69d41d41fd063d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fcdcc2517dce3aa847c46e029ea9dea9aa7fcea88ae7ce090e69d41d41fd063d->leave($__internal_fcdcc2517dce3aa847c46e029ea9dea9aa7fcea88ae7ce090e69d41d41fd063d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4680efdf94b3f9c42aca2cb621762fe33a868fa5d752b5a87d5c2f6ed74bf34c = $this->env->getExtension("native_profiler");
        $__internal_4680efdf94b3f9c42aca2cb621762fe33a868fa5d752b5a87d5c2f6ed74bf34c->enter($__internal_4680efdf94b3f9c42aca2cb621762fe33a868fa5d752b5a87d5c2f6ed74bf34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4680efdf94b3f9c42aca2cb621762fe33a868fa5d752b5a87d5c2f6ed74bf34c->leave($__internal_4680efdf94b3f9c42aca2cb621762fe33a868fa5d752b5a87d5c2f6ed74bf34c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6920283308a032e6101c755cdf4eb0b0e64cdd1efa58f84e3e1edc95c9d050b9 = $this->env->getExtension("native_profiler");
        $__internal_6920283308a032e6101c755cdf4eb0b0e64cdd1efa58f84e3e1edc95c9d050b9->enter($__internal_6920283308a032e6101c755cdf4eb0b0e64cdd1efa58f84e3e1edc95c9d050b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6920283308a032e6101c755cdf4eb0b0e64cdd1efa58f84e3e1edc95c9d050b9->leave($__internal_6920283308a032e6101c755cdf4eb0b0e64cdd1efa58f84e3e1edc95c9d050b9_prof);

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
