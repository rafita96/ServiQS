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
        $__internal_86e141464eb8778a284c4728f5529c1c4fff811274be7dd14e5447e6825cc802 = $this->env->getExtension("native_profiler");
        $__internal_86e141464eb8778a284c4728f5529c1c4fff811274be7dd14e5447e6825cc802->enter($__internal_86e141464eb8778a284c4728f5529c1c4fff811274be7dd14e5447e6825cc802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86e141464eb8778a284c4728f5529c1c4fff811274be7dd14e5447e6825cc802->leave($__internal_86e141464eb8778a284c4728f5529c1c4fff811274be7dd14e5447e6825cc802_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9943431850e64d029c4ba045f406b42a0ad6b0d3769826a928054b426afd2f44 = $this->env->getExtension("native_profiler");
        $__internal_9943431850e64d029c4ba045f406b42a0ad6b0d3769826a928054b426afd2f44->enter($__internal_9943431850e64d029c4ba045f406b42a0ad6b0d3769826a928054b426afd2f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9943431850e64d029c4ba045f406b42a0ad6b0d3769826a928054b426afd2f44->leave($__internal_9943431850e64d029c4ba045f406b42a0ad6b0d3769826a928054b426afd2f44_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5397025f678e9dd2c0f1fb6d83ef3edb178b7ade2f7750e0f3bcd8b7bc719573 = $this->env->getExtension("native_profiler");
        $__internal_5397025f678e9dd2c0f1fb6d83ef3edb178b7ade2f7750e0f3bcd8b7bc719573->enter($__internal_5397025f678e9dd2c0f1fb6d83ef3edb178b7ade2f7750e0f3bcd8b7bc719573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5397025f678e9dd2c0f1fb6d83ef3edb178b7ade2f7750e0f3bcd8b7bc719573->leave($__internal_5397025f678e9dd2c0f1fb6d83ef3edb178b7ade2f7750e0f3bcd8b7bc719573_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d700e92e59681e56bee3836ee4f23f91c4e76af1bb26f6b9cf30fc35f21e90b2 = $this->env->getExtension("native_profiler");
        $__internal_d700e92e59681e56bee3836ee4f23f91c4e76af1bb26f6b9cf30fc35f21e90b2->enter($__internal_d700e92e59681e56bee3836ee4f23f91c4e76af1bb26f6b9cf30fc35f21e90b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d700e92e59681e56bee3836ee4f23f91c4e76af1bb26f6b9cf30fc35f21e90b2->leave($__internal_d700e92e59681e56bee3836ee4f23f91c4e76af1bb26f6b9cf30fc35f21e90b2_prof);

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
