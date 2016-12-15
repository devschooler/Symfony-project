<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2ca6bba578799029b1b04fde8c5157dcbb4f048843f10e6438d5c6cbea578146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fd71f4bd8e99fc23e6cedfac409a8b84654916b77ca781c414772c95036e697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd71f4bd8e99fc23e6cedfac409a8b84654916b77ca781c414772c95036e697->enter($__internal_4fd71f4bd8e99fc23e6cedfac409a8b84654916b77ca781c414772c95036e697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ae6703946497fb12637ae6608cadc55e2037777f37bea0b8c284a18af0c6b858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6703946497fb12637ae6608cadc55e2037777f37bea0b8c284a18af0c6b858->enter($__internal_ae6703946497fb12637ae6608cadc55e2037777f37bea0b8c284a18af0c6b858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fd71f4bd8e99fc23e6cedfac409a8b84654916b77ca781c414772c95036e697->leave($__internal_4fd71f4bd8e99fc23e6cedfac409a8b84654916b77ca781c414772c95036e697_prof);

        
        $__internal_ae6703946497fb12637ae6608cadc55e2037777f37bea0b8c284a18af0c6b858->leave($__internal_ae6703946497fb12637ae6608cadc55e2037777f37bea0b8c284a18af0c6b858_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_644154a86f7a300ad5f7cc7a2bd23d2ebe3755802a53ff81f26acbadacca86ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644154a86f7a300ad5f7cc7a2bd23d2ebe3755802a53ff81f26acbadacca86ec->enter($__internal_644154a86f7a300ad5f7cc7a2bd23d2ebe3755802a53ff81f26acbadacca86ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d687d345dc25514b25e205f69a0a35f95a0a82a096c7e9200f3fbee84ebfd2be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d687d345dc25514b25e205f69a0a35f95a0a82a096c7e9200f3fbee84ebfd2be->enter($__internal_d687d345dc25514b25e205f69a0a35f95a0a82a096c7e9200f3fbee84ebfd2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d687d345dc25514b25e205f69a0a35f95a0a82a096c7e9200f3fbee84ebfd2be->leave($__internal_d687d345dc25514b25e205f69a0a35f95a0a82a096c7e9200f3fbee84ebfd2be_prof);

        
        $__internal_644154a86f7a300ad5f7cc7a2bd23d2ebe3755802a53ff81f26acbadacca86ec->leave($__internal_644154a86f7a300ad5f7cc7a2bd23d2ebe3755802a53ff81f26acbadacca86ec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6ffa85afa4e60da76915167c5a46929bbb71f1454f45bc594f7c4e7a53e2c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ffa85afa4e60da76915167c5a46929bbb71f1454f45bc594f7c4e7a53e2c09->enter($__internal_b6ffa85afa4e60da76915167c5a46929bbb71f1454f45bc594f7c4e7a53e2c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_abed8ebc31a117b78fc5ded6dff6b7a00272aef4575a4adffb86611ef5c25c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abed8ebc31a117b78fc5ded6dff6b7a00272aef4575a4adffb86611ef5c25c3c->enter($__internal_abed8ebc31a117b78fc5ded6dff6b7a00272aef4575a4adffb86611ef5c25c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_abed8ebc31a117b78fc5ded6dff6b7a00272aef4575a4adffb86611ef5c25c3c->leave($__internal_abed8ebc31a117b78fc5ded6dff6b7a00272aef4575a4adffb86611ef5c25c3c_prof);

        
        $__internal_b6ffa85afa4e60da76915167c5a46929bbb71f1454f45bc594f7c4e7a53e2c09->leave($__internal_b6ffa85afa4e60da76915167c5a46929bbb71f1454f45bc594f7c4e7a53e2c09_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23dad44402aed2bd3806c79af00f28916d6ee338b12b10c890f7fac7faed2ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23dad44402aed2bd3806c79af00f28916d6ee338b12b10c890f7fac7faed2ce4->enter($__internal_23dad44402aed2bd3806c79af00f28916d6ee338b12b10c890f7fac7faed2ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f9a6503d2a3f25a8ad90b6ce01c5b4fd2090029cc523b46c042f727f520d9e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a6503d2a3f25a8ad90b6ce01c5b4fd2090029cc523b46c042f727f520d9e43->enter($__internal_f9a6503d2a3f25a8ad90b6ce01c5b4fd2090029cc523b46c042f727f520d9e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f9a6503d2a3f25a8ad90b6ce01c5b4fd2090029cc523b46c042f727f520d9e43->leave($__internal_f9a6503d2a3f25a8ad90b6ce01c5b4fd2090029cc523b46c042f727f520d9e43_prof);

        
        $__internal_23dad44402aed2bd3806c79af00f28916d6ee338b12b10c890f7fac7faed2ce4->leave($__internal_23dad44402aed2bd3806c79af00f28916d6ee338b12b10c890f7fac7faed2ce4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/symfony-TD/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
