<?php

/* ::default/baseexterior.html.twig */
class __TwigTemplate_2e2b32915c154248f612847b7be81a9f653413dc7fa9545353d076a8e049317e extends Twig_Template
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
        $__internal_91416a141dcb9794d3478b03a60d5051104f60579f54802c5f764cbf777176bd = $this->env->getExtension("native_profiler");
        $__internal_91416a141dcb9794d3478b03a60d5051104f60579f54802c5f764cbf777176bd->enter($__internal_91416a141dcb9794d3478b03a60d5051104f60579f54802c5f764cbf777176bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::default/baseexterior.html.twig"));

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
            ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        echo " 
        </div>
        
        ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "
    </body>
</html>";
        
        $__internal_91416a141dcb9794d3478b03a60d5051104f60579f54802c5f764cbf777176bd->leave($__internal_91416a141dcb9794d3478b03a60d5051104f60579f54802c5f764cbf777176bd_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd5dd8fc3f906853f0f28bf4cb2c3ac46ad5d3ee13c97eb9e8a30bbb532c83f8 = $this->env->getExtension("native_profiler");
        $__internal_cd5dd8fc3f906853f0f28bf4cb2c3ac46ad5d3ee13c97eb9e8a30bbb532c83f8->enter($__internal_cd5dd8fc3f906853f0f28bf4cb2c3ac46ad5d3ee13c97eb9e8a30bbb532c83f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ServiQ";
        
        $__internal_cd5dd8fc3f906853f0f28bf4cb2c3ac46ad5d3ee13c97eb9e8a30bbb532c83f8->leave($__internal_cd5dd8fc3f906853f0f28bf4cb2c3ac46ad5d3ee13c97eb9e8a30bbb532c83f8_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b7fa8f65eea80e3f58616b345d9abfb3e93e2907bfc64eeeddd2b8aa4280a73 = $this->env->getExtension("native_profiler");
        $__internal_6b7fa8f65eea80e3f58616b345d9abfb3e93e2907bfc64eeeddd2b8aa4280a73->enter($__internal_6b7fa8f65eea80e3f58616b345d9abfb3e93e2907bfc64eeeddd2b8aa4280a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6b7fa8f65eea80e3f58616b345d9abfb3e93e2907bfc64eeeddd2b8aa4280a73->leave($__internal_6b7fa8f65eea80e3f58616b345d9abfb3e93e2907bfc64eeeddd2b8aa4280a73_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_58f60af21eed72f57025e8717824d89a5065d3bb5764a4a94ad558dbbd8a86b1 = $this->env->getExtension("native_profiler");
        $__internal_58f60af21eed72f57025e8717824d89a5065d3bb5764a4a94ad558dbbd8a86b1->enter($__internal_58f60af21eed72f57025e8717824d89a5065d3bb5764a4a94ad558dbbd8a86b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_58f60af21eed72f57025e8717824d89a5065d3bb5764a4a94ad558dbbd8a86b1->leave($__internal_58f60af21eed72f57025e8717824d89a5065d3bb5764a4a94ad558dbbd8a86b1_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4caf219347fd9673c43e80213d73fa1bfb4e521aa11a37845ec7f172f4565e11 = $this->env->getExtension("native_profiler");
        $__internal_4caf219347fd9673c43e80213d73fa1bfb4e521aa11a37845ec7f172f4565e11->enter($__internal_4caf219347fd9673c43e80213d73fa1bfb4e521aa11a37845ec7f172f4565e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "        <!-- Hace posible el funcionamiento de JavaScript -->
        <!-- jQuery -->
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.js"), "html", null, true);
        echo "\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 50
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
        
        $__internal_4caf219347fd9673c43e80213d73fa1bfb4e521aa11a37845ec7f172f4565e11->leave($__internal_4caf219347fd9673c43e80213d73fa1bfb4e521aa11a37845ec7f172f4565e11_prof);

    }

    public function getTemplateName()
    {
        return "::default/baseexterior.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 50,  141 => 47,  137 => 45,  131 => 44,  120 => 41,  111 => 21,  104 => 18,  98 => 17,  86 => 14,  77 => 70,  75 => 44,  69 => 41,  49 => 23,  47 => 17,  41 => 14,  26 => 1,);
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
