<?php

/* ::base.html.twig */
class __TwigTemplate_5492a63b7ecb162377aafc2684c8441a221b13845dce7b1886941dc5c219f456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_996838c55cd139c29b874ef24df89268f833b5951decc339a39e465a6660630d = $this->env->getExtension("native_profiler");
        $__internal_996838c55cd139c29b874ef24df89268f833b5951decc339a39e465a6660630d->enter($__internal_996838c55cd139c29b874ef24df89268f833b5951decc339a39e465a6660630d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <link rel=\"shortcut icon\" href=\"img/favicon.ico\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"img/favicon.ico\" type=\"image/x-icon\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"Sistema de pedidos.\">
        <meta name=\"author\" content=\"HeySoftware!\">

        <meta http-equiv=\"Content-Type\" charset=\"UTF-8\" />
        <meta http-equiv=\"Content-Style-Type\" content=\"text/css\" />
        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- Bootstrap Core CSS -->
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
        <!-- Fonts -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    </head>

    <body>

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        
        <div class=\"brand\">ServiQ</div>
        <div class=\"address-bar\">UABC SAUZAL</div>
        
        <!-- Seccion principal? :O -->
        <div class=\"container\">
            <nav class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                        <a class=\"navbar-brand\" href=\"#\">ServiQ</a>
                    </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-left\">                     
                        <li>
                            <a href=\"#\">Comida del dia</a>
                        </li>
                        <li role=\"presentation\" class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Menu
                            <span class=\"caret\"></span>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                                ";
        // line 65
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("HeysoftMenuBundle:Categoria:CategoriasExistentes"));
        echo "
                            </ul>
                        </li>

                        <li>
                            <a href=\"#\">Carrito</a>
                        </li>
                    </ul>

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"#\" title=\"Cerrar Sesión\"><span class=\"glyphicon glyphicon-off\"></span></a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
            </nav>
                ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        echo " 
        </div>
        
        ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "
    </body>
