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
        $__internal_24adf7d7988c0bfe273653d14390fc7c1248195cff55e4db0edca5f43871d022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24adf7d7988c0bfe273653d14390fc7c1248195cff55e4db0edca5f43871d022->enter($__internal_24adf7d7988c0bfe273653d14390fc7c1248195cff55e4db0edca5f43871d022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Personne:list.html.twig"));

        $__internal_978d892065241fad5e3c95b19180451360c5f2fa1adc001da3862631526ded96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978d892065241fad5e3c95b19180451360c5f2fa1adc001da3862631526ded96->enter($__internal_978d892065241fad5e3c95b19180451360c5f2fa1adc001da3862631526ded96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Personne:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24adf7d7988c0bfe273653d14390fc7c1248195cff55e4db0edca5f43871d022->leave($__internal_24adf7d7988c0bfe273653d14390fc7c1248195cff55e4db0edca5f43871d022_prof);

        
        $__internal_978d892065241fad5e3c95b19180451360c5f2fa1adc001da3862631526ded96->leave($__internal_978d892065241fad5e3c95b19180451360c5f2fa1adc001da3862631526ded96_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c471b675b63f2918c495a6e6093e7c0cfda0efbb5811443ea7847d9831e744c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c471b675b63f2918c495a6e6093e7c0cfda0efbb5811443ea7847d9831e744c->enter($__internal_7c471b675b63f2918c495a6e6093e7c0cfda0efbb5811443ea7847d9831e744c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1bac6ea3941196eafe67a2fb5c7736470a26fa2e84583b03be1443b0ad782a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bac6ea3941196eafe67a2fb5c7736470a26fa2e84583b03be1443b0ad782a4->enter($__internal_b1bac6ea3941196eafe67a2fb5c7736470a26fa2e84583b03be1443b0ad782a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b1bac6ea3941196eafe67a2fb5c7736470a26fa2e84583b03be1443b0ad782a4->leave($__internal_b1bac6ea3941196eafe67a2fb5c7736470a26fa2e84583b03be1443b0ad782a4_prof);

        
        $__internal_7c471b675b63f2918c495a6e6093e7c0cfda0efbb5811443ea7847d9831e744c->leave($__internal_7c471b675b63f2918c495a6e6093e7c0cfda0efbb5811443ea7847d9831e744c_prof);

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
        return array (  81 => 15,  78 => 14,  69 => 11,  65 => 10,  57 => 8,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
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

            <li><a href=\"{{  path('admin_personne_modif',{'id': personne.id} ) }}\"> Modifier</a></li>
        <a href=\"{{ path('admin_personne_delete', {'id': personne.id}) }}\">cliquez ici pour supprimer </a>

    {% endfor %}
</ul>
<a href=\"{{ path('admin_ajoutpersonne') }}\">Ajouter

    {% endblock %}", "TDAdminBundle:Personne:list.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/Personne/list.html.twig");
    }
}
