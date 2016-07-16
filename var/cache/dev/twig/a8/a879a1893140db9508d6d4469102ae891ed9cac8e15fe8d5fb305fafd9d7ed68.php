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
        $__internal_d5255ec45a6dc1b861137e9063de55d64dafb53a7171c38c04291a133622ca28 = $this->env->getExtension("native_profiler");
        $__internal_d5255ec45a6dc1b861137e9063de55d64dafb53a7171c38c04291a133622ca28->enter($__internal_d5255ec45a6dc1b861137e9063de55d64dafb53a7171c38c04291a133622ca28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_d5255ec45a6dc1b861137e9063de55d64dafb53a7171c38c04291a133622ca28->leave($__internal_d5255ec45a6dc1b861137e9063de55d64dafb53a7171c38c04291a133622ca28_prof);

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
