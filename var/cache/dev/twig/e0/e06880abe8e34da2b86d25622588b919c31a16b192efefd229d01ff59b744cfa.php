<?php

/* @HeysoftMenu/Default/index.html.twig */
class __TwigTemplate_718db9a61719d47ac84753c321ac03c7d76ac0b0c7c2be2eb968fd7bf8bb4ac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@HeysoftMenu/Default/index.html.twig", 1);
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
        $__internal_08b5119bfd16908a359389cc9fc3d473e36ddbdd22568705d648f9d0afea4bb8 = $this->env->getExtension("native_profiler");
        $__internal_08b5119bfd16908a359389cc9fc3d473e36ddbdd22568705d648f9d0afea4bb8->enter($__internal_08b5119bfd16908a359389cc9fc3d473e36ddbdd22568705d648f9d0afea4bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HeysoftMenu/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08b5119bfd16908a359389cc9fc3d473e36ddbdd22568705d648f9d0afea4bb8->leave($__internal_08b5119bfd16908a359389cc9fc3d473e36ddbdd22568705d648f9d0afea4bb8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45448172d2522e7d0106516501e571f92e23e9ba016ec185417343ac10163db8 = $this->env->getExtension("native_profiler");
        $__internal_45448172d2522e7d0106516501e571f92e23e9ba016ec185417343ac10163db8->enter($__internal_45448172d2522e7d0106516501e571f92e23e9ba016ec185417343ac10163db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Hello
";
        
        $__internal_45448172d2522e7d0106516501e571f92e23e9ba016ec185417343ac10163db8->leave($__internal_45448172d2522e7d0106516501e571f92e23e9ba016ec185417343ac10163db8_prof);

    }

    public function getTemplateName()
    {
        return "@HeysoftMenu/Default/index.html.twig";
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
