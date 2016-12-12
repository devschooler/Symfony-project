<?php

/* base.html.twig */
class __TwigTemplate_aaf45c8da57d285aa777f0415e3ffbeedb7bff7374a3c066dcc4b3bfa36c7258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f5449dc231a03dea8b9745b40f07ef40f9f2b85b6f7eba0fddb1f00d16cf924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5449dc231a03dea8b9745b40f07ef40f9f2b85b6f7eba0fddb1f00d16cf924->enter($__internal_7f5449dc231a03dea8b9745b40f07ef40f9f2b85b6f7eba0fddb1f00d16cf924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bc5797fbc0e2ca31328721041adc448ef49de5f5496eb8bb9a8071f5b47bfad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5797fbc0e2ca31328721041adc448ef49de5f5496eb8bb9a8071f5b47bfad2->enter($__internal_bc5797fbc0e2ca31328721041adc448ef49de5f5496eb8bb9a8071f5b47bfad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7f5449dc231a03dea8b9745b40f07ef40f9f2b85b6f7eba0fddb1f00d16cf924->leave($__internal_7f5449dc231a03dea8b9745b40f07ef40f9f2b85b6f7eba0fddb1f00d16cf924_prof);

        
        $__internal_bc5797fbc0e2ca31328721041adc448ef49de5f5496eb8bb9a8071f5b47bfad2->leave($__internal_bc5797fbc0e2ca31328721041adc448ef49de5f5496eb8bb9a8071f5b47bfad2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d72a0e4a934b02e783da0d0a3a4866f4250845d2a0a170a9902f58e1450f7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d72a0e4a934b02e783da0d0a3a4866f4250845d2a0a170a9902f58e1450f7be->enter($__internal_1d72a0e4a934b02e783da0d0a3a4866f4250845d2a0a170a9902f58e1450f7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98a4b8cbec8305ba88485c98cc0ebd8409adc43a3eae04e3d774d7ab02f1848a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a4b8cbec8305ba88485c98cc0ebd8409adc43a3eae04e3d774d7ab02f1848a->enter($__internal_98a4b8cbec8305ba88485c98cc0ebd8409adc43a3eae04e3d774d7ab02f1848a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_98a4b8cbec8305ba88485c98cc0ebd8409adc43a3eae04e3d774d7ab02f1848a->leave($__internal_98a4b8cbec8305ba88485c98cc0ebd8409adc43a3eae04e3d774d7ab02f1848a_prof);

        
        $__internal_1d72a0e4a934b02e783da0d0a3a4866f4250845d2a0a170a9902f58e1450f7be->leave($__internal_1d72a0e4a934b02e783da0d0a3a4866f4250845d2a0a170a9902f58e1450f7be_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ed341a3f7601cb8adb8442ebd0395719fa6bdde42e3e702c0f9bf13228a39c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed341a3f7601cb8adb8442ebd0395719fa6bdde42e3e702c0f9bf13228a39c9->enter($__internal_6ed341a3f7601cb8adb8442ebd0395719fa6bdde42e3e702c0f9bf13228a39c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f20c6b487c6c7c1de6f532a0a3fb54623c1d13e3d1293534cf8f9b65caaa25eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20c6b487c6c7c1de6f532a0a3fb54623c1d13e3d1293534cf8f9b65caaa25eb->enter($__internal_f20c6b487c6c7c1de6f532a0a3fb54623c1d13e3d1293534cf8f9b65caaa25eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f20c6b487c6c7c1de6f532a0a3fb54623c1d13e3d1293534cf8f9b65caaa25eb->leave($__internal_f20c6b487c6c7c1de6f532a0a3fb54623c1d13e3d1293534cf8f9b65caaa25eb_prof);

        
        $__internal_6ed341a3f7601cb8adb8442ebd0395719fa6bdde42e3e702c0f9bf13228a39c9->leave($__internal_6ed341a3f7601cb8adb8442ebd0395719fa6bdde42e3e702c0f9bf13228a39c9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_17f4a64f823ed0b18a1610326100ea5f0a2bc86239e26e55184ab7c7730c1d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f4a64f823ed0b18a1610326100ea5f0a2bc86239e26e55184ab7c7730c1d2b->enter($__internal_17f4a64f823ed0b18a1610326100ea5f0a2bc86239e26e55184ab7c7730c1d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_078594c7fc2a31333301e2417a9d4c9062a47436d72867ff83c197063ecbfd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078594c7fc2a31333301e2417a9d4c9062a47436d72867ff83c197063ecbfd4f->enter($__internal_078594c7fc2a31333301e2417a9d4c9062a47436d72867ff83c197063ecbfd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_078594c7fc2a31333301e2417a9d4c9062a47436d72867ff83c197063ecbfd4f->leave($__internal_078594c7fc2a31333301e2417a9d4c9062a47436d72867ff83c197063ecbfd4f_prof);

        
        $__internal_17f4a64f823ed0b18a1610326100ea5f0a2bc86239e26e55184ab7c7730c1d2b->leave($__internal_17f4a64f823ed0b18a1610326100ea5f0a2bc86239e26e55184ab7c7730c1d2b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f46c5c43c2c07e842e79300e3b944f7b460b6aaec42a7194be27110d95ef21e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f46c5c43c2c07e842e79300e3b944f7b460b6aaec42a7194be27110d95ef21e->enter($__internal_6f46c5c43c2c07e842e79300e3b944f7b460b6aaec42a7194be27110d95ef21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1ecd695de81b06a3d549d5c778de4a281bc98e2143e1e7f275f94d72fe08607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ecd695de81b06a3d549d5c778de4a281bc98e2143e1e7f275f94d72fe08607->enter($__internal_c1ecd695de81b06a3d549d5c778de4a281bc98e2143e1e7f275f94d72fe08607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c1ecd695de81b06a3d549d5c778de4a281bc98e2143e1e7f275f94d72fe08607->leave($__internal_c1ecd695de81b06a3d549d5c778de4a281bc98e2143e1e7f275f94d72fe08607_prof);

        
        $__internal_6f46c5c43c2c07e842e79300e3b944f7b460b6aaec42a7194be27110d95ef21e->leave($__internal_6f46c5c43c2c07e842e79300e3b944f7b460b6aaec42a7194be27110d95ef21e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/MovieSymfo/app/Resources/views/base.html.twig");
    }
}
