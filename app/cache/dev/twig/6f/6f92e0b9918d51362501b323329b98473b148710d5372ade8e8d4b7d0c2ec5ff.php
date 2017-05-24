<?php

/* base.html.twig */
class __TwigTemplate_c9f1d85d89e3296fbd19cd716b8319f4bb1670deaadcd095ccd3745e025404eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'metaFace' => array($this, 'block_metaFace'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
            'scripts2' => array($this, 'block_scripts2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba839cfa0d01c6c974392540e35223e1301c8f0d25dd0165049ab78530374a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba839cfa0d01c6c974392540e35223e1301c8f0d25dd0165049ab78530374a6e->enter($__internal_ba839cfa0d01c6c974392540e35223e1301c8f0d25dd0165049ab78530374a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\" > <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=viewport content=\"width=device-width, initial-scale=1\">

        <meta name=\"identifier-url\" content=\"\" />
        <meta name=\"title\" content=\"\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"abstract\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <meta name=\"revisit-after\" content=\"1\" />
        <meta name=\"language\" content=\"es\" />
        <meta name=\"copyright\" content=\"© 2016\" />
        <meta name=\"robots\" content=\"index,follow\" />
        <meta name=\"googlebot\" content=\"index, follow\">
        <meta name=\"organization\" content=\"\">
        <meta name=\"revisit-after\" content=\"1 day\">
        <meta name=\"origen\" content=\"\">
        <meta name=\"locality\" content=\"San José , Costa Rica\">
        <meta name=\"distribution\" content=\"global\">
        <link rel=\"image_src\" href=\"\" >
        <meta name=\"dcterms.abstract\" content=\"\">
        <meta name=\"dcterms.rightsHolder\" content=\"\">

        <!-- OG -->
        ";
        // line 32
        $this->displayBlock('meta', $context, $blocks);
        // line 34
        echo "        ";
        $this->displayBlock('metaFace', $context, $blocks);
        // line 44
        echo "        <!-- OG -->

        <title>Beaker| ";
        // line 46
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!-- Add to homescreen for Chrome on Android -->
        <meta name=\"mobile-web-app-capable\" content=\"yes\">
        <meta name=\"google\" value=\"notranslate\">

        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/apple-touch-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"/apple-touch-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/apple-touch-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/apple-touch-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/apple-touch-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/apple-touch-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/apple-touch-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/apple-touch-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon-180x180.png\">
        <link rel=\"icon\" type=\"image/png\" href=\"/favicon-32x32.png\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"/favicon-194x194.png\" sizes=\"194x194\">
        <link rel=\"icon\" type=\"image/png\" href=\"/favicon-96x96.png\" sizes=\"96x96\">
        <link rel=\"icon\" type=\"image/png\" href=\"/android-chrome-192x192.png\" sizes=\"192x192\">
        <link rel=\"icon\" type=\"image/png\" href=\"/favicon-16x16.png\" sizes=\"16x16\">
        <link rel=\"manifest\" href=\"/manifest.json\">
        <link rel=\"mask-icon\" href=\"/safari-pinned-tab.svg\" color=\"#5bbad5\">
        <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
        <meta name=\"msapplication-TileImage\" content=\"/mstile-144x144.png\">
        <meta name=\"theme-color\" content=\"#ffffff\">

        <link href=\"/css/main.css\" rel=\"stylesheet\">
        <link href=\"/css/tablets.css\" media=\"screen and (min-width:768px)\" rel=\"stylesheet\">
        <link href=\"/css/desktop.css\" media=\"screen and (min-width:992px)\" rel=\"stylesheet\">
        <link href=\"/css/large.css\" media=\"screen and (min-width:1200px)\" rel=\"stylesheet\">
        <link href=\"/css/bootstrap-select.min.css\" media=\"screen and (min-width:1200px)\" rel=\"stylesheet\">
        <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
        <script src=\"/js/vendor/modernizr-2.8.3.min.js\" async defer></script>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = \"//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8&appId=387934908055618\";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <style>
            .uploadImage { z-index:9999; }
        </style>
        ";
        // line 90
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 92
        echo "
    </head>
    <body class=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\">

        <!--[if lt IE 10]>
        <div id=\"disclaimer\">
            <p><span class=\"icon icon-exclamation\"></span> Este sitio web es compatible con:  Chrome, Safari, Firefox e Internet Explorer superior a la versión 10. <a href=\"http://browsehappy.com/\">Actualizar ahora</a> <a href=\"#\" class=\"btn btn-green\" id=\"btnCloseDisclaimer\">Cerrar</a></p>
        </div>
        <![endif]-->
        <div class=\"content\">
            <header class=\"header\">

            </header>

            ";
        // line 106
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "
            <footer class=\"container\">

            </footer>
        </div>

        ";
        // line 113
        $this->displayBlock('scripts', $context, $blocks);
        // line 164
        echo "
        ";
        // line 165
        $this->displayBlock('scripts2', $context, $blocks);
        // line 168
        echo "
</body>
</html>
";
        
        $__internal_ba839cfa0d01c6c974392540e35223e1301c8f0d25dd0165049ab78530374a6e->leave($__internal_ba839cfa0d01c6c974392540e35223e1301c8f0d25dd0165049ab78530374a6e_prof);

    }

    // line 32
    public function block_meta($context, array $blocks = array())
    {
        $__internal_18cfb83d7e438ebe23aeddf5438c8faf756bef493a48fccd09e6f04c18962a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cfb83d7e438ebe23aeddf5438c8faf756bef493a48fccd09e6f04c18962a50->enter($__internal_18cfb83d7e438ebe23aeddf5438c8faf756bef493a48fccd09e6f04c18962a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 33
        echo "        ";
        
        $__internal_18cfb83d7e438ebe23aeddf5438c8faf756bef493a48fccd09e6f04c18962a50->leave($__internal_18cfb83d7e438ebe23aeddf5438c8faf756bef493a48fccd09e6f04c18962a50_prof);

    }

    // line 34
    public function block_metaFace($context, array $blocks = array())
    {
        $__internal_45d8815b90b42c31bb61b5945ee77f7c86a188563e6b86aecc4100cf988e9f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d8815b90b42c31bb61b5945ee77f7c86a188563e6b86aecc4100cf988e9f0f->enter($__internal_45d8815b90b42c31bb61b5945ee77f7c86a188563e6b86aecc4100cf988e9f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metaFace"));

        // line 35
        echo "        <meta property=\"og:title\" content=\"\"/>
        <meta property=\"og:site_name\" content=\"\"/>
        <meta property=\"og:description\" content=\"\"/>
        <meta property=\"og:type\" content=\"website\"/>
        <meta property=\"article:author\" content=\"\" />
        <meta property=\"article:publisher\" content=\"\" />
        <meta property=\"article:modified_time\" content=\"2015-12-14 01:09:16 -06:00\"/>
        <meta property=\"article:section\" content=\"\"/>
        ";
        
        $__internal_45d8815b90b42c31bb61b5945ee77f7c86a188563e6b86aecc4100cf988e9f0f->leave($__internal_45d8815b90b42c31bb61b5945ee77f7c86a188563e6b86aecc4100cf988e9f0f_prof);

    }

    // line 46
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb262235f83852ee65a46c84586cbff32061304472b4ff21c30768d1e033bc99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb262235f83852ee65a46c84586cbff32061304472b4ff21c30768d1e033bc99->enter($__internal_fb262235f83852ee65a46c84586cbff32061304472b4ff21c30768d1e033bc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_fb262235f83852ee65a46c84586cbff32061304472b4ff21c30768d1e033bc99->leave($__internal_fb262235f83852ee65a46c84586cbff32061304472b4ff21c30768d1e033bc99_prof);

    }

    // line 90
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a421d17952b60e32168b9a40045f485291f89c8b6f895d59d1ee6e0247ac1717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a421d17952b60e32168b9a40045f485291f89c8b6f895d59d1ee6e0247ac1717->enter($__internal_a421d17952b60e32168b9a40045f485291f89c8b6f895d59d1ee6e0247ac1717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 91
        echo "        ";
        
        $__internal_a421d17952b60e32168b9a40045f485291f89c8b6f895d59d1ee6e0247ac1717->leave($__internal_a421d17952b60e32168b9a40045f485291f89c8b6f895d59d1ee6e0247ac1717_prof);

    }

    // line 106
    public function block_body($context, array $blocks = array())
    {
        $__internal_340bc8030c4b9e38034cbe25a6fd59adb0c6e9e62ec6dd24f844e7818fcfef6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340bc8030c4b9e38034cbe25a6fd59adb0c6e9e62ec6dd24f844e7818fcfef6e->enter($__internal_340bc8030c4b9e38034cbe25a6fd59adb0c6e9e62ec6dd24f844e7818fcfef6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_340bc8030c4b9e38034cbe25a6fd59adb0c6e9e62ec6dd24f844e7818fcfef6e->leave($__internal_340bc8030c4b9e38034cbe25a6fd59adb0c6e9e62ec6dd24f844e7818fcfef6e_prof);

    }

    // line 113
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_ec205eaf63f99db3d72a1866de8447fd9613a769e70be8938acc2fa771a170c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec205eaf63f99db3d72a1866de8447fd9613a769e70be8938acc2fa771a170c0->enter($__internal_ec205eaf63f99db3d72a1866de8447fd9613a769e70be8938acc2fa771a170c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 114
        echo "
            <script src=\"/js/main.min.js\"></script>
            <script src=\"/js/imagesloaded.pkgd.min.js\"></script>
            <script src=\"/js/masonry.pkgd.min.js\"></script>
            <script src=\"/js/jquery.validate.min.js\"></script>
            <script src=\"/js/bootstrap-select.min.js\"></script>
            <script>

                \$('document').on('ready', function(){
                    \$('.selectpicker').selectpicker({
                        style: 'btn-info',
                        size: 4
                    });

                });
                var _locale = \"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\";

            </script>
            <script>
                \$('.popupTwitter').on('click',function(event) {
                    var width  = 575,
                            height = 400,
                            left   = (\$(window).width()  - width)  / 2,
                            top    = (\$(window).height() - height) / 2,
                            url    = this.href,
                            opts   = 'status=1' +
                                    ',width='  + width  +
                                    ',height=' + height +
                                    ',top='    + top    +
                                    ',left='   + left;

                    window.open(url, 'twitter', opts);

                    return false;
                });
            </script>

            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function()
              { (i[r].q=i[r].q||[]).push(arguments)}
              ,i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
              ga('create', 'UA-86835785-1', 'auto');
              ga('send', 'pageview');
            </script>

            ";
        // line 161
        echo $this->env->getExtension('Lumen\ImportsBundle\Twig\Extension\LoadJavascriptExtension')->getJavascripts();
        echo "

        ";
        
        $__internal_ec205eaf63f99db3d72a1866de8447fd9613a769e70be8938acc2fa771a170c0->leave($__internal_ec205eaf63f99db3d72a1866de8447fd9613a769e70be8938acc2fa771a170c0_prof);

    }

    // line 165
    public function block_scripts2($context, array $blocks = array())
    {
        $__internal_bc69c8e4661a4322c3324bcff918033efdb111e9c4c03b18bf307e2e7cb5b76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc69c8e4661a4322c3324bcff918033efdb111e9c4c03b18bf307e2e7cb5b76e->enter($__internal_bc69c8e4661a4322c3324bcff918033efdb111e9c4c03b18bf307e2e7cb5b76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts2"));

        // line 166
        echo "
        ";
        
        $__internal_bc69c8e4661a4322c3324bcff918033efdb111e9c4c03b18bf307e2e7cb5b76e->leave($__internal_bc69c8e4661a4322c3324bcff918033efdb111e9c4c03b18bf307e2e7cb5b76e_prof);

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
        return array (  313 => 166,  307 => 165,  297 => 161,  262 => 129,  245 => 114,  239 => 113,  228 => 106,  221 => 91,  215 => 90,  203 => 46,  188 => 35,  182 => 34,  175 => 33,  169 => 32,  159 => 168,  157 => 165,  154 => 164,  152 => 113,  144 => 107,  142 => 106,  127 => 94,  123 => 92,  121 => 90,  74 => 46,  70 => 44,  67 => 34,  65 => 32,  35 => 5,  29 => 1,);
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
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"{{ app.request.locale }}\" > <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=viewport content=\"width=device-width, initial-scale=1\">

        <meta name=\"identifier-url\" content=\"\" />
        <meta name=\"title\" content=\"\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"abstract\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <meta name=\"revisit-after\" content=\"1\" />
        <meta name=\"language\" content=\"es\" />
        <meta name=\"copyright\" content=\"© 2016\" />
        <meta name=\"robots\" content=\"index,follow\" />
        <meta name=\"googlebot\" content=\"index, follow\">
        <meta name=\"organization\" content=\"\">
        <meta name=\"revisit-after\" content=\"1 day\">
        <meta name=\"origen\" content=\"\">
        <meta name=\"locality\" content=\"San José , Costa Rica\">
        <meta name=\"distribution\" content=\"global\">
        <link rel=\"image_src\" href=\"\" >
        <meta name=\"dcterms.abstract\" content=\"\">
        <meta name=\"dcterms.rightsHolder\" content=\"\">

        <!-- OG -->
        {% block meta %}
        {% endblock %}
        {% block metaFace %}
        <meta property=\"og:title\" content=\"\"/>
        <meta property=\"og:site_name\" content=\"\"/>
        <meta property=\"og:description\" content=\"\"/>
        <meta property=\"og:type\" content=\"website\"/>
        <meta property=\"article:author\" content=\"\" />
        <meta property=\"article:publisher\" content=\"\" />
        <meta property=\"article:modified_time\" content=\"2015-12-14 01:09:16 -06:00\"/>
        <meta property=\"article:section\" content=\"\"/>
        {% endblock %}
        <!-- OG -->

        <title>Coopeservidores | {% block title %} {% endblock %}</title>

        <!-- Add to homescreen for Chrome on Android -->
        <meta name=\"mobile-web-app-capable\" content=\"yes\">
        <meta name=\"google\" value=\"notranslate\">

        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/apple-touch-icon-57x57.png\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"/apple-touch-icon-60x60.png\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/apple-touch-icon-72x72.png\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/apple-touch-icon-76x76.png\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/apple-touch-icon-114x114.png\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/apple-touch-icon-120x120.png\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/apple-touch-icon-144x144.png\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/apple-touch-icon-152x152.png\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon-180x180.png\">
        <link rel=\"icon\" type=\"image/png\" href=\"/favicon-32x32.png\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"/favicon-194x194.png\" sizes=\"194x194\">
        <link rel=\"icon\" type=\"image/png\" href=\"/favicon-96x96.png\" sizes=\"96x96\">
        <link rel=\"icon\" type=\"image/png\" href=\"/android-chrome-192x192.png\" sizes=\"192x192\">
        <link rel=\"icon\" type=\"image/png\" href=\"/favicon-16x16.png\" sizes=\"16x16\">
        <link rel=\"manifest\" href=\"/manifest.json\">
        <link rel=\"mask-icon\" href=\"/safari-pinned-tab.svg\" color=\"#5bbad5\">
        <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
        <meta name=\"msapplication-TileImage\" content=\"/mstile-144x144.png\">
        <meta name=\"theme-color\" content=\"#ffffff\">

        <link href=\"/css/main.css\" rel=\"stylesheet\">
        <link href=\"/css/tablets.css\" media=\"screen and (min-width:768px)\" rel=\"stylesheet\">
        <link href=\"/css/desktop.css\" media=\"screen and (min-width:992px)\" rel=\"stylesheet\">
        <link href=\"/css/large.css\" media=\"screen and (min-width:1200px)\" rel=\"stylesheet\">
        <link href=\"/css/bootstrap-select.min.css\" media=\"screen and (min-width:1200px)\" rel=\"stylesheet\">
        <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
        <script src=\"/js/vendor/modernizr-2.8.3.min.js\" async defer></script>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = \"//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8&appId=387934908055618\";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <style>
            .uploadImage { z-index:9999; }
        </style>
        {% block stylesheets %}
        {% endblock %}

    </head>
    <body class=\"{{app.request.get('_route')}}\">

        <!--[if lt IE 10]>
        <div id=\"disclaimer\">
            <p><span class=\"icon icon-exclamation\"></span> Este sitio web es compatible con:  Chrome, Safari, Firefox e Internet Explorer superior a la versión 10. <a href=\"http://browsehappy.com/\">Actualizar ahora</a> <a href=\"#\" class=\"btn btn-green\" id=\"btnCloseDisclaimer\">Cerrar</a></p>
        </div>
        <![endif]-->
        <div class=\"content\">
            <header class=\"header\">

            </header>

            {% block body %}{% endblock %}

            <footer class=\"container\">

            </footer>
        </div>

        {% block scripts %}

            <script src=\"/js/main.min.js\"></script>
            <script src=\"/js/imagesloaded.pkgd.min.js\"></script>
            <script src=\"/js/masonry.pkgd.min.js\"></script>
            <script src=\"/js/jquery.validate.min.js\"></script>
            <script src=\"/js/bootstrap-select.min.js\"></script>
            <script>

                \$('document').on('ready', function(){
                    \$('.selectpicker').selectpicker({
                        style: 'btn-info',
                        size: 4
                    });

                });
                var _locale = \"{{ app.request.locale }}\";

            </script>
            <script>
                \$('.popupTwitter').on('click',function(event) {
                    var width  = 575,
                            height = 400,
                            left   = (\$(window).width()  - width)  / 2,
                            top    = (\$(window).height() - height) / 2,
                            url    = this.href,
                            opts   = 'status=1' +
                                    ',width='  + width  +
                                    ',height=' + height +
                                    ',top='    + top    +
                                    ',left='   + left;

                    window.open(url, 'twitter', opts);

                    return false;
                });
            </script>

            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function()
              { (i[r].q=i[r].q||[]).push(arguments)}
              ,i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
              ga('create', 'UA-86835785-1', 'auto');
              ga('send', 'pageview');
            </script>

            {{ getJavascripts() }}

        {% endblock %}

        {% block scripts2 %}

        {% endblock %}

</body>
</html>
", "base.html.twig", "/Users/mj/Desktop/beaker/app/Resources/views/base.html.twig");
    }
}
