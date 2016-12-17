<?php

/* TDCinemaBundle:Film:show.html.twig */
class __TwigTemplate_7509ba17ccee92997ad9c9e812862bf3c66647143936449366390285bf24f8d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TDCinemaBundle::layout.html.twig", "TDCinemaBundle:Film:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TDCinemaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb663c325db4d670e16ff0d65025d1e36c789eb62e649b573e1591fdf8b257dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb663c325db4d670e16ff0d65025d1e36c789eb62e649b573e1591fdf8b257dc->enter($__internal_cb663c325db4d670e16ff0d65025d1e36c789eb62e649b573e1591fdf8b257dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Film:show.html.twig"));

        $__internal_fe119010d86b01ce906fd1184816d2d0d507693b6be345cf89a9c92eb7148248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe119010d86b01ce906fd1184816d2d0d507693b6be345cf89a9c92eb7148248->enter($__internal_fe119010d86b01ce906fd1184816d2d0d507693b6be345cf89a9c92eb7148248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Film:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb663c325db4d670e16ff0d65025d1e36c789eb62e649b573e1591fdf8b257dc->leave($__internal_cb663c325db4d670e16ff0d65025d1e36c789eb62e649b573e1591fdf8b257dc_prof);

        
        $__internal_fe119010d86b01ce906fd1184816d2d0d507693b6be345cf89a9c92eb7148248->leave($__internal_fe119010d86b01ce906fd1184816d2d0d507693b6be345cf89a9c92eb7148248_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4de611b4fb8073464d6946a0206084a89f6e56ccde951c961dc16f8e4cb3971c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de611b4fb8073464d6946a0206084a89f6e56ccde951c961dc16f8e4cb3971c->enter($__internal_4de611b4fb8073464d6946a0206084a89f6e56ccde951c961dc16f8e4cb3971c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_133d384e5b82b0d03fed659f863f5bc58a73c94a2d20de5b7fcc738373e44cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133d384e5b82b0d03fed659f863f5bc58a73c94a2d20de5b7fcc738373e44cb9->enter($__internal_133d384e5b82b0d03fed659f863f5bc58a73c94a2d20de5b7fcc738373e44cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_133d384e5b82b0d03fed659f863f5bc58a73c94a2d20de5b7fcc738373e44cb9->leave($__internal_133d384e5b82b0d03fed659f863f5bc58a73c94a2d20de5b7fcc738373e44cb9_prof);

        
        $__internal_4de611b4fb8073464d6946a0206084a89f6e56ccde951c961dc16f8e4cb3971c->leave($__internal_4de611b4fb8073464d6946a0206084a89f6e56ccde951c961dc16f8e4cb3971c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_230ba311dba84478fb8486a541fde3ca51b8195aded5951af7619b6cb0b1c4a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230ba311dba84478fb8486a541fde3ca51b8195aded5951af7619b6cb0b1c4a2->enter($__internal_230ba311dba84478fb8486a541fde3ca51b8195aded5951af7619b6cb0b1c4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7a93a24c90408f571c3e337bc30db905d6ab535d9db708d4416e9f22adb2881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a93a24c90408f571c3e337bc30db905d6ab535d9db708d4416e9f22adb2881->enter($__internal_d7a93a24c90408f571c3e337bc30db905d6ab535d9db708d4416e9f22adb2881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "titre", array()), "html", null, true);
        echo "</h1>

    <br />
    <span> Réalisé par ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "realisateur", array()), "html", null, true);
        echo "</span><br />
    <br />
    <span>Sortie le ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "dateDeSortie", array()), "d/m/Y"), "html", null, true);
        echo "</span>

    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "synopsis", array()), "html", null, true);
        echo "</p>




    <p><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("films_all");
        echo "\">Retour</a></p>
";
        
        $__internal_d7a93a24c90408f571c3e337bc30db905d6ab535d9db708d4416e9f22adb2881->leave($__internal_d7a93a24c90408f571c3e337bc30db905d6ab535d9db708d4416e9f22adb2881_prof);

        
        $__internal_230ba311dba84478fb8486a541fde3ca51b8195aded5951af7619b6cb0b1c4a2->leave($__internal_230ba311dba84478fb8486a541fde3ca51b8195aded5951af7619b6cb0b1c4a2_prof);

    }

    public function getTemplateName()
    {
        return "TDCinemaBundle:Film:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 18,  85 => 13,  80 => 11,  75 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TDCinemaBundle::layout.html.twig' %}

{% block title %} {% endblock %}

{% block body %}
    <h1>{{ film.titre }}</h1>

    <br />
    <span> Réalisé par {{film.realisateur  }}</span><br />
    <br />
    <span>Sortie le {{ film.dateDeSortie|date('d/m/Y') }}</span>

    <p>{{ film.synopsis}}</p>




    <p><a href=\"{{ path('films_all') }}\">Retour</a></p>
{% endblock %}

", "TDCinemaBundle:Film:show.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/CinemaBundle/Resources/views/Film/show.html.twig");
    }
}
