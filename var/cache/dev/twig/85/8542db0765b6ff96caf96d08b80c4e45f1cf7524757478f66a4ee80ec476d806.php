<?php

/* TDAdminBundle:Film:list.html.twig */
class __TwigTemplate_f292beee0165718b0a5f505806f4f79556fe850bbaa5f1d8dc4efcaeb7ac7776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TDAdminBundle::layout.html.twig", "TDAdminBundle:Film:list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TDAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_651e05ae2601a2a363f6fbe97252cb6dc85f2569ae3887276fd20da290976b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651e05ae2601a2a363f6fbe97252cb6dc85f2569ae3887276fd20da290976b05->enter($__internal_651e05ae2601a2a363f6fbe97252cb6dc85f2569ae3887276fd20da290976b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Film:list.html.twig"));

        $__internal_a5a6ced4686b7f3dd119cecee3e4e9d08d2bbe890aea0e14489843bd605ae2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a6ced4686b7f3dd119cecee3e4e9d08d2bbe890aea0e14489843bd605ae2ff->enter($__internal_a5a6ced4686b7f3dd119cecee3e4e9d08d2bbe890aea0e14489843bd605ae2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Film:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_651e05ae2601a2a363f6fbe97252cb6dc85f2569ae3887276fd20da290976b05->leave($__internal_651e05ae2601a2a363f6fbe97252cb6dc85f2569ae3887276fd20da290976b05_prof);

        
        $__internal_a5a6ced4686b7f3dd119cecee3e4e9d08d2bbe890aea0e14489843bd605ae2ff->leave($__internal_a5a6ced4686b7f3dd119cecee3e4e9d08d2bbe890aea0e14489843bd605ae2ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f99b47be3583d1a0335dd1fa0e056aedb6f9763f85395fa901bdef4de953efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f99b47be3583d1a0335dd1fa0e056aedb6f9763f85395fa901bdef4de953efd->enter($__internal_7f99b47be3583d1a0335dd1fa0e056aedb6f9763f85395fa901bdef4de953efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d56db562905f7886581b5af53562f74679b829a47faa1a5e3a160ddab1d8f2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56db562905f7886581b5af53562f74679b829a47faa1a5e3a160ddab1d8f2a6->enter($__internal_d56db562905f7886581b5af53562f74679b829a47faa1a5e3a160ddab1d8f2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<h1>Liste des films :</h1>
<ul>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["film"]);
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 9
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "titre", array()), "html", null, true);
            echo "</li> </br>
            <li>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "synopsis", array()), "html", null, true);
            echo "</li>
  <li>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["film"], "dateDeSortie", array()), "d,m,Y"), "html", null, true);
            echo "</li> </br>
            <li> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["film"], "personne", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["film"], "personne", array()), "nom", array()), "html", null, true);
            echo "</li>

        <li><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_film_modif", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\"> Modifier</a></li>
        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_film_delete", array("id" => $this->getAttribute($context["film"], "id", array()))), "html", null, true);
            echo "\">cliquez ici pour supprimer </a>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ajoutfilm");
        echo "\">Ajouter</a>
</ul>
";
        
        $__internal_d56db562905f7886581b5af53562f74679b829a47faa1a5e3a160ddab1d8f2a6->leave($__internal_d56db562905f7886581b5af53562f74679b829a47faa1a5e3a160ddab1d8f2a6_prof);

        
        $__internal_7f99b47be3583d1a0335dd1fa0e056aedb6f9763f85395fa901bdef4de953efd->leave($__internal_7f99b47be3583d1a0335dd1fa0e056aedb6f9763f85395fa901bdef4de953efd_prof);

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
        return array (  95 => 19,  92 => 18,  83 => 15,  79 => 14,  72 => 12,  68 => 11,  64 => 10,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TDAdminBundle::layout.html.twig' %}

{% block body %}


<h1>Liste des films :</h1>
<ul>
    {% for film in film %}
        <li>{{ film.titre }}</li> </br>
            <li>{{ film.synopsis }}</li>
  <li>{{ film.dateDeSortie|date('d,m,Y') }}</li> </br>
            <li> {{ film.personne.prenom }} {{ film.personne.nom }}</li>

        <li><a href=\"{{  path('admin_film_modif',{'id': film.id} ) }}\"> Modifier</a></li>
        <a href=\"{{ path('admin_film_delete', {'id': film.id}) }}\">cliquez ici pour supprimer </a>

    {% endfor %}

    <a href=\"{{ path('admin_ajoutfilm') }}\">Ajouter</a>
</ul>
{% endblock %}", "TDAdminBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/Film/list.html.twig");
    }
}
