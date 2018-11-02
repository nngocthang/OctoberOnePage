<?php

/* C:\ThangNN\WS\xampp\htdocs\OnePageLanding/themes/landingPage/layouts/fallback.htm */
class __TwigTemplate_3a291aeef6681690b0ac807e692bc32c9e8f1c71f49a09db70776ab958d16287 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/landingPage/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "C:\\ThangNN\\WS\\xampp\\htdocs\\OnePageLanding/themes/landingPage/layouts/fallback.htm", "");
    }
}
