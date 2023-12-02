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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_d395eff92bfc7efe656b27a3262f4d8c extends Template
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
        echo "</main>
";
        // line 47
        echo "
";
        // line 50
        echo "
<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"footer__body\">
      <div class=\"footer__mob-menu js-accordion\" data-multiple=\"false\">
        <div class=\"footer-acc ac is-active\">
          <div class=\"footer-acc__trigger ac-trigger\">
            <div class=\"footer__title\">Компания</div><img src=\"/catalog/view/images/icons/arrow-black.svg\" width=\"600\" height=\"771\">
          </div>
          <div class=\"footer-acc__panel ac-panel\"><a class=\"footer__link\" href=\"#\">О нас</a><a class=\"footer__link\" href=\"#\">Статьи</a><a class=\"footer__link\" href=\"#\">Special price</a><a class=\"footer__link\" href=\"#\">Частые вопросы</a><a class=\"footer__link\" href=\"#\">Доставка и оплата</a><a class=\"footer__link\" href=\"#\">Возврат и обмен</a><a class=\"footer__link\" href=\"#\">Контакты</a><a class=\"footer__link\" href=\"#\">Карта сайта</a></div>
        </div>
        <div class=\"footer-acc ac is-active\">
          <div class=\"footer-acc__trigger ac-trigger\">
            <div class=\"footer__title\">Каталог товаров</div><img src=\"/catalog/view/images/icons/arrow-black.svg\" width=\"600\" height=\"771\">
          </div>
          <div class=\"footer-acc__panel ac-panel\"><a class=\"footer__link\" href=\"#\">Женщинам</a><a class=\"footer__link\" href=\"#\">Мужчинам</a><a class=\"footer__link\" href=\"#\">Детям</a><a class=\"footer__link\" href=\"#\">Sale%</a></div>
        </div>
        <div class=\"footer-acc ac is-active\">
          <div class=\"footer-acc__trigger ac-trigger\">
            <div class=\"footer__title\">Follow</div><img src=\"/catalog/view/images/icons/arrow-black.svg\" width=\"600\" height=\"771\">
          </div>
          <div class=\"footer-acc__panel ac-panel\"><a class=\"footer__link\" href=\"#\"> Instagram</a><a class=\"footer__link\" href=\"#\"> Facebook</a><a class=\"footer__link\" href=\"#\"> Tiktok</a></div>
        </div>
      </div>
      <div class=\"footer__menu\">
        <div class=\"footer__column\">
          <div class=\"footer__title\">Компания</div><a class=\"footer__link\" href=\"#\">О нас</a><a class=\"footer__link\" href=\"#\">Статьи</a><a class=\"footer__link\" href=\"#\">Special price</a><a class=\"footer__link\" href=\"#\">Частые вопросы</a>
        </div>
        <div class=\"footer__column\">
          <div class=\"footer__title\"></div><a class=\"footer__link\" href=\"#\">Доставка и оплата</a><a class=\"footer__link\" href=\"#\">Возврат и обмен</a><a class=\"footer__link\" href=\"#\">Контакты</a><a class=\"footer__link\" href=\"#\">Карта сайта</a>
        </div>
        <div class=\"footer__column\">
          <div class=\"footer__title\">Каталог товаров</div><a class=\"footer__link\" href=\"#\">Женщинам</a><a class=\"footer__link\" href=\"#\">Мужчинам</a><a class=\"footer__link\" href=\"#\">Детям</a><a class=\"footer__link\" href=\"#\">Sale%</a>
        </div>
        <div class=\"footer__column\">
          <div class=\"footer__title\">Follow</div><a class=\"footer__link\" href=\"#\"> Instagram</a><a class=\"footer__link\" href=\"#\"> Facebook</a><a class=\"footer__link\" href=\"#\"> Tiktok</a>
        </div>
      </div>
      <div class=\"footer__img\"><img src=\"/catalog/view/images/pics/footer-pic.png\" width=\"756\" height=\"189\"></div>
    </div>
    <div class=\"footer__bottom\">
      <div class=\"footer__bottom-left\">
        <div class=\"footer__copy\">2023 &copy; Wake</div>
        <div class=\"footer__cookie\">Сайт использует файлы<a href=\"#\">cookie</a>которые содержат информацию о предыдущих посещениях веб-сайта.</div>
      </div>
      <div class=\"footer__right\"><a class=\"link link--simple-border\" href=\"#\">
          <div class=\"link__text\">Согласие на обработку персональных данных</div></a><a class=\"link link--simple-border\" href=\"#\">
          <div class=\"link__text\">Политика конфиденциальности</div></a></div>
    </div>
  </div>
