<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_37423c1c86f28474e48bab05b00ded28833fae67d11f345f932225ebb698a893 extends Twig_Template
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
        $__internal_288bbdb220cb187b83595ac2c814ebea823e7a5632b3bf80fbf37f11451747a3 = $this->env->getExtension("native_profiler");
        $__internal_288bbdb220cb187b83595ac2c814ebea823e7a5632b3bf80fbf37f11451747a3->enter($__internal_288bbdb220cb187b83595ac2c814ebea823e7a5632b3bf80fbf37f11451747a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_288bbdb220cb187b83595ac2c814ebea823e7a5632b3bf80fbf37f11451747a3->leave($__internal_288bbdb220cb187b83595ac2c814ebea823e7a5632b3bf80fbf37f11451747a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
