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
        $__internal_27ebf362d7d7db1dc982f18b3c358f7e4494ec2ec4fd502c29e4ae094f304140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ebf362d7d7db1dc982f18b3c358f7e4494ec2ec4fd502c29e4ae094f304140->enter($__internal_27ebf362d7d7db1dc982f18b3c358f7e4494ec2ec4fd502c29e4ae094f304140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Film:list.html.twig"));

        $__internal_f17a6b05f997aeb20f4a316c152da4227a92fc16d1fb8601073ae48d0fcba0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17a6b05f997aeb20f4a316c152da4227a92fc16d1fb8601073ae48d0fcba0c6->enter($__internal_f17a6b05f997aeb20f4a316c152da4227a92fc16d1fb8601073ae48d0fcba0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Film:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ebf362d7d7db1dc982f18b3c358f7e4494ec2ec4fd502c29e4ae094f304140->leave($__internal_27ebf362d7d7db1dc982f18b3c358f7e4494ec2ec4fd502c29e4ae094f304140_prof);

        
        $__internal_f17a6b05f997aeb20f4a316c152da4227a92fc16d1fb8601073ae48d0fcba0c6->leave($__internal_f17a6b05f997aeb20f4a316c152da4227a92fc16d1fb8601073ae48d0fcba0c6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_719f775a440d775c3304826948ab875d1a514ad4d821b907c0c7d2e779c3a266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719f775a440d775c3304826948ab875d1a514ad4d821b907c0c7d2e779c3a266->enter($__internal_719f775a440d775c3304826948ab875d1a514ad4d821b907c0c7d2e779c3a266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07533b549261da81544858ad5efad12e7cf6446bca4ef6673387b65715a48e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07533b549261da81544858ad5efad12e7cf6446bca4ef6673387b65715a48e1b->enter($__internal_07533b549261da81544858ad5efad12e7cf6446bca4ef6673387b65715a48e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">

    <div class=\"row\">

        <div class=\"col-md-3\">
            <p class=\"lead\">Cinéma</p>
            <div class=\"list-group\">
                <a href=\"cinema-films.html\" class=\"list-group-item active\">Films</a>
                <a href=\"cinema-realisateurs.html\" class=\"list-group-item\">Réalisateurs</a>
            </div>
        </div>

        <div class=\"col-md-9\">

            <h2>Liste des films</h2>

            <br />

            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["films"]);
        foreach ($context['_seq'] as $context["_key"] => $context["films"]) {
            // line 25
            echo "
            <div class=\"thumbnail\">
                <div class=\"caption-full\">
                    <h4 class=\"pull-right\">Science-Fiction</h4>
                    <h4>  ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "titre", array()), "html", null, true);
            echo "</h4>
                    <p> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "synopsis", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"ratings\">
                    <p class=\"pull-right\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["films"], "dateDeSortie", array()), "d,m,Y"), "html", null, true);
            echo "</p>
                    <p>Réalisé par : <a href=\"cinema-films-realisateur.html\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "realisateur", array()), "html", null, true);
            echo "</a></p>
                </div>
            </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['films'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </div>

    </div>

</div>

";
        
        $__internal_07533b549261da81544858ad5efad12e7cf6446bca4ef6673387b65715a48e1b->leave($__internal_07533b549261da81544858ad5efad12e7cf6446bca4ef6673387b65715a48e1b_prof);

        
        $__internal_719f775a440d775c3304826948ab875d1a514ad4d821b907c0c7d2e779c3a266->leave($__internal_719f775a440d775c3304826948ab875d1a514ad4d821b907c0c7d2e779c3a266_prof);

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
        return array (  104 => 39,  93 => 34,  89 => 33,  83 => 30,  79 => 29,  73 => 25,  69 => 24,  49 => 6,  40 => 5,  11 => 1,);
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
                <a href=\"cinema-films.html\" class=\"list-group-item active\">Films</a>
                <a href=\"cinema-realisateurs.html\" class=\"list-group-item\">Réalisateurs</a>
            </div>
        </div>

        <div class=\"col-md-9\">

            <h2>Liste des films</h2>

            <br />

            {% for films in films %}

            <div class=\"thumbnail\">
                <div class=\"caption-full\">
                    <h4 class=\"pull-right\">Science-Fiction</h4>
                    <h4>  {{ films.titre }}</h4>
                    <p> {{ films.synopsis }}</p>
                </div>
                <div class=\"ratings\">
                    <p class=\"pull-right\">{{ films.dateDeSortie|date('d,m,Y') }}</p>
                    <p>Réalisé par : <a href=\"cinema-films-realisateur.html\">{{ films.realisateur }}</a></p>
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
