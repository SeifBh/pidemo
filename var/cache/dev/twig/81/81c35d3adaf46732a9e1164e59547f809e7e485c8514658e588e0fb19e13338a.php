<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_89fb9a45f51f49d5af574942310dcaf0059ff1fd7a118b07085879ec809a26c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_644993fceffefb5195208d4083070eef300c412832cee3f8e8d4fdadbfef8052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644993fceffefb5195208d4083070eef300c412832cee3f8e8d4fdadbfef8052->enter($__internal_644993fceffefb5195208d4083070eef300c412832cee3f8e8d4fdadbfef8052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_17a6a7516e613a3ab7bda326fb0de0be8b4c5774e2f3ca3945286d838440bf6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a6a7516e613a3ab7bda326fb0de0be8b4c5774e2f3ca3945286d838440bf6a->enter($__internal_17a6a7516e613a3ab7bda326fb0de0be8b4c5774e2f3ca3945286d838440bf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_644993fceffefb5195208d4083070eef300c412832cee3f8e8d4fdadbfef8052->leave($__internal_644993fceffefb5195208d4083070eef300c412832cee3f8e8d4fdadbfef8052_prof);

        
        $__internal_17a6a7516e613a3ab7bda326fb0de0be8b4c5774e2f3ca3945286d838440bf6a->leave($__internal_17a6a7516e613a3ab7bda326fb0de0be8b4c5774e2f3ca3945286d838440bf6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b583481d9fa009cf610f690e3eee8f9450ad4f4d91166d4c96b72c467f6f652a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b583481d9fa009cf610f690e3eee8f9450ad4f4d91166d4c96b72c467f6f652a->enter($__internal_b583481d9fa009cf610f690e3eee8f9450ad4f4d91166d4c96b72c467f6f652a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_015110ddfa2272e6ea4336303246e787f0c1583f580708a3876ce06d46a8141d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015110ddfa2272e6ea4336303246e787f0c1583f580708a3876ce06d46a8141d->enter($__internal_015110ddfa2272e6ea4336303246e787f0c1583f580708a3876ce06d46a8141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_015110ddfa2272e6ea4336303246e787f0c1583f580708a3876ce06d46a8141d->leave($__internal_015110ddfa2272e6ea4336303246e787f0c1583f580708a3876ce06d46a8141d_prof);

        
        $__internal_b583481d9fa009cf610f690e3eee8f9450ad4f4d91166d4c96b72c467f6f652a->leave($__internal_b583481d9fa009cf610f690e3eee8f9450ad4f4d91166d4c96b72c467f6f652a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b22bd618e3444406464526eae8ead80a07a547743bc0ba456bdb6d8c4d6e393a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22bd618e3444406464526eae8ead80a07a547743bc0ba456bdb6d8c4d6e393a->enter($__internal_b22bd618e3444406464526eae8ead80a07a547743bc0ba456bdb6d8c4d6e393a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6fbcd0dfcefbea8c69e990066e799bec34bc72d2f7f9ec61638d758ad7dbb13b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbcd0dfcefbea8c69e990066e799bec34bc72d2f7f9ec61638d758ad7dbb13b->enter($__internal_6fbcd0dfcefbea8c69e990066e799bec34bc72d2f7f9ec61638d758ad7dbb13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6fbcd0dfcefbea8c69e990066e799bec34bc72d2f7f9ec61638d758ad7dbb13b->leave($__internal_6fbcd0dfcefbea8c69e990066e799bec34bc72d2f7f9ec61638d758ad7dbb13b_prof);

        
        $__internal_b22bd618e3444406464526eae8ead80a07a547743bc0ba456bdb6d8c4d6e393a->leave($__internal_b22bd618e3444406464526eae8ead80a07a547743bc0ba456bdb6d8c4d6e393a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02cd16e1edd556a8625e607181176d939b69de715fb3cfbcca2fa439f048ce00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cd16e1edd556a8625e607181176d939b69de715fb3cfbcca2fa439f048ce00->enter($__internal_02cd16e1edd556a8625e607181176d939b69de715fb3cfbcca2fa439f048ce00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fe86d421fe09fc5d616bf46ac5e520ef0015ec22f7ae671bc37f0561ea54d5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe86d421fe09fc5d616bf46ac5e520ef0015ec22f7ae671bc37f0561ea54d5d9->enter($__internal_fe86d421fe09fc5d616bf46ac5e520ef0015ec22f7ae671bc37f0561ea54d5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_fe86d421fe09fc5d616bf46ac5e520ef0015ec22f7ae671bc37f0561ea54d5d9->leave($__internal_fe86d421fe09fc5d616bf46ac5e520ef0015ec22f7ae671bc37f0561ea54d5d9_prof);

        
        $__internal_02cd16e1edd556a8625e607181176d939b69de715fb3cfbcca2fa439f048ce00->leave($__internal_02cd16e1edd556a8625e607181176d939b69de715fb3cfbcca2fa439f048ce00_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\pidemo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
