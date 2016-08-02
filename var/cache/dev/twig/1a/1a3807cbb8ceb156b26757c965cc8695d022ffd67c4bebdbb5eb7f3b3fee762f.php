<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_4c715765b53941e01bb542736c20d158765e29152ce991758a4e0ec5d15551e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12ed4c6446b4cfabbd70a4d97b7719729755ff7e1a4aaced479a7384e99c5fd9 = $this->env->getExtension("native_profiler");
        $__internal_12ed4c6446b4cfabbd70a4d97b7719729755ff7e1a4aaced479a7384e99c5fd9->enter($__internal_12ed4c6446b4cfabbd70a4d97b7719729755ff7e1a4aaced479a7384e99c5fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12ed4c6446b4cfabbd70a4d97b7719729755ff7e1a4aaced479a7384e99c5fd9->leave($__internal_12ed4c6446b4cfabbd70a4d97b7719729755ff7e1a4aaced479a7384e99c5fd9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05f5c0fa1e557a41ea0ca0338fbdfbf6d2c7fba842bc1a0fb72f17a7a9a89495 = $this->env->getExtension("native_profiler");
        $__internal_05f5c0fa1e557a41ea0ca0338fbdfbf6d2c7fba842bc1a0fb72f17a7a9a89495->enter($__internal_05f5c0fa1e557a41ea0ca0338fbdfbf6d2c7fba842bc1a0fb72f17a7a9a89495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_05f5c0fa1e557a41ea0ca0338fbdfbf6d2c7fba842bc1a0fb72f17a7a9a89495->leave($__internal_05f5c0fa1e557a41ea0ca0338fbdfbf6d2c7fba842bc1a0fb72f17a7a9a89495_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
