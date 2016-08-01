<?php

/* :menu:categorias_list.html.twig */
class __TwigTemplate_cd79ab2b0870d9b8c38d2c5806b093f77c6ccd52ccc30bb814ce585af785bfdf extends Twig_Template
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
        $__internal_5ebff18ed0aa9b07bc46c2b263bd8bf8ae0c9f3e62945caa45475b3d9a8a2f5e = $this->env->getExtension("native_profiler");
        $__internal_5ebff18ed0aa9b07bc46c2b263bd8bf8ae0c9f3e62945caa45475b3d9a8a2f5e->enter($__internal_5ebff18ed0aa9b07bc46c2b263bd8bf8ae0c9f3e62945caa45475b3d9a8a2f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":menu:categorias_list.html.twig"));

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
        
        $__internal_5ebff18ed0aa9b07bc46c2b263bd8bf8ae0c9f3e62945caa45475b3d9a8a2f5e->leave($__internal_5ebff18ed0aa9b07bc46c2b263bd8bf8ae0c9f3e62945caa45475b3d9a8a2f5e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46df9e1b341d98faa82337a8e9d6142ecee58c47721d846b8bc2b9f0397ebc49 = $this->env->getExtension("native_profiler");
        $__internal_46df9e1b341d98faa82337a8e9d6142ecee58c47721d846b8bc2b9f0397ebc49->enter($__internal_46df9e1b341d98faa82337a8e9d6142ecee58c47721d846b8bc2b9f0397ebc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_46df9e1b341d98faa82337a8e9d6142ecee58c47721d846b8bc2b9f0397ebc49->leave($__internal_46df9e1b341d98faa82337a8e9d6142ecee58c47721d846b8bc2b9f0397ebc49_prof);

    }

    public function getTemplateName()
    {
        return ":menu:categorias_list.html.twig";
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
