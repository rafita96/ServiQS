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
        $__internal_5f57951211897139ed014bd7931ce6d1e6d8925841318aa4084550b212017294 = $this->env->getExtension("native_profiler");
        $__internal_5f57951211897139ed014bd7931ce6d1e6d8925841318aa4084550b212017294->enter($__internal_5f57951211897139ed014bd7931ce6d1e6d8925841318aa4084550b212017294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f57951211897139ed014bd7931ce6d1e6d8925841318aa4084550b212017294->leave($__internal_5f57951211897139ed014bd7931ce6d1e6d8925841318aa4084550b212017294_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8e3945cee4c510bda767266ae84d5f2764754a10e9e648f1bb4aca8e13d5719 = $this->env->getExtension("native_profiler");
        $__internal_d8e3945cee4c510bda767266ae84d5f2764754a10e9e648f1bb4aca8e13d5719->enter($__internal_d8e3945cee4c510bda767266ae84d5f2764754a10e9e648f1bb4aca8e13d5719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8e3945cee4c510bda767266ae84d5f2764754a10e9e648f1bb4aca8e13d5719->leave($__internal_d8e3945cee4c510bda767266ae84d5f2764754a10e9e648f1bb4aca8e13d5719_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e96bea9187aac9ac7be48732d3e8aa9d6b00210abff693323f707a002957726 = $this->env->getExtension("native_profiler");
        $__internal_2e96bea9187aac9ac7be48732d3e8aa9d6b00210abff693323f707a002957726->enter($__internal_2e96bea9187aac9ac7be48732d3e8aa9d6b00210abff693323f707a002957726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e96bea9187aac9ac7be48732d3e8aa9d6b00210abff693323f707a002957726->leave($__internal_2e96bea9187aac9ac7be48732d3e8aa9d6b00210abff693323f707a002957726_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0d2cb75f4efb1c57c6fd4f24a53fd6ae744015cf5adb1fac7f74c64d0d6485d = $this->env->getExtension("native_profiler");
        $__internal_a0d2cb75f4efb1c57c6fd4f24a53fd6ae744015cf5adb1fac7f74c64d0d6485d->enter($__internal_a0d2cb75f4efb1c57c6fd4f24a53fd6ae744015cf5adb1fac7f74c64d0d6485d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a0d2cb75f4efb1c57c6fd4f24a53fd6ae744015cf5adb1fac7f74c64d0d6485d->leave($__internal_a0d2cb75f4efb1c57c6fd4f24a53fd6ae744015cf5adb1fac7f74c64d0d6485d_prof);

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
