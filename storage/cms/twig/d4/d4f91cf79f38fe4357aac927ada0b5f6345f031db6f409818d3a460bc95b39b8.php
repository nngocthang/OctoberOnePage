<?php

/* C:\ThangNN\WS\xampp\htdocs\OnePageLanding/themes/landingPage/partials/header.htm */
class __TwigTemplate_5550ee21d3567d77d15326e7deaf640dfcb452cb08474dbf2dd08f72d0538d0b extends Twig_Template
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
        echo "<header id=\"header\" class=\"header-with-borders header-with-borders-sticky\" data-plugin-options=\"{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '#header'}\">
        <div class=\"header-body\">
            <div class=\"header-container\">
                <div class=\"header-row\">
                    <div class=\"header-column justify-content-start text-center\">
                        <div class=\"header-logo border-left-0 px-4\">
                            <a href=\"#home\">
                                <img alt=\"NCSC\" width=\"100px\" height=\"100px\" data-change-src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\">
                            </a>
                        </div>
                        <div class=\"header-nav justify-content-lg-start ml-3\">
                            <div class=\"header-nav-main header-nav-main-uppercase header-nav-main-effect-1 header-nav-main-sub-effect-1\">
                                <nav class=\"collapse\">
                                    <ul class=\"nav flex-column flex-lg-row\" id=\"mainNav\">
                                        <li> <a href=\"#home\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Trang Chủ</a></li>
                                        <li><a href=\"#aboutus\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Giới thiệu</a></li>
                                        <li><a href=\"#services\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Hoạt động</a></li>
                                        <li><a href=\"#blog\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Tuyển dụng</a></li>
                                        <li><a href=\"#footer\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Liên hệ</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class=\"header-column justify-content-end\">
                        
                        <button class=\"header-btn-collapse-nav mx-3\" data-toggle=\"collapse\" data-target=\".header-nav-main nav\">
                            <span class=\"hamburguer\">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class=\"close\">
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>";
    }

    public function getTemplateName()
    {
        return "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/landingPage/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"header\" class=\"header-with-borders header-with-borders-sticky\" data-plugin-options=\"{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '#header'}\">
        <div class=\"header-body\">
            <div class=\"header-container\">
                <div class=\"header-row\">
                    <div class=\"header-column justify-content-start text-center\">
                        <div class=\"header-logo border-left-0 px-4\">
                            <a href=\"#home\">
                                <img alt=\"NCSC\" width=\"100px\" height=\"100px\" data-change-src=\"{{ 'assets/img/logo.png'|theme }}\" src=\"{{ 'assets/img/logo.png'|theme }}\">
                            </a>
                        </div>
                        <div class=\"header-nav justify-content-lg-start ml-3\">
                            <div class=\"header-nav-main header-nav-main-uppercase header-nav-main-effect-1 header-nav-main-sub-effect-1\">
                                <nav class=\"collapse\">
                                    <ul class=\"nav flex-column flex-lg-row\" id=\"mainNav\">
                                        <li> <a href=\"#home\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Trang Chủ</a></li>
                                        <li><a href=\"#aboutus\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Giới thiệu</a></li>
                                        <li><a href=\"#services\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Hoạt động</a></li>
                                        <li><a href=\"#blog\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Tuyển dụng</a></li>
                                        <li><a href=\"#footer\" data-hash data-hash-offset=\"70\" class=\"dropdown-item\">Liên hệ</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class=\"header-column justify-content-end\">
                        
                        <button class=\"header-btn-collapse-nav mx-3\" data-toggle=\"collapse\" data-target=\".header-nav-main nav\">
                            <span class=\"hamburguer\">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class=\"close\">
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>", "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/landingPage/partials/header.htm", "");
    }
}
