<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1be127f93ea53d4bc9845f125f13c291d44f77f7d717aacf94247d8aff85e106 extends Twig_Template
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
        $__internal_beb3aa09bb5b6d04f8c05f759acb799c24cc30ce07d7e0a5c216c063c3aebeb8 = $this->env->getExtension("native_profiler");
        $__internal_beb3aa09bb5b6d04f8c05f759acb799c24cc30ce07d7e0a5c216c063c3aebeb8->enter($__internal_beb3aa09bb5b6d04f8c05f759acb799c24cc30ce07d7e0a5c216c063c3aebeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_beb3aa09bb5b6d04f8c05f759acb799c24cc30ce07d7e0a5c216c063c3aebeb8->leave($__internal_beb3aa09bb5b6d04f8c05f759acb799c24cc30ce07d7e0a5c216c063c3aebeb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
