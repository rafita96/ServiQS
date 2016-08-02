<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c214cd8263bebe2f1fc659cec0baffbf46860d6df1f6ac0f5c53ccc782b8d13f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a7a4f9786a111c787696f3308c050f223974486b2d89d7e9dcef6eaee074d17 = $this->env->getExtension("native_profiler");
        $__internal_6a7a4f9786a111c787696f3308c050f223974486b2d89d7e9dcef6eaee074d17->enter($__internal_6a7a4f9786a111c787696f3308c050f223974486b2d89d7e9dcef6eaee074d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6a7a4f9786a111c787696f3308c050f223974486b2d89d7e9dcef6eaee074d17->leave($__internal_6a7a4f9786a111c787696f3308c050f223974486b2d89d7e9dcef6eaee074d17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
