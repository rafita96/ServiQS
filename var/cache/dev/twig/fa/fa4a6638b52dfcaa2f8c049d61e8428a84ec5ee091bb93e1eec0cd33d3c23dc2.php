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
        $__internal_e92d6e3e6c8d41fe055ae130b080858b8f03da54abecfefab72b489024a109c2 = $this->env->getExtension("native_profiler");
        $__internal_e92d6e3e6c8d41fe055ae130b080858b8f03da54abecfefab72b489024a109c2->enter($__internal_e92d6e3e6c8d41fe055ae130b080858b8f03da54abecfefab72b489024a109c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e92d6e3e6c8d41fe055ae130b080858b8f03da54abecfefab72b489024a109c2->leave($__internal_e92d6e3e6c8d41fe055ae130b080858b8f03da54abecfefab72b489024a109c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f58950cc0b5fda2910ede6aaa7b1be850efd92e72ecb0d4ec5d8ee470ca0364b = $this->env->getExtension("native_profiler");
        $__internal_f58950cc0b5fda2910ede6aaa7b1be850efd92e72ecb0d4ec5d8ee470ca0364b->enter($__internal_f58950cc0b5fda2910ede6aaa7b1be850efd92e72ecb0d4ec5d8ee470ca0364b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f58950cc0b5fda2910ede6aaa7b1be850efd92e72ecb0d4ec5d8ee470ca0364b->leave($__internal_f58950cc0b5fda2910ede6aaa7b1be850efd92e72ecb0d4ec5d8ee470ca0364b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41e73476065f1bcad310b25683a92d703678fb27b6f9bd05390e9923a9fe758c = $this->env->getExtension("native_profiler");
        $__internal_41e73476065f1bcad310b25683a92d703678fb27b6f9bd05390e9923a9fe758c->enter($__internal_41e73476065f1bcad310b25683a92d703678fb27b6f9bd05390e9923a9fe758c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41e73476065f1bcad310b25683a92d703678fb27b6f9bd05390e9923a9fe758c->leave($__internal_41e73476065f1bcad310b25683a92d703678fb27b6f9bd05390e9923a9fe758c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb36ae69b3638e46d3e27f32c82eb634aee0c99ae87d5c67883dfd6ad6c327b7 = $this->env->getExtension("native_profiler");
        $__internal_eb36ae69b3638e46d3e27f32c82eb634aee0c99ae87d5c67883dfd6ad6c327b7->enter($__internal_eb36ae69b3638e46d3e27f32c82eb634aee0c99ae87d5c67883dfd6ad6c327b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eb36ae69b3638e46d3e27f32c82eb634aee0c99ae87d5c67883dfd6ad6c327b7->leave($__internal_eb36ae69b3638e46d3e27f32c82eb634aee0c99ae87d5c67883dfd6ad6c327b7_prof);

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
