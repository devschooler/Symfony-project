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
        $__internal_6218ef018085d9ac55c63977d4bb64bf6cd3ab2c2b3a17504e738b51ec13d86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6218ef018085d9ac55c63977d4bb64bf6cd3ab2c2b3a17504e738b51ec13d86a->enter($__internal_6218ef018085d9ac55c63977d4bb64bf6cd3ab2c2b3a17504e738b51ec13d86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Personne:list.html.twig"));

        $__internal_934247f0e790ee629351c5a839d7db52cacaab5d64855af0d0bd5ae086b8d86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934247f0e790ee629351c5a839d7db52cacaab5d64855af0d0bd5ae086b8d86a->enter($__internal_934247f0e790ee629351c5a839d7db52cacaab5d64855af0d0bd5ae086b8d86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Personne:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6218ef018085d9ac55c63977d4bb64bf6cd3ab2c2b3a17504e738b51ec13d86a->leave($__internal_6218ef018085d9ac55c63977d4bb64bf6cd3ab2c2b3a17504e738b51ec13d86a_prof);

        
        $__internal_934247f0e790ee629351c5a839d7db52cacaab5d64855af0d0bd5ae086b8d86a->leave($__internal_934247f0e790ee629351c5a839d7db52cacaab5d64855af0d0bd5ae086b8d86a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_921250ab32c6adf48c74c4f8354104d05559f10e15a1f7eeae3aa1a6498cfc7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921250ab32c6adf48c74c4f8354104d05559f10e15a1f7eeae3aa1a6498cfc7c->enter($__internal_921250ab32c6adf48c74c4f8354104d05559f10e15a1f7eeae3aa1a6498cfc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cf278fc179ac855dfc2f200f8b7a447c86d9c815dfc3780badab02720c49b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf278fc179ac855dfc2f200f8b7a447c86d9c815dfc3780badab02720c49b4e->enter($__internal_8cf278fc179ac855dfc2f200f8b7a447c86d9c815dfc3780badab02720c49b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <p></p>
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
        
        $__internal_8cf278fc179ac855dfc2f200f8b7a447c86d9c815dfc3780badab02720c49b4e->leave($__internal_8cf278fc179ac855dfc2f200f8b7a447c86d9c815dfc3780badab02720c49b4e_prof);

        
        $__internal_921250ab32c6adf48c74c4f8354104d05559f10e15a1f7eeae3aa1a6498cfc7c->leave($__internal_921250ab32c6adf48c74c4f8354104d05559f10e15a1f7eeae3aa1a6498cfc7c_prof);

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
        return array (  85 => 24,  64 => 11,  57 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
                        <p></p>
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
