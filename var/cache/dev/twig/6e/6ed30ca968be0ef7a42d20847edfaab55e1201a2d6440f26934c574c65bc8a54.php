<?php

/* @HeysoftMenu/Default/login.html.twig */
class __TwigTemplate_72eda72fc25ad59de77857792884bd11ce3388c07f52753aeef98920a8f05236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default/baseexterior.html.twig", "@HeysoftMenu/Default/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::default/baseexterior.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f0ac5e8ef5e6d229a848fbd3139652038b34126d7a9b81c277fee00a8617975 = $this->env->getExtension("native_profiler");
        $__internal_9f0ac5e8ef5e6d229a848fbd3139652038b34126d7a9b81c277fee00a8617975->enter($__internal_9f0ac5e8ef5e6d229a848fbd3139652038b34126d7a9b81c277fee00a8617975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HeysoftMenu/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f0ac5e8ef5e6d229a848fbd3139652038b34126d7a9b81c277fee00a8617975->leave($__internal_9f0ac5e8ef5e6d229a848fbd3139652038b34126d7a9b81c277fee00a8617975_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08cf1d7ccf1a4304511db7d7c1fc23f573ed28d675c31ab667d093335be984b2 = $this->env->getExtension("native_profiler");
        $__internal_08cf1d7ccf1a4304511db7d7c1fc23f573ed28d675c31ab667d093335be984b2->enter($__internal_08cf1d7ccf1a4304511db7d7c1fc23f573ed28d675c31ab667d093335be984b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div> 
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"POST\">
        <label for=\"username\">Usuario:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">";
        // line 12
        echo "Contraseña:";
        echo "</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <button type=\"submit\">Entrar</button>
    </form>
";
        
        $__internal_08cf1d7ccf1a4304511db7d7c1fc23f573ed28d675c31ab667d093335be984b2->leave($__internal_08cf1d7ccf1a4304511db7d7c1fc23f573ed28d675c31ab667d093335be984b2_prof);

    }

    public function getTemplateName()
    {
        return "@HeysoftMenu/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  57 => 10,  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::default/baseexterior.html.twig" %}*/
/* */
/* {% block body %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div> */
/*     {% endif %}*/
/* */
/*     <form action="{{ path('login') }}" method="POST">*/
/*         <label for="username">Usuario:</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*         <label for="password">{{ "Contraseña:" }}</label>*/
/*         <input type="password" id="password" name="_password" />*/
/* */
/*         <button type="submit">Entrar</button>*/
/*     </form>*/
/* {% endblock %} */
