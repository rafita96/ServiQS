<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d8eebb3b4acace42c140a6d14e36646aecea38236d33acc24a9dec2bf8163e82 extends Twig_Template
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
        $__internal_4ad10af1834ddac5adff0ea0f8b2081c2c117eb1f37a94120018c6e9f5529c21 = $this->env->getExtension("native_profiler");
        $__internal_4ad10af1834ddac5adff0ea0f8b2081c2c117eb1f37a94120018c6e9f5529c21->enter($__internal_4ad10af1834ddac5adff0ea0f8b2081c2c117eb1f37a94120018c6e9f5529c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_4ad10af1834ddac5adff0ea0f8b2081c2c117eb1f37a94120018c6e9f5529c21->leave($__internal_4ad10af1834ddac5adff0ea0f8b2081c2c117eb1f37a94120018c6e9f5529c21_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
