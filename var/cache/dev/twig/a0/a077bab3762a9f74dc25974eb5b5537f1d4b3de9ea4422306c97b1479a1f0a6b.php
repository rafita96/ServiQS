<?php

/* HeysoftMenuBundle:Default:index.html.twig */
class __TwigTemplate_391a20b0734a41fdf0b55aaa5b78f39c60eee50e151deea4b30e258dfab282d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "HeysoftMenuBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_746a5a6752c5b83953d87eb1a854e1f30cf22036c8e27d9c791c6a9630031b6c = $this->env->getExtension("native_profiler");
        $__internal_746a5a6752c5b83953d87eb1a854e1f30cf22036c8e27d9c791c6a9630031b6c->enter($__internal_746a5a6752c5b83953d87eb1a854e1f30cf22036c8e27d9c791c6a9630031b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeysoftMenuBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_746a5a6752c5b83953d87eb1a854e1f30cf22036c8e27d9c791c6a9630031b6c->leave($__internal_746a5a6752c5b83953d87eb1a854e1f30cf22036c8e27d9c791c6a9630031b6c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ba8b936fe330c140eaa5aff6ef941bf09bbf7289d312ead18c8dc7ad4467061 = $this->env->getExtension("native_profiler");
        $__internal_6ba8b936fe330c140eaa5aff6ef941bf09bbf7289d312ead18c8dc7ad4467061->enter($__internal_6ba8b936fe330c140eaa5aff6ef941bf09bbf7289d312ead18c8dc7ad4467061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Hello
";
        
        $__internal_6ba8b936fe330c140eaa5aff6ef941bf09bbf7289d312ead18c8dc7ad4467061->leave($__internal_6ba8b936fe330c140eaa5aff6ef941bf09bbf7289d312ead18c8dc7ad4467061_prof);

    }

    public function getTemplateName()
    {
        return "HeysoftMenuBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/* Hello*/
/* {% endblock %}*/
