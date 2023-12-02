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

/* catalog/view/template/common/home.twig */
class __TwigTemplate_af949416098d2f4f7653a08779fbd0bb extends Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"common-home\">
  <div class=\"row\">
    ";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">
      ";
        // line 6
        echo ($context["content_top"] ?? null);
        echo "
";
        // line 8
        echo "      <section class=\"section--seo\">
        <div class=\"container\">
          <div class=\"seo-block\">
            <div class=\"seo-block__tiny\">
              <h2>Магазин последней коллекции одежды и аксессуаров</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias aspernatur doloremque doloribus dolorum ea est eveniet ipsa labore, nam obcaecati quasi quia quis recusandae repellat repellendus voluptate voluptatibus! Deleniti quod repellat sint ut? Aliquid amet consectetur culpa distinctio facere, fugiat illo ipsa necessitatibus qui, quis reiciendis sequi voluptatem, voluptates! Delectus dolorum ipsum mollitia quod! Doloribus facere fugit illum iure nihil praesentium, quia quod rem suscipit voluptate! Dolore ducimus explicabo nobis quod sapiente vitae! Doloremque dolores earum facilis, quisquam reiciendis repudiandae sequi veritatis voluptatem. Ad autem consequuntur cumque enim iste magnam nam necessitatibus numquam placeat rerum sequi tenetur, ut veniam.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet asperiores beatae blanditiis corporis delectus dolores doloribus esse eveniet facilis, harum in itaque labore laudantium magnam minima nam nihil non nostrum numquam, omnis perspiciatis praesentium provident quasi reiciendis rem sapiente soluta tempora tenetur vero. Ad blanditiis dolor dolore, dolorum eius, error eveniet iusto labore laudantium maiores minima nam nesciunt possimus provident quaerat quis sequi similique tempora ullam voluptate? Aperiam blanditiis deleniti ducimus eveniet iusto perferendis possimus quaerat repellat! Aut blanditiis cum dolores ea eligendi illum, inventore labore magnam molestias nobis obcaecati, placeat praesentium quaerat quas quidem similique sunt suscipit! Necessitatibus?</p>
            </div>
            <div class=\"seo-block__all js-toggle-parent\"><a class=\"link link--grey-under\">
                <div class=\"link__text\">Показать весь текст</div>
                <div class=\"link__text\">Скрыть</div></a></div>
          </div>
        </div>
      </section>
      <div hidden>
        <div class=\"popup popup--cart\" id=\"basket\">
          <div class=\"popup__close js-close-magnific\"><img src=\"/catalog/view/images/icons/close.svg\" width=\"600\" height=\"771\"></div>
          <div class=\"popup__title\"><span>Корзина</span></div>
          <div class=\"popup__sub\"> У Вас в корзине всего 7 товаров</div>
          <div class=\"basket-popup\">
            <div class=\"basket-popup__list-wrap\">
              <div class=\"basket-popup__list\">
                <div class=\"history-card history-card--basket\">
                  <div class=\"history-card__close js-remove-bask\" data-id=\"1\" data-url=\"delete-bask\"><img src=\"/catalog/view/images/icons/close.svg\" width=\"600\" height=\"771\"></div>
                  <div class=\"history-card__numb\">1.</div>
                  <div class=\"history-card__img\"><img class=\"lazy\" src=\"/catalog/view/images/empty.gif\" data-src=\"/catalog/view/images/pics/cart.png\" width=\"78\" height=\"112\"></div>
                  <div class=\"history-card__body\"><a class=\"history-card__name\" href=\"#\">Название товара Finer Things Midi</a>
                    <div class=\"history-card__middle\"><span>Цвет: Белый</span><span>Размер: XL</span><span>Артикул:  2153575</span></div>
                    <div class=\"history-card__bottom\">
                      <div class=\"history-card__price-double\"><span class=\"old\">3500 ₽</span><span class=\"current-red\">1 999 ₽</span></div>
                      <div class=\"history-card__counter\">
                        <div class=\"product-count js-count-prod\">
                          <button class=\"product-count__button js-count-minus\" type=\"button\">
                            <svg width=\"11\" height=\"1\" viewBox=\"0 0 11 1\" xmlns=\"http://www.w3.org/2000/svg\">
                              <rect width=\"11\" height=\"1\"></rect>
                            </svg>
                          </button>
                          <input class=\"product-count__input js-adult-input\" type=\"text\" name=\"count-adult\" readonly=\"\" value=\"1\">
                          <button class=\"product-count__button js-count-plus\" type=\"button\">
                            <svg width=\"11\" height=\"11\" viewBox=\"0 0 11 11\" xmlns=\"http://www.w3.org/2000/svg\">
                              <rect y=\"5\" width=\"11\" height=\"1\"></rect>
                              <rect x=\"5\" y=\"11\" width=\"11\" height=\"1\" transform=\"rotate(-90 5 11)\"></rect>
                            </svg>
                          </button>
                        </div>
                      </div><span>Итого: 2 000 ₽</span>
                    </div>
                  </div>
                </div>
                <div class=\"history-card history-card--basket\">
                  <div class=\"history-card__close js-remove-bask\" data-id=\"2\" data-url=\"delete-bask\"><img src=\"/catalog/view/images/icons/close.svg\" width=\"600\" height=\"771\"></div>
                  <div class=\"history-card__numb\">2.</div>
                  <div class=\"history-card__img\"><img class=\"lazy\" src=\"/catalog/view/images/empty.gif\" data-src=\"/catalog/view/images/pics/cart2.png\" width=\"78\" height=\"112\"></div>
                  <div class=\"history-card__body\"><a class=\"history-card__name\" href=\"#\">Название товара Finer Things Midi</a>
                    <div class=\"history-card__middle\"><span>Цвет: Белый</span><span>Размер: XL</span><span>Артикул:  2153575</span></div>
                    <div class=\"history-card__bottom\">
                      <div class=\"history-card__price-double\"><span class=\"current\">1 999 ₽</span></div>
                      <div class=\"history-card__counter\">
                        <div class=\"product-count js-count-prod\">
                          <button class=\"product-count__button js-count-minus\" type=\"button\">
                            <svg width=\"11\" height=\"1\" viewBox=\"0 0 11 1\" xmlns=\"http://www.w3.org/2000/svg\">
                              <rect width=\"11\" height=\"1\"></rect>
                            </svg>
                          </button>
                          <input class=\"product-count__input js-adult-input\" type=\"text\" name=\"count-adult\" readonly=\"\" value=\"1\">
                          <button class=\"product-count__button js-count-plus\" type=\"button\">
                            <svg width=\"11\" height=\"11\" viewBox=\"0 0 11 11\" xmlns=\"http://www.w3.org/2000/svg\">
                              <rect y=\"5\" width=\"11\" height=\"1\"></rect>
                              <rect x=\"5\" y=\"11\" width=\"11\" height=\"1\" transform=\"rotate(-90 5 11)\"></rect>
                            </svg>
                          </button>
                        </div>
                      </div><span>Итого: 2 000 ₽</span>
                    </div>
                  </div>
                </div>
                <div class=\"history-card history-card--basket\">
                  <div class=\"history-card__close js-remove-bask\" data-id=\"1\" data-url=\"delete-bask\"><img src=\"/catalog/view/images/icons/close.svg\" width=\"600\" height=\"771\"></div>
                  <div class=\"history-card__numb\">3.</div>
                  <div class=\"history-card__img\"><img class=\"lazy\" src=\"/catalog/view/images/empty.gif\" data-src=\"/catalog/view/images/pics/cart.png\" width=\"78\" height=\"112\"></div>
                  <div class=\"history-card__body\"><a class=\"history-card__name\" href=\"#\">Название товара Finer Things Midi</a>
                    <div class=\"history-card__middle\"><span>Цвет: Белый</span><span>Размер: XL</span><span>Артикул:  2153575</span></div>
                    <div class=\"history-card__bottom\">
                      <div class=\"history-card__price-double\"><span class=\"old\">3500 ₽</span><span class=\"current-red\">1 999 ₽</span></div>
                      <div class=\"history-card__counter\">
                        <div class=\"product-count js-count-prod\">
                          <button class=\"product-count__button js-count-minus\" type=\"button\">
                            <svg width=\"11\" height=\"1\" viewBox=\"0 0 11 1\" xmlns=\"http://www.w3.org/2000/svg\">
                              <rect width=\"11\" height=\"1\"></rect>
                            </svg>
                          </button>
                          <input class=\"product-count__input js-adult-input\" type=\"text\" name=\"count-adult\" readonly=\"\" value=\"1\">
                          <button class=\"product-count__button js-count-plus\" type=\"button\">
                            <svg width=\"11\" height=\"11\" viewBox=\"0 0 11 11\" xmlns=\"http://www.w3.org/2000/svg\">
                              <rect y=\"5\" width=\"11\" height=\"1\"></rect>
                              <rect x=\"5\" y=\"11\" width=\"11\" height=\"1\" transform=\"rotate(-90 5 11)\"></rect>
                            </svg>
                          </button>
                        </div>
                      </div><span>Итого: 2 000 ₽</span>
                    </div>
                  </div>
                </div>
                <div class=\"history-card history-card--basket\">
                  <div class=\"history-card__close js-remove-bask\" data-id=\"2\" data-url=\"delete-bask\"><img src=\"/catalog/view/images/icons/close.svg\" width=\"600\" height=\"771\"></div>
                  <div class=\"history-card__numb\">4.</div>
                  <div class=\"history-card__img\"><img class=\"lazy\" src=\"/catalog/view/images/empty.gif\" data-src=\"/catalog/view/images/pics/cart2.png\" width=\"78\" height=\"112\"></div>
                  <div class=\"history-card__body\"><a class=\"history-card__name\" href=\"#\">Название товара Finer Things Midi</a>
                    <div class=\"history-card__middle\"><span>Цвет: Белый</span><span>Размер: XL</span><span>Артикул:  2153575</span></div>
                    <div class=\"history-card__bottom\">
                      <div class=\"history-card__price-double\"><span class=\"current\">1 999 ₽</span></div>
                      <div class=\"history-card__counter\">
                        <div class=\"product-count js-count-prod\">
                          <button class=\"product-count__button js-count-minus\" type=\"button\">
                            <svg width=\"11\" height=\"1\" viewBox=\"0 0 11 1\" xmlns=\"http://www.w3.org/2000/svg\">
                              <rect width=\"11\" height=\"1\"></rect>
                            </svg>
                          </button>
                          <input class=\"product-count__input js-adult-input\" type=\"text\" name=\"count-adult\" readonly=\"\" value=\"1\">
                          <button class=\"product-count__button js-count-plus\" type=\"button\">
                            <svg width=\"11\" height=\"11\" viewBox=\"0 0 11 11\" xmlns=\"http://www.w3.org/2000/svg\">
                              <rect y=\"5\" width=\"11\" height=\"1\"></rect>
                              <rect x=\"5\" y=\"11\" width=\"11\" height=\"1\" transform=\"rotate(-90 5 11)\"></rect>
                            </svg>
                          </button>
                        </div>
                      </div><span>Итого: 2 000 ₽</span>
                    </div>
                  </div>
                </div>
                <div class=\"history-card history-card--basket\">
                  <div class=\"history-card__close js-remove-bask\" data-id=\"1\" data-url=\"delete-bask\"><img src=\"/catalog/view/images/icons/close.svg\" width=\"600\" height=\"771\"></div>
                  <div class=\"history-card__numb\">5.</div>
                  <div class=\"history-card__img\"><img class=\"lazy\" src=\"/catalog/view/images/empty.gif\" data-src=\"/catalog/view/images/pics/cart.png\" width=\"78\" height=\"112\"></div>
                  <div class=\"history-card__body\"><a class=\"history-card__name\" href=\"#\">Название товара Finer Things Midi</a>
                    <div class=\"history-card__middle\"><span>Цвет: Белый</span><span>Размер: XL</span><span>Артикул:  2153575</span></div>
                    <div class=\"history-card__bottom\">
                      <div class=\"history-card__price-double\"><span class=\"old\">3500 ₽</span><span class=\"current-red\">1 999 ₽</span></div>
                      <div class=\"history-card__counter\">
                        <div class=\"product-count js-count-prod\">
                          <button class=\"product-count__button js-count-minus\" type=\"button\">
                            <svg width=\"11\" height=\"1\" viewBox=\"0 0 11 1\" xmlns=\"http://www.w3.org/2000/svg\">
                              <rect width=\"11\" height=\"1\"></rect>
                            </svg>
                          </button>
                          <input class=\"product-count__input js-adult-input\" type=\"text\" name=\"count-adult\" readonly=\"\" value=\"1\">
                          <button class=\"product-count__button js-count-plus\" type=\"button\">
                            <svg width=\"11\" height=\"11\" viewBox=\"0 0 11 11\" xmlns=\"http://www.w3.org/2000/svg\">
                              <rect y=\"5\" width=\"11\" height=\"1\"></rect>
                              <rect x=\"5\" y=\"11\" width=\"11\" height=\"1\" transform=\"rotate(-90 5 11)\"></rect>
                            </svg>
                          </button>
                        </div>
                      </div><span>Итого: 2 000 ₽</span>
                    </div>
                  </div>
                </div>
                <div class=\"history-card history-card--basket\">
                  <div class=\"history-card__close js-remove-bask\" data-id=\"2\" data-url=\"delete-bask\"><img src=\"/catalog/view/images/icons/close.svg\" width=\"600\" height=\"771\"></div>
                  <div class=\"history-card__numb\">6.</div>
                  <div class=\"history-card__img\"><img class=\"lazy\" src=\"/catalog/view/images/empty.gif\" data-src=\"/catalog/view/images/pics/cart2.png\" width=\"78\" height=\"112\"></div>
                  <div class=\"history-card__body\"><a class=\"history-card__name\" href=\"#\">Название товара Finer Things Midi</a>
                    <div class=\"history-card__middle\"><span>Цвет: Белый</span><span>Размер: XL</span><span>Артикул:  2153575</span></div>
                    <div class=\"history-card__bottom\">
                      <div class=\"history-card__price-double\"><span class=\"current\">1 999 ₽</span></div>
                      <div class=\"history-card__counter\">
                        <div class=\"product-count js-count-prod\">
                          <button class=\"product-count__button js-count-minus\" type=\"button\">
                            <svg width=\"11\" height=\"1\" viewBox=\"0 0 11 1\" xmlns=\"http://www.w3.org/2000/svg\">
                              <rect width=\"11\" height=\"1\"></rect>
                            </svg>
                          </button>
                          <input class=\"product-count__input js-adult-input\" type=\"text\" name=\"count-adult\" readonly=\"\" value=\"1\">
                          <button class=\"product-count__button js-count-plus\" type=\"button\">
                            <svg width=\"11\" height=\"11\" viewBox=\"0 0 11 11\" xmlns=\"http://www.w3.org/2000/svg\">
                              <rect y=\"5\" width=\"11\" height=\"1\"></rect>
                              <rect x=\"5\" y=\"11\" width=\"11\" height=\"1\" transform=\"rotate(-90 5 11)\"></rect>
                            </svg>
                          </button>
                        </div>
                      </div><span>Итого: 2 000 ₽</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"basket-total\">
              <div class=\"basket-total__title\">Итого:</div>
              <div class=\"basket-total__price\">51 960 ₽</div>
            </div>
            <div class=\"basket-bottom\">
              <div class=\"basket-bottom__close js-close-magnific\">Продолжить покупки</div><a class=\"button button--dark-big\" href=\"/order.html\">
                <div class=\"button__text\">Перейти в корзину</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
";
        // line 209
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 209,  52 => 8,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/home.twig", "C:\\OSPanel\\domains\\wake\\catalog\\view\\template\\common\\home.twig");
    }
}
