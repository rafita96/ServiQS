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
        $__internal_dde7f4a77da9e9c8c2ae5944196c87bebc6edcb0a7eb5d9175c7734e58fa2410 = $this->env->getExtension("native_profiler");
        $__internal_dde7f4a77da9e9c8c2ae5944196c87bebc6edcb0a7eb5d9175c7734e58fa2410->enter($__internal_dde7f4a77da9e9c8c2ae5944196c87bebc6edcb0a7eb5d9175c7734e58fa2410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dde7f4a77da9e9c8c2ae5944196c87bebc6edcb0a7eb5d9175c7734e58fa2410->leave($__internal_dde7f4a77da9e9c8c2ae5944196c87bebc6edcb0a7eb5d9175c7734e58fa2410_prof);

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
