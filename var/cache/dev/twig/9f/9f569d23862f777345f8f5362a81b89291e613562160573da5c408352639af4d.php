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
        $__internal_c3dcc9fb9b3dd3fc5426cd1d37513e0d141cc024ac6d46bd48cf4448447be1d0 = $this->env->getExtension("native_profiler");
        $__internal_c3dcc9fb9b3dd3fc5426cd1d37513e0d141cc024ac6d46bd48cf4448447be1d0->enter($__internal_c3dcc9fb9b3dd3fc5426cd1d37513e0d141cc024ac6d46bd48cf4448447be1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_c3dcc9fb9b3dd3fc5426cd1d37513e0d141cc024ac6d46bd48cf4448447be1d0->leave($__internal_c3dcc9fb9b3dd3fc5426cd1d37513e0d141cc024ac6d46bd48cf4448447be1d0_prof);

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
