<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_bbdb6ac577f2f8cad24009486eb1e85afdd4d4da031e0652460cf0201ae9ba3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d2c00a8d70f4096186257fc4aa6453688e1fe691a00849c10d64ee346a08f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2c00a8d70f4096186257fc4aa6453688e1fe691a00849c10d64ee346a08f18->enter($__internal_6d2c00a8d70f4096186257fc4aa6453688e1fe691a00849c10d64ee346a08f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_87e898d9a113898b3b78ba0b67d41ae1a300f83026cd921a116622e652a9a699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e898d9a113898b3b78ba0b67d41ae1a300f83026cd921a116622e652a9a699->enter($__internal_87e898d9a113898b3b78ba0b67d41ae1a300f83026cd921a116622e652a9a699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d2c00a8d70f4096186257fc4aa6453688e1fe691a00849c10d64ee346a08f18->leave($__internal_6d2c00a8d70f4096186257fc4aa6453688e1fe691a00849c10d64ee346a08f18_prof);

        
        $__internal_87e898d9a113898b3b78ba0b67d41ae1a300f83026cd921a116622e652a9a699->leave($__internal_87e898d9a113898b3b78ba0b67d41ae1a300f83026cd921a116622e652a9a699_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4221e1cd7cca23b2bcb6b845e194395294b1dfbe5f396533a37b657cad89b809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4221e1cd7cca23b2bcb6b845e194395294b1dfbe5f396533a37b657cad89b809->enter($__internal_4221e1cd7cca23b2bcb6b845e194395294b1dfbe5f396533a37b657cad89b809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4f31b763281b31c7ba7d2eacc1987cf74df5c04033cb1c2af44d9d42a2ec5017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f31b763281b31c7ba7d2eacc1987cf74df5c04033cb1c2af44d9d42a2ec5017->enter($__internal_4f31b763281b31c7ba7d2eacc1987cf74df5c04033cb1c2af44d9d42a2ec5017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4f31b763281b31c7ba7d2eacc1987cf74df5c04033cb1c2af44d9d42a2ec5017->leave($__internal_4f31b763281b31c7ba7d2eacc1987cf74df5c04033cb1c2af44d9d42a2ec5017_prof);

        
        $__internal_4221e1cd7cca23b2bcb6b845e194395294b1dfbe5f396533a37b657cad89b809->leave($__internal_4221e1cd7cca23b2bcb6b845e194395294b1dfbe5f396533a37b657cad89b809_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d20c76743400b89321e57bd96432a65497f75243fec8c9375f7c65b2706d9002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20c76743400b89321e57bd96432a65497f75243fec8c9375f7c65b2706d9002->enter($__internal_d20c76743400b89321e57bd96432a65497f75243fec8c9375f7c65b2706d9002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d8eb9dc4d8d0bb27640567f2006d12d59e10211e915242d9decf6aed115693a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8eb9dc4d8d0bb27640567f2006d12d59e10211e915242d9decf6aed115693a->enter($__internal_1d8eb9dc4d8d0bb27640567f2006d12d59e10211e915242d9decf6aed115693a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_1d8eb9dc4d8d0bb27640567f2006d12d59e10211e915242d9decf6aed115693a->leave($__internal_1d8eb9dc4d8d0bb27640567f2006d12d59e10211e915242d9decf6aed115693a_prof);

        
        $__internal_d20c76743400b89321e57bd96432a65497f75243fec8c9375f7c65b2706d9002->leave($__internal_d20c76743400b89321e57bd96432a65497f75243fec8c9375f7c65b2706d9002_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Applications/MAMP/htdocs/symfony-TD/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
