<?php

/* TDAdminBundle:Film:list.html.twig */
class __TwigTemplate_f292beee0165718b0a5f505806f4f79556fe850bbaa5f1d8dc4efcaeb7ac7776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b63532ab7c2e72834835ec9d3262d303b571149efff602a8df47e7cbe64da21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b63532ab7c2e72834835ec9d3262d303b571149efff602a8df47e7cbe64da21->enter($__internal_3b63532ab7c2e72834835ec9d3262d303b571149efff602a8df47e7cbe64da21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Film:list.html.twig"));

        $__internal_8ad368646d58ad744f865ce1683a5bfd360ef3229b9e8427a4fbc8b5c2397e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad368646d58ad744f865ce1683a5bfd360ef3229b9e8427a4fbc8b5c2397e55->enter($__internal_8ad368646d58ad744f865ce1683a5bfd360ef3229b9e8427a4fbc8b5c2397e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Film:list.html.twig"));

        // line 1
        echo "<h1>Liste des films :</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["film"]);
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 4
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</li> </br>
            <li>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "synopsis", array()), "html", null, true);
            echo "</li>
  <li>";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["film"], "dateDeSortie", array()), "d,m,Y"), "html", null, true);
            echo "</li> </br>
            <li> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["film"], "personne", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["film"], "personne", array()), "nom", array()), "html", null, true);
            echo "</li>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ajout");
        echo "\">Ajouter</a>
</ul>
";
        
        $__internal_3b63532ab7c2e72834835ec9d3262d303b571149efff602a8df47e7cbe64da21->leave($__internal_3b63532ab7c2e72834835ec9d3262d303b571149efff602a8df47e7cbe64da21_prof);

        
        $__internal_8ad368646d58ad744f865ce1683a5bfd360ef3229b9e8427a4fbc8b5c2397e55->leave($__internal_8ad368646d58ad744f865ce1683a5bfd360ef3229b9e8427a4fbc8b5c2397e55_prof);

    }

    public function getTemplateName()
    {
        return "TDAdminBundle:Film:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  58 => 11,  46 => 7,  42 => 6,  38 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Liste des films :</h1>
<ul>
    {% for film in film %}
        <li>{{ film.titre }}</li> </br>
            <li>{{ film.synopsis }}</li>
  <li>{{ film.dateDeSortie|date('d,m,Y') }}</li> </br>
            <li> {{ film.personne.prenom }} {{ film.personne.nom }}</li>


    {% endfor %}

    <a href=\"{{ path('admin_ajout') }}\">Ajouter</a>
</ul>
", "TDAdminBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/Film/list.html.twig");
    }
}
