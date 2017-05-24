<?php

/* SonataAdminBundle::layout.html.twig */
class __TwigTemplate_c6a8248ecf206b5844d5cfc1cee9c723148d64d7ac28cd538f5617a96fe68818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "SonataAdminBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e73421e47f3d1d1c9a27bab51fca5501596963dde270e48911760d81d62fcf76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73421e47f3d1d1c9a27bab51fca5501596963dde270e48911760d81d62fcf76->enter($__internal_e73421e47f3d1d1c9a27bab51fca5501596963dde270e48911760d81d62fcf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e73421e47f3d1d1c9a27bab51fca5501596963dde270e48911760d81d62fcf76->leave($__internal_e73421e47f3d1d1c9a27bab51fca5501596963dde270e48911760d81d62fcf76_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40be8a3772f021961254a8634302aeb79eecc55a2605d7d9133266c6e9a68c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40be8a3772f021961254a8634302aeb79eecc55a2605d7d9133266c6e9a68c69->enter($__internal_40be8a3772f021961254a8634302aeb79eecc55a2605d7d9133266c6e9a68c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ui-lightness/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/color/colorpicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/sonata.css"), "html", null, true);
        echo "\"/>
    <style>
        .logo span{ display: none; }
    </style>
    ";
        // line 12
        if (array_key_exists("form", $context)) {
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'stylesheet');
        }
        
        $__internal_40be8a3772f021961254a8634302aeb79eecc55a2605d7d9133266c6e9a68c69->leave($__internal_40be8a3772f021961254a8634302aeb79eecc55a2605d7d9133266c6e9a68c69_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a648bd1939792cad5d28c14c02a7670a7a23ad78b76568274a52a7586c06381a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a648bd1939792cad5d28c14c02a7670a7a23ad78b76568274a52a7586c06381a->enter($__internal_a648bd1939792cad5d28c14c02a7670a7a23ad78b76568274a52a7586c06381a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        var _locale = \"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\";
    </script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/color/colorpicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lumenapp/js/admin/beaconManager.js"), "html", null, true);
        echo "\"></script>


    ";
        // line 25
        if (array_key_exists("form", $context)) {
            echo $this->env->getExtension('Genemu\Bundle\FormBundle\Twig\Extension\FormExtension')->renderJavascript(($context["form"] ?? $this->getContext($context, "form")));
        }
        // line 26
        echo "    
    ";
        // line 27
        $this->loadTemplate("ComurImageBundle:Form:croppable_image_modal.html.twig", "SonataAdminBundle::layout.html.twig", 27)->display(array_merge($context, array("include_jquery" => false, "include_bootstrap" => false)));
        // line 28
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

";
        // line 32
        echo "    
";
        // line 37
        echo "
    ";
        // line 38
        echo $this->env->getExtension('Lumen\ImportsBundle\Twig\Extension\LoadJavascriptExtension')->getJavascripts();
        echo "

";
        
        $__internal_a648bd1939792cad5d28c14c02a7670a7a23ad78b76568274a52a7586c06381a->leave($__internal_a648bd1939792cad5d28c14c02a7670a7a23ad78b76568274a52a7586c06381a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 38,  121 => 37,  118 => 32,  113 => 29,  108 => 28,  106 => 27,  103 => 26,  99 => 25,  93 => 22,  89 => 21,  84 => 19,  77 => 16,  71 => 15,  62 => 12,  55 => 8,  51 => 7,  46 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle::standard_layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    {#    <link rel=\"stylesheet\" href=\"{{ asset('css/fix-admin.css') }}\" type=\"text/css\" media=\"all\" />#}
    <link href=\"{{ asset('css/ui-lightness/jquery-ui-1.8.16.custom.css') }}\" rel=\"stylesheet\" />
    <link type=\"text/css\" href=\"{{ asset('/css/color/colorpicker.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('/css/sonata.css') }}\"/>
    <style>
        .logo span{ display: none; }
    </style>
    {% if form is defined %}{{ form_stylesheet(form) }}{% endif %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        var _locale = \"{{ app.request.locale }}\";
    </script>
    <script src=\"{{ asset('/js/color/colorpicker.js') }}\"></script>
    <script src=\"{{ asset('bundles/lumenapp/js/admin/beaconManager.js') }}\"></script>


    {% if form is defined %}{{ form_javascript(form) }}{% endif %}
    
    {% include \"ComurImageBundle:Form:croppable_image_modal.html.twig\" with {'include_jquery': false, 'include_bootstrap': false} %}
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>

{#    Configuracion de assetic de bundles que son opcionales. Descomentar si es requeido#}
    
{#    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>#}
{#    <script src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>#}
{#    <script src=\"{{ asset('bundles/bazingajstranslation/js/translator.min.js') }}\"></script>#}
{#    <script src=\"{{ url('bazinga_jstranslation_js') }}?locales={{ app.request.locale }}\"></script>#}

    {{ getJavascripts() }}

{% endblock %}", "SonataAdminBundle::layout.html.twig", "/Users/mj/Desktop/beaker/app/Resources/SonataAdminBundle/views/layout.html.twig");
    }
}
