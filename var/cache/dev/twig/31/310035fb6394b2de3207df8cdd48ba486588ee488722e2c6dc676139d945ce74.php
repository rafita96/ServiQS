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
        $__internal_694b22d0bb8a50726f07454e48b34e98ae8498c32c43e1af2bda59f859c671fc = $this->env->getExtension("native_profiler");
        $__internal_694b22d0bb8a50726f07454e48b34e98ae8498c32c43e1af2bda59f859c671fc->enter($__internal_694b22d0bb8a50726f07454e48b34e98ae8498c32c43e1af2bda59f859c671fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

                        <li>
                            <a href=\"#\">Menu</a>
                        </li>

                        <li>
                            <a href=\"#\">Carrito</a>
                        </li>
                    </ul>

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"#\">Cerrar Sesi&oacute;n</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
            </nav>
            ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        echo " 
        </div>
        
        ";
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "
    </body>
</html>";
        
        $__internal_694b22d0bb8a50726f07454e48b34e98ae8498c32c43e1af2bda59f859c671fc->leave($__internal_694b22d0bb8a50726f07454e48b34e98ae8498c32c43e1af2bda59f859c671fc_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_b653cc3b1c7e235d6514dccd44dac0bb5aab99e188de7f4eed79d72884463f3c = $this->env->getExtension("native_profiler");
        $__internal_b653cc3b1c7e235d6514dccd44dac0bb5aab99e188de7f4eed79d72884463f3c->enter($__internal_b653cc3b1c7e235d6514dccd44dac0bb5aab99e188de7f4eed79d72884463f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ServiQ";
        
        $__internal_b653cc3b1c7e235d6514dccd44dac0bb5aab99e188de7f4eed79d72884463f3c->leave($__internal_b653cc3b1c7e235d6514dccd44dac0bb5aab99e188de7f4eed79d72884463f3c_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b113de9baf04578eb46791b591854b5bcbb6b58e503788bf23bfdf924dbcf16 = $this->env->getExtension("native_profiler");
        $__internal_2b113de9baf04578eb46791b591854b5bcbb6b58e503788bf23bfdf924dbcf16->enter($__internal_2b113de9baf04578eb46791b591854b5bcbb6b58e503788bf23bfdf924dbcf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "        <link href=\"bundles/css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"bundles/css/business-casual.css\" rel=\"stylesheet\">
        ";
        
        $__internal_2b113de9baf04578eb46791b591854b5bcbb6b58e503788bf23bfdf924dbcf16->leave($__internal_2b113de9baf04578eb46791b591854b5bcbb6b58e503788bf23bfdf924dbcf16_prof);

    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        $__internal_62305bfd7652f5209e027aa0f636b4faf653e07fe81e283f4503e1c1a148d495 = $this->env->getExtension("native_profiler");
        $__internal_62305bfd7652f5209e027aa0f636b4faf653e07fe81e283f4503e1c1a148d495->enter($__internal_62305bfd7652f5209e027aa0f636b4faf653e07fe81e283f4503e1c1a148d495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62305bfd7652f5209e027aa0f636b4faf653e07fe81e283f4503e1c1a148d495->leave($__internal_62305bfd7652f5209e027aa0f636b4faf653e07fe81e283f4503e1c1a148d495_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe7595fb86bfbf1cb02e19f4707f82241d2c1190ae1f56e74806f8c05ef122bc = $this->env->getExtension("native_profiler");
        $__internal_fe7595fb86bfbf1cb02e19f4707f82241d2c1190ae1f56e74806f8c05ef122bc->enter($__internal_fe7595fb86bfbf1cb02e19f4707f82241d2c1190ae1f56e74806f8c05ef122bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "        <!-- Hace posible el funcionamiento de JavaScript -->
        <!-- jQuery -->
        <script src=\"js/jquery.js\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"js/bootstrap.min.js\"></script>

        <!-- Script to Activate the Carousel -->
        <script>
        \$('.carousel').carousel({
            interval: 5000 //changes the speed
        })
        </script>
        ";
        
        $__internal_fe7595fb86bfbf1cb02e19f4707f82241d2c1190ae1f56e74806f8c05ef122bc->leave($__internal_fe7595fb86bfbf1cb02e19f4707f82241d2c1190ae1f56e74806f8c05ef122bc_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 84,  165 => 83,  154 => 80,  143 => 18,  137 => 17,  125 => 14,  116 => 98,  114 => 83,  108 => 80,  49 => 23,  47 => 17,  41 => 14,  26 => 1,);
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
/*         <link href="bundles/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*         <!-- Custom CSS -->*/
/*         <link href="bundles/css/business-casual.css" rel="stylesheet">*/
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
/* */
/*                         <li>*/
/*                             <a href="#">Menu</a>*/
/*                         </li>*/
/* */
/*                         <li>*/
/*                             <a href="#">Carrito</a>*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li>*/
/*                             <a href="#">Cerrar Sesi&oacute;n</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- /.navbar-collapse -->*/
/*             </div>*/
/*             <!-- /.container -->*/
/*             </nav>*/
/*             {% block body %}{% endblock %} */
/*         </div>*/
/*         */
/*         {% block javascripts %}*/
/*         <!-- Hace posible el funcionamiento de JavaScript -->*/
/*         <!-- jQuery -->*/
/*         <script src="js/jquery.js"></script>*/
/* */
/*         <!-- Bootstrap Core JavaScript -->*/
/*         <script src="js/bootstrap.min.js"></script>*/
/* */
/*         <!-- Script to Activate the Carousel -->*/
/*         <script>*/
/*         $('.carousel').carousel({*/
/*             interval: 5000 //changes the speed*/
/*         })*/
/*         </script>*/
/*         {% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
