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
        $__internal_fa0dd622508746fb0b14c879a4d0f3dd79b305cd8511782b551e3eb6cd94abd9 = $this->env->getExtension("native_profiler");
        $__internal_fa0dd622508746fb0b14c879a4d0f3dd79b305cd8511782b551e3eb6cd94abd9->enter($__internal_fa0dd622508746fb0b14c879a4d0f3dd79b305cd8511782b551e3eb6cd94abd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa0dd622508746fb0b14c879a4d0f3dd79b305cd8511782b551e3eb6cd94abd9->leave($__internal_fa0dd622508746fb0b14c879a4d0f3dd79b305cd8511782b551e3eb6cd94abd9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24c8b398aff9ec57e592d900408a4ae1546f0478403546fdbcaba72c7f831fa9 = $this->env->getExtension("native_profiler");
        $__internal_24c8b398aff9ec57e592d900408a4ae1546f0478403546fdbcaba72c7f831fa9->enter($__internal_24c8b398aff9ec57e592d900408a4ae1546f0478403546fdbcaba72c7f831fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24c8b398aff9ec57e592d900408a4ae1546f0478403546fdbcaba72c7f831fa9->leave($__internal_24c8b398aff9ec57e592d900408a4ae1546f0478403546fdbcaba72c7f831fa9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1c2497339273c65a64ce12863d0d8fb2ecc1777faadc52baa674e2ef2201f13 = $this->env->getExtension("native_profiler");
        $__internal_e1c2497339273c65a64ce12863d0d8fb2ecc1777faadc52baa674e2ef2201f13->enter($__internal_e1c2497339273c65a64ce12863d0d8fb2ecc1777faadc52baa674e2ef2201f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1c2497339273c65a64ce12863d0d8fb2ecc1777faadc52baa674e2ef2201f13->leave($__internal_e1c2497339273c65a64ce12863d0d8fb2ecc1777faadc52baa674e2ef2201f13_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f44327c6ff215a8acce4c32f9525185a3b32bbda818674d7c6552c831c39a72 = $this->env->getExtension("native_profiler");
        $__internal_8f44327c6ff215a8acce4c32f9525185a3b32bbda818674d7c6552c831c39a72->enter($__internal_8f44327c6ff215a8acce4c32f9525185a3b32bbda818674d7c6552c831c39a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8f44327c6ff215a8acce4c32f9525185a3b32bbda818674d7c6552c831c39a72->leave($__internal_8f44327c6ff215a8acce4c32f9525185a3b32bbda818674d7c6552c831c39a72_prof);

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
