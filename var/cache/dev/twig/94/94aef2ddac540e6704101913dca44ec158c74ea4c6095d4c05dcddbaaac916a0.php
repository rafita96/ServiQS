<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_88fea45d3109705e685ffa797a83a8489fdc97c417b1cdda5b672ada01a563d4 extends Twig_Template
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
        $__internal_94be6f7f63732943028489d9bfaee369b352c8678787eebceda722edaafe6c6b = $this->env->getExtension("native_profiler");
        $__internal_94be6f7f63732943028489d9bfaee369b352c8678787eebceda722edaafe6c6b->enter($__internal_94be6f7f63732943028489d9bfaee369b352c8678787eebceda722edaafe6c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_94be6f7f63732943028489d9bfaee369b352c8678787eebceda722edaafe6c6b->leave($__internal_94be6f7f63732943028489d9bfaee369b352c8678787eebceda722edaafe6c6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
