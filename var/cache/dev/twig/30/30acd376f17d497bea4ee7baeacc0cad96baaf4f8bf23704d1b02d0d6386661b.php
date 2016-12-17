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
        $__internal_abdfc27928cb71ea79eb4b8db42ba2c89ce818726e7e68137b96055c9d9ef8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abdfc27928cb71ea79eb4b8db42ba2c89ce818726e7e68137b96055c9d9ef8fc->enter($__internal_abdfc27928cb71ea79eb4b8db42ba2c89ce818726e7e68137b96055c9d9ef8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Default:index.html.twig"));

        $__internal_15d4fc1cbd7961b994c4e00da7b7a432ddbf569155c92358f8b17e5e6ee9744b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d4fc1cbd7961b994c4e00da7b7a432ddbf569155c92358f8b17e5e6ee9744b->enter($__internal_15d4fc1cbd7961b994c4e00da7b7a432ddbf569155c92358f8b17e5e6ee9744b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abdfc27928cb71ea79eb4b8db42ba2c89ce818726e7e68137b96055c9d9ef8fc->leave($__internal_abdfc27928cb71ea79eb4b8db42ba2c89ce818726e7e68137b96055c9d9ef8fc_prof);

        
        $__internal_15d4fc1cbd7961b994c4e00da7b7a432ddbf569155c92358f8b17e5e6ee9744b->leave($__internal_15d4fc1cbd7961b994c4e00da7b7a432ddbf569155c92358f8b17e5e6ee9744b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6b243cad777d05ba0030edc80926bb7ec45f2f3118ea9ebbe3d44a2d02487ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b243cad777d05ba0030edc80926bb7ec45f2f3118ea9ebbe3d44a2d02487ab->enter($__internal_d6b243cad777d05ba0030edc80926bb7ec45f2f3118ea9ebbe3d44a2d02487ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7861770161f55d3e5576e92ccccf274c6b350f03599501b31e18c45464edef3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7861770161f55d3e5576e92ccccf274c6b350f03599501b31e18c45464edef3f->enter($__internal_7861770161f55d3e5576e92ccccf274c6b350f03599501b31e18c45464edef3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
  <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_film_list");
        echo "\">Les films </a>
";
        
        $__internal_7861770161f55d3e5576e92ccccf274c6b350f03599501b31e18c45464edef3f->leave($__internal_7861770161f55d3e5576e92ccccf274c6b350f03599501b31e18c45464edef3f_prof);

        
        $__internal_d6b243cad777d05ba0030edc80926bb7ec45f2f3118ea9ebbe3d44a2d02487ab->leave($__internal_d6b243cad777d05ba0030edc80926bb7ec45f2f3118ea9ebbe3d44a2d02487ab_prof);

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
        return array (  63 => 11,  59 => 10,  55 => 9,  49 => 5,  40 => 4,  11 => 1,);
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
  <a href=\"{{ path('admin_film_list') }}\">Les films </a>
{% endblock %}", "TDAdminBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
