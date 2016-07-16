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
        $__internal_0a263880176c6a8a539c9d1dbdfc0a31b58022869b694d8c96c284551a2fba8c = $this->env->getExtension("native_profiler");
        $__internal_0a263880176c6a8a539c9d1dbdfc0a31b58022869b694d8c96c284551a2fba8c->enter($__internal_0a263880176c6a8a539c9d1dbdfc0a31b58022869b694d8c96c284551a2fba8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a263880176c6a8a539c9d1dbdfc0a31b58022869b694d8c96c284551a2fba8c->leave($__internal_0a263880176c6a8a539c9d1dbdfc0a31b58022869b694d8c96c284551a2fba8c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f52223a6046590a693e55be2468af2b163f992fc1d7d96587e993db4130674c = $this->env->getExtension("native_profiler");
        $__internal_8f52223a6046590a693e55be2468af2b163f992fc1d7d96587e993db4130674c->enter($__internal_8f52223a6046590a693e55be2468af2b163f992fc1d7d96587e993db4130674c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8f52223a6046590a693e55be2468af2b163f992fc1d7d96587e993db4130674c->leave($__internal_8f52223a6046590a693e55be2468af2b163f992fc1d7d96587e993db4130674c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d2f5e41eb499facd097123e73d64733d63040ce37fe9b9d5820f4e2872b752a = $this->env->getExtension("native_profiler");
        $__internal_6d2f5e41eb499facd097123e73d64733d63040ce37fe9b9d5820f4e2872b752a->enter($__internal_6d2f5e41eb499facd097123e73d64733d63040ce37fe9b9d5820f4e2872b752a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6d2f5e41eb499facd097123e73d64733d63040ce37fe9b9d5820f4e2872b752a->leave($__internal_6d2f5e41eb499facd097123e73d64733d63040ce37fe9b9d5820f4e2872b752a_prof);

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
