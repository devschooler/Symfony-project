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
        $__internal_d9dcd82eefd75e5b02629047f2ca8b4453ce916ebd9b472496f385facbccd921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9dcd82eefd75e5b02629047f2ca8b4453ce916ebd9b472496f385facbccd921->enter($__internal_d9dcd82eefd75e5b02629047f2ca8b4453ce916ebd9b472496f385facbccd921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Personne:list.html.twig"));

        $__internal_8d95e77277a1fd163baabac6fe7e06dd3ed72d500459aa749a0c303cbf348f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d95e77277a1fd163baabac6fe7e06dd3ed72d500459aa749a0c303cbf348f6d->enter($__internal_8d95e77277a1fd163baabac6fe7e06dd3ed72d500459aa749a0c303cbf348f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Personne:list.html.twig"));

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
            echo "</li>


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
        
        $__internal_d9dcd82eefd75e5b02629047f2ca8b4453ce916ebd9b472496f385facbccd921->leave($__internal_d9dcd82eefd75e5b02629047f2ca8b4453ce916ebd9b472496f385facbccd921_prof);

        
        $__internal_8d95e77277a1fd163baabac6fe7e06dd3ed72d500459aa749a0c303cbf348f6d->leave($__internal_8d95e77277a1fd163baabac6fe7e06dd3ed72d500459aa749a0c303cbf348f6d_prof);

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
        return array (  47 => 9,  44 => 8,  33 => 4,  29 => 3,  25 => 1,);
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
        <li>{{ personne.nom }}</li>


    {% endfor %}
</ul>
<a href=\"{{ path('admin_ajoutpersonne') }}\">Ajouter", "TDAdminBundle:Personne:list.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/Personne/list.html.twig");
    }
}
