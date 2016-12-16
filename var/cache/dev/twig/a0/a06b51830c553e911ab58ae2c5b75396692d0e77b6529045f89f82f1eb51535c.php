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
        $__internal_60b7ea6ccb4501bd8adf97c5d7372b81354c10bf94a1ae3dc4e3c445d36d8ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b7ea6ccb4501bd8adf97c5d7372b81354c10bf94a1ae3dc4e3c445d36d8ae4->enter($__internal_60b7ea6ccb4501bd8adf97c5d7372b81354c10bf94a1ae3dc4e3c445d36d8ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Film:show.html.twig"));

        $__internal_724b1c069d4b01406a80cd153bbb2d65baf85f9b8093e5cd4057b0b84b66779c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724b1c069d4b01406a80cd153bbb2d65baf85f9b8093e5cd4057b0b84b66779c->enter($__internal_724b1c069d4b01406a80cd153bbb2d65baf85f9b8093e5cd4057b0b84b66779c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Film:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60b7ea6ccb4501bd8adf97c5d7372b81354c10bf94a1ae3dc4e3c445d36d8ae4->leave($__internal_60b7ea6ccb4501bd8adf97c5d7372b81354c10bf94a1ae3dc4e3c445d36d8ae4_prof);

        
        $__internal_724b1c069d4b01406a80cd153bbb2d65baf85f9b8093e5cd4057b0b84b66779c->leave($__internal_724b1c069d4b01406a80cd153bbb2d65baf85f9b8093e5cd4057b0b84b66779c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02abe84de9b45c02044fb000c69d369c8cfba521d779b32d809ea3e5c43012b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02abe84de9b45c02044fb000c69d369c8cfba521d779b32d809ea3e5c43012b4->enter($__internal_02abe84de9b45c02044fb000c69d369c8cfba521d779b32d809ea3e5c43012b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_582ae238a9e0f01ac7d6a4f9c0014739f177153fae598ee519c5d4175e86dec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582ae238a9e0f01ac7d6a4f9c0014739f177153fae598ee519c5d4175e86dec5->enter($__internal_582ae238a9e0f01ac7d6a4f9c0014739f177153fae598ee519c5d4175e86dec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_582ae238a9e0f01ac7d6a4f9c0014739f177153fae598ee519c5d4175e86dec5->leave($__internal_582ae238a9e0f01ac7d6a4f9c0014739f177153fae598ee519c5d4175e86dec5_prof);

        
        $__internal_02abe84de9b45c02044fb000c69d369c8cfba521d779b32d809ea3e5c43012b4->leave($__internal_02abe84de9b45c02044fb000c69d369c8cfba521d779b32d809ea3e5c43012b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4fc38488751c463f019e597334417f0db3daec430f941cd126283c6d250ba68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fc38488751c463f019e597334417f0db3daec430f941cd126283c6d250ba68->enter($__internal_a4fc38488751c463f019e597334417f0db3daec430f941cd126283c6d250ba68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dbf16970b9b0a361d03a8c3e405541912c7c216dce42e65a31a0baa8e7509217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf16970b9b0a361d03a8c3e405541912c7c216dce42e65a31a0baa8e7509217->enter($__internal_dbf16970b9b0a361d03a8c3e405541912c7c216dce42e65a31a0baa8e7509217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dbf16970b9b0a361d03a8c3e405541912c7c216dce42e65a31a0baa8e7509217->leave($__internal_dbf16970b9b0a361d03a8c3e405541912c7c216dce42e65a31a0baa8e7509217_prof);

        
        $__internal_a4fc38488751c463f019e597334417f0db3daec430f941cd126283c6d250ba68->leave($__internal_a4fc38488751c463f019e597334417f0db3daec430f941cd126283c6d250ba68_prof);

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
{% endblock %}", "TDCinemaBundle:Film:show.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/CinemaBundle/Resources/views/Film/show.html.twig");
    }
}
