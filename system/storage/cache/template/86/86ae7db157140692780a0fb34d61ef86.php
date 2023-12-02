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

/* catalog/view/template/product/thumb.twig */
class __TwigTemplate_a80b47c5d79cc5357eabce275eba7315 extends Template
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
        // line 41
        echo "
<a class=\"cart-item\" href=\"#\">
    <div class=\"cart-item__colors\">
        <div class=\"cart-item__color-item\" style=\"background-color: #000000\"></div>
        <div class=\"cart-item__color-item\" style=\"background-color: #F7FF00\"></div>
        <div class=\"cart-item__color-item\" style=\"background-color: #D90B0B\"></div>
        <div class=\"cart-item__color-item\" style=\"background-color: #F2ECC6\"></div>
        <div class=\"cart-item__color-item\" style=\"background-color: #E6D6A8\"></div>
    </div>
    <div class=\"cart-item__slider\">
        <div class=\"cart-item__img\"><img class=\"swiper-lazy\"
                                         src=\"catalog/view/images/pics/item1.png\"
                                         width=\"600\" height=\"771\"></div>
    </div>
    <div class=\"cart-item__body\">
        <div class=\"cart-item__price\">1 999 ₽</div>
        <div class=\"cart-item__title\">Original Marines (Бренд) Original Marines (Бренд) Original
            Marines (Бренд)
        </div>
    </div>
</a>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/thumb.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/thumb.twig", "C:\\OSPanel\\domains\\wake\\catalog\\view\\template\\product\\thumb.twig");
    }
}
