<?php

/* TDAdminBundle:Genre:form.html.twig */
class __TwigTemplate_6232946698f2d52aaadd6961dae9b5afe5e61ef5e43fa459837fd556c296cedd extends Twig_Template
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
        $__internal_9372b584e69cbfadff0359eaf779d7020e0e4fcdfeeeba561d0037154c15ef05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9372b584e69cbfadff0359eaf779d7020e0e4fcdfeeeba561d0037154c15ef05->enter($__internal_9372b584e69cbfadff0359eaf779d7020e0e4fcdfeeeba561d0037154c15ef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Genre:form.html.twig"));

        $__internal_943590e4b149873ddc476308c1c14a1fcce252808b74d23ee640177581431c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943590e4b149873ddc476308c1c14a1fcce252808b74d23ee640177581431c94->enter($__internal_943590e4b149873ddc476308c1c14a1fcce252808b74d23ee640177581431c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TDAdminBundle:Genre:form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_9372b584e69cbfadff0359eaf779d7020e0e4fcdfeeeba561d0037154c15ef05->leave($__internal_9372b584e69cbfadff0359eaf779d7020e0e4fcdfeeeba561d0037154c15ef05_prof);

        
        $__internal_943590e4b149873ddc476308c1c14a1fcce252808b74d23ee640177581431c94->leave($__internal_943590e4b149873ddc476308c1c14a1fcce252808b74d23ee640177581431c94_prof);

    }

    public function getTemplateName()
    {
        return "TDAdminBundle:Genre:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}", "TDAdminBundle:Genre:form.html.twig", "/Applications/MAMP/htdocs/symfony-TD/src/TD/AdminBundle/Resources/views/Genre/form.html.twig");
    }
}
