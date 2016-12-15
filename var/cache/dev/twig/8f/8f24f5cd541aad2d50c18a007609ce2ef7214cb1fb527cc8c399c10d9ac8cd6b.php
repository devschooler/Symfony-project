<?php

/* TDCinemaBundle::layout.html.twig */
class __TwigTemplate_1519f3b14e19f42b5231dc077237792ae0de7ba2de8fc8fb165bcaddf1193584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21ab37e4c1688579e826239fbe7e455bfd9ba59f8071231a0e62c4dcf98535f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ab37e4c1688579e826239fbe7e455bfd9ba59f8071231a0e62c4dcf98535f3->enter($__internal_21ab37e4c1688579e826239fbe7e455bfd9ba59f8071231a0e62c4dcf98535f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle::layout.html.twig"));

        $__internal_92fad305c64f1e66cc59d2d28b18f221168b5288e5574e9ed26c0aeef77fe76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fad305c64f1e66cc59d2d28b18f221168b5288e5574e9ed26c0aeef77fe76c->enter($__internal_92fad305c64f1e66cc59d2d28b18f221168b5288e5574e9ed26c0aeef77fe76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDCinemaBundle::layout.html.twig"));

        // line 1
        echo "<html>
<head>






    <meta charset=\"UTF-8\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
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
    ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "</div>
</body>

div class=\"container\">

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
        
        $__internal_21ab37e4c1688579e826239fbe7e455bfd9ba59f8071231a0e62c4dcf98535f3->leave($__internal_21ab37e4c1688579e826239fbe7e455bfd9ba59f8071231a0e62c4dcf98535f3_prof);

        
        $__internal_92fad305c64f1e66cc59d2d28b18f221168b5288e5574e9ed26c0aeef77fe76c->leave($__internal_92fad305c64f1e66cc59d2d28b18f221168b5288e5574e9ed26c0aeef77fe76c_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_e77d7ab182e8a5b50fcc0ad9c6a51a591fbbb5b649969c92d57509180e7889ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77d7ab182e8a5b50fcc0ad9c6a51a591fbbb5b649969c92d57509180e7889ec->enter($__internal_e77d7ab182e8a5b50fcc0ad9c6a51a591fbbb5b649969c92d57509180e7889ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3eddd28098f080db2aff1cdea26261bc5a7becb1013827f64cd1ced4dec3de8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eddd28098f080db2aff1cdea26261bc5a7becb1013827f64cd1ced4dec3de8a->enter($__internal_3eddd28098f080db2aff1cdea26261bc5a7becb1013827f64cd1ced4dec3de8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Devschool Cinema";
        
        $__internal_3eddd28098f080db2aff1cdea26261bc5a7becb1013827f64cd1ced4dec3de8a->leave($__internal_3eddd28098f080db2aff1cdea26261bc5a7becb1013827f64cd1ced4dec3de8a_prof);

        
        $__internal_e77d7ab182e8a5b50fcc0ad9c6a51a591fbbb5b649969c92d57509180e7889ec->leave($__internal_e77d7ab182e8a5b50fcc0ad9c6a51a591fbbb5b649969c92d57509180e7889ec_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_b91360c139e87b3685fddd9adb0751f72333feb9c80a292c97c3badb5f6993cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91360c139e87b3685fddd9adb0751f72333feb9c80a292c97c3badb5f6993cc->enter($__internal_b91360c139e87b3685fddd9adb0751f72333feb9c80a292c97c3badb5f6993cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eeebc8582a8e62271ca5f7b9b5c5e59379b844bf1183f98bf042cb4f327b6e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeebc8582a8e62271ca5f7b9b5c5e59379b844bf1183f98bf042cb4f327b6e4e->enter($__internal_eeebc8582a8e62271ca5f7b9b5c5e59379b844bf1183f98bf042cb4f327b6e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eeebc8582a8e62271ca5f7b9b5c5e59379b844bf1183f98bf042cb4f327b6e4e->leave($__internal_eeebc8582a8e62271ca5f7b9b5c5e59379b844bf1183f98bf042cb4f327b6e4e_prof);

        
        $__internal_b91360c139e87b3685fddd9adb0751f72333feb9c80a292c97c3badb5f6993cc->leave($__internal_b91360c139e87b3685fddd9adb0751f72333feb9c80a292c97c3badb5f6993cc_prof);

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
        return array (  167 => 71,  149 => 10,  107 => 72,  105 => 71,  42 => 11,  38 => 10,  27 => 1,);
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
    <title>{% block title %}Devschool Cinema{% endblock %}</title>
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
    {% block body %}{% endblock %}
</div>
</body>

div class=\"container\">

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
