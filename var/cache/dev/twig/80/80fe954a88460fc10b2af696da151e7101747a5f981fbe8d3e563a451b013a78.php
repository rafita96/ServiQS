<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_0f4d77435fc4a9ee53502b6a67254ad79ec8fcd6b0e17d20087c5d31e0788682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_578ab7bcfc56b624c21b0a41896d534f5fc87db5aeb8c34b2c682eb7fe5c0a6b = $this->env->getExtension("native_profiler");
        $__internal_578ab7bcfc56b624c21b0a41896d534f5fc87db5aeb8c34b2c682eb7fe5c0a6b->enter($__internal_578ab7bcfc56b624c21b0a41896d534f5fc87db5aeb8c34b2c682eb7fe5c0a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_578ab7bcfc56b624c21b0a41896d534f5fc87db5aeb8c34b2c682eb7fe5c0a6b->leave($__internal_578ab7bcfc56b624c21b0a41896d534f5fc87db5aeb8c34b2c682eb7fe5c0a6b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
