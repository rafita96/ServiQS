<?php

/* default/baseexterior.html.twig */
class __TwigTemplate_041fede079ce1c34b6bd254726f0be943cb414cbcd67fb2bb1a9a4a8e2148cbb extends Twig_Template
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
        $__internal_2099699d0a0f81231f29753b96b8e84db730ffcf43ae6e9d567645203987094e = $this->env->getExtension("native_profiler");
        $__internal_2099699d0a0f81231f29753b96b8e84db730ffcf43ae6e9d567645203987094e->enter($__internal_2099699d0a0f81231f29753b96b8e84db730ffcf43ae6e9d567645203987094e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/baseexterior.html.twig"));

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
        
        $__internal_2099699d0a0f81231f29753b96b8e84db730ffcf43ae6e9d567645203987094e->leave($__internal_2099699d0a0f81231f29753b96b8e84db730ffcf43ae6e9d567645203987094e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ca9edf0f392dbfdd20e24a8db01e61642122a708c2df219c52b07f97098e472 = $this->env->getExtension("native_profiler");
        $__internal_4ca9edf0f392dbfdd20e24a8db01e61642122a708c2df219c52b07f97098e472->enter($__internal_4ca9edf0f392dbfdd20e24a8db01e61642122a708c2df219c52b07f97098e472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ServiQ";
        
        $__internal_4ca9edf0f392dbfdd20e24a8db01e61642122a708c2df219c52b07f97098e472->leave($__internal_4ca9edf0f392dbfdd20e24a8db01e61642122a708c2df219c52b07f97098e472_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75d70235f888589b3c1e5a925f1249bdea2d9a8f1e5c74ce4ac6b25ffd1fb5dd = $this->env->getExtension("native_profiler");
        $__internal_75d70235f888589b3c1e5a925f1249bdea2d9a8f1e5c74ce4ac6b25ffd1fb5dd->enter($__internal_75d70235f888589b3c1e5a925f1249bdea2d9a8f1e5c74ce4ac6b25ffd1fb5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_75d70235f888589b3c1e5a925f1249bdea2d9a8f1e5c74ce4ac6b25ffd1fb5dd->leave($__internal_75d70235f888589b3c1e5a925f1249bdea2d9a8f1e5c74ce4ac6b25ffd1fb5dd_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_46250eae795370b70dc8a55034a734a6969e8dfe716b8c21f4d0652094df7e18 = $this->env->getExtension("native_profiler");
        $__internal_46250eae795370b70dc8a55034a734a6969e8dfe716b8c21f4d0652094df7e18->enter($__internal_46250eae795370b70dc8a55034a734a6969e8dfe716b8c21f4d0652094df7e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46250eae795370b70dc8a55034a734a6969e8dfe716b8c21f4d0652094df7e18->leave($__internal_46250eae795370b70dc8a55034a734a6969e8dfe716b8c21f4d0652094df7e18_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2685832c579123f79566588225a500c91e59392b505b4be37fc3579e1bdae49c = $this->env->getExtension("native_profiler");
        $__internal_2685832c579123f79566588225a500c91e59392b505b4be37fc3579e1bdae49c->enter($__internal_2685832c579123f79566588225a500c91e59392b505b4be37fc3579e1bdae49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2685832c579123f79566588225a500c91e59392b505b4be37fc3579e1bdae49c->leave($__internal_2685832c579123f79566588225a500c91e59392b505b4be37fc3579e1bdae49c_prof);

    }

    public function getTemplateName()
    {
        return "default/baseexterior.html.twig";
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
