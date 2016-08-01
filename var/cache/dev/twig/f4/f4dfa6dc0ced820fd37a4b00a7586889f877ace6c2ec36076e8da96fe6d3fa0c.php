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
        $__internal_49bbcdabebdb07f3797cb9809f87441d37a85234ddad3aeb82ae972b7791a515 = $this->env->getExtension("native_profiler");
        $__internal_49bbcdabebdb07f3797cb9809f87441d37a85234ddad3aeb82ae972b7791a515->enter($__internal_49bbcdabebdb07f3797cb9809f87441d37a85234ddad3aeb82ae972b7791a515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49bbcdabebdb07f3797cb9809f87441d37a85234ddad3aeb82ae972b7791a515->leave($__internal_49bbcdabebdb07f3797cb9809f87441d37a85234ddad3aeb82ae972b7791a515_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_22356cb6cf23c1a00ad2aa83e54df34662d06270f9d638058edc4422f6c5c744 = $this->env->getExtension("native_profiler");
        $__internal_22356cb6cf23c1a00ad2aa83e54df34662d06270f9d638058edc4422f6c5c744->enter($__internal_22356cb6cf23c1a00ad2aa83e54df34662d06270f9d638058edc4422f6c5c744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_22356cb6cf23c1a00ad2aa83e54df34662d06270f9d638058edc4422f6c5c744->leave($__internal_22356cb6cf23c1a00ad2aa83e54df34662d06270f9d638058edc4422f6c5c744_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a3738dea362465808d8dee67b3ecfacc351c4379efe34cfca880be6c2edcbd3 = $this->env->getExtension("native_profiler");
        $__internal_4a3738dea362465808d8dee67b3ecfacc351c4379efe34cfca880be6c2edcbd3->enter($__internal_4a3738dea362465808d8dee67b3ecfacc351c4379efe34cfca880be6c2edcbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a3738dea362465808d8dee67b3ecfacc351c4379efe34cfca880be6c2edcbd3->leave($__internal_4a3738dea362465808d8dee67b3ecfacc351c4379efe34cfca880be6c2edcbd3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4132bb25b3e779a39a1fa6baa12ceb0c7870e244246d943502f3953dc18a6f82 = $this->env->getExtension("native_profiler");
        $__internal_4132bb25b3e779a39a1fa6baa12ceb0c7870e244246d943502f3953dc18a6f82->enter($__internal_4132bb25b3e779a39a1fa6baa12ceb0c7870e244246d943502f3953dc18a6f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4132bb25b3e779a39a1fa6baa12ceb0c7870e244246d943502f3953dc18a6f82->leave($__internal_4132bb25b3e779a39a1fa6baa12ceb0c7870e244246d943502f3953dc18a6f82_prof);

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
