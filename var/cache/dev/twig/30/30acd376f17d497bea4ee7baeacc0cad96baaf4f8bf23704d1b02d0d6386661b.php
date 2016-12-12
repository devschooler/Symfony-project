<?php

/* TDAdminBundle:Default:index.html.twig */
class __TwigTemplate_b8e99091f2cf572bfe3650146a747861ed23b1855b087307e422608600f71e08 extends Twig_Template
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
        $__internal_be17f86b5c01336e7f1338e7ee97a424348b4573d82ebca78ac5243f1db5a2c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be17f86b5c01336e7f1338e7ee97a424348b4573d82ebca78ac5243f1db5a2c5->enter($__internal_be17f86b5c01336e7f1338e7ee97a424348b4573d82ebca78ac5243f1db5a2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Default:index.html.twig"));

        $__internal_beb76b855ebe8fdf3b62504ea015092eacbda4a8fdf22d2cd7ba0f7f5f154f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb76b855ebe8fdf3b62504ea015092eacbda4a8fdf22d2cd7ba0f7f5f154f70->enter($__internal_beb76b855ebe8fdf3b62504ea015092eacbda4a8fdf22d2cd7ba0f7f5f154f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_be17f86b5c01336e7f1338e7ee97a424348b4573d82ebca78ac5243f1db5a2c5->leave($__internal_be17f86b5c01336e7f1338e7ee97a424348b4573d82ebca78ac5243f1db5a2c5_prof);

        
        $__internal_beb76b855ebe8fdf3b62504ea015092eacbda4a8fdf22d2cd7ba0f7f5f154f70->leave($__internal_beb76b855ebe8fdf3b62504ea015092eacbda4a8fdf22d2cd7ba0f7f5f154f70_prof);

    }

    public function getTemplateName()
    {
        return "TDAdminBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "TDAdminBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
