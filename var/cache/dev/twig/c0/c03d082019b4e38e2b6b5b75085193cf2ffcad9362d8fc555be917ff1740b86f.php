<?php

/* base.html.twig */
class __TwigTemplate_d6b8765ee2c4d1a3dd75ea944d99d2ed7e85b61181283e0575d35500a6086130 extends Twig_Template
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
        $__internal_7f8e332acf9832c15ebd0143d2c2304e3313beeaaf01ee0858e7e1b088c324b2 = $this->env->getExtension("native_profiler");
        $__internal_7f8e332acf9832c15ebd0143d2c2304e3313beeaaf01ee0858e7e1b088c324b2->enter($__internal_7f8e332acf9832c15ebd0143d2c2304e3313beeaaf01ee0858e7e1b088c324b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("categoria", array("nombre" => "Comida_Del_Dia"));
        echo "\">Comida del dia</a>
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
                            <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" title=\"Cerrar Sesión\"><span class=\"glyphicon glyphicon-off\"></span></a>
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
        
        $__internal_7f8e332acf9832c15ebd0143d2c2304e3313beeaaf01ee0858e7e1b088c324b2->leave($__internal_7f8e332acf9832c15ebd0143d2c2304e3313beeaaf01ee0858e7e1b088c324b2_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_260862fae654427c7fc98ef468d3c3044be01622ea2b4dea498f8a82a9f2041f = $this->env->getExtension("native_profiler");
        $__internal_260862fae654427c7fc98ef468d3c3044be01622ea2b4dea498f8a82a9f2041f->enter($__internal_260862fae654427c7fc98ef468d3c3044be01622ea2b4dea498f8a82a9f2041f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ServiQ";
        
        $__internal_260862fae654427c7fc98ef468d3c3044be01622ea2b4dea498f8a82a9f2041f->leave($__internal_260862fae654427c7fc98ef468d3c3044be01622ea2b4dea498f8a82a9f2041f_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43851d1a6c7ede2a165c80de501c62ec7181fe5ea16932e76ecf5773bb2fd036 = $this->env->getExtension("native_profiler");
        $__internal_43851d1a6c7ede2a165c80de501c62ec7181fe5ea16932e76ecf5773bb2fd036->enter($__internal_43851d1a6c7ede2a165c80de501c62ec7181fe5ea16932e76ecf5773bb2fd036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_43851d1a6c7ede2a165c80de501c62ec7181fe5ea16932e76ecf5773bb2fd036->leave($__internal_43851d1a6c7ede2a165c80de501c62ec7181fe5ea16932e76ecf5773bb2fd036_prof);

    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        $__internal_eebfa81414a479f3ea9611153de1a27e7b0892bab819d85aa6e8ba8ef69ebb38 = $this->env->getExtension("native_profiler");
        $__internal_eebfa81414a479f3ea9611153de1a27e7b0892bab819d85aa6e8ba8ef69ebb38->enter($__internal_eebfa81414a479f3ea9611153de1a27e7b0892bab819d85aa6e8ba8ef69ebb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eebfa81414a479f3ea9611153de1a27e7b0892bab819d85aa6e8ba8ef69ebb38->leave($__internal_eebfa81414a479f3ea9611153de1a27e7b0892bab819d85aa6e8ba8ef69ebb38_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0bb712ca9f52db6579ffe19c4b1f8ac2991d8208f33d2e9f1e3f1bdef69f9c3c = $this->env->getExtension("native_profiler");
        $__internal_0bb712ca9f52db6579ffe19c4b1f8ac2991d8208f33d2e9f1e3f1bdef69f9c3c->enter($__internal_0bb712ca9f52db6579ffe19c4b1f8ac2991d8208f33d2e9f1e3f1bdef69f9c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0bb712ca9f52db6579ffe19c4b1f8ac2991d8208f33d2e9f1e3f1bdef69f9c3c->leave($__internal_0bb712ca9f52db6579ffe19c4b1f8ac2991d8208f33d2e9f1e3f1bdef69f9c3c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 93,  193 => 90,  189 => 88,  183 => 87,  172 => 84,  163 => 21,  156 => 18,  150 => 17,  138 => 14,  129 => 113,  127 => 87,  121 => 84,  110 => 76,  96 => 65,  86 => 58,  49 => 23,  47 => 17,  41 => 14,  26 => 1,);
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
/*                             <a href="{{ path('categoria',{ 'nombre': 'Comida_Del_Dia' }) }}">Comida del dia</a>*/
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
/*                             <a href="{{ path('fos_user_security_logout') }}" title="Cerrar Sesión"><span class="glyphicon glyphicon-off"></span></a>*/
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
