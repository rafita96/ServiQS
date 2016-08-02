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
        $__internal_f4863b56c10366a5753da39d189813b5abdaad1baceb0238b3294dbfa4a8582d = $this->env->getExtension("native_profiler");
        $__internal_f4863b56c10366a5753da39d189813b5abdaad1baceb0238b3294dbfa4a8582d->enter($__internal_f4863b56c10366a5753da39d189813b5abdaad1baceb0238b3294dbfa4a8582d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4863b56c10366a5753da39d189813b5abdaad1baceb0238b3294dbfa4a8582d->leave($__internal_f4863b56c10366a5753da39d189813b5abdaad1baceb0238b3294dbfa4a8582d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f74e30966e1067f7ceb65d4cf913810e6cf3f298f6f97f98ced9b5dc2225fe75 = $this->env->getExtension("native_profiler");
        $__internal_f74e30966e1067f7ceb65d4cf913810e6cf3f298f6f97f98ced9b5dc2225fe75->enter($__internal_f74e30966e1067f7ceb65d4cf913810e6cf3f298f6f97f98ced9b5dc2225fe75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f74e30966e1067f7ceb65d4cf913810e6cf3f298f6f97f98ced9b5dc2225fe75->leave($__internal_f74e30966e1067f7ceb65d4cf913810e6cf3f298f6f97f98ced9b5dc2225fe75_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_322d528cdf4d78e1c7d1df2e1de0f04c13f8838eed5a8afc3e287c1636d971cc = $this->env->getExtension("native_profiler");
        $__internal_322d528cdf4d78e1c7d1df2e1de0f04c13f8838eed5a8afc3e287c1636d971cc->enter($__internal_322d528cdf4d78e1c7d1df2e1de0f04c13f8838eed5a8afc3e287c1636d971cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_322d528cdf4d78e1c7d1df2e1de0f04c13f8838eed5a8afc3e287c1636d971cc->leave($__internal_322d528cdf4d78e1c7d1df2e1de0f04c13f8838eed5a8afc3e287c1636d971cc_prof);

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
