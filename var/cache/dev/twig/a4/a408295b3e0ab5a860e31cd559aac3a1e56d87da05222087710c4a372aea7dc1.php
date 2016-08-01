<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_40cb3b9e1980100cd5103b412ec3b7da903816a3a2b03d2528adc9d988f18b8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_82b20b612079e1a81e21fb276c4126614645ff98d53efadff3437c0f1515e45a = $this->env->getExtension("native_profiler");
        $__internal_82b20b612079e1a81e21fb276c4126614645ff98d53efadff3437c0f1515e45a->enter($__internal_82b20b612079e1a81e21fb276c4126614645ff98d53efadff3437c0f1515e45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82b20b612079e1a81e21fb276c4126614645ff98d53efadff3437c0f1515e45a->leave($__internal_82b20b612079e1a81e21fb276c4126614645ff98d53efadff3437c0f1515e45a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_589493ab9669e0a638f6dfa7952237bd664620efb65006d34cd9bbe92087e246 = $this->env->getExtension("native_profiler");
        $__internal_589493ab9669e0a638f6dfa7952237bd664620efb65006d34cd9bbe92087e246->enter($__internal_589493ab9669e0a638f6dfa7952237bd664620efb65006d34cd9bbe92087e246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_589493ab9669e0a638f6dfa7952237bd664620efb65006d34cd9bbe92087e246->leave($__internal_589493ab9669e0a638f6dfa7952237bd664620efb65006d34cd9bbe92087e246_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4386ebb06a6ba23b50e41403d3df82b3c3296835b55b24266fdbca5c3db9e0d5 = $this->env->getExtension("native_profiler");
        $__internal_4386ebb06a6ba23b50e41403d3df82b3c3296835b55b24266fdbca5c3db9e0d5->enter($__internal_4386ebb06a6ba23b50e41403d3df82b3c3296835b55b24266fdbca5c3db9e0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4386ebb06a6ba23b50e41403d3df82b3c3296835b55b24266fdbca5c3db9e0d5->leave($__internal_4386ebb06a6ba23b50e41403d3df82b3c3296835b55b24266fdbca5c3db9e0d5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee2c937e31328ab050d7bcfd97ab64b36d8d374fa979bb7c370958f1231b9870 = $this->env->getExtension("native_profiler");
        $__internal_ee2c937e31328ab050d7bcfd97ab64b36d8d374fa979bb7c370958f1231b9870->enter($__internal_ee2c937e31328ab050d7bcfd97ab64b36d8d374fa979bb7c370958f1231b9870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ee2c937e31328ab050d7bcfd97ab64b36d8d374fa979bb7c370958f1231b9870->leave($__internal_ee2c937e31328ab050d7bcfd97ab64b36d8d374fa979bb7c370958f1231b9870_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
