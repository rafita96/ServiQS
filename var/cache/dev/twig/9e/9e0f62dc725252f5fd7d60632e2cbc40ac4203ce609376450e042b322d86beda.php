<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_ce1e89a2249e2ae8b45fa77e04648cf5e92072d2594d4f7138afe97380d7f1db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_2b4b627bc8bbcee3bfc22f03cde642e2b36230350519c99a83dd0299ec0777a3 = $this->env->getExtension("native_profiler");
        $__internal_2b4b627bc8bbcee3bfc22f03cde642e2b36230350519c99a83dd0299ec0777a3->enter($__internal_2b4b627bc8bbcee3bfc22f03cde642e2b36230350519c99a83dd0299ec0777a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b4b627bc8bbcee3bfc22f03cde642e2b36230350519c99a83dd0299ec0777a3->leave($__internal_2b4b627bc8bbcee3bfc22f03cde642e2b36230350519c99a83dd0299ec0777a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_548844b1cf5086e044fbcbd9874a474f21f1dbcb5efa5ac57ad20235c8a15493 = $this->env->getExtension("native_profiler");
        $__internal_548844b1cf5086e044fbcbd9874a474f21f1dbcb5efa5ac57ad20235c8a15493->enter($__internal_548844b1cf5086e044fbcbd9874a474f21f1dbcb5efa5ac57ad20235c8a15493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_548844b1cf5086e044fbcbd9874a474f21f1dbcb5efa5ac57ad20235c8a15493->leave($__internal_548844b1cf5086e044fbcbd9874a474f21f1dbcb5efa5ac57ad20235c8a15493_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_078009e75ba266e8e4357651fbad8bd3012744f61541f2c1dc685ac7c624be58 = $this->env->getExtension("native_profiler");
        $__internal_078009e75ba266e8e4357651fbad8bd3012744f61541f2c1dc685ac7c624be58->enter($__internal_078009e75ba266e8e4357651fbad8bd3012744f61541f2c1dc685ac7c624be58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_078009e75ba266e8e4357651fbad8bd3012744f61541f2c1dc685ac7c624be58->leave($__internal_078009e75ba266e8e4357651fbad8bd3012744f61541f2c1dc685ac7c624be58_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