</footer>
<div hidden>
  <div class=\"popup popup--enter\" id=\"enter\">
    <div class=\"popup__close js-close-magnific\"><img src=\"/catalog/view/images/icons/close.svg\" width=\"600\" height=\"771\"></div>
    <div class=\"popup__title\"><span>Вход</span>в личный кабинет</div>
    <form class=\"enter-block js-send-form\">
      <div class=\"input-item form-item-valid\">
        <input class=\"form-required\" type=\"text\" name=\"name\" id=\"name\" placeholder=\"Имя\">
      </div>
      <div class=\"input-item form-item-valid\">
        <input class=\"form-required\" type=\"password\" name=\"old-pass\" id=\"old-pass\" placeholder=\"Пароль\">
      </div>
      <div class=\"popup-double\">
        <div class=\"popup-double__text js-open-modal\" data-modal=\"#pass\">Забыли пароль?<span>Восстановить?</span></div>
        <button class=\"button button--dark-big\">
          <div class=\"button__text\">Войти</div>
        </button>
      </div>
      <div class=\"popup-double\">
        <div class=\"popup-double__text\">Нет профиля на сайте Wake?</div>
        <button class=\"button button--dark-big js-open-modal\" type=\"button\" data-modal=\"#reg\">
          <div class=\"button__text\">Зарегистрироваться</div>
        </button>
      </div>
      <div class=\"popup-soc\">
        <div class=\"popup-soc__title\">Войти через соц. сеть</div>
        <div class=\"popup-soc__list\"><a href=\"#\"><img src=\"/catalog/view/images/icons/vk.svg\" width=\"40\" height=\"40\"></a><a href=\"#\"><img src=\"/catalog/view/images/icons/go.svg\" width=\"40\" height=\"40\"></a><a href=\"#\"><img src=\"/catalog/view/images/icons/mail.svg\" width=\"40\" height=\"40\"></a><a href=\"#\"><img src=\"/catalog/view/images/icons/fb.svg\" width=\"40\" height=\"40\"></a></div>
      </div>
    </form>
  </div>
  <div class=\"popup popup--reg\" id=\"reg\">
    <div class=\"popup__close js-close-magnific\"><img src=\"/catalog/view/images/icons/close.svg\" width=\"600\" height=\"771\"></div>
    <div class=\"popup__title\"><span>Регистрация</span>нового пользователя</div>
    <form class=\"reg-block js-send-form\">
      <div class=\"reg-block__inputs\">
        <div class=\"input-item form-item-valid\">
          <input class=\"form-required\" type=\"text\" name=\"name\" id=\"name2\" placeholder=\"Имя\">
        </div>
        <div class=\"input-item form-item-valid\">
          <input class=\"form-required\" type=\"text\" name=\"surname\" id=\"surname\" placeholder=\"Фамилия\">
        </div>
        <div class=\"input-item form-item-valid\">
          <input class=\"form-required\" type=\"email\" name=\"email\" id=\"email\" placeholder=\"Ваш email\">
        </div>
        <div class=\"input-item form-item-valid\">
          <input class=\"form-required\" type=\"phone\" name=\"phone\" id=\"phone\" placeholder=\"Ваш телефон\" onkeypress=\"return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57\">
        </div>
        <div class=\"input-item form-item-valid\">
          <input class=\"form-required\" type=\"password\" name=\"new-pass\" id=\"new-pass\" placeholder=\"Введите новый пароль\">
        </div>
        <div class=\"input-item form-item-valid\">
          <input class=\"form-required\" type=\"password\" name=\"new-pass-accept\" id=\"new-pass-accept\" placeholder=\"Подтвердите новый пароль\">
        </div>
      </div>
      <div class=\"popup-double\">
        <div class=\"rassilka\">
          <input type=\"checkbox\" name=\"rassilka\" checked>
          <div class=\"rassilka__icon\"><img src=\"/catalog/view/images/icons/check-two.svg\" width=\"14\" height=\"14\"></div>
          <div class=\"rassilka__text\"> Подписаться на новости и скидки</div>
        </div>
        <button class=\"button button--dark-big\">
          <div class=\"button__text\">Зарегистрироваться</div>
        </button>
      </div>
      <div class=\"popup-double\">
        <div class=\"popup-double__text\">Уже есть аккаунт на Wake?</div>
        <button class=\"button button--dark-big js-open-modal\" type=\"button\" data-modal=\"#enter\">
          <div class=\"button__text\">Войти в личный кабинет</div>
        </button>
      </div>
      <div class=\"popup-soc\">
        <div class=\"popup-soc__title\">Войти через соц. сеть</div>
        <div class=\"popup-soc__list\"><a href=\"#\"><img src=\"/catalog/view/images/icons/vk.svg\" width=\"40\" height=\"40\"></a><a href=\"#\"><img src=\"/catalog/view/images/icons/go.svg\" width=\"40\" height=\"40\"></a><a href=\"#\"><img src=\"/catalog/view/images/icons/mail.svg\" width=\"40\" height=\"40\"></a><a href=\"#\"><img src=\"/catalog/view/images/icons/fb.svg\" width=\"40\" height=\"40\"></a></div>
      </div>
    </form>
  </div>
  <div class=\"popup popup--pass\" id=\"pass\">
    <div class=\"popup__close js-close-magnific\"><img src=\"/catalog/view/images/icons/close.svg\" width=\"600\" height=\"771\"></div>
    <div class=\"popup__title\"><span>Восстановление</span>пароля</div>
    <div class=\"popup__sub\">Укажите адрес электронной почты, который вы использовали при оформлении заказов в Wake. Мы вышлем вам инструкцию по восстановлению пароля</div>
    <form class=\"reg-block js-send-form\">
      <div class=\"input-item form-item-valid\">
        <input class=\"form-required\" type=\"email\" name=\"email\" id=\"email2\" placeholder=\"Ваш email\">
      </div>
      <div class=\"popup-double\">
        <div class=\"popup-double__text\"> Отправим онструкции на почту</div>
        <button class=\"button button--dark-big\">
          <div class=\"button__text\">Восстановить</div>
        </button>
      </div>
      <div class=\"popup-double\">
        <div class=\"popup-double__text\">Вспомнили пароль?</div>
        <button class=\"button button--dark-big js-open-modal\" type=\"button\" data-modal=\"#enter\">
          <div class=\"button__text\">Войти в личный кабинет</div>
        </button>
      </div>
    </form>
  </div>
</div>


";
        // line 201
        echo ($context["cookie"] ?? null);
        echo "
<script src=\"/catalog/view/modules/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"/catalog/view/modules/lozad.min.js\"></script>
<script src=\"/catalog/view/modules/swiper.min.js\"></script>
<script src=\"/catalog/view/modules/slick.min.js\"></script>
<script type=\"text/javascript\" src=\"/catalog/view/modules/magnific.js\"></script>
<script src=\"/catalog/view/modules/inputmask.js\"></script>
<script src=\"/catalog/view/modules/jquery-inview.js\"></script>
<script src=\"/catalog/view/modules/select2.min.js\"></script>
<script src=\"/catalog/view/modules/jquery.typeahead.js\"></script>
<script src=\"";
        // line 211
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/javascript\"></script>
";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 213
            echo "  <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 213);
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "</body></html>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 215,  217 => 213,  213 => 212,  209 => 211,  196 => 201,  43 => 50,  40 => 47,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/footer.twig", "C:\\OSPanel\\domains\\wake\\catalog\\view\\template\\common\\footer.twig");
    }
}
