<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_08a5c65a9f67f4da170475ed6792478b847e45f3fe8c6d52990be7fd6a5412d9 extends Twig_Template
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
        $__internal_e2680f65e64cd1c354e7b71bcb4f49b94a1de6173932f99a71e20ddef73d6948 = $this->env->getExtension("native_profiler");
        $__internal_e2680f65e64cd1c354e7b71bcb4f49b94a1de6173932f99a71e20ddef73d6948->enter($__internal_e2680f65e64cd1c354e7b71bcb4f49b94a1de6173932f99a71e20ddef73d6948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_e2680f65e64cd1c354e7b71bcb4f49b94a1de6173932f99a71e20ddef73d6948->leave($__internal_e2680f65e64cd1c354e7b71bcb4f49b94a1de6173932f99a71e20ddef73d6948_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
