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
        $__internal_ac63d243b9dcffb38ccac0c10ec38a776487ca8f3c85382327c4d4252de63aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac63d243b9dcffb38ccac0c10ec38a776487ca8f3c85382327c4d4252de63aa1->enter($__internal_ac63d243b9dcffb38ccac0c10ec38a776487ca8f3c85382327c4d4252de63aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac63d243b9dcffb38ccac0c10ec38a776487ca8f3c85382327c4d4252de63aa1->leave($__internal_ac63d243b9dcffb38ccac0c10ec38a776487ca8f3c85382327c4d4252de63aa1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad0fc294f91c3fc51cc5cf465080d1d362ff7fab888011d027dee3fbbac1f893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0fc294f91c3fc51cc5cf465080d1d362ff7fab888011d027dee3fbbac1f893->enter($__internal_ad0fc294f91c3fc51cc5cf465080d1d362ff7fab888011d027dee3fbbac1f893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad0fc294f91c3fc51cc5cf465080d1d362ff7fab888011d027dee3fbbac1f893->leave($__internal_ad0fc294f91c3fc51cc5cf465080d1d362ff7fab888011d027dee3fbbac1f893_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_945ed9ff29e1a2312a973f72808c841479269a53329dbb8ec0bcc2f3bef5d65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945ed9ff29e1a2312a973f72808c841479269a53329dbb8ec0bcc2f3bef5d65a->enter($__internal_945ed9ff29e1a2312a973f72808c841479269a53329dbb8ec0bcc2f3bef5d65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_945ed9ff29e1a2312a973f72808c841479269a53329dbb8ec0bcc2f3bef5d65a->leave($__internal_945ed9ff29e1a2312a973f72808c841479269a53329dbb8ec0bcc2f3bef5d65a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d731fd2d5340167e91346b01243575ca396252230df2adc6b30d21e8f3f93c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d731fd2d5340167e91346b01243575ca396252230df2adc6b30d21e8f3f93c2->enter($__internal_3d731fd2d5340167e91346b01243575ca396252230df2adc6b30d21e8f3f93c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3d731fd2d5340167e91346b01243575ca396252230df2adc6b30d21e8f3f93c2->leave($__internal_3d731fd2d5340167e91346b01243575ca396252230df2adc6b30d21e8f3f93c2_prof);

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
