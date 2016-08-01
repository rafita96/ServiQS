<?php

/* @HeysoftMenu/Menu/showplatillos.html.twig */
class __TwigTemplate_3cf1b13fd8aef0a9b5a10cf2071ea90d030854a33770db35ece8914b6289b5cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@HeysoftMenu/Menu/showplatillos.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8788f8d69414edb299727e0bbd29ad2b61837f9d8662fa5333a9c7679319d323 = $this->env->getExtension("native_profiler");
        $__internal_8788f8d69414edb299727e0bbd29ad2b61837f9d8662fa5333a9c7679319d323->enter($__internal_8788f8d69414edb299727e0bbd29ad2b61837f9d8662fa5333a9c7679319d323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HeysoftMenu/Menu/showplatillos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8788f8d69414edb299727e0bbd29ad2b61837f9d8662fa5333a9c7679319d323->leave($__internal_8788f8d69414edb299727e0bbd29ad2b61837f9d8662fa5333a9c7679319d323_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_823003be52a2244450c88e50b34ca8e918a63e9ec0ef57ff5bf36577c3c4393a = $this->env->getExtension("native_profiler");
        $__internal_823003be52a2244450c88e50b34ca8e918a63e9ec0ef57ff5bf36577c3c4393a->enter($__internal_823003be52a2244450c88e50b34ca8e918a63e9ec0ef57ff5bf36577c3c4393a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\"><h1 style=\"text-align:center\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "html", null, true);
        echo "</h1></div>
</div>

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["platillos"]) ? $context["platillos"] : $this->getContext($context, "platillos")));
        foreach ($context['_seq'] as $context["_key"] => $context["platillo"]) {
            // line 9
            echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\"><h2>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["platillo"], "platillo", array()), "html", null, true);
            echo "</h2></div>
\t\t
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-2\"><img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/img/menu/" . $this->getAttribute($context["platillo"], "imagen", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["platillo"], "imagen", array()), "html", null, true);
            echo "\" width=\"75px\" /></div>
\t\t\t\t<h4>
\t\t\t\t<div class=\"col-md-1\">Precio</div>
\t\t\t\t<div class=\"col-md-2\">\$";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["platillo"], "precio", array()), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"col-md-2\">Duraci&oacute;n</div>
\t\t\t\t<div class=\"col-md-2\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["platillo"], "duracion", array()), "html", null, true);
            echo " mins</div></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<h4>
\t\t\t\t<div class=\"col-md-2\">Ingredientes</div>
\t\t\t\t<div class=\"col-md-10\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["platillo"], "ingredientes", array()), "html", null, true);
            echo "</div></h4>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<button role=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#aCar\" onclick=\"aCarrito(";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["platillo"], "id", array()), "html", null, true);
            echo ")\"> Agregar a Carrito </button>
\t\t\t\t\t<!-- <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#aCar\" onclick=\"request()\">Agregar a Carrito</button> -->
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platillo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
<div class=\"modal fade\" id=\"aCar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Has Agregado al Carrito</h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\tPuedes ver tu carrito en la pesta&ntilde;a Ver/Carrito.
\t\t\t</div>
\t\t\t\t      
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\"onclick=\"request()\">Ver Carrito</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_823003be52a2244450c88e50b34ca8e918a63e9ec0ef57ff5bf36577c3c4393a->leave($__internal_823003be52a2244450c88e50b34ca8e918a63e9ec0ef57ff5bf36577c3c4393a_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_284f2fe2e141b7ac63d7f736b27749440eae1087cb419ae268cf765da9e20ac6 = $this->env->getExtension("native_profiler");
        $__internal_284f2fe2e141b7ac63d7f736b27749440eae1087cb419ae268cf765da9e20ac6->enter($__internal_284f2fe2e141b7ac63d7f736b27749440eae1087cb419ae268cf765da9e20ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<script>
\t\tfunction aCarrito(platillo){
    \t\t\$.post('";
        // line 65
        echo $this->env->getExtension('routing')->getPath("heysoft_menu_agregar_carrito");
        echo "',              
                {id: platillo}, 
            function(response){
                    if(response.code == 100 && response.success){//dummy check
                      //do something
                    }
    \t\t}, \"json\");    
}
\t</script>\t
";
        
        $__internal_284f2fe2e141b7ac63d7f736b27749440eae1087cb419ae268cf765da9e20ac6->leave($__internal_284f2fe2e141b7ac63d7f736b27749440eae1087cb419ae268cf765da9e20ac6_prof);

    }

    public function getTemplateName()
    {
        return "@HeysoftMenu/Menu/showplatillos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 65,  141 => 61,  135 => 60,  107 => 37,  94 => 30,  86 => 25,  77 => 19,  72 => 17,  64 => 14,  57 => 10,  54 => 9,  50 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="panel panel-default">*/
/* 	<div class="panel-heading"><h1 style="text-align:center">{{ categoria }}</h1></div>*/
/* </div>*/
/* */
/* {% for platillo in platillos %}*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading"><h2>{{ platillo.platillo }}</h2></div>*/
/* 		*/
/* 		<div class="panel-body">*/
/* 			<div class="row">*/
/* 				<div class="col-md-2"><img src="{{ asset('bundles/img/menu/' ~ platillo.imagen) }}" alt="{{ platillo.imagen }}" width="75px" /></div>*/
/* 				<h4>*/
/* 				<div class="col-md-1">Precio</div>*/
/* 				<div class="col-md-2">${{ platillo.precio }}</div>*/
/* 				<div class="col-md-2">Duraci&oacute;n</div>*/
/* 				<div class="col-md-2">{{ platillo.duracion }} mins</div></h4>*/
/* 			</div>*/
/* 			*/
/* 			<div class="row">*/
/* 				<h4>*/
/* 				<div class="col-md-2">Ingredientes</div>*/
/* 				<div class="col-md-10">{{ platillo.ingredientes }}</div></h4>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-md-4">*/
/* 					<button role="button" class="btn btn-success" data-toggle="modal" data-target="#aCar" onclick="aCarrito({{ platillo.id }})"> Agregar a Carrito </button>*/
/* 					<!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#aCar" onclick="request()">Agregar a Carrito</button> -->*/
/* 				</div>*/
/* 			</div>			*/
/* 		</div>*/
/* 	</div>*/
/* {% endfor %}*/
/* */
/* <div class="modal fade" id="aCar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/* 	<div class="modal-dialog" role="document">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 				<h4 class="modal-title" id="myModalLabel">Has Agregado al Carrito</h4>*/
/* 			</div>*/
/* 			*/
/* 			<div class="modal-body">*/
/* 				Puedes ver tu carrito en la pesta&ntilde;a Ver/Carrito.*/
/* 			</div>*/
/* 				      */
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/* 				<button type="button" class="btn btn-success" data-dismiss="modal"onclick="request()">Ver Carrito</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* */
/* 	<script>*/
/* 		function aCarrito(platillo){*/
/*     		$.post('{{path('heysoft_menu_agregar_carrito')}}',              */
/*                 {id: platillo}, */
/*             function(response){*/
/*                     if(response.code == 100 && response.success){//dummy check*/
/*                       //do something*/
/*                     }*/
/*     		}, "json");    */
/* }*/
/* 	</script>	*/
/* {% endblock %}*/
