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
        $__internal_96284f929926a0c5d66a9dfe21babe8ac0a3b7f76bde602ddd66b2fe9e56f7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96284f929926a0c5d66a9dfe21babe8ac0a3b7f76bde602ddd66b2fe9e56f7c1->enter($__internal_96284f929926a0c5d66a9dfe21babe8ac0a3b7f76bde602ddd66b2fe9e56f7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Genre:list.html.twig"));

        $__internal_61f3f82763f54d01a1c59a68716dee699fe94a96dfa395dface9679c9dbd349b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f3f82763f54d01a1c59a68716dee699fe94a96dfa395dface9679c9dbd349b->enter($__internal_61f3f82763f54d01a1c59a68716dee699fe94a96dfa395dface9679c9dbd349b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Genre:list.html.twig"));

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

            <li><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_modif", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\"> Modifier</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>
<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_ajout");
        echo "\">Ajouter</a>";
        
        $__internal_96284f929926a0c5d66a9dfe21babe8ac0a3b7f76bde602ddd66b2fe9e56f7c1->leave($__internal_96284f929926a0c5d66a9dfe21babe8ac0a3b7f76bde602ddd66b2fe9e56f7c1_prof);

        
        $__internal_61f3f82763f54d01a1c59a68716dee699fe94a96dfa395dface9679c9dbd349b->leave($__internal_61f3f82763f54d01a1c59a68716dee699fe94a96dfa395dface9679c9dbd349b_prof);

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
        return array (  50 => 9,  47 => 8,  39 => 6,  33 => 4,  29 => 3,  25 => 1,);
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

            <li><a href=\"{{  path('admin_genre_modif',{'id': genre.id} ) }}\"> Modifier</a></li>
    {% endfor %}
</ul>
<a href=\"{{ path('admin_ajout') }}\">Ajouter</a>", "TDAdminBundle:Genre:list.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/Genre/list.html.twig");
    }
}
