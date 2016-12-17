<?php

/* TDAdminBundle:Personne:list.html.twig */
class __TwigTemplate_8a0f3f8b71d6b3d88733bae06d567fc9ffc819e58a6a6c9fcdc0457ea05001f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TDAdminBundle::layout.html.twig", "TDAdminBundle:Personne:list.html.twig", 1);
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
        $__internal_0d3e7e4e75cc62abb3be92cd09033188dc08bb40e95b7445cb4d20c0b6b4a589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3e7e4e75cc62abb3be92cd09033188dc08bb40e95b7445cb4d20c0b6b4a589->enter($__internal_0d3e7e4e75cc62abb3be92cd09033188dc08bb40e95b7445cb4d20c0b6b4a589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Personne:list.html.twig"));

        $__internal_fe03e6f1b5541b727b5fbe94aa3bcf595ef290c1961a1010bbb61f852293c0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe03e6f1b5541b727b5fbe94aa3bcf595ef290c1961a1010bbb61f852293c0a1->enter($__internal_fe03e6f1b5541b727b5fbe94aa3bcf595ef290c1961a1010bbb61f852293c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Personne:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d3e7e4e75cc62abb3be92cd09033188dc08bb40e95b7445cb4d20c0b6b4a589->leave($__internal_0d3e7e4e75cc62abb3be92cd09033188dc08bb40e95b7445cb4d20c0b6b4a589_prof);

        
        $__internal_fe03e6f1b5541b727b5fbe94aa3bcf595ef290c1961a1010bbb61f852293c0a1->leave($__internal_fe03e6f1b5541b727b5fbe94aa3bcf595ef290c1961a1010bbb61f852293c0a1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_888297648040566f2023ef681549750b23de78ecbba51a969a0b4a786e5dde94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_888297648040566f2023ef681549750b23de78ecbba51a969a0b4a786e5dde94->enter($__internal_888297648040566f2023ef681549750b23de78ecbba51a969a0b4a786e5dde94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1396ad51e18b917d8c30073a83cd44cf68f6114ee388045077f830f8b5a92d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1396ad51e18b917d8c30073a83cd44cf68f6114ee388045077f830f8b5a92d37->enter($__internal_1396ad51e18b917d8c30073a83cd44cf68f6114ee388045077f830f8b5a92d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Liste des Realisteur :</h1>
<ul>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 8
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "prenom", array()), "html", null, true);
            echo "</li>
</br> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "biographie", array()), "html", null, true);
            echo "
            <li><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_personne_modif", array("id" => $this->getAttribute($context["personne"], "id", array()))), "html", null, true);
            echo "\"> Modifier</a></li>
        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_personne_delete", array("id" => $this->getAttribute($context["personne"], "id", array()))), "html", null, true);
            echo "\">cliquez ici pour supprimer </a>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
<a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ajoutpersonne");
        echo "\">Ajouter

    ";
        
        $__internal_1396ad51e18b917d8c30073a83cd44cf68f6114ee388045077f830f8b5a92d37->leave($__internal_1396ad51e18b917d8c30073a83cd44cf68f6114ee388045077f830f8b5a92d37_prof);

        
        $__internal_888297648040566f2023ef681549750b23de78ecbba51a969a0b4a786e5dde94->leave($__internal_888297648040566f2023ef681549750b23de78ecbba51a969a0b4a786e5dde94_prof);

    }

    public function getTemplateName()
    {
        return "TDAdminBundle:Personne:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  81 => 14,  72 => 11,  68 => 10,  64 => 9,  57 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
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
<h1>Liste des Realisteur :</h1>
<ul>
    {% for personne in personnes %}
        <li>{{ personne.nom }} {{ personne.prenom }}</li>
</br> {{ personne.biographie }}
            <li><a href=\"{{  path('admin_personne_modif',{'id': personne.id} ) }}\"> Modifier</a></li>
        <a href=\"{{ path('admin_personne_delete', {'id': personne.id}) }}\">cliquez ici pour supprimer </a>

    {% endfor %}
</ul>
<a href=\"{{ path('admin_ajoutpersonne') }}\">Ajouter

    {% endblock %}", "TDAdminBundle:Personne:list.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/Personne/list.html.twig");
    }
}
