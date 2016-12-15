<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_087c32b90bf61e16d550ace6941402278499f53bc69a8c97227dc61b03f3646c extends Twig_Template
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
        $__internal_637b7385b43c3dabe20f87e3757700fa9395582fbbe813742a319dda6bfa5e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637b7385b43c3dabe20f87e3757700fa9395582fbbe813742a319dda6bfa5e96->enter($__internal_637b7385b43c3dabe20f87e3757700fa9395582fbbe813742a319dda6bfa5e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f881a5e6e26a489aec9a25a113e313efb251b00b316df1dd71828bb065acbbdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f881a5e6e26a489aec9a25a113e313efb251b00b316df1dd71828bb065acbbdd->enter($__internal_f881a5e6e26a489aec9a25a113e313efb251b00b316df1dd71828bb065acbbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_637b7385b43c3dabe20f87e3757700fa9395582fbbe813742a319dda6bfa5e96->leave($__internal_637b7385b43c3dabe20f87e3757700fa9395582fbbe813742a319dda6bfa5e96_prof);

        
        $__internal_f881a5e6e26a489aec9a25a113e313efb251b00b316df1dd71828bb065acbbdd->leave($__internal_f881a5e6e26a489aec9a25a113e313efb251b00b316df1dd71828bb065acbbdd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c121d4ff75a5a3c7ad7a1e42cc276900917fe672b7bb64a6f1cdad74f161f2e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c121d4ff75a5a3c7ad7a1e42cc276900917fe672b7bb64a6f1cdad74f161f2e2->enter($__internal_c121d4ff75a5a3c7ad7a1e42cc276900917fe672b7bb64a6f1cdad74f161f2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_10283b03a83b00d81d6afbbf59143f3df5b82e76453bab68a8497a90f040d12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10283b03a83b00d81d6afbbf59143f3df5b82e76453bab68a8497a90f040d12d->enter($__internal_10283b03a83b00d81d6afbbf59143f3df5b82e76453bab68a8497a90f040d12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_10283b03a83b00d81d6afbbf59143f3df5b82e76453bab68a8497a90f040d12d->leave($__internal_10283b03a83b00d81d6afbbf59143f3df5b82e76453bab68a8497a90f040d12d_prof);

        
        $__internal_c121d4ff75a5a3c7ad7a1e42cc276900917fe672b7bb64a6f1cdad74f161f2e2->leave($__internal_c121d4ff75a5a3c7ad7a1e42cc276900917fe672b7bb64a6f1cdad74f161f2e2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ecf5a97ea16184206aac235ab1657a2e2e05385901063f22d876b6c7bc07f7b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf5a97ea16184206aac235ab1657a2e2e05385901063f22d876b6c7bc07f7b7->enter($__internal_ecf5a97ea16184206aac235ab1657a2e2e05385901063f22d876b6c7bc07f7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_928412c58b83b3edb7a086c03db82ed66b9d5b19ae54a350aa2715f5618e0537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928412c58b83b3edb7a086c03db82ed66b9d5b19ae54a350aa2715f5618e0537->enter($__internal_928412c58b83b3edb7a086c03db82ed66b9d5b19ae54a350aa2715f5618e0537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_928412c58b83b3edb7a086c03db82ed66b9d5b19ae54a350aa2715f5618e0537->leave($__internal_928412c58b83b3edb7a086c03db82ed66b9d5b19ae54a350aa2715f5618e0537_prof);

        
        $__internal_ecf5a97ea16184206aac235ab1657a2e2e05385901063f22d876b6c7bc07f7b7->leave($__internal_ecf5a97ea16184206aac235ab1657a2e2e05385901063f22d876b6c7bc07f7b7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2dee95f362475d04a0d559e3cb4874041d6c808a4f4af200a9cf0a1befcf2687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dee95f362475d04a0d559e3cb4874041d6c808a4f4af200a9cf0a1befcf2687->enter($__internal_2dee95f362475d04a0d559e3cb4874041d6c808a4f4af200a9cf0a1befcf2687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_574dac99e2cab3770ca5cbc8611b196d65a9e582f92c66eaa1c6af164653e1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574dac99e2cab3770ca5cbc8611b196d65a9e582f92c66eaa1c6af164653e1b0->enter($__internal_574dac99e2cab3770ca5cbc8611b196d65a9e582f92c66eaa1c6af164653e1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_574dac99e2cab3770ca5cbc8611b196d65a9e582f92c66eaa1c6af164653e1b0->leave($__internal_574dac99e2cab3770ca5cbc8611b196d65a9e582f92c66eaa1c6af164653e1b0_prof);

        
        $__internal_2dee95f362475d04a0d559e3cb4874041d6c808a4f4af200a9cf0a1befcf2687->leave($__internal_2dee95f362475d04a0d559e3cb4874041d6c808a4f4af200a9cf0a1befcf2687_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/symfony-TD/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
