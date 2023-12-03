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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_05148e8346e1ae89778d68e7551dac00 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\"/>
  ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
  ";
        }
        // line 12
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
  ";
        }
        // line 15
        echo "  <script src=\"";
        echo ($context["jquery"] ?? null);
        echo "\" type=\"text/javascript\"></script>
";
        // line 17
        echo "  <link href=\"";
        echo ($context["icons"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        // line 19
        echo "  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment-with-locales.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.js\"></script>
  <link href=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 25
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 25);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 25);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 25);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 28
            echo "    <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 28);
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 31
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 31);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 31);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  <link rel=\"stylesheet\" href=\"/catalog/view/modules/swiper.min.css\">
  <link rel=\"stylesheet\" href=\"/catalog/view/modules/select2.min.css\">
  <link rel=\"stylesheet\" href=\"/catalog/view/stylesheet/main.css\">


  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 39
            echo "    ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</head>
<body>
<div class=\"scroll-top\"><img src=\"/catalog/view/images/icons/arrow-black.svg\" width=\"600\" height=\"771\"></div>
<div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>
";
        // line 80
        echo "




<header class=\"header header--main\">
  <div class=\"hover-menu\">
    <div class=\"hover-menu--fake-logo\"></div>
    <div class=\"hover-menu__wrap\">
      <div class=\"hover-menu__block js-menu-item\" data-id=\"1\">
        <div class=\"hover-menu__list\">
          <div class=\"hover-menu__list-item\"><a class=\"hover-menu__title\" href=\"#\">Bags</a><a class=\"hover-menu__link\" href=\"#\">Футболки</a><a class=\"hover-menu__link\" href=\"#\">Водолазки</a><a class=\"hover-menu__link\" href=\"#\">Костюмы</a><a class=\"hover-menu__link\" href=\"#\">Тай-дай</a><a class=\"hover-menu__link\" href=\"#\">Кардиганы</a></div>
          <div class=\"hover-menu__list-item\"><a class=\"hover-menu__title\" href=\"#\">New In</a><a class=\"hover-menu__link\" href=\"#\">Брюки</a><a class=\"hover-menu__link\" href=\"#\">Джинсы</a><a class=\"hover-menu__link\" href=\"#\">Футболки</a><a class=\"hover-menu__link\" href=\"#\">Водолазки</a><a class=\"hover-menu__link\" href=\"#\">Костюмы</a></div>
          <div class=\"hover-menu__list-item\"><a class=\"hover-menu__title\" href=\"#\">Shoes</a><a class=\"hover-menu__link\" href=\"#\">Тай-дай</a><a class=\"hover-menu__link\" href=\"#\">Кардиганы</a><a class=\"hover-menu__link\" href=\"#\">Брюки</a><a class=\"hover-menu__link\" href=\"#\">Джинсы</a></div>
        </div>
      </div>
      <div class=\"hover-menu__block js-menu-item\" data-id=\"2\">
        <div class=\"hover-menu__list\">
          <div class=\"hover-menu__list-item\"><a class=\"hover-menu__title\" href=\"#\">Bags</a><a class=\"hover-menu__link\" href=\"#\">Футболки</a><a class=\"hover-menu__link\" href=\"#\">Водолазки</a><a class=\"hover-menu__link\" href=\"#\">Костюмы</a><a class=\"hover-menu__link\" href=\"#\">Футболки</a><a class=\"hover-menu__link\" href=\"#\">Водолазки</a><a class=\"hover-menu__link\" href=\"#\">Костюмы</a></div>
          <div class=\"hover-menu__list-item\"><a class=\"hover-menu__title\" href=\"#\">New In</a><a class=\"hover-menu__link\" href=\"#\">Футболки</a><a class=\"hover-menu__link\" href=\"#\">Водолазки</a><a class=\"hover-menu__link\" href=\"#\">Костюмы</a><a class=\"hover-menu__link\" href=\"#\">Футболки</a><a class=\"hover-menu__link\" href=\"#\">Водолазки</a><a class=\"hover-menu__link\" href=\"#\">Костюмы</a></div>
        </div>
      </div>
      <div class=\"hover-menu__block js-menu-item\" data-id=\"3\">
        <div class=\"hover-menu__list\">
          <div class=\"hover-menu__list-item\"><a class=\"hover-menu__title\" href=\"#\">New In</a><a class=\"hover-menu__link\" href=\"#\">Футболки</a><a class=\"hover-menu__link\" href=\"#\">Водолазки</a></div>
          <div class=\"hover-menu__list-item\"><a class=\"hover-menu__title\" href=\"#\">Bags</a><a class=\"hover-menu__link\" href=\"#\">Костюмы</a><a class=\"hover-menu__link\" href=\"#\">Тай-дай</a></div>
          <div class=\"hover-menu__list-item\"><a class=\"hover-menu__title\" href=\"#\">Bags</a><a class=\"hover-menu__link\" href=\"#\">Водолазки</a><a class=\"hover-menu__link\" href=\"#\">Костюмы</a></div>
        </div>
      </div>
      <div class=\"hover-menu__block js-menu-item\" data-id=\"4\">
        <div class=\"hover-menu__list\">
          <div class=\"hover-menu__list-item\"><a class=\"hover-menu__title\" href=\"#\">Мужчинам</a><a class=\"hover-menu__link\" href=\"#\">Футболки</a><a class=\"hover-menu__link\" href=\"#\">Водолазки</a><a class=\"hover-menu__link\" href=\"#\">Костюмы</a><a class=\"hover-menu__link\" href=\"#\">Тай-дай</a><a class=\"hover-menu__link\" href=\"#\">Кардиганы</a></div>
          <div class=\"hover-menu__list-item\"><a class=\"hover-menu__title\" href=\"#\">Женщинам</a><a class=\"hover-menu__link\" href=\"#\">Брюки</a><a class=\"hover-menu__link\" href=\"#\">Джинсы</a><a class=\"hover-menu__link\" href=\"#\">Футболки</a><a class=\"hover-menu__link\" href=\"#\">Водолазки</a><a class=\"hover-menu__link\" href=\"#\">Костюмы</a></div>
        </div>
      </div>
    </div>
    <div class=\"header__buttons\">
      <div class=\"search\">
        <button class=\"search__button js-open-search\">
          <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.4697 14.4697C14.7626 14.1768 15.2374 14.1768 15.5303 14.4697L19.0303 17.9697C19.3232 18.2626 19.3232 18.7374 19.0303 19.0303C18.7374 19.3232 18.2626 19.3232 17.9697 19.0303L14.4697 15.5303C14.1768 15.2374 14.1768 14.7626 14.4697 14.4697Z\"></path>
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5ZM9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18Z\"></path>
          </svg>
        </button>
      </div>
      <div class=\"header__log\">
        <div class=\"link link--upper-mini js-open-modal\" data-modal=\"#enter\">
          <div class=\"link__text\">Вход</div>
        </div>
        <div class=\"link link--upper-mini js-open-modal\" data-modal=\"#reg\">
          <div class=\"link__text\">Регистрация</div>
        </div>
      </div>
      <div class=\"header__btns\">
        <button class=\"icon-link js-open-modal\" data-modal=\"#basket\">
          <div class=\"mini-count\">3</div>
          <div class=\"icon-link__icon\">
            <svg width=\"20\" height=\"19\" viewBox=\"0 0 20 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M6 9.75C5.58579 9.75 5.25 9.41421 5.25 9L5.25 5C5.25 2.37665 7.37665 0.249999 10 0.249999C12.6234 0.249999 14.75 2.37665 14.75 5L14.75 9C14.75 9.41421 14.4142 9.75 14 9.75C13.5858 9.75 13.25 9.41421 13.25 9L13.25 5C13.25 3.20507 11.7949 1.75 10 1.75C8.20507 1.75 6.75 3.20507 6.75 5L6.75 9C6.75 9.41421 6.41421 9.75 6 9.75Z\"></path>
              <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.63129 5.25H14.369C15.2004 5.24997 15.8963 5.24995 16.4533 5.32228C17.0426 5.3988 17.5767 5.56668 18.0219 5.97633C18.4671 6.38597 18.6788 6.90436 18.804 7.48527C18.9223 8.03432 18.9801 8.72783 19.0491 9.55631L19.571 15.8186C19.6099 16.2849 19.6453 16.7092 19.6264 17.0554C19.6057 17.4347 19.516 17.8427 19.2011 18.1849C18.8863 18.5271 18.4871 18.6504 18.1108 18.7025C17.7674 18.7501 17.3416 18.7501 16.8737 18.75H3.1266C2.6587 18.7501 2.23288 18.7501 1.88952 18.7025C1.51324 18.6504 1.11402 18.5271 0.799149 18.1849C0.484275 17.8427 0.394572 17.4347 0.373883 17.0554C0.355003 16.7092 0.390414 16.2849 0.429323 15.8186L0.951183 9.55632C1.0202 8.72783 1.07796 8.03433 1.1963 7.48527C1.32149 6.90436 1.53316 6.38597 1.97836 5.97633C2.42356 5.56668 2.95773 5.3988 3.54704 5.32228C4.10402 5.24995 4.79993 5.24997 5.63129 5.25ZM3.74019 6.80979C3.31251 6.86532 3.12291 6.96156 2.99402 7.08015C2.86514 7.19874 2.75349 7.3797 2.66263 7.80129C2.56724 8.24391 2.51612 8.83948 2.4419 9.7301L1.92806 15.8962C1.88399 16.425 1.85912 16.7439 1.87166 16.9737C1.87743 17.0795 1.89021 17.1329 1.89824 17.1568C1.90048 17.1634 1.90219 17.1673 1.90308 17.1692C1.90483 17.1702 1.90858 17.1723 1.91504 17.175C1.9382 17.185 1.99033 17.2022 2.09532 17.2167C2.32326 17.2483 2.64312 17.25 3.17374 17.25H16.8265C17.3572 17.25 17.677 17.2483 17.905 17.2167C18.01 17.2022 18.0621 17.185 18.0853 17.175C18.0917 17.1723 18.0955 17.1702 18.0972 17.1692C18.0981 17.1673 18.0998 17.1634 18.1021 17.1568C18.1101 17.1329 18.1229 17.0795 18.1286 16.9737C18.1412 16.7439 18.1163 16.425 18.0722 15.8962L17.5584 9.7301C17.4842 8.83948 17.4331 8.24391 17.3377 7.80129C17.2468 7.3797 17.1352 7.19874 17.0063 7.08015C16.8774 6.96156 16.6878 6.86532 16.2601 6.80979C15.8111 6.75148 15.2133 6.75 14.3196 6.75H5.68068C4.78696 6.75 4.1892 6.75148 3.74019 6.80979Z\"></path>
            </svg>
          </div>
        </button><a class=\"icon-link\" href=\"#\">
          <div class=\"icon-link__icon\">
            <svg width=\"20\" height=\"18\" viewBox=\"0 0 20 18\" xmlns=\"http://www.w3.org/2000/svg\">
              <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M17.1959 2.98709C15.5699 0.891347 12.3061 1.24282 11.1635 3.6367C10.6965 4.61528 9.30352 4.61528 8.83647 3.6367C7.69394 1.24282 4.43011 0.89135 2.80411 2.98709L2.49475 3.38582C1.08665 5.2007 1.28996 7.78882 2.96418 9.36157L9.91679 15.8928C9.9479 15.922 9.97526 15.9477 10 15.9708C10.0247 15.9477 10.0521 15.922 10.0832 15.8928L17.0358 9.36157C18.71 7.78882 18.9133 5.2007 17.5052 3.38581L17.1959 2.98709ZM10 2.62866C11.7697 -0.442701 16.1553 -0.80115 18.381 2.06759L18.6904 2.46632C20.5728 4.8925 20.301 8.35236 18.0628 10.4548L11.0927 17.0026C10.9885 17.1005 10.8747 17.2075 10.7673 17.2902C10.6438 17.3853 10.4712 17.4954 10.2407 17.5406C10.0818 17.5718 9.91825 17.5718 9.75929 17.5406C9.52884 17.4954 9.35621 17.3853 9.23272 17.2902C9.12533 17.2075 9.01149 17.1005 8.9073 17.0026L1.93717 10.4548C-0.300966 8.35236 -0.572756 4.8925 1.30962 2.46632L1.61898 2.0676C3.84473 -0.801145 8.2303 -0.442701 10 2.62866Z\"></path>
            </svg>
          </div></a>
      </div>
      <div class=\"link link--upper-mini value\"><a class=\"link__text\" href=\"#\">RUS | ₽</a>
        <div class=\"drop-links\"><a href=\"#\">ENG | \$</a><a href=\"#\">ENG | €</a></div>
      </div>
    </div>
  </div>
  <div class=\"header__bottom\">
    ";
        // line 155
        if (($context["logo"] ?? null)) {
            // line 156
            echo "        <a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"logo logo--header\">
           <img src=\"";
            // line 157
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" width=\"136\" height=\"50\"/>
        </a>
    ";
        } else {
            // line 160
            echo "        <h1>
          <a href=\"";
            // line 161
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a>
        </h1>
    ";
        }
        // line 164
        echo "      ";
        echo ($context["menu"] ?? null);
        echo "
    <div class=\"header__menu\">
      <div class=\"link link--upper-mini js-open-menu\" data-id=\"1\"><a class=\"link__text\" href=\"#\">Женщинам</a></div>
      <div class=\"link link--upper-mini js-open-menu\" data-id=\"2\"><a class=\"link__text\" href=\"#\">Мужчинам</a></div>
      <div class=\"link link--upper-mini js-open-menu\" data-id=\"3\"><a class=\"link__text\" href=\"#\">Детям</a></div>
      <a class=\"link link--upper-mini js-open-menu\" href=\"#\" data-id=\"4\">
        <div class=\"link__text\">Sale %</div>
      </a>
    </div>
    <div class=\"header__buttons\">
      <div class=\"search\">
        <button class=\"search__button js-open-search\">
          <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.4697 14.4697C14.7626 14.1768 15.2374 14.1768 15.5303 14.4697L19.0303 17.9697C19.3232 18.2626 19.3232 18.7374 19.0303 19.0303C18.7374 19.3232 18.2626 19.3232 17.9697 19.0303L14.4697 15.5303C14.1768 15.2374 14.1768 14.7626 14.4697 14.4697Z\"></path>
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5ZM9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18Z\"></path>
          </svg>
        </button>
      </div>
      <div class=\"header__log\">
        <div class=\"link link--upper-mini js-open-modal\" data-modal=\"#enter\">
          <div class=\"link__text\">Вход</div>
        </div>
        <div class=\"link link--upper-mini js-open-modal\" data-modal=\"#reg\">
          <div class=\"link__text\">Регистрация</div>
        </div>
      </div>
      <!--a(href=\"#\").icon-link-->
      <!--  .icon-link__icon-->
      <!--      svg(width='18', height='19', viewBox='0 0 18 19', xmlns='http://www.w3.org/2000/svg')-->
      <!--          path(fill-rule='evenodd', clip-rule='evenodd', d='M3.75581 13.5898C5.27713 12.7143 7.12012 12.25 9 12.25C10.8799 12.25 12.7229 12.7143 14.2442 13.5898C15.7651 14.4651 16.907 15.7205 17.4337 17.1948C17.573 17.5848 17.3698 18.014 16.9797 18.1534C16.5897 18.2927 16.1605 18.0895 16.0211 17.6994C15.6362 16.6221 14.7694 15.6228 13.496 14.8899C12.223 14.1573 10.6423 13.75 9 13.75C7.35773 13.75 5.777 14.1573 4.50401 14.8899C3.23057 15.6228 2.36377 16.6221 1.97887 17.6994C1.83951 18.0895 1.41033 18.2927 1.02026 18.1534C0.630197 18.014 0.426957 17.5848 0.566315 17.1948C1.09301 15.7205 2.23494 14.4651 3.75581 13.5898Z')-->
      <!--          path(fill-rule='evenodd', clip-rule='evenodd', d='M9 1.75C7.20507 1.75 5.75 3.20507 5.75 5C5.75 6.79493 7.20507 8.25 9 8.25C10.7949 8.25 12.25 6.79493 12.25 5C12.25 3.20507 10.7949 1.75 9 1.75ZM4.25 5C4.25 2.37665 6.37665 0.25 9 0.25C11.6234 0.25 13.75 2.37665 13.75 5C13.75 7.62335 11.6234 9.75 9 9.75C6.37665 9.75 4.25 7.62335 4.25 5Z')-->
      <!--  .icon-link__text Анастасия-->
      <div class=\"header__btns\">
        <button class=\"icon-link js-open-modal\" data-modal=\"#basket\">
          <div class=\"mini-count\">3</div>
          <div class=\"icon-link__icon\">
            <svg width=\"20\" height=\"19\" viewBox=\"0 0 20 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
              <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M6 9.75C5.58579 9.75 5.25 9.41421 5.25 9L5.25 5C5.25 2.37665 7.37665 0.249999 10 0.249999C12.6234 0.249999 14.75 2.37665 14.75 5L14.75 9C14.75 9.41421 14.4142 9.75 14 9.75C13.5858 9.75 13.25 9.41421 13.25 9L13.25 5C13.25 3.20507 11.7949 1.75 10 1.75C8.20507 1.75 6.75 3.20507 6.75 5L6.75 9C6.75 9.41421 6.41421 9.75 6 9.75Z\"></path>
              <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.63129 5.25H14.369C15.2004 5.24997 15.8963 5.24995 16.4533 5.32228C17.0426 5.3988 17.5767 5.56668 18.0219 5.97633C18.4671 6.38597 18.6788 6.90436 18.804 7.48527C18.9223 8.03432 18.9801 8.72783 19.0491 9.55631L19.571 15.8186C19.6099 16.2849 19.6453 16.7092 19.6264 17.0554C19.6057 17.4347 19.516 17.8427 19.2011 18.1849C18.8863 18.5271 18.4871 18.6504 18.1108 18.7025C17.7674 18.7501 17.3416 18.7501 16.8737 18.75H3.1266C2.6587 18.7501 2.23288 18.7501 1.88952 18.7025C1.51324 18.6504 1.11402 18.5271 0.799149 18.1849C0.484275 17.8427 0.394572 17.4347 0.373883 17.0554C0.355003 16.7092 0.390414 16.2849 0.429323 15.8186L0.951183 9.55632C1.0202 8.72783 1.07796 8.03433 1.1963 7.48527C1.32149 6.90436 1.53316 6.38597 1.97836 5.97633C2.42356 5.56668 2.95773 5.3988 3.54704 5.32228C4.10402 5.24995 4.79993 5.24997 5.63129 5.25ZM3.74019 6.80979C3.31251 6.86532 3.12291 6.96156 2.99402 7.08015C2.86514 7.19874 2.75349 7.3797 2.66263 7.80129C2.56724 8.24391 2.51612 8.83948 2.4419 9.7301L1.92806 15.8962C1.88399 16.425 1.85912 16.7439 1.87166 16.9737C1.87743 17.0795 1.89021 17.1329 1.89824 17.1568C1.90048 17.1634 1.90219 17.1673 1.90308 17.1692C1.90483 17.1702 1.90858 17.1723 1.91504 17.175C1.9382 17.185 1.99033 17.2022 2.09532 17.2167C2.32326 17.2483 2.64312 17.25 3.17374 17.25H16.8265C17.3572 17.25 17.677 17.2483 17.905 17.2167C18.01 17.2022 18.0621 17.185 18.0853 17.175C18.0917 17.1723 18.0955 17.1702 18.0972 17.1692C18.0981 17.1673 18.0998 17.1634 18.1021 17.1568C18.1101 17.1329 18.1229 17.0795 18.1286 16.9737C18.1412 16.7439 18.1163 16.425 18.0722 15.8962L17.5584 9.7301C17.4842 8.83948 17.4331 8.24391 17.3377 7.80129C17.2468 7.3797 17.1352 7.19874 17.0063 7.08015C16.8774 6.96156 16.6878 6.86532 16.2601 6.80979C15.8111 6.75148 15.2133 6.75 14.3196 6.75H5.68068C4.78696 6.75 4.1892 6.75148 3.74019 6.80979Z\"></path>
            </svg>
          </div>
        </button><a class=\"icon-link\" href=\"#\">
          <div class=\"icon-link__icon\">
            <svg width=\"20\" height=\"18\" viewBox=\"0 0 20 18\" xmlns=\"http://www.w3.org/2000/svg\">
              <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M17.1959 2.98709C15.5699 0.891347 12.3061 1.24282 11.1635 3.6367C10.6965 4.61528 9.30352 4.61528 8.83647 3.6367C7.69394 1.24282 4.43011 0.89135 2.80411 2.98709L2.49475 3.38582C1.08665 5.2007 1.28996 7.78882 2.96418 9.36157L9.91679 15.8928C9.9479 15.922 9.97526 15.9477 10 15.9708C10.0247 15.9477 10.0521 15.922 10.0832 15.8928L17.0358 9.36157C18.71 7.78882 18.9133 5.2007 17.5052 3.38581L17.1959 2.98709ZM10 2.62866C11.7697 -0.442701 16.1553 -0.80115 18.381 2.06759L18.6904 2.46632C20.5728 4.8925 20.301 8.35236 18.0628 10.4548L11.0927 17.0026C10.9885 17.1005 10.8747 17.2075 10.7673 17.2902C10.6438 17.3853 10.4712 17.4954 10.2407 17.5406C10.0818 17.5718 9.91825 17.5718 9.75929 17.5406C9.52884 17.4954 9.35621 17.3853 9.23272 17.2902C9.12533 17.2075 9.01149 17.1005 8.9073 17.0026L1.93717 10.4548C-0.300966 8.35236 -0.572756 4.8925 1.30962 2.46632L1.61898 2.0676C3.84473 -0.801145 8.2303 -0.442701 10 2.62866Z\"></path>
            </svg>
          </div></a>
      </div>
      <div class=\"link link--upper-mini value\"><a class=\"link__text\" href=\"#\">RUS | ₽</a>
        <div class=\"drop-links\"><a href=\"#\">ENG | \$</a><a href=\"#\">ENG | €</a></div>
      </div>
    </div>
    <div class=\"burger\"><img src=\"catalog/view/images/icons/burger.svg\" width=\"40\" height=\"40\"></div>
  </div>
</header>
<div class=\"mob-menu\">
  <div class=\"mob-menu__body\">
    <div class=\"mob-menu__top\">
      <div class=\"mob-menu__logo\">
        ";
        // line 223
        if (($context["logo"] ?? null)) {
            // line 224
            echo "           <a href=\"";
            echo ($context["home"] ?? null);
            echo "\">
             <img src=\"";
            // line 225
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" width=\"136\" height=\"50\"/>
           </a>
        ";
        } else {
            // line 228
            echo "           <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
        ";
        }
        // line 230
        echo "      </div>
      <div class=\"mob-menu__close js-close-menu\"><img src=\"/catalog/view/images/icons/close.svg\" width=\"600\" height=\"771\"></div>
    </div>
    <div class=\"mob-menu__list\">
      <div class=\"mob-menu-item js-links-trigger\" data-id=\"1\">
        <div class=\"mob-menu-item__name\">Женщинам</div>
      </div>
      <div class=\"mob-menu-item js-links-trigger\" data-id=\"2\">
        <div class=\"mob-menu-item__name\">Мужчинам</div>
      </div>
      <div class=\"mob-menu-item js-links-trigger\" data-id=\"3\">
        <div class=\"mob-menu-item__name\">Детям</div>
      </div>
      <div class=\"mob-menu-item js-links-trigger\" data-id=\"4\"><a class=\"mob-menu-item__name\" href=\"#\">Sale %</a></div>
    </div>
    <div class=\"mob-menu__bottom\">
      <div class=\"mob-search js-open-search\">
        <button class=\"mob-search__button\">
          <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M14.4697 14.4697C14.7626 14.1768 15.2374 14.1768 15.5303 14.4697L19.0303 17.9697C19.3232 18.2626 19.3232 18.7374 19.0303 19.0303C18.7374 19.3232 18.2626 19.3232 17.9697 19.0303L14.4697 15.5303C14.1768 15.2374 14.1768 14.7626 14.4697 14.4697Z\"></path>
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5ZM9 18C13.9706 18 18 13.9706 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18Z\"></path>
          </svg>
        </button>
        <div class=\"mob-search__text\">Поиск</div>
      </div><a class=\"mob-search\" href=\"#\">
        <div class=\"mob-search__button\">
          <svg width=\"20\" height=\"19\" viewBox=\"0 0 20 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M6 9.75C5.58579 9.75 5.25 9.41421 5.25 9L5.25 5C5.25 2.37665 7.37665 0.249999 10 0.249999C12.6234 0.249999 14.75 2.37665 14.75 5L14.75 9C14.75 9.41421 14.4142 9.75 14 9.75C13.5858 9.75 13.25 9.41421 13.25 9L13.25 5C13.25 3.20507 11.7949 1.75 10 1.75C8.20507 1.75 6.75 3.20507 6.75 5L6.75 9C6.75 9.41421 6.41421 9.75 6 9.75Z\"></path>
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.63129 5.25H14.369C15.2004 5.24997 15.8963 5.24995 16.4533 5.32228C17.0426 5.3988 17.5767 5.56668 18.0219 5.97633C18.4671 6.38597 18.6788 6.90436 18.804 7.48527C18.9223 8.03432 18.9801 8.72783 19.0491 9.55631L19.571 15.8186C19.6099 16.2849 19.6453 16.7092 19.6264 17.0554C19.6057 17.4347 19.516 17.8427 19.2011 18.1849C18.8863 18.5271 18.4871 18.6504 18.1108 18.7025C17.7674 18.7501 17.3416 18.7501 16.8737 18.75H3.1266C2.6587 18.7501 2.23288 18.7501 1.88952 18.7025C1.51324 18.6504 1.11402 18.5271 0.799149 18.1849C0.484275 17.8427 0.394572 17.4347 0.373883 17.0554C0.355003 16.7092 0.390414 16.2849 0.429323 15.8186L0.951183 9.55632C1.0202 8.72783 1.07796 8.03433 1.1963 7.48527C1.32149 6.90436 1.53316 6.38597 1.97836 5.97633C2.42356 5.56668 2.95773 5.3988 3.54704 5.32228C4.10402 5.24995 4.79993 5.24997 5.63129 5.25ZM3.74019 6.80979C3.31251 6.86532 3.12291 6.96156 2.99402 7.08015C2.86514 7.19874 2.75349 7.3797 2.66263 7.80129C2.56724 8.24391 2.51612 8.83948 2.4419 9.7301L1.92806 15.8962C1.88399 16.425 1.85912 16.7439 1.87166 16.9737C1.87743 17.0795 1.89021 17.1329 1.89824 17.1568C1.90048 17.1634 1.90219 17.1673 1.90308 17.1692C1.90483 17.1702 1.90858 17.1723 1.91504 17.175C1.9382 17.185 1.99033 17.2022 2.09532 17.2167C2.32326 17.2483 2.64312 17.25 3.17374 17.25H16.8265C17.3572 17.25 17.677 17.2483 17.905 17.2167C18.01 17.2022 18.0621 17.185 18.0853 17.175C18.0917 17.1723 18.0955 17.1702 18.0972 17.1692C18.0981 17.1673 18.0998 17.1634 18.1021 17.1568C18.1101 17.1329 18.1229 17.0795 18.1286 16.9737C18.1412 16.7439 18.1163 16.425 18.0722 15.8962L17.5584 9.7301C17.4842 8.83948 17.4331 8.24391 17.3377 7.80129C17.2468 7.3797 17.1352 7.19874 17.0063 7.08015C16.8774 6.96156 16.6878 6.86532 16.2601 6.80979C15.8111 6.75148 15.2133 6.75 14.3196 6.75H5.68068C4.78696 6.75 4.1892 6.75148 3.74019 6.80979Z\"></path>
          </svg>
        </div>
        <div class=\"mob-search__text\">Корзина</div></a><a class=\"mob-search\" href=\"#\">
        <div class=\"mob-search__button\">
          <svg width=\"18\" height=\"19\" viewBox=\"0 0 18 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M3.75585 13.5898C5.27716 12.7143 7.12013 12.25 9.00001 12.25C10.8799 12.25 12.7229 12.7143 14.2442 13.5899C15.765 14.4651 16.907 15.7205 17.4337 17.1948C17.573 17.5848 17.3698 18.014 16.9797 18.1534C16.5897 18.2927 16.1605 18.0895 16.0211 17.6994C15.6362 16.6221 14.7694 15.6227 13.496 14.8899L13.496 14.8899C12.223 14.1573 10.6423 13.75 9.00001 13.75C7.35771 13.75 5.77701 14.1573 4.50404 14.8899L4.504 14.89C3.2306 15.6227 2.36379 16.6221 1.97888 17.6994C1.83953 18.0895 1.41034 18.2927 1.02027 18.1534C0.630208 18.014 0.426968 17.5848 0.566325 17.1948C1.09302 15.7205 2.23493 14.4651 3.75581 13.5899\"></path>
            <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9 1.75C7.20507 1.75 5.75 3.20507 5.75 5C5.75 6.79493 7.20507 8.25 9 8.25C10.7949 8.25 12.25 6.79493 12.25 5C12.25 3.20507 10.7949 1.75 9 1.75ZM4.25 5C4.25 2.37665 6.37665 0.25 9 0.25C11.6234 0.25 13.75 2.37665 13.75 5C13.75 7.62335 11.6234 9.75 9 9.75C6.37665 9.75 4.25 7.62335 4.25 5Z\"></path>
          </svg>
        </div>
        <div class=\"mob-search__text\"><span class=\"js-open-modal\" data-modal=\"#enter\">Вход   |</span><span class=\"js-open-modal\" data-modal=\"#reg\">  Регистрация</span></div></a><a class=\"mob-search\" href=\"#\">
        <div class=\"mob-search__text\">RUS | ₽</div></a>
    </div>
    <div class=\"mob-menu__hidden\">
      <div class=\"mob-menu__links js-links-mob\" data-id=\"1\">
        <div class=\"mob-menu__back\"><img src=\"/catalog/view/images/icons/left-arr.svg\" width=\"12\" height=\"12\"><span>Женщинам</span></div>
        <div class=\"mob-menu__back-list\"><a href=\"#\">Футболки</a><a href=\"#\">Водолазки</a><a href=\"#\">Костюмы</a><a href=\"#\">Тай-дай</a><a href=\"#\">Кардиганы</a><a href=\"#\">Брюки</a><a href=\"#\">Джинсы</a></div>
      </div>
      <div class=\"mob-menu__links js-links-mob\" data-id=\"2\">
        <div class=\"mob-menu__back\"><img src=\"/catalog/view/images/icons/left-arr.svg\" width=\"12\" height=\"12\"><span>Мужчинам</span></div>
        <div class=\"mob-menu__back-list\"><a href=\"#\">Футболки</a><a href=\"#\">Водолазки</a><a href=\"#\">Костюмы</a></div>
      </div>
      <div class=\"mob-menu__links js-links-mob\" data-id=\"3\">
        <div class=\"mob-menu__back\"><img src=\"/catalog/view/images/icons/left-arr.svg\" width=\"12\" height=\"12\"><span>Детям</span></div>
        <div class=\"mob-menu__back-list\"><a href=\"#\">Футболки</a><a href=\"#\">Водолазки</a><a href=\"#\">Костюмы</a><a href=\"#\">Брюки</a><a href=\"#\">Джинсы</a></div>
      </div>
      <div class=\"mob-menu__links js-links-mob\" data-id=\"4\">
        <div class=\"mob-menu__back\"><img src=\"/catalog/view/images/icons/left-arr.svg\" width=\"12\" height=\"12\"><span>Sale</span></div>
        <div class=\"mob-menu__back-list\"><a href=\"#\">Футболки</a><a href=\"#\">Водолазки</a><a href=\"#\">Костюмы</a><a href=\"#\">Брюки</a><a href=\"#\">Джинсы</a></div>
      </div>
    </div>
  </div>
</div>





";
        // line 313
        echo "<main>

";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 313,  358 => 230,  350 => 228,  340 => 225,  335 => 224,  333 => 223,  270 => 164,  262 => 161,  259 => 160,  249 => 157,  244 => 156,  242 => 155,  165 => 80,  159 => 41,  150 => 39,  146 => 38,  139 => 33,  128 => 31,  123 => 30,  114 => 28,  109 => 27,  96 => 25,  92 => 24,  85 => 19,  80 => 17,  75 => 15,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/header.twig", "C:\\OSPanel\\domains\\wake\\catalog\\view\\template\\common\\header.twig");
    }
}
