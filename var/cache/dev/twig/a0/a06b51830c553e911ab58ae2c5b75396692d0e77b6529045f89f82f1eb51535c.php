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
        $__internal_cb53acbad91d59c8ed4950193dedfdc14a751915b7326bf053d5e9d90682348a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb53acbad91d59c8ed4950193dedfdc14a751915b7326bf053d5e9d90682348a->enter($__internal_cb53acbad91d59c8ed4950193dedfdc14a751915b7326bf053d5e9d90682348a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Film:show.html.twig"));

        $__internal_fcf7e024a8c50b3acfad7e99d784c7a06b62ddb86eaf20fca03198b5fdcd03c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf7e024a8c50b3acfad7e99d784c7a06b62ddb86eaf20fca03198b5fdcd03c3->enter($__internal_fcf7e024a8c50b3acfad7e99d784c7a06b62ddb86eaf20fca03198b5fdcd03c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Film:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb53acbad91d59c8ed4950193dedfdc14a751915b7326bf053d5e9d90682348a->leave($__internal_cb53acbad91d59c8ed4950193dedfdc14a751915b7326bf053d5e9d90682348a_prof);

        
        $__internal_fcf7e024a8c50b3acfad7e99d784c7a06b62ddb86eaf20fca03198b5fdcd03c3->leave($__internal_fcf7e024a8c50b3acfad7e99d784c7a06b62ddb86eaf20fca03198b5fdcd03c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67f0ccd27f3e7a0e4d59054b6f3e3f9c42afaceef97422ee5c99d278c5787b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f0ccd27f3e7a0e4d59054b6f3e3f9c42afaceef97422ee5c99d278c5787b9a->enter($__internal_67f0ccd27f3e7a0e4d59054b6f3e3f9c42afaceef97422ee5c99d278c5787b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f61d7560894e2d177e84688b5e5baec4c1cfc6a1fd56f1be629424775f313849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61d7560894e2d177e84688b5e5baec4c1cfc6a1fd56f1be629424775f313849->enter($__internal_f61d7560894e2d177e84688b5e5baec4c1cfc6a1fd56f1be629424775f313849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")), "titre", array()), "html", null, true);
        
        $__internal_f61d7560894e2d177e84688b5e5baec4c1cfc6a1fd56f1be629424775f313849->leave($__internal_f61d7560894e2d177e84688b5e5baec4c1cfc6a1fd56f1be629424775f313849_prof);

        
        $__internal_67f0ccd27f3e7a0e4d59054b6f3e3f9c42afaceef97422ee5c99d278c5787b9a->leave($__internal_67f0ccd27f3e7a0e4d59054b6f3e3f9c42afaceef97422ee5c99d278c5787b9a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2206876365d91cf28f0bd48236a4d1154bd232c5f772865e98467f5c0d48a9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2206876365d91cf28f0bd48236a4d1154bd232c5f772865e98467f5c0d48a9ce->enter($__internal_2206876365d91cf28f0bd48236a4d1154bd232c5f772865e98467f5c0d48a9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c3f1e1998013c485b08ce1938308b39c73371061437a3cc28f3b669ddc51acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3f1e1998013c485b08ce1938308b39c73371061437a3cc28f3b669ddc51acc->enter($__internal_1c3f1e1998013c485b08ce1938308b39c73371061437a3cc28f3b669ddc51acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1c3f1e1998013c485b08ce1938308b39c73371061437a3cc28f3b669ddc51acc->leave($__internal_1c3f1e1998013c485b08ce1938308b39c73371061437a3cc28f3b669ddc51acc_prof);

        
        $__internal_2206876365d91cf28f0bd48236a4d1154bd232c5f772865e98467f5c0d48a9ce->leave($__internal_2206876365d91cf28f0bd48236a4d1154bd232c5f772865e98467f5c0d48a9ce_prof);

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

{% block title %}{{ livre.titre }}{% endblock %}

{% block body %}
    <h1>{{ film.titre }}</h1>

    <br />
    <span> Réalisé par {{film.realisateur  }}</span><br />
    <br />
    <span>Sortie le {{ film.dateDeSortie|date('d/m/Y') }}</span>

    <p>{{ film.synopsis}}</p>




    <p><a href=\"{{ path('films_all') }}\">Retour</a></p>
{% endblock %}", "TDCinemaBundle:Film:show.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/CinemaBundle/Resources/views/Film/show.html.twig");
    }
}
