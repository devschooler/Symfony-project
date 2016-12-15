<?php

/* TDCinemaBundle:Film:list.html.twig */
class __TwigTemplate_78fbc2ca2579ef256618ddd096743f2457da422c9aa88eb5e2fbef015ddb65da extends Twig_Template
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
        $__internal_ac66c1580b0d0a36564897b6f44a65fe96cb0c44bfdaee660410a79d857f69cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac66c1580b0d0a36564897b6f44a65fe96cb0c44bfdaee660410a79d857f69cb->enter($__internal_ac66c1580b0d0a36564897b6f44a65fe96cb0c44bfdaee660410a79d857f69cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Film:list.html.twig"));

        $__internal_e0d2b57a1c34cd679c34f74b3b034c6659197053bb33a8a923b034fc69a2a216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d2b57a1c34cd679c34f74b3b034c6659197053bb33a8a923b034fc69a2a216->enter($__internal_e0d2b57a1c34cd679c34f74b3b034c6659197053bb33a8a923b034fc69a2a216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle:Film:list.html.twig"));

        // line 1
        echo "
<html>

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Films - Devschool</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"css/shop-item.css\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\">Devschool</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li>
                    <a href=\"#\">Bibliothèque</a>
                </li>
                <li class=\"active\">
                    <a href=\"cinema-films.html\">Cinéma</a>
                </li>
                <li>
                    <a href=\"#\">Admin</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class=\"container\">

    <div class=\"row\">

        <div class=\"col-md-3\">
            <p class=\"lead\">Cinéma</p>
            <div class=\"list-group\">
                <a href=\"cinema-films.html\" class=\"list-group-item active\">Films</a>
                <a href=\"cinema-realisateurs.html\" class=\"list-group-item\">Réalisateurs</a>
            </div>
        </div>

        <div class=\"col-md-9\">

            <h2>Liste des films</h2>

            <br />

            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["films"]);
        foreach ($context['_seq'] as $context["_key"] => $context["films"]) {
            // line 83
            echo "
            <div class=\"thumbnail\">
                <div class=\"caption-full\">
                    <h4 class=\"pull-right\">Science-Fiction</h4>
                    <h4>  ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "titre", array()), "html", null, true);
            echo "</h4>
                    <p> ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "synopsis", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"ratings\">
                    <p class=\"pull-right\">";
            // line 91
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["films"], "dateDeSortie", array()), "d,m,Y"), "html", null, true);
            echo "</p>
                    <p>Réalisé par : <a href=\"cinema-films-realisateur.html\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "realisateur", array()), "html", null, true);
            echo "</a></p>
                </div>
            </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['films'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        </div>

    </div>

</div>
<!-- /.container -->

<div class=\"container\">

    <hr>

    <!-- Footer -->
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; Devschool Steve 2016</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src=\"js/jquery.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"js/bootstrap.min.js\"></script>

</body>

</html>
";
        
        $__internal_ac66c1580b0d0a36564897b6f44a65fe96cb0c44bfdaee660410a79d857f69cb->leave($__internal_ac66c1580b0d0a36564897b6f44a65fe96cb0c44bfdaee660410a79d857f69cb_prof);

        
        $__internal_e0d2b57a1c34cd679c34f74b3b034c6659197053bb33a8a923b034fc69a2a216->leave($__internal_e0d2b57a1c34cd679c34f74b3b034c6659197053bb33a8a923b034fc69a2a216_prof);

    }

    public function getTemplateName()
    {
        return "TDCinemaBundle:Film:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 97,  132 => 92,  128 => 91,  122 => 88,  118 => 87,  112 => 83,  108 => 82,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<html>

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Films - Devschool</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"css/shop-item.css\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\">Devschool</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li>
                    <a href=\"#\">Bibliothèque</a>
                </li>
                <li class=\"active\">
                    <a href=\"cinema-films.html\">Cinéma</a>
                </li>
                <li>
                    <a href=\"#\">Admin</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class=\"container\">

    <div class=\"row\">

        <div class=\"col-md-3\">
            <p class=\"lead\">Cinéma</p>
            <div class=\"list-group\">
                <a href=\"cinema-films.html\" class=\"list-group-item active\">Films</a>
                <a href=\"cinema-realisateurs.html\" class=\"list-group-item\">Réalisateurs</a>
            </div>
        </div>

        <div class=\"col-md-9\">

            <h2>Liste des films</h2>

            <br />

            {% for films in films %}

            <div class=\"thumbnail\">
                <div class=\"caption-full\">
                    <h4 class=\"pull-right\">Science-Fiction</h4>
                    <h4>  {{ films.titre }}</h4>
                    <p> {{ films.synopsis }}</p>
                </div>
                <div class=\"ratings\">
                    <p class=\"pull-right\">{{ films.dateDeSortie|date('d,m,Y') }}</p>
                    <p>Réalisé par : <a href=\"cinema-films-realisateur.html\">{{ films.realisateur }}</a></p>
                </div>
            </div>

{%  endfor %}
        </div>

    </div>

</div>
<!-- /.container -->

<div class=\"container\">

    <hr>

    <!-- Footer -->
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; Devschool Steve 2016</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src=\"js/jquery.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"js/bootstrap.min.js\"></script>

</body>

</html>
", "TDCinemaBundle:Film:list.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/CinemaBundle/Resources/views/Film/list.html.twig");
    }
}
