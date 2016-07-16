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
        $__internal_3320470f704cb48b12700850c8cc2e58fbcb3338d76d1b1f6b97607a90cf0c47 = $this->env->getExtension("native_profiler");
        $__internal_3320470f704cb48b12700850c8cc2e58fbcb3338d76d1b1f6b97607a90cf0c47->enter($__internal_3320470f704cb48b12700850c8cc2e58fbcb3338d76d1b1f6b97607a90cf0c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3320470f704cb48b12700850c8cc2e58fbcb3338d76d1b1f6b97607a90cf0c47->leave($__internal_3320470f704cb48b12700850c8cc2e58fbcb3338d76d1b1f6b97607a90cf0c47_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_220bf86b52754943a99cbcc2d2f67d49d99459ad202d267e7eb390b9fba131e6 = $this->env->getExtension("native_profiler");
        $__internal_220bf86b52754943a99cbcc2d2f67d49d99459ad202d267e7eb390b9fba131e6->enter($__internal_220bf86b52754943a99cbcc2d2f67d49d99459ad202d267e7eb390b9fba131e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_220bf86b52754943a99cbcc2d2f67d49d99459ad202d267e7eb390b9fba131e6->leave($__internal_220bf86b52754943a99cbcc2d2f67d49d99459ad202d267e7eb390b9fba131e6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97513d4aa220270fdaa6ab94db3a6a6b985c146b62b7f43f929ad9bfc23db8a2 = $this->env->getExtension("native_profiler");
        $__internal_97513d4aa220270fdaa6ab94db3a6a6b985c146b62b7f43f929ad9bfc23db8a2->enter($__internal_97513d4aa220270fdaa6ab94db3a6a6b985c146b62b7f43f929ad9bfc23db8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_97513d4aa220270fdaa6ab94db3a6a6b985c146b62b7f43f929ad9bfc23db8a2->leave($__internal_97513d4aa220270fdaa6ab94db3a6a6b985c146b62b7f43f929ad9bfc23db8a2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c160993abbb5a84e17b859adf59b7c1f240af5cab894fe7a2e15243c59088cb = $this->env->getExtension("native_profiler");
        $__internal_8c160993abbb5a84e17b859adf59b7c1f240af5cab894fe7a2e15243c59088cb->enter($__internal_8c160993abbb5a84e17b859adf59b7c1f240af5cab894fe7a2e15243c59088cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c160993abbb5a84e17b859adf59b7c1f240af5cab894fe7a2e15243c59088cb->leave($__internal_8c160993abbb5a84e17b859adf59b7c1f240af5cab894fe7a2e15243c59088cb_prof);

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
