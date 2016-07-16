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
        $__internal_5818a3ca7e3da32f05bb7d698d42ee90751fc56b4e7da025534d30d6a6489e2f = $this->env->getExtension("native_profiler");
        $__internal_5818a3ca7e3da32f05bb7d698d42ee90751fc56b4e7da025534d30d6a6489e2f->enter($__internal_5818a3ca7e3da32f05bb7d698d42ee90751fc56b4e7da025534d30d6a6489e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5818a3ca7e3da32f05bb7d698d42ee90751fc56b4e7da025534d30d6a6489e2f->leave($__internal_5818a3ca7e3da32f05bb7d698d42ee90751fc56b4e7da025534d30d6a6489e2f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_632d6e1f4a4ca62824c3d23b5a8e77a10f8f81dcd07959e9e693e1c0f9679caa = $this->env->getExtension("native_profiler");
        $__internal_632d6e1f4a4ca62824c3d23b5a8e77a10f8f81dcd07959e9e693e1c0f9679caa->enter($__internal_632d6e1f4a4ca62824c3d23b5a8e77a10f8f81dcd07959e9e693e1c0f9679caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_632d6e1f4a4ca62824c3d23b5a8e77a10f8f81dcd07959e9e693e1c0f9679caa->leave($__internal_632d6e1f4a4ca62824c3d23b5a8e77a10f8f81dcd07959e9e693e1c0f9679caa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16741206065487fbcff624cc7963f60d9c6e15178220b05a28aab69c05bbc201 = $this->env->getExtension("native_profiler");
        $__internal_16741206065487fbcff624cc7963f60d9c6e15178220b05a28aab69c05bbc201->enter($__internal_16741206065487fbcff624cc7963f60d9c6e15178220b05a28aab69c05bbc201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_16741206065487fbcff624cc7963f60d9c6e15178220b05a28aab69c05bbc201->leave($__internal_16741206065487fbcff624cc7963f60d9c6e15178220b05a28aab69c05bbc201_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d5f225d961a29ef394ae833107f6f2e0836b36f9944879cb79bf675a51b633e = $this->env->getExtension("native_profiler");
        $__internal_8d5f225d961a29ef394ae833107f6f2e0836b36f9944879cb79bf675a51b633e->enter($__internal_8d5f225d961a29ef394ae833107f6f2e0836b36f9944879cb79bf675a51b633e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d5f225d961a29ef394ae833107f6f2e0836b36f9944879cb79bf675a51b633e->leave($__internal_8d5f225d961a29ef394ae833107f6f2e0836b36f9944879cb79bf675a51b633e_prof);

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
