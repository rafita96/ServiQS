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
        $__internal_4312dd9484546455e874ea5faf703f86006947a2124d27c4c8be4043c82bd049 = $this->env->getExtension("native_profiler");
        $__internal_4312dd9484546455e874ea5faf703f86006947a2124d27c4c8be4043c82bd049->enter($__internal_4312dd9484546455e874ea5faf703f86006947a2124d27c4c8be4043c82bd049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4312dd9484546455e874ea5faf703f86006947a2124d27c4c8be4043c82bd049->leave($__internal_4312dd9484546455e874ea5faf703f86006947a2124d27c4c8be4043c82bd049_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_801beb9d0d2104aae14e19df976ae00cea1e34e2d2049fa4d844b566641f4c0b = $this->env->getExtension("native_profiler");
        $__internal_801beb9d0d2104aae14e19df976ae00cea1e34e2d2049fa4d844b566641f4c0b->enter($__internal_801beb9d0d2104aae14e19df976ae00cea1e34e2d2049fa4d844b566641f4c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_801beb9d0d2104aae14e19df976ae00cea1e34e2d2049fa4d844b566641f4c0b->leave($__internal_801beb9d0d2104aae14e19df976ae00cea1e34e2d2049fa4d844b566641f4c0b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9d4bf3a26cfd62421721f8c9b83a3cb1f1a98d9027756404de201041629996b = $this->env->getExtension("native_profiler");
        $__internal_b9d4bf3a26cfd62421721f8c9b83a3cb1f1a98d9027756404de201041629996b->enter($__internal_b9d4bf3a26cfd62421721f8c9b83a3cb1f1a98d9027756404de201041629996b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b9d4bf3a26cfd62421721f8c9b83a3cb1f1a98d9027756404de201041629996b->leave($__internal_b9d4bf3a26cfd62421721f8c9b83a3cb1f1a98d9027756404de201041629996b_prof);

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
