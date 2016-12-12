<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce03188302c12aa6389201a6957af542f790be3aa3b7569a10d17efb3f73d39e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_656ced58bb0de92d0ce8519ec1d8366deea3c9282af765696b60659b8d254b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656ced58bb0de92d0ce8519ec1d8366deea3c9282af765696b60659b8d254b73->enter($__internal_656ced58bb0de92d0ce8519ec1d8366deea3c9282af765696b60659b8d254b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2d061f74c03222824ab08122cd4340fed8be0f9e33c606679ce6a8eadfe7faef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d061f74c03222824ab08122cd4340fed8be0f9e33c606679ce6a8eadfe7faef->enter($__internal_2d061f74c03222824ab08122cd4340fed8be0f9e33c606679ce6a8eadfe7faef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_656ced58bb0de92d0ce8519ec1d8366deea3c9282af765696b60659b8d254b73->leave($__internal_656ced58bb0de92d0ce8519ec1d8366deea3c9282af765696b60659b8d254b73_prof);

        
        $__internal_2d061f74c03222824ab08122cd4340fed8be0f9e33c606679ce6a8eadfe7faef->leave($__internal_2d061f74c03222824ab08122cd4340fed8be0f9e33c606679ce6a8eadfe7faef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c57b4f6c50392dc79226f18f3ac10b3d6029ba801ae6654f7e1d30ec967517db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c57b4f6c50392dc79226f18f3ac10b3d6029ba801ae6654f7e1d30ec967517db->enter($__internal_c57b4f6c50392dc79226f18f3ac10b3d6029ba801ae6654f7e1d30ec967517db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_47d2d6261a33a833a151ff9de9e03e972037234c94bb2a117bd44d4aeea4bc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d2d6261a33a833a151ff9de9e03e972037234c94bb2a117bd44d4aeea4bc6a->enter($__internal_47d2d6261a33a833a151ff9de9e03e972037234c94bb2a117bd44d4aeea4bc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_47d2d6261a33a833a151ff9de9e03e972037234c94bb2a117bd44d4aeea4bc6a->leave($__internal_47d2d6261a33a833a151ff9de9e03e972037234c94bb2a117bd44d4aeea4bc6a_prof);

        
        $__internal_c57b4f6c50392dc79226f18f3ac10b3d6029ba801ae6654f7e1d30ec967517db->leave($__internal_c57b4f6c50392dc79226f18f3ac10b3d6029ba801ae6654f7e1d30ec967517db_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d77a038acd394cb43ed98504650b9d7410a2d92ef8106b76e653b1d1b25b2f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77a038acd394cb43ed98504650b9d7410a2d92ef8106b76e653b1d1b25b2f2b->enter($__internal_d77a038acd394cb43ed98504650b9d7410a2d92ef8106b76e653b1d1b25b2f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c6fdbe9816e201b3bbf4bba32e921100541eaacc1147fc27d5cdcc6e669ff6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fdbe9816e201b3bbf4bba32e921100541eaacc1147fc27d5cdcc6e669ff6b1->enter($__internal_c6fdbe9816e201b3bbf4bba32e921100541eaacc1147fc27d5cdcc6e669ff6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c6fdbe9816e201b3bbf4bba32e921100541eaacc1147fc27d5cdcc6e669ff6b1->leave($__internal_c6fdbe9816e201b3bbf4bba32e921100541eaacc1147fc27d5cdcc6e669ff6b1_prof);

        
        $__internal_d77a038acd394cb43ed98504650b9d7410a2d92ef8106b76e653b1d1b25b2f2b->leave($__internal_d77a038acd394cb43ed98504650b9d7410a2d92ef8106b76e653b1d1b25b2f2b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecb0dff6388f5c5bc471f12c6c1fb3da2f39a66d1d1d9e5a99a4f0684bc9c250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb0dff6388f5c5bc471f12c6c1fb3da2f39a66d1d1d9e5a99a4f0684bc9c250->enter($__internal_ecb0dff6388f5c5bc471f12c6c1fb3da2f39a66d1d1d9e5a99a4f0684bc9c250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_817240282d87ac763fafdafe9755e0203a8d2209d5296a58489c7c9efbb02e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817240282d87ac763fafdafe9755e0203a8d2209d5296a58489c7c9efbb02e10->enter($__internal_817240282d87ac763fafdafe9755e0203a8d2209d5296a58489c7c9efbb02e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_817240282d87ac763fafdafe9755e0203a8d2209d5296a58489c7c9efbb02e10->leave($__internal_817240282d87ac763fafdafe9755e0203a8d2209d5296a58489c7c9efbb02e10_prof);

        
        $__internal_ecb0dff6388f5c5bc471f12c6c1fb3da2f39a66d1d1d9e5a99a4f0684bc9c250->leave($__internal_ecb0dff6388f5c5bc471f12c6c1fb3da2f39a66d1d1d9e5a99a4f0684bc9c250_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/MovieSymfo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
