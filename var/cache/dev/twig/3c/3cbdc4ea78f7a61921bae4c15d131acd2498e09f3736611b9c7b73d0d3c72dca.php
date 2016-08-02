<?php

/* menu/categorias_list.html.twig */
class __TwigTemplate_e855253823ee816422cf75bc02eb5508acf9c2facc99f2cc240ea79bbd19285d extends Twig_Template
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
        $__internal_af179fee5c8e507524e59f760957fb11a09567fad28514609d185a170b267a5c = $this->env->getExtension("native_profiler");
        $__internal_af179fee5c8e507524e59f760957fb11a09567fad28514609d185a170b267a5c->enter($__internal_af179fee5c8e507524e59f760957fb11a09567fad28514609d185a170b267a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu/categorias_list.html.twig"));

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
        
        $__internal_af179fee5c8e507524e59f760957fb11a09567fad28514609d185a170b267a5c->leave($__internal_af179fee5c8e507524e59f760957fb11a09567fad28514609d185a170b267a5c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc208b894fefdf882b54f387e6e73b00153dded7195c383c3c8c68831532bdc4 = $this->env->getExtension("native_profiler");
        $__internal_dc208b894fefdf882b54f387e6e73b00153dded7195c383c3c8c68831532bdc4->enter($__internal_dc208b894fefdf882b54f387e6e73b00153dded7195c383c3c8c68831532bdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_dc208b894fefdf882b54f387e6e73b00153dded7195c383c3c8c68831532bdc4->leave($__internal_dc208b894fefdf882b54f387e6e73b00153dded7195c383c3c8c68831532bdc4_prof);

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
