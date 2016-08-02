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
        $__internal_bacf47ae20ea0f2b19971bdf6b9ff8236984eff040093faded2eef65331f06d8 = $this->env->getExtension("native_profiler");
        $__internal_bacf47ae20ea0f2b19971bdf6b9ff8236984eff040093faded2eef65331f06d8->enter($__internal_bacf47ae20ea0f2b19971bdf6b9ff8236984eff040093faded2eef65331f06d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bacf47ae20ea0f2b19971bdf6b9ff8236984eff040093faded2eef65331f06d8->leave($__internal_bacf47ae20ea0f2b19971bdf6b9ff8236984eff040093faded2eef65331f06d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3ca3f9089fac19a34a527fbf53b30dcfd116acec99529a91054329cdcc40ad1 = $this->env->getExtension("native_profiler");
        $__internal_c3ca3f9089fac19a34a527fbf53b30dcfd116acec99529a91054329cdcc40ad1->enter($__internal_c3ca3f9089fac19a34a527fbf53b30dcfd116acec99529a91054329cdcc40ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c3ca3f9089fac19a34a527fbf53b30dcfd116acec99529a91054329cdcc40ad1->leave($__internal_c3ca3f9089fac19a34a527fbf53b30dcfd116acec99529a91054329cdcc40ad1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c752474dd37805dd06be18a2fe78b4c664a472b5a5d1b475b8f954cdd4440c8 = $this->env->getExtension("native_profiler");
        $__internal_3c752474dd37805dd06be18a2fe78b4c664a472b5a5d1b475b8f954cdd4440c8->enter($__internal_3c752474dd37805dd06be18a2fe78b4c664a472b5a5d1b475b8f954cdd4440c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c752474dd37805dd06be18a2fe78b4c664a472b5a5d1b475b8f954cdd4440c8->leave($__internal_3c752474dd37805dd06be18a2fe78b4c664a472b5a5d1b475b8f954cdd4440c8_prof);

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
