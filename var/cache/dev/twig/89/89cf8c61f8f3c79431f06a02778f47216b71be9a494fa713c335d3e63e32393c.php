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
        $__internal_93dce5ba3874e4ae42f0ef439be6c8db856d88a0772f3d909041ccf82942a4f0 = $this->env->getExtension("native_profiler");
        $__internal_93dce5ba3874e4ae42f0ef439be6c8db856d88a0772f3d909041ccf82942a4f0->enter($__internal_93dce5ba3874e4ae42f0ef439be6c8db856d88a0772f3d909041ccf82942a4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HeysoftMenuBundle:Menu:showplatillos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93dce5ba3874e4ae42f0ef439be6c8db856d88a0772f3d909041ccf82942a4f0->leave($__internal_93dce5ba3874e4ae42f0ef439be6c8db856d88a0772f3d909041ccf82942a4f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1607f7b206748c372b4c27aeba26aba83bcb7bb553e93531e4b8649511cda009 = $this->env->getExtension("native_profiler");
        $__internal_1607f7b206748c372b4c27aeba26aba83bcb7bb553e93531e4b8649511cda009->enter($__internal_1607f7b206748c372b4c27aeba26aba83bcb7bb553e93531e4b8649511cda009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t<button role=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#aCar\" onclick=\"aCarrito(platillo)\"> Agregar a Carrito </button>
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
        
        $__internal_1607f7b206748c372b4c27aeba26aba83bcb7bb553e93531e4b8649511cda009->leave($__internal_1607f7b206748c372b4c27aeba26aba83bcb7bb553e93531e4b8649511cda009_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b7611c098a3c52c6e81cfee9b6f3ad025cf2ed469790333abe9c809bc523721 = $this->env->getExtension("native_profiler");
        $__internal_8b7611c098a3c52c6e81cfee9b6f3ad025cf2ed469790333abe9c809bc523721->enter($__internal_8b7611c098a3c52c6e81cfee9b6f3ad025cf2ed469790333abe9c809bc523721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
                {platillo: platillo}, 
            function(response){
                    if(response.code == 100 && response.success){//dummy check
                      //do something
                    }
    \t\t}, \"json\");    
}
\t</script>\t
";
        
        $__internal_8b7611c098a3c52c6e81cfee9b6f3ad025cf2ed469790333abe9c809bc523721->leave($__internal_8b7611c098a3c52c6e81cfee9b6f3ad025cf2ed469790333abe9c809bc523721_prof);

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
        return array (  146 => 65,  138 => 61,  132 => 60,  104 => 37,  86 => 25,  77 => 19,  72 => 17,  64 => 14,  57 => 10,  54 => 9,  50 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/* 					<button role="button" class="btn btn-success" data-toggle="modal" data-target="#aCar" onclick="aCarrito(platillo)"> Agregar a Carrito </button>*/
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
/*     		$.post('{{path('heysoft_menu_agregar_carrito')}}',               */
/*                 {platillo: platillo}, */
/*             function(response){*/
/*                     if(response.code == 100 && response.success){//dummy check*/
/*                       //do something*/
/*                     }*/
/*     		}, "json");    */
/* }*/
/* 	</script>	*/
/* {% endblock %}*/
