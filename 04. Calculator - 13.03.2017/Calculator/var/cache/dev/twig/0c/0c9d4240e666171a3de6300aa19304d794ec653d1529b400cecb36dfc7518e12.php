<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_22dca1fe0e801ce678f209597af9fb3b876c8ad3a27a69e564b19c7fbf402dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_cd3b4abc55c09f383d7fbcd51b62d16d06fe80cf882944bd5dae6503d5d9f65d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3b4abc55c09f383d7fbcd51b62d16d06fe80cf882944bd5dae6503d5d9f65d->enter($__internal_cd3b4abc55c09f383d7fbcd51b62d16d06fe80cf882944bd5dae6503d5d9f65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd3b4abc55c09f383d7fbcd51b62d16d06fe80cf882944bd5dae6503d5d9f65d->leave($__internal_cd3b4abc55c09f383d7fbcd51b62d16d06fe80cf882944bd5dae6503d5d9f65d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7265e49dc38950df5ab85034dd1f151047421fa4ab8b7fe427718f00f2c2d3d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7265e49dc38950df5ab85034dd1f151047421fa4ab8b7fe427718f00f2c2d3d5->enter($__internal_7265e49dc38950df5ab85034dd1f151047421fa4ab8b7fe427718f00f2c2d3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7265e49dc38950df5ab85034dd1f151047421fa4ab8b7fe427718f00f2c2d3d5->leave($__internal_7265e49dc38950df5ab85034dd1f151047421fa4ab8b7fe427718f00f2c2d3d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1c3426eb6ab82ca415949040e9ceb514624f2cb9613dbe4d09eede6f749e620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c3426eb6ab82ca415949040e9ceb514624f2cb9613dbe4d09eede6f749e620->enter($__internal_e1c3426eb6ab82ca415949040e9ceb514624f2cb9613dbe4d09eede6f749e620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1c3426eb6ab82ca415949040e9ceb514624f2cb9613dbe4d09eede6f749e620->leave($__internal_e1c3426eb6ab82ca415949040e9ceb514624f2cb9613dbe4d09eede6f749e620_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cf9250a5c729499c42dd99516b04f5f6283a39e987a5eb70a1e90478f1dde6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf9250a5c729499c42dd99516b04f5f6283a39e987a5eb70a1e90478f1dde6f->enter($__internal_3cf9250a5c729499c42dd99516b04f5f6283a39e987a5eb70a1e90478f1dde6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3cf9250a5c729499c42dd99516b04f5f6283a39e987a5eb70a1e90478f1dde6f->leave($__internal_3cf9250a5c729499c42dd99516b04f5f6283a39e987a5eb70a1e90478f1dde6f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
