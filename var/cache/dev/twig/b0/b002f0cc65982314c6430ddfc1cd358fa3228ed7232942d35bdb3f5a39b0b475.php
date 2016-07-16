<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e26192cff251c3e03703d51092098007eb05643e9866d337f2db572d9451e06d extends Twig_Template
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
        $__internal_5af77b0115cbbb4a42978ca7adfad929348f9ee629b540b4ce1fe5a8adccd395 = $this->env->getExtension("native_profiler");
        $__internal_5af77b0115cbbb4a42978ca7adfad929348f9ee629b540b4ce1fe5a8adccd395->enter($__internal_5af77b0115cbbb4a42978ca7adfad929348f9ee629b540b4ce1fe5a8adccd395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_5af77b0115cbbb4a42978ca7adfad929348f9ee629b540b4ce1fe5a8adccd395->leave($__internal_5af77b0115cbbb4a42978ca7adfad929348f9ee629b540b4ce1fe5a8adccd395_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
