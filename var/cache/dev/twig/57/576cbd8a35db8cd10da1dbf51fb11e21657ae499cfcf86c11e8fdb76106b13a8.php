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
        $__internal_1f723f63e825641790b2abe992bab911d89cb22ba319f7a24dc5db8479d6e71e = $this->env->getExtension("native_profiler");
        $__internal_1f723f63e825641790b2abe992bab911d89cb22ba319f7a24dc5db8479d6e71e->enter($__internal_1f723f63e825641790b2abe992bab911d89cb22ba319f7a24dc5db8479d6e71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1f723f63e825641790b2abe992bab911d89cb22ba319f7a24dc5db8479d6e71e->leave($__internal_1f723f63e825641790b2abe992bab911d89cb22ba319f7a24dc5db8479d6e71e_prof);

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
