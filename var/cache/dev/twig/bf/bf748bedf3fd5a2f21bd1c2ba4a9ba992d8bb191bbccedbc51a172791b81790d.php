<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_0fecc9966052f3867b528c4875dbd9e6412d5a14d5dec442d7d56d34d5201ccd extends Twig_Template
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
        $__internal_e68967d4a2ee0a06e2fb48aa49007534c456e7db09cd2d63f9bf3c9f065c9d2b = $this->env->getExtension("native_profiler");
        $__internal_e68967d4a2ee0a06e2fb48aa49007534c456e7db09cd2d63f9bf3c9f065c9d2b->enter($__internal_e68967d4a2ee0a06e2fb48aa49007534c456e7db09cd2d63f9bf3c9f065c9d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e68967d4a2ee0a06e2fb48aa49007534c456e7db09cd2d63f9bf3c9f065c9d2b->leave($__internal_e68967d4a2ee0a06e2fb48aa49007534c456e7db09cd2d63f9bf3c9f065c9d2b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
