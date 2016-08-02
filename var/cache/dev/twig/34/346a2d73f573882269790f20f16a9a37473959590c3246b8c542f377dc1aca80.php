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
        $__internal_a690e179ce7808e91fbbcc4c3adf1b9e1f05f9bd5952ca1ce7d61cbbbad71812 = $this->env->getExtension("native_profiler");
        $__internal_a690e179ce7808e91fbbcc4c3adf1b9e1f05f9bd5952ca1ce7d61cbbbad71812->enter($__internal_a690e179ce7808e91fbbcc4c3adf1b9e1f05f9bd5952ca1ce7d61cbbbad71812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a690e179ce7808e91fbbcc4c3adf1b9e1f05f9bd5952ca1ce7d61cbbbad71812->leave($__internal_a690e179ce7808e91fbbcc4c3adf1b9e1f05f9bd5952ca1ce7d61cbbbad71812_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff63e16a3eea8449f94db62941b07d922c02616da3bc72f5d203a971e3abb1ea = $this->env->getExtension("native_profiler");
        $__internal_ff63e16a3eea8449f94db62941b07d922c02616da3bc72f5d203a971e3abb1ea->enter($__internal_ff63e16a3eea8449f94db62941b07d922c02616da3bc72f5d203a971e3abb1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff63e16a3eea8449f94db62941b07d922c02616da3bc72f5d203a971e3abb1ea->leave($__internal_ff63e16a3eea8449f94db62941b07d922c02616da3bc72f5d203a971e3abb1ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_571d05d7cb7adc4d2fcf5c900813532e22ec74c5031eca4a665c8ea3f1f9cb00 = $this->env->getExtension("native_profiler");
        $__internal_571d05d7cb7adc4d2fcf5c900813532e22ec74c5031eca4a665c8ea3f1f9cb00->enter($__internal_571d05d7cb7adc4d2fcf5c900813532e22ec74c5031eca4a665c8ea3f1f9cb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_571d05d7cb7adc4d2fcf5c900813532e22ec74c5031eca4a665c8ea3f1f9cb00->leave($__internal_571d05d7cb7adc4d2fcf5c900813532e22ec74c5031eca4a665c8ea3f1f9cb00_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_814234bb0986869a8ff4cc6990740eaf6ea4a16ce068c43ab432c2a802aff9c2 = $this->env->getExtension("native_profiler");
        $__internal_814234bb0986869a8ff4cc6990740eaf6ea4a16ce068c43ab432c2a802aff9c2->enter($__internal_814234bb0986869a8ff4cc6990740eaf6ea4a16ce068c43ab432c2a802aff9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_814234bb0986869a8ff4cc6990740eaf6ea4a16ce068c43ab432c2a802aff9c2->leave($__internal_814234bb0986869a8ff4cc6990740eaf6ea4a16ce068c43ab432c2a802aff9c2_prof);

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
