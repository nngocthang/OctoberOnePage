<?php

/* C:\ThangNN\WS\xampp\htdocs\OnePageLanding/themes/landingPage/partials/aboutus.htm */
class __TwigTemplate_e24d0aca2114b3524892000f92b51009dd748bf40ee42688a2ede59b3400b9fa extends Twig_Template
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
        echo "<section id=\"aboutus\" class=\"section\">
        <div class=\"container\">
            <div class=\"row text-center \">
                <div class=\"col\">

                    <div class=\"overflow-hidden \">
                        <h2 class=\"font-weight-bold  appear-animation text-uppercase\" data-appear-animation=\"maskUp\"
                         data-appear-animation-delay=\"200\">Giới thiệu</h2>
                    </div>
                </div>

                <div class=\"row appear-animation\" data-appear-animation=\"fadeInUpShorter\" data-appear-animation-delay=\"600\">
                    <div class=\"justify-content-center\">
                        <p>";
        // line 14
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("aboutus.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
                    </div>
                    <br />
                    <div class=\"aboutus_content\">
                        <div class=\"row\">
                            <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                                <span><img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tuyendung/icon-03.png");
        echo "\"></span>
                                <h2 class=\"text-content\">Thông tin cập nhật</h2>
                                <p>Hệ thống liên tục cập nhật và chia sẻ các thông tin về nguy cơ tấn công mạng đối với Việt Nam.</p>
                            </div>

                            <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                                <span><img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tuyendung/icon-02.png");
        echo "\"></span>
                                <h2 class=\"text-content\">Dữ liệu đa dạng</h2>
                                <p>Dữ liệu được tổng hợp từ các tổ chức Quốc tế, Việt Nam, từ các sensor, honeypot,...</p>
                            </div>

                            <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                                <span><img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tuyendung/icon-01.png");
        echo "\"></span>
                                <h2 class=\"text-content\">Cảnh báo tức thì</h2>
                                <p>Hệ thống cảnh báo sớm các tấn công và cảnh báo các kết nối bất thường từ hệ thống mạng tổ chức.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/landingPage/partials/aboutus.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 32,  58 => 26,  49 => 20,  38 => 14,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"aboutus\" class=\"section\">
        <div class=\"container\">
            <div class=\"row text-center \">
                <div class=\"col\">

                    <div class=\"overflow-hidden \">
                        <h2 class=\"font-weight-bold  appear-animation text-uppercase\" data-appear-animation=\"maskUp\"
                         data-appear-animation-delay=\"200\">Giới thiệu</h2>
                    </div>
                </div>

                <div class=\"row appear-animation\" data-appear-animation=\"fadeInUpShorter\" data-appear-animation-delay=\"600\">
                    <div class=\"justify-content-center\">
                        <p>{%content 'aboutus.txt'%}</p>
                    </div>
                    <br />
                    <div class=\"aboutus_content\">
                        <div class=\"row\">
                            <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                                <span><img src=\"{{'assets/img/tuyendung/icon-03.png'|theme}}\"></span>
                                <h2 class=\"text-content\">Thông tin cập nhật</h2>
                                <p>Hệ thống liên tục cập nhật và chia sẻ các thông tin về nguy cơ tấn công mạng đối với Việt Nam.</p>
                            </div>

                            <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                                <span><img src=\"{{'assets/img/tuyendung/icon-02.png'|theme}}\"></span>
                                <h2 class=\"text-content\">Dữ liệu đa dạng</h2>
                                <p>Dữ liệu được tổng hợp từ các tổ chức Quốc tế, Việt Nam, từ các sensor, honeypot,...</p>
                            </div>

                            <div class=\"content col-md-4 col-lg-4 col-sm-12\">
                                <span><img src=\"{{'assets/img/tuyendung/icon-01.png'|theme}}\"></span>
                                <h2 class=\"text-content\">Cảnh báo tức thì</h2>
                                <p>Hệ thống cảnh báo sớm các tấn công và cảnh báo các kết nối bất thường từ hệ thống mạng tổ chức.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>", "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/landingPage/partials/aboutus.htm", "");
    }
}
