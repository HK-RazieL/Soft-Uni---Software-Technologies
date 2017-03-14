<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bfa6d0318c215d26ccc391bed9f03f4078918941f5f5959ea6e8cb952947334f extends Twig_Template
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
        $__internal_566e912fe37198fc5c6da8c0c9b08731ff9205aa030c063f69a7fe0df02a0384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566e912fe37198fc5c6da8c0c9b08731ff9205aa030c063f69a7fe0df02a0384->enter($__internal_566e912fe37198fc5c6da8c0c9b08731ff9205aa030c063f69a7fe0df02a0384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_566e912fe37198fc5c6da8c0c9b08731ff9205aa030c063f69a7fe0df02a0384->leave($__internal_566e912fe37198fc5c6da8c0c9b08731ff9205aa030c063f69a7fe0df02a0384_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e88bbe2e47364fb150786697ddae61b3f0d4171237315f177d42233cbe26fa8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88bbe2e47364fb150786697ddae61b3f0d4171237315f177d42233cbe26fa8a->enter($__internal_e88bbe2e47364fb150786697ddae61b3f0d4171237315f177d42233cbe26fa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e88bbe2e47364fb150786697ddae61b3f0d4171237315f177d42233cbe26fa8a->leave($__internal_e88bbe2e47364fb150786697ddae61b3f0d4171237315f177d42233cbe26fa8a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c6501a9ae35bf40fb60a36f0876e6a2b5c600d5f6aa5103014621c51db88f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6501a9ae35bf40fb60a36f0876e6a2b5c600d5f6aa5103014621c51db88f9f->enter($__internal_3c6501a9ae35bf40fb60a36f0876e6a2b5c600d5f6aa5103014621c51db88f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3c6501a9ae35bf40fb60a36f0876e6a2b5c600d5f6aa5103014621c51db88f9f->leave($__internal_3c6501a9ae35bf40fb60a36f0876e6a2b5c600d5f6aa5103014621c51db88f9f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d12621143f6c9148fd37ffc8a7631f4ff35ee8d2fa6909f09c587791831a1d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12621143f6c9148fd37ffc8a7631f4ff35ee8d2fa6909f09c587791831a1d84->enter($__internal_d12621143f6c9148fd37ffc8a7631f4ff35ee8d2fa6909f09c587791831a1d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d12621143f6c9148fd37ffc8a7631f4ff35ee8d2fa6909f09c587791831a1d84->leave($__internal_d12621143f6c9148fd37ffc8a7631f4ff35ee8d2fa6909f09c587791831a1d84_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
