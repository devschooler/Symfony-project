<?php

/* TDAdminBundle:Genre:list.html.twig */
class __TwigTemplate_595e28db135d3e296483da6c81e770088f763c954db73db418c899dbf8157a1b extends Twig_Template
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
        $__internal_ab70b86c12e9ff90386b6938b9a193d4e9d928a100d8fcc278f40310fd3474de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab70b86c12e9ff90386b6938b9a193d4e9d928a100d8fcc278f40310fd3474de->enter($__internal_ab70b86c12e9ff90386b6938b9a193d4e9d928a100d8fcc278f40310fd3474de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Genre:list.html.twig"));

        $__internal_0953dd5b364123de961819bd3f2fb7818907fb840dcb47b9d1ff06c1d965590c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0953dd5b364123de961819bd3f2fb7818907fb840dcb47b9d1ff06c1d965590c->enter($__internal_0953dd5b364123de961819bd3f2fb7818907fb840dcb47b9d1ff06c1d965590c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Genre:list.html.twig"));

        // line 1
        echo "<h1>Liste des genres :</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 4
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "nom", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ajout");
        echo "\">Ajouter</a>";
        
        $__internal_ab70b86c12e9ff90386b6938b9a193d4e9d928a100d8fcc278f40310fd3474de->leave($__internal_ab70b86c12e9ff90386b6938b9a193d4e9d928a100d8fcc278f40310fd3474de_prof);

        
        $__internal_0953dd5b364123de961819bd3f2fb7818907fb840dcb47b9d1ff06c1d965590c->leave($__internal_0953dd5b364123de961819bd3f2fb7818907fb840dcb47b9d1ff06c1d965590c_prof);

    }

    public function getTemplateName()
    {
        return "TDAdminBundle:Genre:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  42 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Liste des genres :</h1>
<ul>
    {% for genre in genres %}
        <li>{{ genre.nom }}</li>
    {% endfor %}
</ul>
<a href=\"{{ path('admin_ajout') }}\">Ajouter</a>", "TDAdminBundle:Genre:list.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/Genre/list.html.twig");
    }
}
