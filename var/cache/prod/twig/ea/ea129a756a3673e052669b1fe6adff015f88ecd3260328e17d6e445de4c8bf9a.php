<?php

/* menu/categorias_list.html.twig */
class __TwigTemplate_7497c1a086542c4abe84f481f0be99da8b4c18a7df23726a8c9d34325cd8d690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44d142525e110fa5f7f33f79f6d7633a780e866546eed9cef253c7c82ca4787c = $this->env->getExtension("native_profiler");
        $__internal_44d142525e110fa5f7f33f79f6d7633a780e866546eed9cef253c7c82ca4787c->enter($__internal_44d142525e110fa5f7f33f79f6d7633a780e866546eed9cef253c7c82ca4787c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu/categorias_list.html.twig"));

        // line 1
        echo "<head>
\t<!-- Bootstrap Core CSS -->
    ";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
    <!-- Fonts -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
</head>

";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 16
            echo "\t<li>
\t\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria", array("nombre" => $this->getAttribute($context["categoria"], "categoria", array()))), "html", null, true);
            echo "\">
\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "categoria", array()), "html", null, true);
            echo "</a>
\t</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_44d142525e110fa5f7f33f79f6d7633a780e866546eed9cef253c7c82ca4787c->leave($__internal_44d142525e110fa5f7f33f79f6d7633a780e866546eed9cef253c7c82ca4787c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7fd049adf54e3962dc5338018046d2b9a220a583f6ccaa502f9f664a4aeb94c9 = $this->env->getExtension("native_profiler");
        $__internal_7fd049adf54e3962dc5338018046d2b9a220a583f6ccaa502f9f664a4aeb94c9->enter($__internal_7fd049adf54e3962dc5338018046d2b9a220a583f6ccaa502f9f664a4aeb94c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/business-casual.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_7fd049adf54e3962dc5338018046d2b9a220a583f6ccaa502f9f664a4aeb94c9->leave($__internal_7fd049adf54e3962dc5338018046d2b9a220a583f6ccaa502f9f664a4aeb94c9_prof);

    }

    public function getTemplateName()
    {
        return "menu/categorias_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 7,  68 => 4,  62 => 3,  48 => 18,  44 => 17,  41 => 16,  37 => 15,  29 => 9,  27 => 3,  23 => 1,);
    }
}
/* <head>*/
/* 	<!-- Bootstrap Core CSS -->*/
/*     {% block stylesheets %}*/
/*     <link href="{{ asset('bundles/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="{{ asset('bundles/css/business-casual.css') }}" rel="stylesheet">*/
/*     {% endblock %}*/
/* */
/*     <!-- Fonts -->*/
/*     <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">*/
/*     <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">*/
/* </head>*/
/* */
/* {% for categoria in categorias %}*/
/* 	<li>*/
/* 		<a href="{{ path('categoria', {'nombre': categoria.categoria}) }}">*/
/* 		{{ categoria.categoria }}</a>*/
/* 	</li>*/
/* {% endfor %}*/
