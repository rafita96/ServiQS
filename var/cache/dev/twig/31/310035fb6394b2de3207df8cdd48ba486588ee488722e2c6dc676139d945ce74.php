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
        $__internal_34773f3cb846d566b795aaf5f208d107e83dd0ef79253ac3437058790b871e24 = $this->env->getExtension("native_profiler");
        $__internal_34773f3cb846d566b795aaf5f208d107e83dd0ef79253ac3437058790b871e24->enter($__internal_34773f3cb846d566b795aaf5f208d107e83dd0ef79253ac3437058790b871e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_34773f3cb846d566b795aaf5f208d107e83dd0ef79253ac3437058790b871e24->leave($__internal_34773f3cb846d566b795aaf5f208d107e83dd0ef79253ac3437058790b871e24_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d431c9b532dadf452f26aabeb1a7f75747c0a3f13738a05dac570e366e40588 = $this->env->getExtension("native_profiler");
        $__internal_2d431c9b532dadf452f26aabeb1a7f75747c0a3f13738a05dac570e366e40588->enter($__internal_2d431c9b532dadf452f26aabeb1a7f75747c0a3f13738a05dac570e366e40588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ServiQ";
        
        $__internal_2d431c9b532dadf452f26aabeb1a7f75747c0a3f13738a05dac570e366e40588->leave($__internal_2d431c9b532dadf452f26aabeb1a7f75747c0a3f13738a05dac570e366e40588_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0d949aa8baf41bea52cd03f88b8e7eae21baa46ae49c0420ccc51385d17e231 = $this->env->getExtension("native_profiler");
        $__internal_e0d949aa8baf41bea52cd03f88b8e7eae21baa46ae49c0420ccc51385d17e231->enter($__internal_e0d949aa8baf41bea52cd03f88b8e7eae21baa46ae49c0420ccc51385d17e231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e0d949aa8baf41bea52cd03f88b8e7eae21baa46ae49c0420ccc51385d17e231->leave($__internal_e0d949aa8baf41bea52cd03f88b8e7eae21baa46ae49c0420ccc51385d17e231_prof);

    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ec8ed521a6917483fb5a3d308b8c421a6f20edcea17b42792def1c541e15b1e = $this->env->getExtension("native_profiler");
        $__internal_3ec8ed521a6917483fb5a3d308b8c421a6f20edcea17b42792def1c541e15b1e->enter($__internal_3ec8ed521a6917483fb5a3d308b8c421a6f20edcea17b42792def1c541e15b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ec8ed521a6917483fb5a3d308b8c421a6f20edcea17b42792def1c541e15b1e->leave($__internal_3ec8ed521a6917483fb5a3d308b8c421a6f20edcea17b42792def1c541e15b1e_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8373424d481f12154176a956a776e7febef7252fc06b96fd8c6cf3285f3d60a8 = $this->env->getExtension("native_profiler");
        $__internal_8373424d481f12154176a956a776e7febef7252fc06b96fd8c6cf3285f3d60a8->enter($__internal_8373424d481f12154176a956a776e7febef7252fc06b96fd8c6cf3285f3d60a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "        <!-- Hace posible el funcionamiento de JavaScript -->
        <!-- jQuery -->
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.js"), "html", null, true);
        echo "\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Script to Activate the Carousel -->
        <script>
        \$('.carousel').carousel({
            interval: 5000 //changes the speed
        })
        </script>
        ";
        
        $__internal_8373424d481f12154176a956a776e7febef7252fc06b96fd8c6cf3285f3d60a8->leave($__internal_8373424d481f12154176a956a776e7febef7252fc06b96fd8c6cf3285f3d60a8_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  186 => 89,  180 => 86,  176 => 84,  170 => 83,  159 => 80,  150 => 21,  143 => 18,  137 => 17,  125 => 14,  116 => 98,  114 => 83,  108 => 80,  49 => 23,  47 => 17,  41 => 14,  26 => 1,);
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
/*         {% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
