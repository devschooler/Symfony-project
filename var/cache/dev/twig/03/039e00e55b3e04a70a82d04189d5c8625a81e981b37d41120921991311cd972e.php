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
        $__internal_6fa25f0c7b63b6b3c00982f691fb6041c2a62e854b0d59b15b9e8bbe8b856fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa25f0c7b63b6b3c00982f691fb6041c2a62e854b0d59b15b9e8bbe8b856fdb->enter($__internal_6fa25f0c7b63b6b3c00982f691fb6041c2a62e854b0d59b15b9e8bbe8b856fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Personne:list.html.twig"));

        $__internal_c4d1c956348300284f5c44e9edd5f7c7d9b2b69b512033e868530462d1be8dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d1c956348300284f5c44e9edd5f7c7d9b2b69b512033e868530462d1be8dfd->enter($__internal_c4d1c956348300284f5c44e9edd5f7c7d9b2b69b512033e868530462d1be8dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Personne:list.html.twig"));

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
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>
<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ajoutpersonne");
        echo "\">Ajouter";
        
        $__internal_6fa25f0c7b63b6b3c00982f691fb6041c2a62e854b0d59b15b9e8bbe8b856fdb->leave($__internal_6fa25f0c7b63b6b3c00982f691fb6041c2a62e854b0d59b15b9e8bbe8b856fdb_prof);

        
        $__internal_c4d1c956348300284f5c44e9edd5f7c7d9b2b69b512033e868530462d1be8dfd->leave($__internal_c4d1c956348300284f5c44e9edd5f7c7d9b2b69b512033e868530462d1be8dfd_prof);

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
        return array (  52 => 9,  49 => 8,  41 => 6,  33 => 4,  29 => 3,  25 => 1,);
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
    {% endfor %}
</ul>
<a href=\"{{ path('admin_ajoutpersonne') }}\">Ajouter", "TDAdminBundle:Personne:list.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/Personne/list.html.twig");
    }
}
