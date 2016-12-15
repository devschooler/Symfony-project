<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_5871fc8bfc1589a818dc3599091ebf02e6641360ce6b5f7dfd55623d22376208 extends Twig_Template
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
        $__internal_502102c8cf8a63a7c60213459ac43bdbd781425a632e99047545b33fc8172b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_502102c8cf8a63a7c60213459ac43bdbd781425a632e99047545b33fc8172b40->enter($__internal_502102c8cf8a63a7c60213459ac43bdbd781425a632e99047545b33fc8172b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_12edf10392380a086944704ac8b3dc8f0dd540bb9589d74d79a9b8dcd5677d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12edf10392380a086944704ac8b3dc8f0dd540bb9589d74d79a9b8dcd5677d13->enter($__internal_12edf10392380a086944704ac8b3dc8f0dd540bb9589d74d79a9b8dcd5677d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_502102c8cf8a63a7c60213459ac43bdbd781425a632e99047545b33fc8172b40->leave($__internal_502102c8cf8a63a7c60213459ac43bdbd781425a632e99047545b33fc8172b40_prof);

        
        $__internal_12edf10392380a086944704ac8b3dc8f0dd540bb9589d74d79a9b8dcd5677d13->leave($__internal_12edf10392380a086944704ac8b3dc8f0dd540bb9589d74d79a9b8dcd5677d13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Applications/MAMP/htdocs/symfony-TD/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
