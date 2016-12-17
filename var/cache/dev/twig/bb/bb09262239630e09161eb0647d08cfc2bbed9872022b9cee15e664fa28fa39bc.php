<?php

/* TDAdminBundle::layout.html.twig */
class __TwigTemplate_d14a293f1046c0bcf5b08f9d653616b48afd61119b8f1ebc0c6c80732171480f extends Twig_Template
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
        $__internal_df6b579286b4147f997dec18d3fc25d62f05f182d8319ab0774387ecfcb37d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6b579286b4147f997dec18d3fc25d62f05f182d8319ab0774387ecfcb37d78->enter($__internal_df6b579286b4147f997dec18d3fc25d62f05f182d8319ab0774387ecfcb37d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle::layout.html.twig"));

        $__internal_48a00e3ca8cc5481586d129bc37ed35447f5388ef2da35b8a34004d7cb81b662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a00e3ca8cc5481586d129bc37ed35447f5388ef2da35b8a34004d7cb81b662->enter($__internal_48a00e3ca8cc5481586d129bc37ed35447f5388ef2da35b8a34004d7cb81b662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle::layout.html.twig"));

        // line 1
        echo "<head>
    <link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Administration du site </title>

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
                    <a href=";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("films_all");
        echo ">Cinéma</a>
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
        // line 61
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_df6b579286b4147f997dec18d3fc25d62f05f182d8319ab0774387ecfcb37d78->leave($__internal_df6b579286b4147f997dec18d3fc25d62f05f182d8319ab0774387ecfcb37d78_prof);

        
        $__internal_48a00e3ca8cc5481586d129bc37ed35447f5388ef2da35b8a34004d7cb81b662->leave($__internal_48a00e3ca8cc5481586d129bc37ed35447f5388ef2da35b8a34004d7cb81b662_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_8de361eb190f42ca307d2a23aa026a21536ed489011c40ef1539f2224f90b0ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de361eb190f42ca307d2a23aa026a21536ed489011c40ef1539f2224f90b0ef->enter($__internal_8de361eb190f42ca307d2a23aa026a21536ed489011c40ef1539f2224f90b0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c4de969c53786a62465a7542e593e61975e7a972db52f7f58afa93e75af4aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4de969c53786a62465a7542e593e61975e7a972db52f7f58afa93e75af4aba->enter($__internal_2c4de969c53786a62465a7542e593e61975e7a972db52f7f58afa93e75af4aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c4de969c53786a62465a7542e593e61975e7a972db52f7f58afa93e75af4aba->leave($__internal_2c4de969c53786a62465a7542e593e61975e7a972db52f7f58afa93e75af4aba_prof);

        
        $__internal_8de361eb190f42ca307d2a23aa026a21536ed489011c40ef1539f2224f90b0ef->leave($__internal_8de361eb190f42ca307d2a23aa026a21536ed489011c40ef1539f2224f90b0ef_prof);

    }

    public function getTemplateName()
    {
        return "TDAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 61,  79 => 49,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Administration du site </title>

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
                    <a href={{ path('films_all') }}>Cinéma</a>
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

{% block body  %}{% endblock %}", "TDAdminBundle::layout.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/layout.html.twig");
    }
}
