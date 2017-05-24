<?php

/* LumenAppBundle:Default:index.html.twig */
class __TwigTemplate_8ef3c49c1df93d6908cb43f0ef142e4e42711a5fbf7d736b218abd6bae12a5bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "LumenAppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'scripts2' => array($this, 'block_scripts2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3db4bf1ef40b1a63dcb406d5a07e8cd0e846a7bb651cbcca52d9ab262ec3abe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db4bf1ef40b1a63dcb406d5a07e8cd0e846a7bb651cbcca52d9ab262ec3abe9->enter($__internal_3db4bf1ef40b1a63dcb406d5a07e8cd0e846a7bb651cbcca52d9ab262ec3abe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LumenAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3db4bf1ef40b1a63dcb406d5a07e8cd0e846a7bb651cbcca52d9ab262ec3abe9->leave($__internal_3db4bf1ef40b1a63dcb406d5a07e8cd0e846a7bb651cbcca52d9ab262ec3abe9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_30bbf2e412a1ee5ac6ff8fa96a5aafecd5a5852cef743ec449574e2767bf0a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bbf2e412a1ee5ac6ff8fa96a5aafecd5a5852cef743ec449574e2767bf0a83->enter($__internal_30bbf2e412a1ee5ac6ff8fa96a5aafecd5a5852cef743ec449574e2767bf0a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_30bbf2e412a1ee5ac6ff8fa96a5aafecd5a5852cef743ec449574e2767bf0a83->leave($__internal_30bbf2e412a1ee5ac6ff8fa96a5aafecd5a5852cef743ec449574e2767bf0a83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b46c9675ea7338a1127279e354798c63b968d2a76c0831f14bc35fde6176e7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46c9675ea7338a1127279e354798c63b968d2a76c0831f14bc35fde6176e7ba->enter($__internal_b46c9675ea7338a1127279e354798c63b968d2a76c0831f14bc35fde6176e7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<main class=\"homepage\">

\t";
        // line 7
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "

</main>

";
        
        $__internal_b46c9675ea7338a1127279e354798c63b968d2a76c0831f14bc35fde6176e7ba->leave($__internal_b46c9675ea7338a1127279e354798c63b968d2a76c0831f14bc35fde6176e7ba_prof);

    }

    // line 13
    public function block_scripts2($context, array $blocks = array())
    {
        $__internal_4f5984e09a9126b4177ba4c57d8dbbe34384d4f169cb3e31ebd9dbe10fa96127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5984e09a9126b4177ba4c57d8dbbe34384d4f169cb3e31ebd9dbe10fa96127->enter($__internal_4f5984e09a9126b4177ba4c57d8dbbe34384d4f169cb3e31ebd9dbe10fa96127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts2"));

        // line 14
        echo "
<!--<script>
\t\$(window).scroll(function() {
\t  var scroll = \$(window).scrollTop();
\t  var pos = \$('.categories').offset().top -100;

\t  if (scroll >= pos) {
\t     \$(\".header\").addClass(\"header--scrolled\");
\t  } else {
\t     \$(\".header\").removeClass(\"header--scrolled\");
\t  }
\t});
</script>-->


";
        
        $__internal_4f5984e09a9126b4177ba4c57d8dbbe34384d4f169cb3e31ebd9dbe10fa96127->leave($__internal_4f5984e09a9126b4177ba4c57d8dbbe34384d4f169cb3e31ebd9dbe10fa96127_prof);

    }

    public function getTemplateName()
    {
        return "LumenAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  71 => 13,  59 => 7,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block title %} {% endblock %}
{% block body %}

<main class=\"homepage\">

\t{{ message }}

</main>

{% endblock %}

{% block scripts2 %}

<!--<script>
\t\$(window).scroll(function() {
\t  var scroll = \$(window).scrollTop();
\t  var pos = \$('.categories').offset().top -100;

\t  if (scroll >= pos) {
\t     \$(\".header\").addClass(\"header--scrolled\");
\t  } else {
\t     \$(\".header\").removeClass(\"header--scrolled\");
\t  }
\t});
</script>-->


{% endblock %}
", "LumenAppBundle:Default:index.html.twig", "/Users/mj/Desktop/beaker/src/Lumen/AppBundle/Resources/views/Default/index.html.twig");
    }
}
