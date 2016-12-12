<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e103b7978802ea4c9e0dd01c78b9fa45fc43ef2dafbf11d246606ba836bea6aa extends Twig_Template
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
        $__internal_0589308fafd0c507228e9ff99de07334fa35c0d06cecb641b7e936fc046d81d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0589308fafd0c507228e9ff99de07334fa35c0d06cecb641b7e936fc046d81d1->enter($__internal_0589308fafd0c507228e9ff99de07334fa35c0d06cecb641b7e936fc046d81d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1b9154776b71f4e669287c885028103a4bf70a93343628375c8d7ad178729c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9154776b71f4e669287c885028103a4bf70a93343628375c8d7ad178729c09->enter($__internal_1b9154776b71f4e669287c885028103a4bf70a93343628375c8d7ad178729c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0589308fafd0c507228e9ff99de07334fa35c0d06cecb641b7e936fc046d81d1->leave($__internal_0589308fafd0c507228e9ff99de07334fa35c0d06cecb641b7e936fc046d81d1_prof);

        
        $__internal_1b9154776b71f4e669287c885028103a4bf70a93343628375c8d7ad178729c09->leave($__internal_1b9154776b71f4e669287c885028103a4bf70a93343628375c8d7ad178729c09_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_046b2ad8c7370e577f1f1c42b42583f48fabe3269f2c3bff825b915c60533b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046b2ad8c7370e577f1f1c42b42583f48fabe3269f2c3bff825b915c60533b63->enter($__internal_046b2ad8c7370e577f1f1c42b42583f48fabe3269f2c3bff825b915c60533b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3c6c2f2459a8baa7b9cab559f44556eec6fb7e17c65c40b963564c6e800d4c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6c2f2459a8baa7b9cab559f44556eec6fb7e17c65c40b963564c6e800d4c6c->enter($__internal_3c6c2f2459a8baa7b9cab559f44556eec6fb7e17c65c40b963564c6e800d4c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3c6c2f2459a8baa7b9cab559f44556eec6fb7e17c65c40b963564c6e800d4c6c->leave($__internal_3c6c2f2459a8baa7b9cab559f44556eec6fb7e17c65c40b963564c6e800d4c6c_prof);

        
        $__internal_046b2ad8c7370e577f1f1c42b42583f48fabe3269f2c3bff825b915c60533b63->leave($__internal_046b2ad8c7370e577f1f1c42b42583f48fabe3269f2c3bff825b915c60533b63_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e2e4ce70a0ba7e2fa117eddd54b70fb219e4daad8429d8184e6f98e85114a323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e4ce70a0ba7e2fa117eddd54b70fb219e4daad8429d8184e6f98e85114a323->enter($__internal_e2e4ce70a0ba7e2fa117eddd54b70fb219e4daad8429d8184e6f98e85114a323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_621e6f605839dafe3256c0ae2377746069fc878a53ba98c2104f30cd0a644ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621e6f605839dafe3256c0ae2377746069fc878a53ba98c2104f30cd0a644ad9->enter($__internal_621e6f605839dafe3256c0ae2377746069fc878a53ba98c2104f30cd0a644ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_621e6f605839dafe3256c0ae2377746069fc878a53ba98c2104f30cd0a644ad9->leave($__internal_621e6f605839dafe3256c0ae2377746069fc878a53ba98c2104f30cd0a644ad9_prof);

        
        $__internal_e2e4ce70a0ba7e2fa117eddd54b70fb219e4daad8429d8184e6f98e85114a323->leave($__internal_e2e4ce70a0ba7e2fa117eddd54b70fb219e4daad8429d8184e6f98e85114a323_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_183e541198411df60acc7f9048609f96c61fb5ca1b0eebb353535f89073af3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183e541198411df60acc7f9048609f96c61fb5ca1b0eebb353535f89073af3dc->enter($__internal_183e541198411df60acc7f9048609f96c61fb5ca1b0eebb353535f89073af3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cd0dc7c47b3d5eaa9e0e948539384535481688e3ce8be14b259c0b475b7b6ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0dc7c47b3d5eaa9e0e948539384535481688e3ce8be14b259c0b475b7b6ff2->enter($__internal_cd0dc7c47b3d5eaa9e0e948539384535481688e3ce8be14b259c0b475b7b6ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd0dc7c47b3d5eaa9e0e948539384535481688e3ce8be14b259c0b475b7b6ff2->leave($__internal_cd0dc7c47b3d5eaa9e0e948539384535481688e3ce8be14b259c0b475b7b6ff2_prof);

        
        $__internal_183e541198411df60acc7f9048609f96c61fb5ca1b0eebb353535f89073af3dc->leave($__internal_183e541198411df60acc7f9048609f96c61fb5ca1b0eebb353535f89073af3dc_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/MovieSymfo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
