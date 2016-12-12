<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b02050e693ba99ce0f4fdb153c365388f14b86912aeb936c40fdd06a3559b362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f97e76d1b9958af73bd608afaf7f2a09a83f21f12a919511abd9d636512345c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f97e76d1b9958af73bd608afaf7f2a09a83f21f12a919511abd9d636512345c->enter($__internal_6f97e76d1b9958af73bd608afaf7f2a09a83f21f12a919511abd9d636512345c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d653e88c892fd6561ba1385c7ac47462e23cee3abe92f692e18117506acff402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d653e88c892fd6561ba1385c7ac47462e23cee3abe92f692e18117506acff402->enter($__internal_d653e88c892fd6561ba1385c7ac47462e23cee3abe92f692e18117506acff402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f97e76d1b9958af73bd608afaf7f2a09a83f21f12a919511abd9d636512345c->leave($__internal_6f97e76d1b9958af73bd608afaf7f2a09a83f21f12a919511abd9d636512345c_prof);

        
        $__internal_d653e88c892fd6561ba1385c7ac47462e23cee3abe92f692e18117506acff402->leave($__internal_d653e88c892fd6561ba1385c7ac47462e23cee3abe92f692e18117506acff402_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_10463fcaf006d839708c360e22583eb86aba26d0b96e4913114f1b912f7cd347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10463fcaf006d839708c360e22583eb86aba26d0b96e4913114f1b912f7cd347->enter($__internal_10463fcaf006d839708c360e22583eb86aba26d0b96e4913114f1b912f7cd347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6d23f1e714800e6a8189d6390aa0f62da607566e42d2e5231a9749e55a1ca091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d23f1e714800e6a8189d6390aa0f62da607566e42d2e5231a9749e55a1ca091->enter($__internal_6d23f1e714800e6a8189d6390aa0f62da607566e42d2e5231a9749e55a1ca091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6d23f1e714800e6a8189d6390aa0f62da607566e42d2e5231a9749e55a1ca091->leave($__internal_6d23f1e714800e6a8189d6390aa0f62da607566e42d2e5231a9749e55a1ca091_prof);

        
        $__internal_10463fcaf006d839708c360e22583eb86aba26d0b96e4913114f1b912f7cd347->leave($__internal_10463fcaf006d839708c360e22583eb86aba26d0b96e4913114f1b912f7cd347_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/MovieSymfo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
