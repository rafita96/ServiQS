<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c37f5e18f3ac545219747603e0976c63e896a217c28c6ffebb257cedcc18395e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_3e5d5fce7aced548f5777c9200f0835ef932980f8835a7082392ba8c3f17482c = $this->env->getExtension("native_profiler");
        $__internal_3e5d5fce7aced548f5777c9200f0835ef932980f8835a7082392ba8c3f17482c->enter($__internal_3e5d5fce7aced548f5777c9200f0835ef932980f8835a7082392ba8c3f17482c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e5d5fce7aced548f5777c9200f0835ef932980f8835a7082392ba8c3f17482c->leave($__internal_3e5d5fce7aced548f5777c9200f0835ef932980f8835a7082392ba8c3f17482c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_361aa916cb268f8a11be3572e93747104b4b32b5110a51435cf7506acead1722 = $this->env->getExtension("native_profiler");
        $__internal_361aa916cb268f8a11be3572e93747104b4b32b5110a51435cf7506acead1722->enter($__internal_361aa916cb268f8a11be3572e93747104b4b32b5110a51435cf7506acead1722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_361aa916cb268f8a11be3572e93747104b4b32b5110a51435cf7506acead1722->leave($__internal_361aa916cb268f8a11be3572e93747104b4b32b5110a51435cf7506acead1722_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ea2572911d5da1ccad61308f1334fdf7b4a574c9057b12800f49a80afcd0834 = $this->env->getExtension("native_profiler");
        $__internal_2ea2572911d5da1ccad61308f1334fdf7b4a574c9057b12800f49a80afcd0834->enter($__internal_2ea2572911d5da1ccad61308f1334fdf7b4a574c9057b12800f49a80afcd0834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ea2572911d5da1ccad61308f1334fdf7b4a574c9057b12800f49a80afcd0834->leave($__internal_2ea2572911d5da1ccad61308f1334fdf7b4a574c9057b12800f49a80afcd0834_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1605f422b47b55bdee166c2751e9556537f2cabeae6184b3f99d228544fe22af = $this->env->getExtension("native_profiler");
        $__internal_1605f422b47b55bdee166c2751e9556537f2cabeae6184b3f99d228544fe22af->enter($__internal_1605f422b47b55bdee166c2751e9556537f2cabeae6184b3f99d228544fe22af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1605f422b47b55bdee166c2751e9556537f2cabeae6184b3f99d228544fe22af->leave($__internal_1605f422b47b55bdee166c2751e9556537f2cabeae6184b3f99d228544fe22af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
