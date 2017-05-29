<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_229e84f8c7de4ac50c6cd868cb7381deef4c2a8078ede2e5a6d11600b0a49a62 extends Twig_Template
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
        $__internal_ebd62b1a16ec1d3a2d0a1699c5ddf4c9e3c1423324706582cb03dcb042e2f801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd62b1a16ec1d3a2d0a1699c5ddf4c9e3c1423324706582cb03dcb042e2f801->enter($__internal_ebd62b1a16ec1d3a2d0a1699c5ddf4c9e3c1423324706582cb03dcb042e2f801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd62b1a16ec1d3a2d0a1699c5ddf4c9e3c1423324706582cb03dcb042e2f801->leave($__internal_ebd62b1a16ec1d3a2d0a1699c5ddf4c9e3c1423324706582cb03dcb042e2f801_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6f9520d177f4cb85466d25ed028053a726132b1a37211d89755b494bb7e373c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f9520d177f4cb85466d25ed028053a726132b1a37211d89755b494bb7e373c->enter($__internal_a6f9520d177f4cb85466d25ed028053a726132b1a37211d89755b494bb7e373c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6f9520d177f4cb85466d25ed028053a726132b1a37211d89755b494bb7e373c->leave($__internal_a6f9520d177f4cb85466d25ed028053a726132b1a37211d89755b494bb7e373c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a3b982422ac4108a6a615554f6d79b7a5e72e9d03e1e46004552f8ba3d26e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3b982422ac4108a6a615554f6d79b7a5e72e9d03e1e46004552f8ba3d26e3d->enter($__internal_7a3b982422ac4108a6a615554f6d79b7a5e72e9d03e1e46004552f8ba3d26e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7a3b982422ac4108a6a615554f6d79b7a5e72e9d03e1e46004552f8ba3d26e3d->leave($__internal_7a3b982422ac4108a6a615554f6d79b7a5e72e9d03e1e46004552f8ba3d26e3d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53ded4ce97fb0dab69b31d9c90e2b11625c2f01fff9de3cbb3db7c4a36ff686e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ded4ce97fb0dab69b31d9c90e2b11625c2f01fff9de3cbb3db7c4a36ff686e->enter($__internal_53ded4ce97fb0dab69b31d9c90e2b11625c2f01fff9de3cbb3db7c4a36ff686e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_53ded4ce97fb0dab69b31d9c90e2b11625c2f01fff9de3cbb3db7c4a36ff686e->leave($__internal_53ded4ce97fb0dab69b31d9c90e2b11625c2f01fff9de3cbb3db7c4a36ff686e_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "/Users/mj/Desktop/beaker/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
