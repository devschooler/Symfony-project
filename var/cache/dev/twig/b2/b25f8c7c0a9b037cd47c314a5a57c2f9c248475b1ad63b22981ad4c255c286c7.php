<?php

/* TDCinemaBundle:Film:list.html.twig */
class __TwigTemplate_78fbc2ca2579ef256618ddd096743f2457da422c9aa88eb5e2fbef015ddb65da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TDCinemaBundle::layout.html.twig", "TDCinemaBundle:Film:list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TDCinemaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7972ede5423d67eb2ad267bae32b44e5cd48ee40c8bfed9c6caece1aa7a6aa4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7972ede5423d67eb2ad267bae32b44e5cd48ee40c8bfed9c6caece1aa7a6aa4f->enter($__internal_7972ede5423d67eb2ad267bae32b44e5cd48ee40c8bfed9c6caece1aa7a6aa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Film:list.html.twig"));

        $__internal_a68429b6cbdbb143ff958dc228dcaf7220f9c66750efc838b56111305b26aa85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68429b6cbdbb143ff958dc228dcaf7220f9c66750efc838b56111305b26aa85->enter($__internal_a68429b6cbdbb143ff958dc228dcaf7220f9c66750efc838b56111305b26aa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Film:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7972ede5423d67eb2ad267bae32b44e5cd48ee40c8bfed9c6caece1aa7a6aa4f->leave($__internal_7972ede5423d67eb2ad267bae32b44e5cd48ee40c8bfed9c6caece1aa7a6aa4f_prof);

        
        $__internal_a68429b6cbdbb143ff958dc228dcaf7220f9c66750efc838b56111305b26aa85->leave($__internal_a68429b6cbdbb143ff958dc228dcaf7220f9c66750efc838b56111305b26aa85_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c63454e1db5a8d258e9c3e9771828031a5d9a508d9c89b31193fbbd3137cee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c63454e1db5a8d258e9c3e9771828031a5d9a508d9c89b31193fbbd3137cee6->enter($__internal_9c63454e1db5a8d258e9c3e9771828031a5d9a508d9c89b31193fbbd3137cee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ca068093b618867de5d87c3f126d379d792846603ea791cea95f0a025ea661a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca068093b618867de5d87c3f126d379d792846603ea791cea95f0a025ea661a->enter($__internal_4ca068093b618867de5d87c3f126d379d792846603ea791cea95f0a025ea661a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">

    <div class=\"row\">

        <div class=\"col-md-3\">
            <p class=\"lead\">Cinéma</p>
            <div class=\"list-group\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("films_all");
        echo "\" class=\"list-group-item active\">Films</a>
                <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personne_all");
        echo "\" class=\"list-group-item\">Réalisateurs</a>
            </div>
        </div>


        <div class=\"col-md-9\">

            <h2>Liste des films</h2>

            <br />

            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["films"]);
        foreach ($context['_seq'] as $context["_key"] => $context["films"]) {
            // line 26
            echo "

            <div class=\"thumbnail\">
                <div class=\"caption-full\">
                    <h4 class=\"pull-right\">Science-Fiction</h4>
                    <h4><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("film_page", array("id" => $this->getAttribute($context["films"], "id", array()))), "html", null, true);
            echo "\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "titre", array()), "html", null, true);
            echo " </a></h4>
                    <p> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "synopsis", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"ratings\">
                    <p class=\"pull-right\">";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["films"], "dateDeSortie", array()), "d,m,Y"), "html", null, true);
            echo "</p>
                    <p>Réalisé par : <a href=\"cinema-films-realisateur.html\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["films"], "personne", array()), "nom", array()), "html", null, true);
            echo "</a></p>
                </div>
            </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['films'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </div>

    </div>

</div>

";
        
        $__internal_4ca068093b618867de5d87c3f126d379d792846603ea791cea95f0a025ea661a->leave($__internal_4ca068093b618867de5d87c3f126d379d792846603ea791cea95f0a025ea661a_prof);

        
        $__internal_9c63454e1db5a8d258e9c3e9771828031a5d9a508d9c89b31193fbbd3137cee6->leave($__internal_9c63454e1db5a8d258e9c3e9771828031a5d9a508d9c89b31193fbbd3137cee6_prof);

    }

    public function getTemplateName()
    {
        return "TDCinemaBundle:Film:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  103 => 36,  99 => 35,  93 => 32,  87 => 31,  80 => 26,  76 => 25,  62 => 14,  58 => 13,  49 => 6,  40 => 5,  11 => 1,);
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



{%  block body  %}
<div class=\"container\">

    <div class=\"row\">

        <div class=\"col-md-3\">
            <p class=\"lead\">Cinéma</p>
            <div class=\"list-group\">
                <a href=\"{{ path('films_all') }}\" class=\"list-group-item active\">Films</a>
                <a href=\"{{ path('personne_all') }}\" class=\"list-group-item\">Réalisateurs</a>
            </div>
        </div>


        <div class=\"col-md-9\">

            <h2>Liste des films</h2>

            <br />

            {% for films in films %}


            <div class=\"thumbnail\">
                <div class=\"caption-full\">
                    <h4 class=\"pull-right\">Science-Fiction</h4>
                    <h4><a href=\"{{ path('film_page', {'id' :films.id}) }}\">  {{ films.titre }} </a></h4>
                    <p> {{ films.synopsis }}</p>
                </div>
                <div class=\"ratings\">
                    <p class=\"pull-right\">{{ films.dateDeSortie|date('d,m,Y') }}</p>
                    <p>Réalisé par : <a href=\"cinema-films-realisateur.html\">{{ films.personne.nom }}</a></p>
                </div>
            </div>

{%  endfor %}
        </div>

    </div>

</div>

{%  endblock  %}
", "TDCinemaBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/CinemaBundle/Resources/views/Film/list.html.twig");
    }
}
