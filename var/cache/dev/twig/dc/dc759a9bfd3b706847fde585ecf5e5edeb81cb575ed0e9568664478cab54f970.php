<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_76709092b0d839cad2c1a8b14a231561524f28c626eb62703a10d0571f0a755f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62010bce36e2874ec1f50efbc59a9266457d8062e1be3380777b7f3a0b88d142 = $this->env->getExtension("native_profiler");
        $__internal_62010bce36e2874ec1f50efbc59a9266457d8062e1be3380777b7f3a0b88d142->enter($__internal_62010bce36e2874ec1f50efbc59a9266457d8062e1be3380777b7f3a0b88d142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62010bce36e2874ec1f50efbc59a9266457d8062e1be3380777b7f3a0b88d142->leave($__internal_62010bce36e2874ec1f50efbc59a9266457d8062e1be3380777b7f3a0b88d142_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e26db373e0b3da8db6646d214c5e9760fc57ee12ec67c3e1cfc591c161812fe = $this->env->getExtension("native_profiler");
        $__internal_1e26db373e0b3da8db6646d214c5e9760fc57ee12ec67c3e1cfc591c161812fe->enter($__internal_1e26db373e0b3da8db6646d214c5e9760fc57ee12ec67c3e1cfc591c161812fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1e26db373e0b3da8db6646d214c5e9760fc57ee12ec67c3e1cfc591c161812fe->leave($__internal_1e26db373e0b3da8db6646d214c5e9760fc57ee12ec67c3e1cfc591c161812fe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b670b5d25337eae6dd57d6de5659c65cd7b6aa8bce5730b2ee4b6282d029858b = $this->env->getExtension("native_profiler");
        $__internal_b670b5d25337eae6dd57d6de5659c65cd7b6aa8bce5730b2ee4b6282d029858b->enter($__internal_b670b5d25337eae6dd57d6de5659c65cd7b6aa8bce5730b2ee4b6282d029858b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b670b5d25337eae6dd57d6de5659c65cd7b6aa8bce5730b2ee4b6282d029858b->leave($__internal_b670b5d25337eae6dd57d6de5659c65cd7b6aa8bce5730b2ee4b6282d029858b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
