<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/opencart/catalog/view/template/module/banner.twig */
class __TwigTemplate_3285abf1fad6032b249eb0b61d5bebf5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "

<div class=\"home-slider\" data-slider=\"home-slider\">
    <div class=\"swiper-container\">
        <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
                <div class=\"top-img\"><img class=\"swiper-lazy\" src=\"/catalog/view/images/pics/top-img.jpg\" width=\"600\"
                                          height=\"771\"></div>
            </div>
        </div>
    </div>
</div>
<section class=\"section section--double-slider\">
    <div class=\"double-slider\" data-slider=\"double-slider\">
        <button class=\"double-slider__arrow js-next-swiper\">
            <svg width=\"158\" height=\"16\" viewBox=\"0 0 158 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M157.707 8.70711C158.098 8.31658 158.098 7.68342 157.707 7.29289L151.343 0.928932C150.953 0.538408 150.319 0.538408 149.929 0.928932C149.538 1.31946 149.538 1.95262 149.929 2.34315L155.586 8L149.929 13.6569C149.538 14.0474 149.538 14.6805 149.929 15.0711C150.319 15.4616 150.953 15.4616 151.343 15.0711L157.707 8.70711ZM0 9H157V7H0V9Z\"></path>
            </svg>
        </button>
        <button class=\"double-slider__arrow js-prev-swiper\">
            <svg width=\"158\" height=\"16\" viewBox=\"0 0 158 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M157.707 8.70711C158.098 8.31658 158.098 7.68342 157.707 7.29289L151.343 0.928932C150.953 0.538408 150.319 0.538408 149.929 0.928932C149.538 1.31946 149.538 1.95262 149.929 2.34315L155.586 8L149.929 13.6569C149.538 14.0474 149.538 14.6805 149.929 15.0711C150.319 15.4616 150.953 15.4616 151.343 15.0711L157.707 8.70711ZM0 9H157V7H0V9Z\"></path>
            </svg>
        </button>
        <div class=\"swiper-container\">
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\"><a class=\"double-item\" href=\"#\">
                        <div class=\"double-item__name\"><span>МУЖСКАЯ</span>ОДЕЖДА</div>
                        <img class=\"swiper-lazy\" src=\"catalog/view/images/pics/slide1.webp\" width=\"600\"
                             height=\"771\"></a>
                </div>
                <div class=\"swiper-slide\"><a class=\"double-item\" href=\"#\">
                        <div class=\"double-item__name\"><span>женская</span>ОДЕЖДА</div>
                        <img class=\"swiper-lazy\" src=\"catalog/view/images/pics/slide2.webp\" width=\"600\"
                             height=\"771\"></a>
                </div>
                <div class=\"swiper-slide\"><a class=\"double-item\" href=\"#\">
                        <div class=\"double-item__name\"><span>детская</span>ОДЕЖДА</div>
                        <img class=\"swiper-lazy\" src=\"catalog/view/images/pics/slide3.jpg\" width=\"600\" height=\"771\"></a>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/banner.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 44,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/banner.twig", "C:\\OSPanel\\domains\\wake\\extension\\opencart\\catalog\\view\\template\\module\\banner.twig");
    }
}
