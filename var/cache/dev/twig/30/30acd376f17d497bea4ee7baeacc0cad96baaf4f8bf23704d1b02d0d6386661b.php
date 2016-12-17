<?php

/* TDAdminBundle:Default:index.html.twig */
class __TwigTemplate_b8e99091f2cf572bfe3650146a747861ed23b1855b087307e422608600f71e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TDAdminBundle::layout.html.twig", "TDAdminBundle:Default:index.html.twig", 1);
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
        $__internal_8fa10a5de5e40dc981ba86bd4f89f9ede72f34107cd2f216bd613ff3d724c7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa10a5de5e40dc981ba86bd4f89f9ede72f34107cd2f216bd613ff3d724c7c7->enter($__internal_8fa10a5de5e40dc981ba86bd4f89f9ede72f34107cd2f216bd613ff3d724c7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Default:index.html.twig"));

        $__internal_84f368912c8280fd799b5acd2b47d347aee68eada7e52d0578c0f063aaec034d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f368912c8280fd799b5acd2b47d347aee68eada7e52d0578c0f063aaec034d->enter($__internal_84f368912c8280fd799b5acd2b47d347aee68eada7e52d0578c0f063aaec034d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fa10a5de5e40dc981ba86bd4f89f9ede72f34107cd2f216bd613ff3d724c7c7->leave($__internal_8fa10a5de5e40dc981ba86bd4f89f9ede72f34107cd2f216bd613ff3d724c7c7_prof);

        
        $__internal_84f368912c8280fd799b5acd2b47d347aee68eada7e52d0578c0f063aaec034d->leave($__internal_84f368912c8280fd799b5acd2b47d347aee68eada7e52d0578c0f063aaec034d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2187493970b2fe250bc11b70a6a4d56f850efbc057402b0d3b0c71df981e109a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2187493970b2fe250bc11b70a6a4d56f850efbc057402b0d3b0c71df981e109a->enter($__internal_2187493970b2fe250bc11b70a6a4d56f850efbc057402b0d3b0c71df981e109a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_061a5bdde0709579932c96c88698f09fc37c44ed91ef71955f1520933f942b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061a5bdde0709579932c96c88698f09fc37c44ed91ef71955f1520933f942b0e->enter($__internal_061a5bdde0709579932c96c88698f09fc37c44ed91ef71955f1520933f942b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  <h1>              Bienvenue sur l'administration du cinéma     </h1>
   <p> ici vous pourrez tout gérer , voir , modifier , créer , supprimer . </p>

  <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_personne_list");
        echo "\"> Les realisateurs</a> </br>
  <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_genre_list");
        echo "\">les genres</a> </br>
  <a href=\"\">Les films </a>
";
        
        $__internal_061a5bdde0709579932c96c88698f09fc37c44ed91ef71955f1520933f942b0e->leave($__internal_061a5bdde0709579932c96c88698f09fc37c44ed91ef71955f1520933f942b0e_prof);

        
        $__internal_2187493970b2fe250bc11b70a6a4d56f850efbc057402b0d3b0c71df981e109a->leave($__internal_2187493970b2fe250bc11b70a6a4d56f850efbc057402b0d3b0c71df981e109a_prof);

    }

    public function getTemplateName()
    {
        return "TDAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  55 => 9,  49 => 5,  40 => 4,  11 => 1,);
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


{% block body  %}

  <h1>              Bienvenue sur l'administration du cinéma     </h1>
   <p> ici vous pourrez tout gérer , voir , modifier , créer , supprimer . </p>

  <a href=\"{{ path('admin_personne_list') }}\"> Les realisateurs</a> </br>
  <a href=\"{{ path('admin_genre_list') }}\">les genres</a> </br>
  <a href=\"\">Les films </a>
{% endblock %}", "TDAdminBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
