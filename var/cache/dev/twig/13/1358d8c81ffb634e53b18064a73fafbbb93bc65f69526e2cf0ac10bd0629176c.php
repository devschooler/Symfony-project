<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a707adfc2248b26ad5284277ac828072e9b68f026f153f698d1d327102dba3aa extends Twig_Template
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
        $__internal_d25dee8e6f406495060cc36165a81787f97d4d5619ca4e8621b74b9008bec047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25dee8e6f406495060cc36165a81787f97d4d5619ca4e8621b74b9008bec047->enter($__internal_d25dee8e6f406495060cc36165a81787f97d4d5619ca4e8621b74b9008bec047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ac90fc6ceee474ff22fc0c88b98abebafbb0777c8d938e3185b80b561cfe8853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac90fc6ceee474ff22fc0c88b98abebafbb0777c8d938e3185b80b561cfe8853->enter($__internal_ac90fc6ceee474ff22fc0c88b98abebafbb0777c8d938e3185b80b561cfe8853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d25dee8e6f406495060cc36165a81787f97d4d5619ca4e8621b74b9008bec047->leave($__internal_d25dee8e6f406495060cc36165a81787f97d4d5619ca4e8621b74b9008bec047_prof);

        
        $__internal_ac90fc6ceee474ff22fc0c88b98abebafbb0777c8d938e3185b80b561cfe8853->leave($__internal_ac90fc6ceee474ff22fc0c88b98abebafbb0777c8d938e3185b80b561cfe8853_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bd68a998b2aa430220f17274902a6577b5f3b04fa461edb041e95ac196a6dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd68a998b2aa430220f17274902a6577b5f3b04fa461edb041e95ac196a6dd4->enter($__internal_3bd68a998b2aa430220f17274902a6577b5f3b04fa461edb041e95ac196a6dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_44eb36a14a6ab0edc0856ee46c5265312d45378f2b886b9fa1d91bd95c51b4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44eb36a14a6ab0edc0856ee46c5265312d45378f2b886b9fa1d91bd95c51b4ab->enter($__internal_44eb36a14a6ab0edc0856ee46c5265312d45378f2b886b9fa1d91bd95c51b4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_44eb36a14a6ab0edc0856ee46c5265312d45378f2b886b9fa1d91bd95c51b4ab->leave($__internal_44eb36a14a6ab0edc0856ee46c5265312d45378f2b886b9fa1d91bd95c51b4ab_prof);

        
        $__internal_3bd68a998b2aa430220f17274902a6577b5f3b04fa461edb041e95ac196a6dd4->leave($__internal_3bd68a998b2aa430220f17274902a6577b5f3b04fa461edb041e95ac196a6dd4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_54eb30a94138d9159a9ab095f2e74293952ee1167a71389a2fff1218b644e348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54eb30a94138d9159a9ab095f2e74293952ee1167a71389a2fff1218b644e348->enter($__internal_54eb30a94138d9159a9ab095f2e74293952ee1167a71389a2fff1218b644e348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_425955871282edae271d5e230d62a199e77856aaa6eed82bb52f95deba1f076a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425955871282edae271d5e230d62a199e77856aaa6eed82bb52f95deba1f076a->enter($__internal_425955871282edae271d5e230d62a199e77856aaa6eed82bb52f95deba1f076a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_425955871282edae271d5e230d62a199e77856aaa6eed82bb52f95deba1f076a->leave($__internal_425955871282edae271d5e230d62a199e77856aaa6eed82bb52f95deba1f076a_prof);

        
        $__internal_54eb30a94138d9159a9ab095f2e74293952ee1167a71389a2fff1218b644e348->leave($__internal_54eb30a94138d9159a9ab095f2e74293952ee1167a71389a2fff1218b644e348_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb0f3f034608a28b03aba265dcd1eb3d5f64062fd18efd01a80068841acca22a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0f3f034608a28b03aba265dcd1eb3d5f64062fd18efd01a80068841acca22a->enter($__internal_eb0f3f034608a28b03aba265dcd1eb3d5f64062fd18efd01a80068841acca22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c07a9cf5d062dd6d2de4561449b8e3a0030b895b5d99bb89c4247434ed4b536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c07a9cf5d062dd6d2de4561449b8e3a0030b895b5d99bb89c4247434ed4b536->enter($__internal_7c07a9cf5d062dd6d2de4561449b8e3a0030b895b5d99bb89c4247434ed4b536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7c07a9cf5d062dd6d2de4561449b8e3a0030b895b5d99bb89c4247434ed4b536->leave($__internal_7c07a9cf5d062dd6d2de4561449b8e3a0030b895b5d99bb89c4247434ed4b536_prof);

        
        $__internal_eb0f3f034608a28b03aba265dcd1eb3d5f64062fd18efd01a80068841acca22a->leave($__internal_eb0f3f034608a28b03aba265dcd1eb3d5f64062fd18efd01a80068841acca22a_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/MovieSymfo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
