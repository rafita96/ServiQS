<?php

/* HeysoftMenuBundle:Default:login.html.twig */
class __TwigTemplate_6b91d494ad3e2e86f936190a96f4c7fc3c375c6d45663952f095e7289fa2cfa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::default/baseexterior.html.twig", "HeysoftMenuBundle:Default:login.html.twig", 1);
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
        $__internal_4868e15a034e0dc075f15334eeb1b54937f447387a81202706af238167cfdbc6 = $this->env->getExtension("native_profiler");
        $__internal_4868e15a034e0dc075f15334eeb1b54937f447387a81202706af238167cfdbc6->enter($__internal_4868e15a034e0dc075f15334eeb1b54937f447387a81202706af238167cfdbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeysoftMenuBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4868e15a034e0dc075f15334eeb1b54937f447387a81202706af238167cfdbc6->leave($__internal_4868e15a034e0dc075f15334eeb1b54937f447387a81202706af238167cfdbc6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e9f0c2fdb7426b9a1c445aac787045dd56c1d71c5f7b6aa5285da9124824575 = $this->env->getExtension("native_profiler");
        $__internal_0e9f0c2fdb7426b9a1c445aac787045dd56c1d71c5f7b6aa5285da9124824575->enter($__internal_0e9f0c2fdb7426b9a1c445aac787045dd56c1d71c5f7b6aa5285da9124824575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0e9f0c2fdb7426b9a1c445aac787045dd56c1d71c5f7b6aa5285da9124824575->leave($__internal_0e9f0c2fdb7426b9a1c445aac787045dd56c1d71c5f7b6aa5285da9124824575_prof);

    }

    public function getTemplateName()
    {
        return "HeysoftMenuBundle:Default:login.html.twig";
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