<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f98a7986b01265e8497be054e0fe49107c9b860d05bb1ebffeafb6426f4f8bf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9dee90d5af1680839a7a8d1e3aaaeabd027a40e2b2729f3bb5fdf0343db9937 = $this->env->getExtension("native_profiler");
        $__internal_c9dee90d5af1680839a7a8d1e3aaaeabd027a40e2b2729f3bb5fdf0343db9937->enter($__internal_c9dee90d5af1680839a7a8d1e3aaaeabd027a40e2b2729f3bb5fdf0343db9937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c9dee90d5af1680839a7a8d1e3aaaeabd027a40e2b2729f3bb5fdf0343db9937->leave($__internal_c9dee90d5af1680839a7a8d1e3aaaeabd027a40e2b2729f3bb5fdf0343db9937_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c9ac9193fda52caa66678a8a25720cb6492019aeaa4b33ddd6e5ec9a16dd666 = $this->env->getExtension("native_profiler");
        $__internal_1c9ac9193fda52caa66678a8a25720cb6492019aeaa4b33ddd6e5ec9a16dd666->enter($__internal_1c9ac9193fda52caa66678a8a25720cb6492019aeaa4b33ddd6e5ec9a16dd666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1c9ac9193fda52caa66678a8a25720cb6492019aeaa4b33ddd6e5ec9a16dd666->leave($__internal_1c9ac9193fda52caa66678a8a25720cb6492019aeaa4b33ddd6e5ec9a16dd666_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
