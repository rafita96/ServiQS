<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_adc001601a0c943ffa48983422bd61095457257d5fa60239546e0fa051a51fc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bb3ea47143dca7e493dad20e82634a92f2d56c5546beb013638b2269adc1c89 = $this->env->getExtension("native_profiler");
        $__internal_6bb3ea47143dca7e493dad20e82634a92f2d56c5546beb013638b2269adc1c89->enter($__internal_6bb3ea47143dca7e493dad20e82634a92f2d56c5546beb013638b2269adc1c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        
    ";
        // line 47
        echo "        <div class=\"container\">
            <div class=\"alert col-md-offset-3 col-md-6\">
            ";
        // line 49
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 50
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 51
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 52
                    echo "                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 53
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            ";
        }
        // line 58
        echo "            </div>
        </div>

        <div class=\"container\">
            ";
        // line 62
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 64
        echo "        </div>
    </body>
</html>
";
        
        $__internal_6bb3ea47143dca7e493dad20e82634a92f2d56c5546beb013638b2269adc1c89->leave($__internal_6bb3ea47143dca7e493dad20e82634a92f2d56c5546beb013638b2269adc1c89_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_406ca3eb297d6de3e9e37c6e376a11d6137b6f246c1f996017dacd6b3d59efb2 = $this->env->getExtension("native_profiler");
        $__internal_406ca3eb297d6de3e9e37c6e376a11d6137b6f246c1f996017dacd6b3d59efb2->enter($__internal_406ca3eb297d6de3e9e37c6e376a11d6137b6f246c1f996017dacd6b3d59efb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ServiQ";
        
        $__internal_406ca3eb297d6de3e9e37c6e376a11d6137b6f246c1f996017dacd6b3d59efb2->leave($__internal_406ca3eb297d6de3e9e37c6e376a11d6137b6f246c1f996017dacd6b3d59efb2_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6954cd4eb016584fad127d59713fd17c5cbb2b8614fc593e6301fabf2bb5ee04 = $this->env->getExtension("native_profiler");
        $__internal_6954cd4eb016584fad127d59713fd17c5cbb2b8614fc593e6301fabf2bb5ee04->enter($__internal_6954cd4eb016584fad127d59713fd17c5cbb2b8614fc593e6301fabf2bb5ee04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6954cd4eb016584fad127d59713fd17c5cbb2b8614fc593e6301fabf2bb5ee04->leave($__internal_6954cd4eb016584fad127d59713fd17c5cbb2b8614fc593e6301fabf2bb5ee04_prof);

    }

    // line 62
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e61ece7629600997843eb611676c2f4a0b7cd9cd65d19ead48a24108dabfc0b = $this->env->getExtension("native_profiler");
        $__internal_5e61ece7629600997843eb611676c2f4a0b7cd9cd65d19ead48a24108dabfc0b->enter($__internal_5e61ece7629600997843eb611676c2f4a0b7cd9cd65d19ead48a24108dabfc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 63
        echo "            ";
        
        $__internal_5e61ece7629600997843eb611676c2f4a0b7cd9cd65d19ead48a24108dabfc0b->leave($__internal_5e61ece7629600997843eb611676c2f4a0b7cd9cd65d19ead48a24108dabfc0b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  155 => 62,  146 => 21,  139 => 18,  133 => 17,  121 => 14,  111 => 64,  109 => 62,  103 => 58,  100 => 57,  94 => 56,  85 => 53,  80 => 52,  75 => 51,  70 => 50,  68 => 49,  64 => 47,  48 => 23,  46 => 17,  40 => 14,  25 => 1,);
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
/*     <body>*/
/*         <!-- Latest compiled and minified JavaScript -->*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         */
/*         <div class="brand">ServiQ</div>*/
/*         <div class="address-bar">UABC SAUZAL</div>*/
/*         */
/*     {#    <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 {# <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a> */
/*             {% endif %}*/
/*         </div>#}*/
/*         <div class="container">*/
/*             <div class="alert col-md-offset-3 col-md-6">*/
/*             {% if app.request.hasPreviousSession %}*/
/*                 {% for type, messages in app.session.flashbag.all() %}*/
/*                     {% for message in messages %}*/
/*                         <div class="flash-{{ type }}">*/
/*                             {{ message }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="container">*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
