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
        $__internal_1346324db6c89438e6bcdbff1880b8836da035cf9838a75268bfbd541756437f = $this->env->getExtension("native_profiler");
        $__internal_1346324db6c89438e6bcdbff1880b8836da035cf9838a75268bfbd541756437f->enter($__internal_1346324db6c89438e6bcdbff1880b8836da035cf9838a75268bfbd541756437f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1346324db6c89438e6bcdbff1880b8836da035cf9838a75268bfbd541756437f->leave($__internal_1346324db6c89438e6bcdbff1880b8836da035cf9838a75268bfbd541756437f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ff50ac02f880f186b55320b51daa46f70451785285fa47db721ca2f205c7ba6 = $this->env->getExtension("native_profiler");
        $__internal_5ff50ac02f880f186b55320b51daa46f70451785285fa47db721ca2f205c7ba6->enter($__internal_5ff50ac02f880f186b55320b51daa46f70451785285fa47db721ca2f205c7ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ff50ac02f880f186b55320b51daa46f70451785285fa47db721ca2f205c7ba6->leave($__internal_5ff50ac02f880f186b55320b51daa46f70451785285fa47db721ca2f205c7ba6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_365263fe31e272c31389bc7f6af9596ddb63d62ab5423e2f044850cd1331dbf9 = $this->env->getExtension("native_profiler");
        $__internal_365263fe31e272c31389bc7f6af9596ddb63d62ab5423e2f044850cd1331dbf9->enter($__internal_365263fe31e272c31389bc7f6af9596ddb63d62ab5423e2f044850cd1331dbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_365263fe31e272c31389bc7f6af9596ddb63d62ab5423e2f044850cd1331dbf9->leave($__internal_365263fe31e272c31389bc7f6af9596ddb63d62ab5423e2f044850cd1331dbf9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d85230eb73bf7408b8ef7eb37d20ca19716ae1cb6105400d4630b982daa5fb7 = $this->env->getExtension("native_profiler");
        $__internal_3d85230eb73bf7408b8ef7eb37d20ca19716ae1cb6105400d4630b982daa5fb7->enter($__internal_3d85230eb73bf7408b8ef7eb37d20ca19716ae1cb6105400d4630b982daa5fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d85230eb73bf7408b8ef7eb37d20ca19716ae1cb6105400d4630b982daa5fb7->leave($__internal_3d85230eb73bf7408b8ef7eb37d20ca19716ae1cb6105400d4630b982daa5fb7_prof);

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
