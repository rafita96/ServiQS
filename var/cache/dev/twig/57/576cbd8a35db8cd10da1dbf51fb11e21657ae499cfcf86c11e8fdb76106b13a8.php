<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_79c650af9a6ff3ef1e1789aa07dc94999c8b9d9636e941972cc5b8861dc0fc80 extends Twig_Template
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
        $__internal_c971eed76b3eb0d81a3ea2109d5ac61d57dd4118ac6e4fe18440e19f60bbb8ad = $this->env->getExtension("native_profiler");
        $__internal_c971eed76b3eb0d81a3ea2109d5ac61d57dd4118ac6e4fe18440e19f60bbb8ad->enter($__internal_c971eed76b3eb0d81a3ea2109d5ac61d57dd4118ac6e4fe18440e19f60bbb8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c971eed76b3eb0d81a3ea2109d5ac61d57dd4118ac6e4fe18440e19f60bbb8ad->leave($__internal_c971eed76b3eb0d81a3ea2109d5ac61d57dd4118ac6e4fe18440e19f60bbb8ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
