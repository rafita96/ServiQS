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
        $__internal_34fc1fef6014fe07b050d4785247b5b39874cae1dfbbe8c5bc9d72576cce0474 = $this->env->getExtension("native_profiler");
        $__internal_34fc1fef6014fe07b050d4785247b5b39874cae1dfbbe8c5bc9d72576cce0474->enter($__internal_34fc1fef6014fe07b050d4785247b5b39874cae1dfbbe8c5bc9d72576cce0474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34fc1fef6014fe07b050d4785247b5b39874cae1dfbbe8c5bc9d72576cce0474->leave($__internal_34fc1fef6014fe07b050d4785247b5b39874cae1dfbbe8c5bc9d72576cce0474_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05fdae4e8c12cc98f7473d45af89df506bc54e57e7d6e3c35fa4a32f7c95ddb2 = $this->env->getExtension("native_profiler");
        $__internal_05fdae4e8c12cc98f7473d45af89df506bc54e57e7d6e3c35fa4a32f7c95ddb2->enter($__internal_05fdae4e8c12cc98f7473d45af89df506bc54e57e7d6e3c35fa4a32f7c95ddb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_05fdae4e8c12cc98f7473d45af89df506bc54e57e7d6e3c35fa4a32f7c95ddb2->leave($__internal_05fdae4e8c12cc98f7473d45af89df506bc54e57e7d6e3c35fa4a32f7c95ddb2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1b440de08ceb97825e673760fef0f080ac8895fd5b949b1321c7b91759d08c7 = $this->env->getExtension("native_profiler");
        $__internal_d1b440de08ceb97825e673760fef0f080ac8895fd5b949b1321c7b91759d08c7->enter($__internal_d1b440de08ceb97825e673760fef0f080ac8895fd5b949b1321c7b91759d08c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d1b440de08ceb97825e673760fef0f080ac8895fd5b949b1321c7b91759d08c7->leave($__internal_d1b440de08ceb97825e673760fef0f080ac8895fd5b949b1321c7b91759d08c7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2846bd2ac0e3b0a677e42811fdbb9054091ef8828b89fee601977e679bcbb79e = $this->env->getExtension("native_profiler");
        $__internal_2846bd2ac0e3b0a677e42811fdbb9054091ef8828b89fee601977e679bcbb79e->enter($__internal_2846bd2ac0e3b0a677e42811fdbb9054091ef8828b89fee601977e679bcbb79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2846bd2ac0e3b0a677e42811fdbb9054091ef8828b89fee601977e679bcbb79e->leave($__internal_2846bd2ac0e3b0a677e42811fdbb9054091ef8828b89fee601977e679bcbb79e_prof);

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