</html>";
        
        $__internal_996838c55cd139c29b874ef24df89268f833b5951decc339a39e465a6660630d->leave($__internal_996838c55cd139c29b874ef24df89268f833b5951decc339a39e465a6660630d_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_0396bc173c25633a42c0eefc99197671c21cbfa14bc1d42efb57e5b7a7c23fac = $this->env->getExtension("native_profiler");
        $__internal_0396bc173c25633a42c0eefc99197671c21cbfa14bc1d42efb57e5b7a7c23fac->enter($__internal_0396bc173c25633a42c0eefc99197671c21cbfa14bc1d42efb57e5b7a7c23fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ServiQ";
        
        $__internal_0396bc173c25633a42c0eefc99197671c21cbfa14bc1d42efb57e5b7a7c23fac->leave($__internal_0396bc173c25633a42c0eefc99197671c21cbfa14bc1d42efb57e5b7a7c23fac_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a00056d0ba46924c08c03d2bc376a8cf865cde97648f191f98aee79f2e8fd377 = $this->env->getExtension("native_profiler");
        $__internal_a00056d0ba46924c08c03d2bc376a8cf865cde97648f191f98aee79f2e8fd377->enter($__internal_a00056d0ba46924c08c03d2bc376a8cf865cde97648f191f98aee79f2e8fd377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/business-casual.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_a00056d0ba46924c08c03d2bc376a8cf865cde97648f191f98aee79f2e8fd377->leave($__internal_a00056d0ba46924c08c03d2bc376a8cf865cde97648f191f98aee79f2e8fd377_prof);

    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f7b1289257625fd90fd91eb31961a802cc2cd29a1b291a47b34b8ff4445968d = $this->env->getExtension("native_profiler");
        $__internal_7f7b1289257625fd90fd91eb31961a802cc2cd29a1b291a47b34b8ff4445968d->enter($__internal_7f7b1289257625fd90fd91eb31961a802cc2cd29a1b291a47b34b8ff4445968d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f7b1289257625fd90fd91eb31961a802cc2cd29a1b291a47b34b8ff4445968d->leave($__internal_7f7b1289257625fd90fd91eb31961a802cc2cd29a1b291a47b34b8ff4445968d_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf86c32177a4992c1818283b7cf4f06a4bbfad2b7dc492a79a990e2a8fbeec1c = $this->env->getExtension("native_profiler");
        $__internal_bf86c32177a4992c1818283b7cf4f06a4bbfad2b7dc492a79a990e2a8fbeec1c->enter($__internal_bf86c32177a4992c1818283b7cf4f06a4bbfad2b7dc492a79a990e2a8fbeec1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "        <!-- Hace posible el funcionamiento de JavaScript -->
        <!-- jQuery -->
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.js"), "html", null, true);
        echo "\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Script to Activate the Carousel -->
        <script>
        \$('.carousel').carousel({
            interval: 5000 //changes the speed
        })
        </script>

        <script>
            function request()
            {
                alert(\"Bien hecho\");
                // var xhttp = new XMLHttpRequest();
                // var url = \"operador.php?op=\".concat(op);
                // xhttp.open(\"GET\",url,true);
                // xhttp.send();
            }
        </script>
        ";
        
        $__internal_bf86c32177a4992c1818283b7cf4f06a4bbfad2b7dc492a79a990e2a8fbeec1c->leave($__internal_bf86c32177a4992c1818283b7cf4f06a4bbfad2b7dc492a79a990e2a8fbeec1c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 93,  187 => 90,  183 => 88,  177 => 87,  166 => 84,  157 => 21,  150 => 18,  144 => 17,  132 => 14,  123 => 113,  121 => 87,  115 => 84,  93 => 65,  49 => 23,  47 => 17,  41 => 14,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">*/
/*         <link rel="icon" href="img/favicon.ico" type="image/x-icon">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="Sistema de pedidos.">*/
/*         <meta name="author" content="HeySoftware!">*/
/* */
/*         <meta http-equiv="Content-Type" charset="UTF-8" />*/
/*         <meta http-equiv="Content-Style-Type" content="text/css" />*/
/*         <title>{% block title %}ServiQ{% endblock %}</title>*/
/* */
/*         <!-- Bootstrap Core CSS -->*/
/*         {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*         <!-- Custom CSS -->*/
/*         <link href="{{ asset('bundles/css/business-casual.css') }}" rel="stylesheet">*/
/*         {% endblock %}*/
/* */
/*         <!-- Fonts -->*/
/*         <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">*/
/*         <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">*/
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <!-- Latest compiled and minified JavaScript -->*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         */
/*         <div class="brand">ServiQ</div>*/
/*         <div class="address-bar">UABC SAUZAL</div>*/
/*         */
/*         <!-- Seccion principal? :O -->*/
/*         <div class="container">*/
/*             <nav class="navbar navbar-default" role="navigation">*/
/*                 <div class="container">*/
/*                     <!-- Brand and toggle get grouped for better mobile display -->*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->*/
/*                         <a class="navbar-brand" href="#">ServiQ</a>*/
/*                     </div>*/
/*                 <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                     <ul class="nav navbar-nav navbar-left">                     */
/*                         <li>*/
/*                             <a href="#">Comida del dia</a>*/
/*                         </li>*/
/*                         <li role="presentation" class="dropdown">*/
/*                             <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                             Menu*/
/*                             <span class="caret"></span>*/
/*                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                                 {{ render(controller('HeysoftMenuBundle:Categoria:CategoriasExistentes')) }}*/
/*                             </ul>*/
/*                         </li>*/
/* */
/*                         <li>*/
/*                             <a href="#">Carrito</a>*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li>*/
/*                             <a href="#" title="Cerrar Sesión"><span class="glyphicon glyphicon-off"></span></a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- /.navbar-collapse -->*/
/*             </div>*/
/*             <!-- /.container -->*/
/*             </nav>*/
/*                 {% block body %}{% endblock %} */
/*         </div>*/
/*         */
/*         {% block javascripts %}*/
/*         <!-- Hace posible el funcionamiento de JavaScript -->*/
/*         <!-- jQuery -->*/
/*         <script src="{{ asset('bundles/js/jquery.js') }}"></script>*/
/* */
/*         <!-- Bootstrap Core JavaScript -->*/
/*         <script src="{{ asset('bundles/js/bootstrap.min.js') }}"></script>*/
/* */
/*         <!-- Script to Activate the Carousel -->*/
/*         <script>*/
/*         $('.carousel').carousel({*/
/*             interval: 5000 //changes the speed*/
/*         })*/
/*         </script>*/
/* */
/*         <script>*/
/*             function request()*/
/*             {*/
/*                 alert("Bien hecho");*/
/*                 // var xhttp = new XMLHttpRequest();*/
/*                 // var url = "operador.php?op=".concat(op);*/
/*                 // xhttp.open("GET",url,true);*/
/*                 // xhttp.send();*/
/*             }*/
/*         </script>*/
/*         {% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
