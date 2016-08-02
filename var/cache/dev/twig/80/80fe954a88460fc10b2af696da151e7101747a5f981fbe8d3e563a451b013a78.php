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
        $__internal_6e0e8177729d1cb9e6e9127c624f580671bfb4448eac05b04eba9d5b8ba2c9bb = $this->env->getExtension("native_profiler");
        $__internal_6e0e8177729d1cb9e6e9127c624f580671bfb4448eac05b04eba9d5b8ba2c9bb->enter($__internal_6e0e8177729d1cb9e6e9127c624f580671bfb4448eac05b04eba9d5b8ba2c9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_6e0e8177729d1cb9e6e9127c624f580671bfb4448eac05b04eba9d5b8ba2c9bb->leave($__internal_6e0e8177729d1cb9e6e9127c624f580671bfb4448eac05b04eba9d5b8ba2c9bb_prof);

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
