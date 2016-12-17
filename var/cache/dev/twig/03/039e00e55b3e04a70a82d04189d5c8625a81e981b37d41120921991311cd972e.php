<?php

/* TDAdminBundle:Personne:list.html.twig */
class __TwigTemplate_8a0f3f8b71d6b3d88733bae06d567fc9ffc819e58a6a6c9fcdc0457ea05001f4 extends Twig_Template
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
        $__internal_7c63958096175928ec27ee59279c0209822d0b9081be096063c27b57d5dac337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c63958096175928ec27ee59279c0209822d0b9081be096063c27b57d5dac337->enter($__internal_7c63958096175928ec27ee59279c0209822d0b9081be096063c27b57d5dac337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Personne:list.html.twig"));

        $__internal_7a1a4c06ae807ccb0deb2029a61c205564a76305752c25e636937e583160f338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1a4c06ae807ccb0deb2029a61c205564a76305752c25e636937e583160f338->enter($__internal_7a1a4c06ae807ccb0deb2029a61c205564a76305752c25e636937e583160f338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Personne:list.html.twig"));

        // line 1
        echo "<h1>Liste des Realisteur :</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 4
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "prenom", array()), "html", null, true);
            echo "</li>

            <li><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_personne_modif", array("id" => $this->getAttribute($context["personne"], "id", array()))), "html", null, true);
            echo "\"> Modifier</a></li>
        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_personne_delete", array("id" => $this->getAttribute($context["personne"], "id", array()))), "html", null, true);
            echo "\">cliquez ici pour supprimer </a>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
<a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ajoutpersonne");
        echo "\">Ajouter";
        
        $__internal_7c63958096175928ec27ee59279c0209822d0b9081be096063c27b57d5dac337->leave($__internal_7c63958096175928ec27ee59279c0209822d0b9081be096063c27b57d5dac337_prof);

        
        $__internal_7a1a4c06ae807ccb0deb2029a61c205564a76305752c25e636937e583160f338->leave($__internal_7a1a4c06ae807ccb0deb2029a61c205564a76305752c25e636937e583160f338_prof);

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
        return array (  57 => 11,  54 => 10,  45 => 7,  41 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Liste des Realisteur :</h1>
<ul>
    {% for personne in personnes %}
        <li>{{ personne.nom }} {{ personne.prenom }}</li>

            <li><a href=\"{{  path('admin_personne_modif',{'id': personne.id} ) }}\"> Modifier</a></li>
        <a href=\"{{ path('admin_personne_delete', {'id': personne.id}) }}\">cliquez ici pour supprimer </a>

    {% endfor %}
</ul>
<a href=\"{{ path('admin_ajoutpersonne') }}\">Ajouter", "TDAdminBundle:Personne:list.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/Personne/list.html.twig");
    }
}
