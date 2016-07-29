<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e45c98e161bbca66940091cd8dc74afb29a7954d76867bd6729867d62dd8213f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_094b837e98ebbf805c9b093fc23725689c602d945ff0a39adee8a3cfaf217ad0 = $this->env->getExtension("native_profiler");
        $__internal_094b837e98ebbf805c9b093fc23725689c602d945ff0a39adee8a3cfaf217ad0->enter($__internal_094b837e98ebbf805c9b093fc23725689c602d945ff0a39adee8a3cfaf217ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_094b837e98ebbf805c9b093fc23725689c602d945ff0a39adee8a3cfaf217ad0->leave($__internal_094b837e98ebbf805c9b093fc23725689c602d945ff0a39adee8a3cfaf217ad0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b5583e8cb3b98c9e2c8b8f589546c20002fd941083f2c1593062fbe2b398eb1 = $this->env->getExtension("native_profiler");
        $__internal_9b5583e8cb3b98c9e2c8b8f589546c20002fd941083f2c1593062fbe2b398eb1->enter($__internal_9b5583e8cb3b98c9e2c8b8f589546c20002fd941083f2c1593062fbe2b398eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9b5583e8cb3b98c9e2c8b8f589546c20002fd941083f2c1593062fbe2b398eb1->leave($__internal_9b5583e8cb3b98c9e2c8b8f589546c20002fd941083f2c1593062fbe2b398eb1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22d0a4951f0e4abbe77c88c17ae1ce728f3b040c07a2e42f3990a686beb77aab = $this->env->getExtension("native_profiler");
        $__internal_22d0a4951f0e4abbe77c88c17ae1ce728f3b040c07a2e42f3990a686beb77aab->enter($__internal_22d0a4951f0e4abbe77c88c17ae1ce728f3b040c07a2e42f3990a686beb77aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_22d0a4951f0e4abbe77c88c17ae1ce728f3b040c07a2e42f3990a686beb77aab->leave($__internal_22d0a4951f0e4abbe77c88c17ae1ce728f3b040c07a2e42f3990a686beb77aab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42823b014fbbe95fc19553acd8a01b8ff84087cbe29c178df2ce6a635cfceec0 = $this->env->getExtension("native_profiler");
        $__internal_42823b014fbbe95fc19553acd8a01b8ff84087cbe29c178df2ce6a635cfceec0->enter($__internal_42823b014fbbe95fc19553acd8a01b8ff84087cbe29c178df2ce6a635cfceec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_42823b014fbbe95fc19553acd8a01b8ff84087cbe29c178df2ce6a635cfceec0->leave($__internal_42823b014fbbe95fc19553acd8a01b8ff84087cbe29c178df2ce6a635cfceec0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
