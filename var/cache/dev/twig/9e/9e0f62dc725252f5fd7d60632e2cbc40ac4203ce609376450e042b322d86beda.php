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
        $__internal_4a756a12ab73a7ca1bb939a45e5e7315ca510eed0f9881bbe8bf52988c0a8ffa = $this->env->getExtension("native_profiler");
        $__internal_4a756a12ab73a7ca1bb939a45e5e7315ca510eed0f9881bbe8bf52988c0a8ffa->enter($__internal_4a756a12ab73a7ca1bb939a45e5e7315ca510eed0f9881bbe8bf52988c0a8ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a756a12ab73a7ca1bb939a45e5e7315ca510eed0f9881bbe8bf52988c0a8ffa->leave($__internal_4a756a12ab73a7ca1bb939a45e5e7315ca510eed0f9881bbe8bf52988c0a8ffa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f2945fb43317f949cb160dc659e8e2aac826774e9115ac6d1ef6f24d69232f0 = $this->env->getExtension("native_profiler");
        $__internal_8f2945fb43317f949cb160dc659e8e2aac826774e9115ac6d1ef6f24d69232f0->enter($__internal_8f2945fb43317f949cb160dc659e8e2aac826774e9115ac6d1ef6f24d69232f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8f2945fb43317f949cb160dc659e8e2aac826774e9115ac6d1ef6f24d69232f0->leave($__internal_8f2945fb43317f949cb160dc659e8e2aac826774e9115ac6d1ef6f24d69232f0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cbfca83af044fd633b56f54280ac6bc9924cc49de68a20ab96aa77b14d2596e = $this->env->getExtension("native_profiler");
        $__internal_1cbfca83af044fd633b56f54280ac6bc9924cc49de68a20ab96aa77b14d2596e->enter($__internal_1cbfca83af044fd633b56f54280ac6bc9924cc49de68a20ab96aa77b14d2596e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1cbfca83af044fd633b56f54280ac6bc9924cc49de68a20ab96aa77b14d2596e->leave($__internal_1cbfca83af044fd633b56f54280ac6bc9924cc49de68a20ab96aa77b14d2596e_prof);

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
