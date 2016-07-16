<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_e3a96816abb7c08ee4816f830e4ace0e53f8b92f367c511128ee11a7dbbf63c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b8b29289170ada539ce5f252ca61e87bd46b05db3a6ffe46c8e286d8513fa8c4 = $this->env->getExtension("native_profiler");
        $__internal_b8b29289170ada539ce5f252ca61e87bd46b05db3a6ffe46c8e286d8513fa8c4->enter($__internal_b8b29289170ada539ce5f252ca61e87bd46b05db3a6ffe46c8e286d8513fa8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8b29289170ada539ce5f252ca61e87bd46b05db3a6ffe46c8e286d8513fa8c4->leave($__internal_b8b29289170ada539ce5f252ca61e87bd46b05db3a6ffe46c8e286d8513fa8c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa3ae03490b51728aa910ccad0bf3a39ababc1a19c44cc6d4a69dd9803751262 = $this->env->getExtension("native_profiler");
        $__internal_aa3ae03490b51728aa910ccad0bf3a39ababc1a19c44cc6d4a69dd9803751262->enter($__internal_aa3ae03490b51728aa910ccad0bf3a39ababc1a19c44cc6d4a69dd9803751262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_aa3ae03490b51728aa910ccad0bf3a39ababc1a19c44cc6d4a69dd9803751262->leave($__internal_aa3ae03490b51728aa910ccad0bf3a39ababc1a19c44cc6d4a69dd9803751262_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_95657e7649aacdf44f209d7442db281a5d837c9f9c6d9de180fde1aa967918b9 = $this->env->getExtension("native_profiler");
        $__internal_95657e7649aacdf44f209d7442db281a5d837c9f9c6d9de180fde1aa967918b9->enter($__internal_95657e7649aacdf44f209d7442db281a5d837c9f9c6d9de180fde1aa967918b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_95657e7649aacdf44f209d7442db281a5d837c9f9c6d9de180fde1aa967918b9->leave($__internal_95657e7649aacdf44f209d7442db281a5d837c9f9c6d9de180fde1aa967918b9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb5da8558c8538d6450f9d45d0afa66017cc1e4d32394391762aabcc0c792bc8 = $this->env->getExtension("native_profiler");
        $__internal_bb5da8558c8538d6450f9d45d0afa66017cc1e4d32394391762aabcc0c792bc8->enter($__internal_bb5da8558c8538d6450f9d45d0afa66017cc1e4d32394391762aabcc0c792bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bb5da8558c8538d6450f9d45d0afa66017cc1e4d32394391762aabcc0c792bc8->leave($__internal_bb5da8558c8538d6450f9d45d0afa66017cc1e4d32394391762aabcc0c792bc8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
