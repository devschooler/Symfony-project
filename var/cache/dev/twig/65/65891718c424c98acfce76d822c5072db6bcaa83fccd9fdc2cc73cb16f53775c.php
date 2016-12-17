<?php

/* TDCinemaBundle:Personne:list.html.twig */
class __TwigTemplate_519bfbff33e2c1facad412d123e4d18de75d4a41d36645426874e9baed3fd007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TDCinemaBundle::layout.html.twig", "TDCinemaBundle:Personne:list.html.twig", 1);
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
        $__internal_c88c61ffad12d6d20391448757f4165199277b6cbde1f7886ea0b2c7e28d7503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88c61ffad12d6d20391448757f4165199277b6cbde1f7886ea0b2c7e28d7503->enter($__internal_c88c61ffad12d6d20391448757f4165199277b6cbde1f7886ea0b2c7e28d7503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Personne:list.html.twig"));

        $__internal_9ab47f43092018803b7813892dc58b7e32a067e9ac8c227d983d1cf965602d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab47f43092018803b7813892dc58b7e32a067e9ac8c227d983d1cf965602d05->enter($__internal_9ab47f43092018803b7813892dc58b7e32a067e9ac8c227d983d1cf965602d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Personne:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c88c61ffad12d6d20391448757f4165199277b6cbde1f7886ea0b2c7e28d7503->leave($__internal_c88c61ffad12d6d20391448757f4165199277b6cbde1f7886ea0b2c7e28d7503_prof);

        
        $__internal_9ab47f43092018803b7813892dc58b7e32a067e9ac8c227d983d1cf965602d05->leave($__internal_9ab47f43092018803b7813892dc58b7e32a067e9ac8c227d983d1cf965602d05_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c8cfc2d7b23b57dda3979ae85838afe5aa1c811fec7e68e1ed0c3110f06bf3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8cfc2d7b23b57dda3979ae85838afe5aa1c811fec7e68e1ed0c3110f06bf3f->enter($__internal_4c8cfc2d7b23b57dda3979ae85838afe5aa1c811fec7e68e1ed0c3110f06bf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c58fdb00dc4e6dee9511aeba4d9285dd60fd3ec77bf5087403e7a28fccbb6dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58fdb00dc4e6dee9511aeba4d9285dd60fd3ec77bf5087403e7a28fccbb6dff->enter($__internal_c58fdb00dc4e6dee9511aeba4d9285dd60fd3ec77bf5087403e7a28fccbb6dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Liste des Realisteur :</h1>
    <ul>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 6
            echo "

            <div class=\"well\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <strong>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "prenom", array()), "html", null, true);
            echo "</strong> (64 ans)<br />
                        <br />
                        <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "biographie", array()), "html", null, true);
            echo " </p>
                        <hr />
                        <div class=\"text-right\">
                            <a href=\"cinema-films-realisateur.html\" class=\"btn btn-success\">Voir ses films</a>
                        </div>
                    </div>
                </div>
            </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>

";
        
        $__internal_c58fdb00dc4e6dee9511aeba4d9285dd60fd3ec77bf5087403e7a28fccbb6dff->leave($__internal_c58fdb00dc4e6dee9511aeba4d9285dd60fd3ec77bf5087403e7a28fccbb6dff_prof);

        
        $__internal_4c8cfc2d7b23b57dda3979ae85838afe5aa1c811fec7e68e1ed0c3110f06bf3f->leave($__internal_4c8cfc2d7b23b57dda3979ae85838afe5aa1c811fec7e68e1ed0c3110f06bf3f_prof);

    }

    public function getTemplateName()
    {
        return "TDCinemaBundle:Personne:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  71 => 13,  64 => 11,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
{% block body %}
    <h1>Liste des Realisteur :</h1>
    <ul>
        {% for personne in personnes %}


            <div class=\"well\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <strong>{{  personne.nom }} {{ personne.prenom }}</strong> (64 ans)<br />
                        <br />
                        <p>{{ personne.biographie }} </p>
                        <hr />
                        <div class=\"text-right\">
                            <a href=\"cinema-films-realisateur.html\" class=\"btn btn-success\">Voir ses films</a>
                        </div>
                    </div>
                </div>
            </div>


        {% endfor %}
    </ul>

{% endblock %}", "TDCinemaBundle:Personne:list.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/CinemaBundle/Resources/views/Personne/list.html.twig");
    }
}
