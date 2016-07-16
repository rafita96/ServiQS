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
        $__internal_821e388703edd5dadbf5b7331bc8aa6853c9e75756ad118251aac7293a9f8843 = $this->env->getExtension("native_profiler");
        $__internal_821e388703edd5dadbf5b7331bc8aa6853c9e75756ad118251aac7293a9f8843->enter($__internal_821e388703edd5dadbf5b7331bc8aa6853c9e75756ad118251aac7293a9f8843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_821e388703edd5dadbf5b7331bc8aa6853c9e75756ad118251aac7293a9f8843->leave($__internal_821e388703edd5dadbf5b7331bc8aa6853c9e75756ad118251aac7293a9f8843_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_047dc97c897e6ebfc8c39efb970f398eaf8576fff9e35f61016bab0d5579cc94 = $this->env->getExtension("native_profiler");
        $__internal_047dc97c897e6ebfc8c39efb970f398eaf8576fff9e35f61016bab0d5579cc94->enter($__internal_047dc97c897e6ebfc8c39efb970f398eaf8576fff9e35f61016bab0d5579cc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ServiQ";
        
        $__internal_047dc97c897e6ebfc8c39efb970f398eaf8576fff9e35f61016bab0d5579cc94->leave($__internal_047dc97c897e6ebfc8c39efb970f398eaf8576fff9e35f61016bab0d5579cc94_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9dda2eacf0db6cfc3bf313d84181664026bf3132c0864ca2e132e47237be5bb8 = $this->env->getExtension("native_profiler");
        $__internal_9dda2eacf0db6cfc3bf313d84181664026bf3132c0864ca2e132e47237be5bb8->enter($__internal_9dda2eacf0db6cfc3bf313d84181664026bf3132c0864ca2e132e47237be5bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "        <link href=\"bundles/css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"bundles/css/business-casual.css\" rel=\"stylesheet\">
        ";
        
        $__internal_9dda2eacf0db6cfc3bf313d84181664026bf3132c0864ca2e132e47237be5bb8->leave($__internal_9dda2eacf0db6cfc3bf313d84181664026bf3132c0864ca2e132e47237be5bb8_prof);

    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        $__internal_243f9b00030d2e093157f44ed83729aa6bb3908622247a1e9e52fc4a1f2e0c9b = $this->env->getExtension("native_profiler");
        $__internal_243f9b00030d2e093157f44ed83729aa6bb3908622247a1e9e52fc4a1f2e0c9b->enter($__internal_243f9b00030d2e093157f44ed83729aa6bb3908622247a1e9e52fc4a1f2e0c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_243f9b00030d2e093157f44ed83729aa6bb3908622247a1e9e52fc4a1f2e0c9b->leave($__internal_243f9b00030d2e093157f44ed83729aa6bb3908622247a1e9e52fc4a1f2e0c9b_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0dd26dc4dfa20b78e5511677869ffb08a945ed29dd7c90569f62ac36de06d09e = $this->env->getExtension("native_profiler");
        $__internal_0dd26dc4dfa20b78e5511677869ffb08a945ed29dd7c90569f62ac36de06d09e->enter($__internal_0dd26dc4dfa20b78e5511677869ffb08a945ed29dd7c90569f62ac36de06d09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0dd26dc4dfa20b78e5511677869ffb08a945ed29dd7c90569f62ac36de06d09e->leave($__internal_0dd26dc4dfa20b78e5511677869ffb08a945ed29dd7c90569f62ac36de06d09e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
