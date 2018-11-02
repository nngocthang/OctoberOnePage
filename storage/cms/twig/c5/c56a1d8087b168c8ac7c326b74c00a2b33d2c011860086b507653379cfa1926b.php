<?php

/* C:\ThangNN\WS\xampp\htdocs\OnePageLanding/themes/landingPage/layouts/default.htm */
class __TwigTemplate_23a8937267e657fd6eb9f64b1caa9058f99c53975eda5b07818e6edc932f536b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>

    <!-- Basic -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"NCSC\">
    <title>NCSC - ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800\"
\t rel=\"stylesheet\" type=\"text/css\">
    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no\">

    <!-- Vendor CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/css/bootstrap.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/font-awesome/css/fontawesome-all.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/animate/animate.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/linear-icons/css/linear-icons.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/assets/owl.carousel.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/assets/owl.theme.default.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/magnific-popup.min.css");
        echo "\">

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme-elements.css");
        echo "\">

    <!-- Current Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/css/settings.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/css/layers.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/css/navigation.css");
        echo "\">

    <!-- Skin CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/skins/default.css");
        echo "\">

    <!-- Theme Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/custom.css");
        echo "\">
    ";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 40
        echo "    <!-- Head Libs -->
    <script src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/modernizr/modernizr.min.js");
        echo "\"></script>
</head>

<body class=\"one-page\" data-spy=\"scroll\" data-target=\".header-nav-main nav\" data-offset=\"150\">
    <div class=\"body\">
        ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slide-head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("aboutus"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("partner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 53
        echo "    </div>
    <!-- Vendor -->
    <script src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.appear/jquery.appear.min.js");
        echo "\"></script>
    <script src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.easing/jquery.easing.min.js");
        echo "\"></script>
    <script src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-cookie/jquery-cookie.min.js");
        echo "\"></script>
    <script src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
        echo "\"></script>
    <script src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/common/common.min.js");
        echo "\"></script>
    <script src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.validation/jquery.validation.min.js");
        echo "\"></script>
    <script src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js");
        echo "\"></script>
    <script src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.gmap/jquery.gmap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.lazyload/jquery.lazyload.min.js");
        echo "\"></script>
    <script src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/isotope/jquery.isotope.min.js");
        echo "\"></script>
    <script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel/owl.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/jquery.magnific-popup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/vide/vide.min.js");
        echo "\"></script>
    <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/vivus/vivus.min.js");
        echo "\"></script>

    <!-- Theme Base, Components and Settings -->
    <script src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theme.js");
        echo "\"></script>

    <!-- Current Page Vendor and Views -->
    <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js");
        echo "\"></script>
    <script src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js");
        echo "\"></script>

    <!-- Current Page Vendor and Views -->
    <script src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/views/view.contact.js");
        echo "\"></script>


    <!-- Theme Custom -->
    <script src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom.js");
        echo "\"></script>

    <!-- Theme Initialization Files -->
    <script src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theme.init.js");
        echo "\"></script>

    <!-- Examples -->
    <script src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/examples/examples.portfolio.js");
        echo "\"></script>
    ";
        // line 90
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 91
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 92
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/landingPage/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 92,  276 => 91,  261 => 90,  257 => 89,  251 => 86,  245 => 83,  238 => 79,  232 => 76,  228 => 75,  222 => 72,  216 => 69,  212 => 68,  208 => 67,  204 => 66,  200 => 65,  196 => 64,  192 => 63,  188 => 62,  184 => 61,  180 => 60,  176 => 59,  172 => 58,  168 => 57,  164 => 56,  160 => 55,  156 => 53,  151 => 52,  146 => 51,  141 => 50,  136 => 49,  131 => 48,  126 => 47,  122 => 46,  114 => 41,  111 => 40,  108 => 39,  104 => 38,  98 => 35,  92 => 32,  88 => 31,  84 => 30,  78 => 27,  74 => 26,  68 => 23,  64 => 22,  60 => 21,  56 => 20,  52 => 19,  48 => 18,  44 => 17,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>

    <!-- Basic -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"NCSC\">
    <title>NCSC - {{ this.page.title }}</title>
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800\"
\t rel=\"stylesheet\" type=\"text/css\">
    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no\">

    <!-- Vendor CSS -->
    <link rel=\"stylesheet\" href=\"{{'assets/vendor/bootstrap/css/bootstrap.min.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/vendor/font-awesome/css/fontawesome-all.min.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/vendor/animate/animate.min.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/vendor/linear-icons/css/linear-icons.min.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/vendor/owl.carousel/assets/owl.carousel.min.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/vendor/owl.carousel/assets/owl.theme.default.min.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/vendor/magnific-popup/magnific-popup.min.css'|theme}}\">

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"{{'assets/css/theme.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/css/theme-elements.css'|theme}}\">

    <!-- Current Page CSS -->
    <link rel=\"stylesheet\" href=\"{{'assets/vendor/rs-plugin/css/settings.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/vendor/rs-plugin/css/layers.css'|theme}}\">
    <link rel=\"stylesheet\" href=\"{{'assets/vendor/rs-plugin/css/navigation.css'|theme}}\">

    <!-- Skin CSS -->
    <link rel=\"stylesheet\" href=\"{{'assets/css/skins/default.css'|theme}}\">

    <!-- Theme Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{'assets/css/custom.css'|theme}}\">
    {%styles%}
    <!-- Head Libs -->
    <script src=\"{{'assets/vendor/modernizr/modernizr.min.js'|theme}}\"></script>
</head>

<body class=\"one-page\" data-spy=\"scroll\" data-target=\".header-nav-main nav\" data-offset=\"150\">
    <div class=\"body\">
        {%partial 'slide-head'%}
        {%partial 'header'%}
        {%partial 'aboutus'%}
        {%partial 'services'%}
        {%partial 'blog'%}
        {%partial 'partner'%}
        {%partial 'footer'%}
    </div>
    <!-- Vendor -->
    <script src=\"{{'assets/vendor/jquery/jquery.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/jquery.appear/jquery.appear.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/jquery.easing/jquery.easing.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/jquery-cookie/jquery-cookie.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/common/common.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/jquery.validation/jquery.validation.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/jquery.gmap/jquery.gmap.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/jquery.lazyload/jquery.lazyload.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/isotope/jquery.isotope.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/owl.carousel/owl.carousel.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/magnific-popup/jquery.magnific-popup.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/vide/vide.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/vivus/vivus.min.js'|theme}}\"></script>

    <!-- Theme Base, Components and Settings -->
    <script src=\"{{'assets/js/theme.js'|theme}}\"></script>

    <!-- Current Page Vendor and Views -->
    <script src=\"{{'assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js'|theme}}\"></script>
    <script src=\"{{'assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js'|theme}}\"></script>

    <!-- Current Page Vendor and Views -->
    <script src=\"{{'assets/js/views/view.contact.js'|theme}}\"></script>


    <!-- Theme Custom -->
    <script src=\"{{'assets/js/custom.js'|theme}}\"></script>

    <!-- Theme Initialization Files -->
    <script src=\"{{'assets/js/theme.init.js'|theme}}\"></script>

    <!-- Examples -->
    <script src=\"{{'assets/js/examples/examples.portfolio.js'|theme}}\"></script>
    {% framework extras %}
    {% scripts %}
</body>

</html>", "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/landingPage/layouts/default.htm", "");
    }
}
