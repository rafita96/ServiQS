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
        $__internal_8018d19aeb7445131b3df2c3c9a962eef5bccb590ff816d56099ac2d4a09c9a7 = $this->env->getExtension("native_profiler");
        $__internal_8018d19aeb7445131b3df2c3c9a962eef5bccb590ff816d56099ac2d4a09c9a7->enter($__internal_8018d19aeb7445131b3df2c3c9a962eef5bccb590ff816d56099ac2d4a09c9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8018d19aeb7445131b3df2c3c9a962eef5bccb590ff816d56099ac2d4a09c9a7->leave($__internal_8018d19aeb7445131b3df2c3c9a962eef5bccb590ff816d56099ac2d4a09c9a7_prof);

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
