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
        $__internal_30e8986ccf99a2aaf2477573ba2a7124c0911d0e23043154a2e9a91ce21a4d94 = $this->env->getExtension("native_profiler");
        $__internal_30e8986ccf99a2aaf2477573ba2a7124c0911d0e23043154a2e9a91ce21a4d94->enter($__internal_30e8986ccf99a2aaf2477573ba2a7124c0911d0e23043154a2e9a91ce21a4d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e8986ccf99a2aaf2477573ba2a7124c0911d0e23043154a2e9a91ce21a4d94->leave($__internal_30e8986ccf99a2aaf2477573ba2a7124c0911d0e23043154a2e9a91ce21a4d94_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dab90921aeeed7077a3ad0952b41d1438427b6d47a43187487db5ac246564756 = $this->env->getExtension("native_profiler");
        $__internal_dab90921aeeed7077a3ad0952b41d1438427b6d47a43187487db5ac246564756->enter($__internal_dab90921aeeed7077a3ad0952b41d1438427b6d47a43187487db5ac246564756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dab90921aeeed7077a3ad0952b41d1438427b6d47a43187487db5ac246564756->leave($__internal_dab90921aeeed7077a3ad0952b41d1438427b6d47a43187487db5ac246564756_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e36b0713c1b1f3b0dcb702a6238511d062457a5ea87ad709b496f0e17fa63d5f = $this->env->getExtension("native_profiler");
        $__internal_e36b0713c1b1f3b0dcb702a6238511d062457a5ea87ad709b496f0e17fa63d5f->enter($__internal_e36b0713c1b1f3b0dcb702a6238511d062457a5ea87ad709b496f0e17fa63d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e36b0713c1b1f3b0dcb702a6238511d062457a5ea87ad709b496f0e17fa63d5f->leave($__internal_e36b0713c1b1f3b0dcb702a6238511d062457a5ea87ad709b496f0e17fa63d5f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65ef7c330d4f526cbc22285725d207092d6ac982841452f77e434c013b18abaa = $this->env->getExtension("native_profiler");
        $__internal_65ef7c330d4f526cbc22285725d207092d6ac982841452f77e434c013b18abaa->enter($__internal_65ef7c330d4f526cbc22285725d207092d6ac982841452f77e434c013b18abaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_65ef7c330d4f526cbc22285725d207092d6ac982841452f77e434c013b18abaa->leave($__internal_65ef7c330d4f526cbc22285725d207092d6ac982841452f77e434c013b18abaa_prof);

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
