<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8745b4e6e79a9308f51a7271e874c46dc3764c59eba4550a4332688b528829ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f9db7bd5cd95226dcdba88e037d0a7659207e8e3f7cef51e8d77aa1f9a894db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9db7bd5cd95226dcdba88e037d0a7659207e8e3f7cef51e8d77aa1f9a894db->enter($__internal_5f9db7bd5cd95226dcdba88e037d0a7659207e8e3f7cef51e8d77aa1f9a894db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_48b93b3cb44fbace97218bc9f2dcf2cdb2c4404caf3da6587e7cc295287cedb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b93b3cb44fbace97218bc9f2dcf2cdb2c4404caf3da6587e7cc295287cedb0->enter($__internal_48b93b3cb44fbace97218bc9f2dcf2cdb2c4404caf3da6587e7cc295287cedb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f9db7bd5cd95226dcdba88e037d0a7659207e8e3f7cef51e8d77aa1f9a894db->leave($__internal_5f9db7bd5cd95226dcdba88e037d0a7659207e8e3f7cef51e8d77aa1f9a894db_prof);

        
        $__internal_48b93b3cb44fbace97218bc9f2dcf2cdb2c4404caf3da6587e7cc295287cedb0->leave($__internal_48b93b3cb44fbace97218bc9f2dcf2cdb2c4404caf3da6587e7cc295287cedb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9eaa6ddef5e3cdd9a3acbd8ffe6422b9a919be548da3355ba9a2405bf59695e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eaa6ddef5e3cdd9a3acbd8ffe6422b9a919be548da3355ba9a2405bf59695e0->enter($__internal_9eaa6ddef5e3cdd9a3acbd8ffe6422b9a919be548da3355ba9a2405bf59695e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3f8668f10848daa63b2ec4467281ca947c2c2127df5d231305c7bfb377f13429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8668f10848daa63b2ec4467281ca947c2c2127df5d231305c7bfb377f13429->enter($__internal_3f8668f10848daa63b2ec4467281ca947c2c2127df5d231305c7bfb377f13429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3f8668f10848daa63b2ec4467281ca947c2c2127df5d231305c7bfb377f13429->leave($__internal_3f8668f10848daa63b2ec4467281ca947c2c2127df5d231305c7bfb377f13429_prof);

        
        $__internal_9eaa6ddef5e3cdd9a3acbd8ffe6422b9a919be548da3355ba9a2405bf59695e0->leave($__internal_9eaa6ddef5e3cdd9a3acbd8ffe6422b9a919be548da3355ba9a2405bf59695e0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_174a74cf67305c636ab2e0f2f518798a8dbb5b2fc3e61f81afa4b72abad65694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174a74cf67305c636ab2e0f2f518798a8dbb5b2fc3e61f81afa4b72abad65694->enter($__internal_174a74cf67305c636ab2e0f2f518798a8dbb5b2fc3e61f81afa4b72abad65694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_042b82286d2c0844e590a3be531c5e4d05645f8c11676211706a3af12f7b0c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042b82286d2c0844e590a3be531c5e4d05645f8c11676211706a3af12f7b0c5d->enter($__internal_042b82286d2c0844e590a3be531c5e4d05645f8c11676211706a3af12f7b0c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_042b82286d2c0844e590a3be531c5e4d05645f8c11676211706a3af12f7b0c5d->leave($__internal_042b82286d2c0844e590a3be531c5e4d05645f8c11676211706a3af12f7b0c5d_prof);

        
        $__internal_174a74cf67305c636ab2e0f2f518798a8dbb5b2fc3e61f81afa4b72abad65694->leave($__internal_174a74cf67305c636ab2e0f2f518798a8dbb5b2fc3e61f81afa4b72abad65694_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_81fdf056ae22fe6ed9226a48f94c29dc3822dbf6ca9c4b84e3d0bc7449afc54b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fdf056ae22fe6ed9226a48f94c29dc3822dbf6ca9c4b84e3d0bc7449afc54b->enter($__internal_81fdf056ae22fe6ed9226a48f94c29dc3822dbf6ca9c4b84e3d0bc7449afc54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5a331755c42a2b057e1c31fdc704c1294128e084c6cf7cd936173b17cb42ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a331755c42a2b057e1c31fdc704c1294128e084c6cf7cd936173b17cb42ebe->enter($__internal_b5a331755c42a2b057e1c31fdc704c1294128e084c6cf7cd936173b17cb42ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b5a331755c42a2b057e1c31fdc704c1294128e084c6cf7cd936173b17cb42ebe->leave($__internal_b5a331755c42a2b057e1c31fdc704c1294128e084c6cf7cd936173b17cb42ebe_prof);

        
        $__internal_81fdf056ae22fe6ed9226a48f94c29dc3822dbf6ca9c4b84e3d0bc7449afc54b->leave($__internal_81fdf056ae22fe6ed9226a48f94c29dc3822dbf6ca9c4b84e3d0bc7449afc54b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/symfony-TD/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
