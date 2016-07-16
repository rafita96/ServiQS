<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_94f4090079ee264cd910394a8efc500cc5d0288634d9802b6fb7e47e70d5d6b4 extends Twig_Template
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
        $__internal_0b3ced4b760fab6e4405aaa8d99db0fe6af2f83b3e3338c95bd0266e39a48416 = $this->env->getExtension("native_profiler");
        $__internal_0b3ced4b760fab6e4405aaa8d99db0fe6af2f83b3e3338c95bd0266e39a48416->enter($__internal_0b3ced4b760fab6e4405aaa8d99db0fe6af2f83b3e3338c95bd0266e39a48416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_0b3ced4b760fab6e4405aaa8d99db0fe6af2f83b3e3338c95bd0266e39a48416->leave($__internal_0b3ced4b760fab6e4405aaa8d99db0fe6af2f83b3e3338c95bd0266e39a48416_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
