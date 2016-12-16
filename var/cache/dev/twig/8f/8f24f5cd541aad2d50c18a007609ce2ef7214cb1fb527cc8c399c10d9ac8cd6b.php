<?php

/* TDCinemaBundle::layout.html.twig */
class __TwigTemplate_1519f3b14e19f42b5231dc077237792ae0de7ba2de8fc8fb165bcaddf1193584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f8fe9f9de5611b98e015d533dd304ae60e4b1187948c079c50ebdf14ca5e623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8fe9f9de5611b98e015d533dd304ae60e4b1187948c079c50ebdf14ca5e623->enter($__internal_3f8fe9f9de5611b98e015d533dd304ae60e4b1187948c079c50ebdf14ca5e623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle::layout.html.twig"));

        $__internal_a0c56dc0c51e7f30eb63842c554db71cf02ef41db0315f22d6b8d1c4e891fa9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c56dc0c51e7f30eb63842c554db71cf02ef41db0315f22d6b8d1c4e891fa9e->enter($__internal_a0c56dc0c51e7f30eb63842c554db71cf02ef41db0315f22d6b8d1c4e891fa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle::layout.html.twig"));

        // line 1
        echo "<html>
<head>






    <meta charset=\"UTF-8\">

    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

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


</head>
<body>
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
                    <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("films_all");
        echo "\">Cinéma</a>
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
    ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "</div>
</body>

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
        
        $__internal_3f8fe9f9de5611b98e015d533dd304ae60e4b1187948c079c50ebdf14ca5e623->leave($__internal_3f8fe9f9de5611b98e015d533dd304ae60e4b1187948c079c50ebdf14ca5e623_prof);

        
        $__internal_a0c56dc0c51e7f30eb63842c554db71cf02ef41db0315f22d6b8d1c4e891fa9e->leave($__internal_a0c56dc0c51e7f30eb63842c554db71cf02ef41db0315f22d6b8d1c4e891fa9e_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce66b2bfc5f9437ed1fb9b429d68bc2ee22da1d9200988107fb71bc55522789b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce66b2bfc5f9437ed1fb9b429d68bc2ee22da1d9200988107fb71bc55522789b->enter($__internal_ce66b2bfc5f9437ed1fb9b429d68bc2ee22da1d9200988107fb71bc55522789b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c77849e5ad09ca9e5d8854cb703bb86803728e6e6a70e2e870af9a463eb8a88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77849e5ad09ca9e5d8854cb703bb86803728e6e6a70e2e870af9a463eb8a88b->enter($__internal_c77849e5ad09ca9e5d8854cb703bb86803728e6e6a70e2e870af9a463eb8a88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c77849e5ad09ca9e5d8854cb703bb86803728e6e6a70e2e870af9a463eb8a88b->leave($__internal_c77849e5ad09ca9e5d8854cb703bb86803728e6e6a70e2e870af9a463eb8a88b_prof);

        
        $__internal_ce66b2bfc5f9437ed1fb9b429d68bc2ee22da1d9200988107fb71bc55522789b->leave($__internal_ce66b2bfc5f9437ed1fb9b429d68bc2ee22da1d9200988107fb71bc55522789b_prof);

    }

    public function getTemplateName()
    {
        return "TDCinemaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 71,  106 => 72,  104 => 71,  90 => 60,  38 => 11,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>






    <meta charset=\"UTF-8\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />

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


</head>
<body>
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
                    <a href=\"{{ path('films_all') }}\">Cinéma</a>
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
    {% block body %}{% endblock %}
</div>
</body>

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


", "TDCinemaBundle::layout.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/CinemaBundle/Resources/views/layout.html.twig");
    }
}
