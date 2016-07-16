<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_76709092b0d839cad2c1a8b14a231561524f28c626eb62703a10d0571f0a755f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_38a90e42b7048f5798cf0cfd02eaf9fead33bbae4ecdbd5bf3c5b5a876894efa = $this->env->getExtension("native_profiler");
        $__internal_38a90e42b7048f5798cf0cfd02eaf9fead33bbae4ecdbd5bf3c5b5a876894efa->enter($__internal_38a90e42b7048f5798cf0cfd02eaf9fead33bbae4ecdbd5bf3c5b5a876894efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a90e42b7048f5798cf0cfd02eaf9fead33bbae4ecdbd5bf3c5b5a876894efa->leave($__internal_38a90e42b7048f5798cf0cfd02eaf9fead33bbae4ecdbd5bf3c5b5a876894efa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec40e00b8b8709e9bc146d4c6db07a985d6a139fe98dd620f2c19d498d2be348 = $this->env->getExtension("native_profiler");
        $__internal_ec40e00b8b8709e9bc146d4c6db07a985d6a139fe98dd620f2c19d498d2be348->enter($__internal_ec40e00b8b8709e9bc146d4c6db07a985d6a139fe98dd620f2c19d498d2be348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ec40e00b8b8709e9bc146d4c6db07a985d6a139fe98dd620f2c19d498d2be348->leave($__internal_ec40e00b8b8709e9bc146d4c6db07a985d6a139fe98dd620f2c19d498d2be348_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e428a26eb5df5f25e2df1dfeee3da1a0f7f862137409787a4466d730fb939648 = $this->env->getExtension("native_profiler");
        $__internal_e428a26eb5df5f25e2df1dfeee3da1a0f7f862137409787a4466d730fb939648->enter($__internal_e428a26eb5df5f25e2df1dfeee3da1a0f7f862137409787a4466d730fb939648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e428a26eb5df5f25e2df1dfeee3da1a0f7f862137409787a4466d730fb939648->leave($__internal_e428a26eb5df5f25e2df1dfeee3da1a0f7f862137409787a4466d730fb939648_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
