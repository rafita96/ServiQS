<?php

/* HeysoftMenuBundle:Menu:showplatillos.html.twig */
class __TwigTemplate_74e580824ea1452bd21bffc9599034d8740a1a9be4531ebebefa9798865b841b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "HeysoftMenuBundle:Menu:showplatillos.html.twig", 1);
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
        $__internal_94cac048a2a315ecb1f8ffa37e8b0939798a77f56e052c4544b5ef5de59b3202 = $this->env->getExtension("native_profiler");
        $__internal_94cac048a2a315ecb1f8ffa37e8b0939798a77f56e052c4544b5ef5de59b3202->enter($__internal_94cac048a2a315ecb1f8ffa37e8b0939798a77f56e052c4544b5ef5de59b3202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeysoftMenuBundle:Menu:showplatillos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94cac048a2a315ecb1f8ffa37e8b0939798a77f56e052c4544b5ef5de59b3202->leave($__internal_94cac048a2a315ecb1f8ffa37e8b0939798a77f56e052c4544b5ef5de59b3202_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab39dab3d71ca8910711c1360dfe85a70cfdc18d80c12f0ddaa71bf524b37524 = $this->env->getExtension("native_profiler");
        $__internal_ab39dab3d71ca8910711c1360dfe85a70cfdc18d80c12f0ddaa71bf524b37524->enter($__internal_ab39dab3d71ca8910711c1360dfe85a70cfdc18d80c12f0ddaa71bf524b37524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ab39dab3d71ca8910711c1360dfe85a70cfdc18d80c12f0ddaa71bf524b37524->leave($__internal_ab39dab3d71ca8910711c1360dfe85a70cfdc18d80c12f0ddaa71bf524b37524_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c063410546f38301753e7969e6e9a9a3c71ab94de779ed99a5a4d8d70e9c6962 = $this->env->getExtension("native_profiler");
        $__internal_c063410546f38301753e7969e6e9a9a3c71ab94de779ed99a5a4d8d70e9c6962->enter($__internal_c063410546f38301753e7969e6e9a9a3c71ab94de779ed99a5a4d8d70e9c6962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c063410546f38301753e7969e6e9a9a3c71ab94de779ed99a5a4d8d70e9c6962->leave($__internal_c063410546f38301753e7969e6e9a9a3c71ab94de779ed99a5a4d8d70e9c6962_prof);

    }

    public function getTemplateName()
    {
        return "HeysoftMenuBundle:Menu:showplatillos.html.twig";
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
