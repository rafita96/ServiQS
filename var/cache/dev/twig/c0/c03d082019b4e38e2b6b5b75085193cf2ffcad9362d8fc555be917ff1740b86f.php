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
        $__internal_80aafd3841bd2c3664e6c38993440d4fe9ef403d097ea44e228524eaf0bea7cc = $this->env->getExtension("native_profiler");
        $__internal_80aafd3841bd2c3664e6c38993440d4fe9ef403d097ea44e228524eaf0bea7cc->enter($__internal_80aafd3841bd2c3664e6c38993440d4fe9ef403d097ea44e228524eaf0bea7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_80aafd3841bd2c3664e6c38993440d4fe9ef403d097ea44e228524eaf0bea7cc->leave($__internal_80aafd3841bd2c3664e6c38993440d4fe9ef403d097ea44e228524eaf0bea7cc_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_93826f7a65fe7fe27c6e84aa661f15562994f84ef411ab5c4b73c38483ea1486 = $this->env->getExtension("native_profiler");
        $__internal_93826f7a65fe7fe27c6e84aa661f15562994f84ef411ab5c4b73c38483ea1486->enter($__internal_93826f7a65fe7fe27c6e84aa661f15562994f84ef411ab5c4b73c38483ea1486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ServiQ";
        
        $__internal_93826f7a65fe7fe27c6e84aa661f15562994f84ef411ab5c4b73c38483ea1486->leave($__internal_93826f7a65fe7fe27c6e84aa661f15562994f84ef411ab5c4b73c38483ea1486_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18199349506eb9bc397275fec399249318faa529237bf472b7cf07377436569b = $this->env->getExtension("native_profiler");
        $__internal_18199349506eb9bc397275fec399249318faa529237bf472b7cf07377436569b->enter($__internal_18199349506eb9bc397275fec399249318faa529237bf472b7cf07377436569b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_18199349506eb9bc397275fec399249318faa529237bf472b7cf07377436569b->leave($__internal_18199349506eb9bc397275fec399249318faa529237bf472b7cf07377436569b_prof);

    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae567c964f1172c35c354a11da4595245a4d2bf0ef34d222e2d1edd0a5570dba = $this->env->getExtension("native_profiler");
        $__internal_ae567c964f1172c35c354a11da4595245a4d2bf0ef34d222e2d1edd0a5570dba->enter($__internal_ae567c964f1172c35c354a11da4595245a4d2bf0ef34d222e2d1edd0a5570dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae567c964f1172c35c354a11da4595245a4d2bf0ef34d222e2d1edd0a5570dba->leave($__internal_ae567c964f1172c35c354a11da4595245a4d2bf0ef34d222e2d1edd0a5570dba_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_560522ffb7d4aef237754f5e253a4c33fbe96335a369d4d1c4c0c7445db6461f = $this->env->getExtension("native_profiler");
        $__internal_560522ffb7d4aef237754f5e253a4c33fbe96335a369d4d1c4c0c7445db6461f->enter($__internal_560522ffb7d4aef237754f5e253a4c33fbe96335a369d4d1c4c0c7445db6461f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_560522ffb7d4aef237754f5e253a4c33fbe96335a369d4d1c4c0c7445db6461f->leave($__internal_560522ffb7d4aef237754f5e253a4c33fbe96335a369d4d1c4c0c7445db6461f_prof);

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
