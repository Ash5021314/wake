// function getURLVar(key) {
//     var value = [];
//
//     var query = String(document.location).split('?');
//
//     if (query[1]) {
//         var part = query[1].split('&');
//
//         for (i = 0; i < part.length; i++) {
//             var data = part[i].split('=');
//
//             // if (data[0] && data[1]) {
//                 value[data[0]] = data[1];
//             }
//         }
//
//         if (value[key]) {
//             return value[key];
//         } else {
//             return '';
//         }
//     }
// }
//
// $(document).ready(function() {
//     // Tooltip
//     var oc_tooltip = function() {
//         // Get tooltip instance
//         tooltip = bootstrap.Tooltip.getInstance(this);
//         if (!tooltip) {
//             // Apply to current element
//             tooltip = bootstrap.Tooltip.getOrCreateInstance(this);
//             tooltip.show();
//         }
//     }
//
//     $(document).on('mouseenter', '[data-bs-toggle=\'tooltip\']', oc_tooltip);
//
//     $(document).on('click', 'button', function() {
//         $('.tooltip').remove();
//     });
//
//     // Date
//     var oc_datetimepicker = function() {
//         $(this).daterangepicker({
//             singleDatePicker: true,
//             autoApply: true,
//             autoUpdateInput: false,
//             locale: {
//                 format: 'YYYY-MM-DD'
//             }
//         }, function(start, end) {
//             $(this.element).val(start.format('YYYY-MM-DD'));
//         });
//     }
//
//     $(document).on('focus', '.date', oc_datetimepicker);
//
//     // Time
//     var oc_datetimepicker = function() {
//         $(this).daterangepicker({
//             singleDatePicker: true,
//             datePicker: false,
//             autoApply: true,
//             autoUpdateInput: false,
//             timePicker: true,
//             timePicker24Hour: true,
//             locale: {
//                 format: 'HH:mm'
//             }
//         }, function(start, end) {
//             $(this.element).val(start.format('HH:mm'));
//         }).on('show.daterangepicker', function(ev, picker) {
//             picker.container.find('.calendar-table').hide();
//         });
//     }
//
//     $(document).on('focus', '.time', oc_datetimepicker);
//
//     // Date Time
//     var oc_datetimepicker = function() {
//         $(this).daterangepicker({
//             singleDatePicker: true,
//             autoApply: true,
//             autoUpdateInput: false,
//             timePicker: true,
//             timePicker24Hour: true,
//             locale: {
//                 format: 'YYYY-MM-DD HH:mm'
//             }
//         }, function(start, end) {
//             $(this.element).val(start.format('YYYY-MM-DD HH:mm'));
//         });
//     }
//
//     $(document).on('focus', '.datetime', oc_datetimepicker);
//
//     var oc_alert = function() {
//         window.setTimeout(function() {
//             $('.alert-dismissible').fadeTo(3000, 0, function() {
//                 $(this).remove();
//             });
//         }, 3000);
//     }
//
//     $(document).on('click', 'button', oc_alert);
//     $(document).on('click', 'change', oc_alert);
// });
//
// $(document).ready(function() {
//     // Currency
//     $('#form-currency .dropdown-item').on('click', function(e) {
//         e.preventDefault();
//
//         $('#form-currency input[name=\'code\']').val($(this).attr('href'));
//
//         $('#form-currency').submit();
//     });
//
//     // Search
//     $('#search input[name=\'search\']').parent().find('button').on('click', function() {
//         var url = $('base').attr('href') + 'index.php?route=product/search&language=' + $(this).attr('data-lang');
//
//         var value = $('header #search input[name=\'search\']').val();
//
//         if (value) {
//             url += '&search=' + encodeURIComponent(value);
//         }
//
//         location = url;
//     });
//
//     $('#search input[name=\'search\']').on('keydown', function(e) {
//         if (e.keyCode == 13) {
//             $('header #search input[name=\'search\']').parent().find('button').trigger('click');
//         }
//     });
//
//     // Menu
//     $('#menu .dropdown-menu').each(function() {
//         var menu = $('#menu').offset();
//         var dropdown = $(this).parent().offset();
//
//         var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());
//
//         if (i > 0) {
//             $(this).css('margin-left', '-' + (i + 10) + 'px');
//         }
//     });
//
//     // Product List
//     $('#button-list').on('click', function() {
//         var element = this;
//
//         $('#product-list').attr('class', 'row row-cols-1 product-list');
//
//         $('#button-grid').removeClass('active');
//         $('#button-list').addClass('active');
//
//         localStorage.setItem('display', 'list');
//     });
//
//     // Product Grid
//     $('#button-grid').on('click', function() {
//         var element = this;
//
//         // What a shame bootstrap does not take into account dynamically loaded columns
//         $('#product-list').attr('class', 'row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3');
//
//         $('#button-list').removeClass('active');
//         $('#button-grid').addClass('active');
//
//         localStorage.setItem('display', 'grid');
//     });
//
//     // Local Storage
//     if (localStorage.getItem('display') == 'list') {
//         $('#product-list').attr('class', 'row row-cols-1 product-list');
//         $('#button-list').addClass('active');
//     } else {
//         $('#product-list').attr('class', 'row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3');
//         $('#button-grid').addClass('active');
//     }
//
//     /* Agree to Terms */
//     $('body').on('click', '.modal-link', function(e) {
//         e.preventDefault();
//
//         var element = this;
//
//         $('#modal-information').remove();
//
//         $.ajax({
//             url: $(element).attr('href'),
//             dataType: 'html',
//             success: function(html) {
//                 $('body').append(html);
//
//                 $('#modal-information').modal('show');
//             }
//         });
//     });
//
//     // Cookie Policy
//     $('#cookie button').on('click', function() {
//         var element = this;
//
//         $.ajax({
//             url: $(this).val(),
//             type: 'get',
//             dataType: 'json',
//             beforeSend: function() {
//                 $(element).button('loading');
//             },
//             complete: function() {
//                 $(element).button('reset');
//             },
//             success: function(json) {
//                 if (json['success']) {
//                     $('#cookie').fadeOut(400, function() {
//                         $('#cookie').remove();
//                     });
//                 }
//             },
//             error: function(xhr, ajaxOptions, thrownError) {
//                 console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
//             }
//         });
//     });
// });
//
// // Forms
// $(document).on('submit', 'form', function (e) {
//     var element = this;
//
//     if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
//         var button = e.originalEvent.submitter;
//     } else {
//         var button = '';
//     }
//
//     var status = false;
//
//     var ajax = $(element).attr('data-oc-toggle');
//
//     if (ajax == 'ajax') {
//         status = true;
//     }
//
//     var ajax = $(button).attr('data-oc-toggle');
//
//     if (ajax == 'ajax') {
//         status = true;
//     }
//
//     if (status) {
//         e.preventDefault();
//
//         // Form attributes
//         var form = e.target;
//
//         var action = $(form).attr('action');
//
//         var method = $(form).attr('method');
//
//         if (method === undefined) {
//             method = 'post';
//         }
//
//         var enctype = $(form).attr('enctype');
//
//         if (enctype === undefined) {
//             enctype = 'application/x-www-form-urlencoded';
//         }
//
//         // Form button overrides
//         var formaction = $(button).attr('formaction');
//
//         if (formaction !== undefined) {
//             action = formaction;
//         }
//
//         var formmethod = $(button).attr('formmethod');
//
//         if (formmethod !== undefined) {
//             method = formmethod;
//         }
//
//         var formenctype = $(button).attr('formenctype');
//
//         if (formenctype !== undefined) {
//             enctype = formenctype;
//         }
//
//         if (button) {
//             var formaction = $(button).attr('data-type');
//         }
//
//         console.log(e);
//         console.log('element ' + element);
//         console.log('action ' + action);
//         console.log('button ' + button);
//         console.log('formaction ' + formaction);
//         console.log('method ' + method);
//         console.log('enctype ' + enctype);
//         console.log($(element).serialize());
//
//         // https://github.com/opencart/opencart/issues/9690
//         if (typeof CKEDITOR != 'undefined') {
//             for (instance in CKEDITOR.instances) {
//                 CKEDITOR.instances[instance].updateElement();
//             }
//         }
//
//         $.ajax({
//             url: action.replaceAll('&amp;', '&'),
//             type: method,
//             data: $(form).serialize(),
//             dataType: 'json',
//             contentType: enctype,
//             beforeSend: function () {
//                 $(button).button('loading');
//             },
//             complete: function () {
//                 $(button).button('reset');
//             },
//             success: function (json, textStatus) {
//                 console.log(json);
//                 console.log(textStatus);
//
//                 $('.alert-dismissible').remove();
//                 $(element).find('.is-invalid').removeClass('is-invalid');
//                 $(element).find('.invalid-feedback').removeClass('d-block');
//
//                 if (json['redirect']) {
//                     location = json['redirect'];
//                 }
//
//                 if (typeof json['error'] == 'string') {
//                     $('#alert').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' + json['error'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
//                 }
//
//                 if (typeof json['error'] == 'object') {
//                     if (json['error']['warning']) {
//                         $('#alert').prepend('<dirv class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' + json['error']['warning'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></dirv>');
//                     }
//
//                     for (key in json['error']) {
//                         $('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
//                         $('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
//                     }
//                 }
//
//                 if (json['success']) {
//                     $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-circle-check"></i> ' + json['success'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
//
//                     // Refresh
//                     var url = $(form).attr('data-oc-load');
//                     var target = $(form).attr('data-oc-target');
//
//                     if (url !== undefined && target !== undefined) {
//                         $(target).load(url);
//                     }
//                 }
//
//                 // Replace any form values that correspond to form names.
//                 for (key in json) {
//                     $(element).find('[name=\'' + key + '\']').val(json[key]);
//                 }
//             },
//             error: function (xhr, ajaxOptions, thrownError) {
//                 console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
//             }
//         });
//     }
// });
//
// // Upload
// $(document).on('click', 'button[data-oc-toggle=\'upload\']', function() {
//     var element = this;
//
//     if (!$(element).prop('disabled')) {
//         $('#form-upload').remove();
//
//         $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" value=""/></form>');
//
//         $('#form-upload input[name=\'file\']').trigger('click');
//
//         $('#form-upload input[name=\'file\']').on('change', function(e) {
//             if ((this.files[0].size / 1024) > $(element).attr('data-oc-size-max')) {
//                 alert($(element).attr('data-oc-size-error'));
//
//                 $(this).val('');
//             }
//         });
//
//         if (typeof timer !== 'undefined') {
//             clearInterval(timer);
//         }
//
//         var timer = setInterval(function() {
//             if ($('#form-upload input[name=\'file\']').val() != '') {
//                 clearInterval(timer);
//
//                 $.ajax({
//                     url: $(element).attr('data-oc-url'),
//                     type: 'post',
//                     data: new FormData($('#form-upload')[0]),
//                     dataType: 'json',
//                     cache: false,
//                     contentType: false,
//                     processData: false,
//                     beforeSend: function() {
//                         $(element).button('loading');
//                     },
//                     complete: function() {
//                         $(element).button('reset');
//                     },
//                     success: function(json) {
//                         console.log(json);
//
//                         if (json['error']) {
//                             alert(json['error']);
//                         }
//
//                         if (json['success']) {
//                             alert(json['success']);
//                         }
//
//                         if (json['code']) {
//                             $($(element).attr('data-oc-target')).attr('value', json['code']);
//                         }
//                     },
//                     error: function(xhr, ajaxOptions, thrownError) {
//                         console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
//                     }
//                 });
//             }
//         }, 500);
//     }
// });
//
// // Chain ajax calls.
// class Chain {
//     constructor() {
//         this.start = false;
//         this.data = [];
//     }
//
//     attach(call) {
//         this.data.push(call);
//
//         if (!this.start) {
//             this.execute();
//         }
//     }
//
//     execute() {
//         if (this.data.length) {
//             this.start = true;
//
//             var call = this.data.shift();
//
//             var jqxhr = call();
//
//             jqxhr.done(function() {
//                 chain.execute();
//             });
//         } else {
//             this.start = false;
//         }
//     }
// }
//
// var chain = new Chain();
//
// // Autocomplete
// +function($) {
//     $.fn.autocomplete = function(option) {
//         return this.each(function() {
//             var element = this;
//             var $dropdown = $('#' + $(element).attr('data-oc-target'));
//
//             this.timer = null;
//             this.items = [];
//
//             $.extend(this, option);
//
//             // Focus in
//             $(element).on('focusin', function() {
//                 element.request();
//             });
//
//             // Focus out
//             $(element).on('focusout', function(e) {
//                 if (!e.relatedTarget || !$(e.relatedTarget).hasClass('dropdown-item')) {
//                     $dropdown.removeClass('show');
//                 }
//             });
//
//             // Input
//             $(element).on('input', function(e) {
//                 element.request();
//             });
//
//             // Click
//             $dropdown.on('click', 'a', function(e) {
//                 e.preventDefault();
//
//                 var value = $(this).attr('href');
//
//                 if (element.items[value] !== undefined) {
//                     element.select(element.items[value]);
//
//                     $dropdown.removeClass('show');
//                 }
//             });
//
//             // Request
//             this.request = function() {
//                 clearTimeout(this.timer);
//
//                 $('#autocomplete-loading').remove();
//
//                 $dropdown.prepend('<li id="autocomplete-loading"><span class="dropdown-item text-center disabled"><i class="fa-solid fa-circle-notch fa-spin"></i></span></li>');
//                 $dropdown.addClass('show');
//
//                 this.timer = setTimeout(function(object) {
//                     object.source($(object).val(), $.proxy(object.response, object));
//                 }, 50, this);
//             }
//
//             // Response
//             this.response = function(json) {
//                 var html = '';
//                 var category = {};
//                 var name;
//                 var i = 0, j = 0;
//
//                 if (json.length) {
//                     for (i = 0; i < json.length; i++) {
//                         // update element items
//                         this.items[json[i]['value']] = json[i];
//
//                         if (!json[i]['category']) {
//                             // ungrouped items
//                             html += '<li><a href="' + json[i]['value'] + '" class="dropdown-item">' + json[i]['label'] + '</a></li>';
//                         } else {
//                             // grouped items
//                             name = json[i]['category'];
//
//                             if (!category[name]) {
//                                 category[name] = [];
//                             }
//
//                             category[name].push(json[i]);
//                         }
//                     }
//
//                     for (name in category) {
//                         html += '<li><h6 class="dropdown-header">' + name + '</h6></li>';
//
//                         for (j = 0; j < category[name].length; j++) {
//                             html += '<li><a href="' + category[name][j]['value'] + '" class="dropdown-item">' + category[name][j]['label'] + '</a></li>';
//                         }
//                     }
//                 }
//
//                 $dropdown.html(html);
//             }
//         });
//     }
// }(jQuery);
//
// // Button
// $(document).ready(function() {
//     +function($) {
//         $.fn.button = function(state) {
//             return this.each(function() {
//                 var element = this;
//
//                 if (state == 'loading') {
//                     this.html = $(element).html();
//                     this.state = $(element).prop('disabled');
//
//                     $(element).prop('disabled', true).width($(element).width()).html('<i class="fa-solid fa-circle-notch fa-spin text-light"></i>');
//                 }
//
//                 if (state == 'reset') {
//                     $(element).prop('disabled', this.state).width('').html(this.html);
//                 }
//             });
//         }
//     }(jQuery);
// });



document.addEventListener('DOMContentLoaded', (event) => {
    const headerHeight = document.querySelector('.header').offsetHeight;

    const getElement = (context, selector) => {
        if (!context && !selector) {
            return null;
        }

        return context.querySelector(selector);
    };

    $.typeahead({
        input: '.js-search-typeahead',
        minLength: 1,
        order: "desc",
        emptyTemplate: 'запрос "{{query}}" не дал результатов',
        // source: {
        //   car: {
        //     data: ["My first added brand", "M1 added brand at start"],
        //     ajax: {
        //       type: "POST",
        //       url: "/search_main.php",
        //       data: {
        //         myKey: "myValue"
        //       }
        //     }
        //   }
        // },
        source: {
            data: [
                "Кофта женская название и модель",
                "Кофта мужская бренд и модель",
                "Кофта для девочик название и модель",
                "Кофта женская название и модель",
                "Кофта мужская бренд и модель",
                "Кофта для девочик название и модель"
            ]
        },
        callback: {
            onInit: function (node) {
                console.log('Typeahead Initiated on ' + node.selector);
            },

        }
    });


    setTimeout(() => {
        $('body').addClass('show')
    }, 200)

    setTimeout(() => {
        $('body').addClass('hide-after')
        console.log(1848);
    }, 300)

    $(window).on('scroll', function () {
        if($(window).scrollTop() >  100 ){
            document.querySelector('.header').classList.add('scroll')
        }
        if($(window).scrollTop() <  100){
            document.querySelector('.header').classList.remove('scroll')
        }

        if($(window).scrollTop() >  1200 ){
            $('.scroll-top').addClass('show')
        } else {
            $('.scroll-top').removeClass('show')
        }

    })

    // ticker
    // $('.ticker__slider').slick({
    //   slidesToShow: 1,
    //   slidesToScroll: 1,
    //   autoplay: true,
    //   autoplaySpeed: 0,
    //   speed: 25000,
    //   cssEase:'linear'
    // });

    $('.js-toggle-parent').on('click', (ev) => {
        $(ev.currentTarget).parent().toggleClass('open')
    })

    // lazy-load
    const el = document.querySelectorAll('.lazy');
    window.observer = lozad(el);
    window.observer.observe();

    $('.js-send-form').each(function () {
        $(this).submit(function(e) {
            e.preventDefault();
            let formBlock = $(this).serialize();
            let form = $(this).serialize();

            let validate = true
            let validateField = this.querySelectorAll(".form-required")
            if(validateField){
                validateField.forEach(field=>{
                    let fieldParent = field.closest(".form-item-valid")
                    // empty fields
                    if(field.value == ""){
                        validate = false
                        fieldParent.classList.add("error")
                    }else{
                        fieldParent.classList.remove("error")
                    }
                    // empty fields

                    // checkbox
                    if(field.classList.contains("stepper-checkbox")){
                        if(!field.checked){
                            validate = false
                            fieldParent.classList.add("error")
                        }else{
                            fieldParent.classList.remove("error")
                        }
                    }

                    // radios
                    // checkbox end

                    // email
                    if(field.classList.contains('mail-field')){
                        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                        let value = field.value;
                        if (value.match(pattern)) {
                            fieldParent.classList.remove("error-mail")
                        } else {
                            fieldParent.classList.add("error-mail")
                            validate = false
                        }
                        if (value.length < 1) {
                            fieldParent.classList.remove("error-mail")
                        }
                    }
                    // email end

                    // phone field
                    if(field.classList.contains("phone-field")){
                        if(field.value.length < 16){
                            fieldParent.classList.add("error__number")
                            validate = false
                        }else{
                            fieldParent.classList.remove("error__number")
                        }
                    }
                    // phone field end

                    return validate
                })
            }

            if(validate) {
                $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: $(this).serialize()
                }).done(function() {
                    $('.js-send-form').closest('.popup').addClass('sended')
                    $('.js-send-form').closest('form').addClass('sended')
                    setTimeout(function() {
                        $.magnificPopup.close()
                        $('.js-send-form').closest('.popup').removeClass('sended')
                        $('.js-send-form').closest('form').removeClass('sended')
                    }, 5000);
                });
            }
        });
    })

    $('.js-tabs-wrap').each((i, wrap) => {
        const buttons = $(wrap).find('.js-tab-button');
        const blocks = $(wrap).find('.js-tab-block');

        buttons.each((i, button) => {
            const id = $(button).data('id');
            $(button).on('click', () => {
                buttons.removeClass('is-active')
                $(button).addClass('is-active')
                blocks.hide()
                $(wrap).find('.js-tab-block[data-id="'+ id+'"]').fadeIn(100)
            })
        })
    })

    $('.js-rev-list').find('.review-item').each((i, el) => {
        if(i > 1) {
            $(el).slideUp()
        }
    })

    $('.js-show-all-revs').on('click', (ev) => {
        if($(ev.currentTarget).hasClass('open')) {
            $(ev.currentTarget).removeClass('open')
            $(ev.currentTarget).prev('.js-rev-list').find('.review-item').each((i, el) => {
                if(i > 1) {
                    $(el).slideUp()
                }
            })
        } else {
            $(ev.currentTarget).addClass('open')
            $(ev.currentTarget).prev('.js-rev-list').find('.review-item').slideDown()
        }

    })

    // let selector = document.querySelectorAll(".js-input-mask");
    // let im = new Inputmask("+7(999)999-99-99",{
    //   showMaskOnHover: true,
    //   placeholder: '',
    //   clearMaskOnLostFocus: true,
    //   oncomplete: function () {
    //     this.classList.add('mask-done')
    //   }
    // });
    // selector.forEach((el) => {
    //   im.mask(el);
    // })

    const catalogSliderNav = document.querySelector('[data-slider="about-slider"]');
    const catalogSliderMain = document.querySelector('[data-slider="about-slider-main"]');

    if(catalogSliderNav !== null && catalogSliderMain !== null) {

        const catalogSliderSwiper = new Swiper(catalogSliderNav.querySelector('.swiper-container'), {
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            simulateTouch: true,
            lazy: {
                loadOnTransitionStart: true,
                loadPrevNextAmount: 2,
                loadPrevNext: true
            },
            loop: false,
            slidesPerView: 4,
            slidesPerGroup: 1,
            followFinger: true,
            direction: "vertical",
            spaceBetween: 20,
            on: {
                afterInit: (event) => {

                },

            },
            navigation: {
                // nextEl: getElement(catalogSliderNav.closest('[data-slider="about-slider"]'), '.js-next-swiper'),
                // prevEl: getElement(catalogSliderNav.closest('[data-slider="about-slider"]'), '.js-prev-swiper'),
                disabledClass: 'swiper-lock'
            },
            // pagination: {
            //   el: catalogSliderNav.querySelector('.swiper-pagination'),
            //   clickable: true
            // },
            breakpoints: {
                320: {
                    slidesPerView: 4,
                    spaceBetween: 8,
                    direction: "horizontal",
                },
                600: {
                    slidesPerView: 3,
                    spaceBetween: 8,
                    direction: "vertical",
                    autoHeight: true
                },
                720: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    direction: "vertical",
                    autoHeight: true
                },
                1025: {
                    slidesPerView: 4,
                    direction: "vertical",
                    autoHeight: true
                }
            },
        });

        const catalogMainSwiper = new Swiper(catalogSliderMain.querySelector('.swiper-container'), {
            simulateTouch: true,
            lazy: {
                loadOnTransitionStart: true,
                loadPrevNextAmount: 2,
                loadPrevNext: true
            },
            loop: false,
            slidesPerView: 1,
            slidesPerGroup: 1,
            followFinger: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            on: {
                afterInit: (event) => {

                },

            },
            thumbs: {
                swiper: catalogSliderSwiper,
                thumbsContainerClass: 'swiper-thumbs'
            },
            navigation: {
                // nextEl: getElement(catalogSliderMain.closest('.section--about'), '.js-next-swiper'),
                // prevEl: getElement(catalogSliderMain.closest('.section--about'), '.js-prev-swiper'),
                disabledClass: 'swiper-lock'
            },
            pagination: {
                // el: catalogSliderMain.querySelector('.swiper-pagination'),
                clickable: true
            }
        });
    }

    const wildSlider = document.querySelectorAll('[data-slider="wild-slider"]');

    if(wildSlider !== null) {

        wildSlider.forEach((el) => {
            const shopSwiper = new Swiper(el.querySelector('.swiper-container'), {
                freeMode: false,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                simulateTouch: true,
                lazy: {
                    loadOnTransitionStart: true,
                    loadPrevNextAmount: 2,
                    loadPrevNext: true
                },
                loop: false,
                slidesPerView: 4,
                slidesPerGroup: 1,
                followFinger: true,
                spaceBetween: 0,
                on: {
                    afterInit: (event) => {

                    },

                },
                navigation: {
                    nextEl: getElement(el.closest('[data-slider="wild-slider"]'), '.js-next-swiper'),
                    prevEl: getElement(el.closest('[data-slider="wild-slider"]'), '.js-prev-swiper'),
                    disabledClass: 'swiper-lock'
                },
                pagination: {
                    el: el.querySelector('.swiper-pagination'),
                    clickable: true,
                    // type: 'progressbar'
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 2
                    },
                    768: {
                        slidesPerView: 3
                    },
                    1025: {
                        slidesPerView: 4
                    }
                },
            });

            if(el.classList.contains('js-disable-mob')) {
                if(window.innerWidth < 560) {
                    shopSwiper.disable();
                }

                window.addEventListener('resize', function () {
                    if(window.innerWidth < 560) {
                        shopSwiper.disable();
                    } else {
                        shopSwiper.enable();
                    }
                });
            }


        })

    }


    const masterSlider = document.querySelectorAll('[data-slider="home-slider"]');

    if(masterSlider !== null) {

        masterSlider.forEach((el) => {
            const masterSwiper = new Swiper(el.querySelector('.swiper-container'), {
                freeMode: false,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                simulateTouch: true,
                lazy: {
                    loadOnTransitionStart: true,
                    loadPrevNextAmount: 2,
                    loadPrevNext: true
                },
                effect: 'fade',
                autoplay: {
                    delay: 5000,
                },
                fadeEffect: {
                    crossFade: true
                },
                loop: false,
                slidesPerView: 1,
                slidesPerGroup: 1,
                followFinger: true,
                spaceBetween: 20,
                on: {
                    afterInit: (event) => {

                    },

                },
                navigation: {
                    // nextEl: getElement(el.closest('[data-slider="home-slider"]'), '.js-next-swiper'),
                    // prevEl: getElement(el.closest('[data-slider="home-slider"]'), '.js-prev-swiper'),
                    disabledClass: 'swiper-lock'
                },
                pagination: {
                    el: el.querySelector('.swiper-pagination'),
                    clickable: true,
                    // type: 'progressbar'
                },
            });
        })


    }


    const cartSlider = document.querySelectorAll('[data-slider="cart-slider"]');

    if(cartSlider !== null) {
        cartSlider.forEach((el) => {
            const cartSwiper = new Swiper(el.querySelector('.swiper-container'), {
                freeMode: false,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                simulateTouch: true,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                lazy: {
                    loadOnTransitionStart: true,
                    loadPrevNextAmount: 1,
                    loadPrevNext: true
                },
                loop: false,
                slidesPerView: 1,
                followFinger: true,
                spaceBetween: 45,
                on: {
                    afterInit: (event) => {

                    },

                },
                navigation: {
                    nextEl: getElement(el.closest('[data-slider="cart-slider"]'), '.js-next-swiper'),
                    prevEl: getElement(el.closest('[data-slider="cart-slider"]'), '.js-prev-swiper'),
                    disabledClass: 'swiper-lock'
                },
                // pagination: {
                //   el: el.querySelector('.swiper-pagination'),
                //   clickable: true
                // },
            });
        })
    }

    const videosSlider = document.querySelectorAll('[data-slider="videos-slider"]');

    $('body').on('click', '.js-close-magnific', () => {
        $.magnificPopup.close()
    })
    $('body').on('click', '.js-open-modal', (event) => {
        let $this = event.currentTarget;
        let $modalId = $($this).data('modal');

        $.magnificPopup.open({
            mainClass: 'mfp-with-zoom',
            items: {
                src: $modalId, // can be a HTML string, jQuery object, or CSS selector
                type: 'inline'
            },
            callbacks: {
                open() {
                    $('body').addClass('popup-open')
                } ,
                close() {
                    $('body').removeClass('popup-open')
                }
            }
        });
    })

    $('.js-choose-table').each((i,el) => {
        const id =  $(el).data('id')
        $(el).on('change', () => {
            if($(el).is(':checked')) {
                $('.js-size-table').removeClass('active');
                $('.js-size-table[data-id="'+id +'"]').addClass('active')
            }
        })
    })
    $('[data-id="shoose"]').not('.size-shoose__text').hide();
    $('.js-size-shoose').on('click', () => {
        if($('.js-weare').hasClass('active')) {
            $('.js-size-shoose').addClass('active')
            $('.js-weare').removeClass('active');
            $('.js-shoose').addClass('active');
            $('[data-id="weare"]').not('.size-shoose__text').hide();
            $('[data-id="shoose"]').not('.size-shoose__text').show();
            $('[data-id="shoose"]').find('.standart-radio .js-choose-table').change()

        } else {
            $('.js-weare').addClass('active');
            $('.js-shoose').removeClass('active');
            $('.js-size-shoose').removeClass('active')
            $('[data-id="weare"]').not('.size-shoose__text').show();
            $('[data-id="shoose"]').not('.size-shoose__text').hide();
            $('[data-id="weare"]').find('.standart-radio .js-choose-table').change()

        }
    })

    $('.js-add-product').each((i, el) => {
        const id = $(el).data('id');
        const url = $(el).data('url')
        $(el).on('click', () => {
            $.ajax({
                type: "POST",
                url: url,
                data: id,
                dataType: 'json',
                async:false,
                success: function(data) {

                },
                complete: function (data) {
                    $.magnificPopup.open({
                        mainClass: 'mfp-with-zoom',
                        items: {
                            src: '#add-to-cart', // can be a HTML string, jQuery object, or CSS selector
                            type: 'inline'
                        },
                        callbacks: {
                            open() {
                                $('body').addClass('popup-open')
                            } ,
                            close() {
                                $('body').removeClass('popup-open')
                            }
                        }
                    });
                }
            });
        })
    })

    $('.js-remove-bask').each((i, el) => {
        const id = $(el).data('id');
        const url = $(el).data('url')
        $(el).on('click', () => {
            $.ajax({
                type: "POST",
                url: url,
                data: id,
                dataType: 'json',
                async:false,
                success: function(data) {

                },
                complete: function (data) {
                    $(el).parent().slideUp()

                    setTimeout(() => {
                        $(el).parent().remove()
                    }, 500)

                    if($('.basket-popup__list').find('.history-card').length < 2) {
                        $('.basket-popup__list').closest('.basket-popup__list-wrap').addClass('hide-shadow')
                    }
                }
            });
        })
    })

    const doubleSlider = document.querySelectorAll('[data-slider="double-slider"]');

    if(doubleSlider !== null) {

        doubleSlider.forEach((el) => {
            const masterSwiper = new Swiper(el.querySelector('.swiper-container'), {
                freeMode: false,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                simulateTouch: true,
                lazy: {
                    loadOnTransitionStart: true,
                    loadPrevNextAmount: 2,
                    loadPrevNext: true
                },
                fadeEffect: {
                    crossFade: true
                },
                loop: false,
                slidesPerView: 1,
                slidesPerGroup: 1,
                followFinger: true,
                on: {
                    afterInit: (event) => {

                    },

                },
                navigation: {
                    nextEl: getElement(el.closest('[data-slider="double-slider"]'), '.js-next-swiper'),
                    prevEl: getElement(el.closest('[data-slider="double-slider"]'), '.js-prev-swiper'),
                    disabledClass: 'swiper-lock'
                },
                pagination: {
                    el: el.querySelector('.swiper-pagination'),
                    clickable: true,
                    // type: 'progressbar'
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1
                    },
                    720: {
                        slidesPerView: 2
                    }
                },
            });

            if(window.innerWidth < 560) {
                masterSwiper.disable();
            }

            window.addEventListener('resize', function () {
                if(window.innerWidth < 560) {
                    masterSwiper.disable();
                } else {
                    masterSwiper.enable();
                }
            });
        })


    }


    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,

            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title');
            }
        },
    });

    const blockInView = document.querySelectorAll('.js-inview');
    blockInView.forEach((el, i) => {
        $(el).bind('inview', function (event, visible, visiblePartX, visiblePartY) {
            if (visible) {
                setTimeout(() => {

                }, 500)
            }
        });
    });

    $('.js-tabs-wrap').each((i, wrap) => {
        const buttons = $(wrap).find('.js-tab-button');
        const blocks = $(wrap).find('.js-tab-block');

        buttons.each((i, button) => {
            const id = $(button).data('id');
            $(button).on('click', () => {
                buttons.removeClass('is-active')
                $(button).addClass('is-active')
                blocks.hide()
                $(wrap).find('.js-tab-block[data-id="'+ id+'"]').fadeIn()
            })
        })
    })

    $('.ac-trigger').each(function () {
        let $this = $(this);
        let $parent = $this.closest('.ac');
        let $parentWrap = $parent.closest('.js-accordion');
        let $block = $parent.find('.ac-panel');
        let mitiple = $parentWrap.data('multiple');

        if ($parent.hasClass('is-active')) {
            $parent.removeClass('is-active');
            $block.slideUp(400);
        } else {
            if (!mitiple) {
                $parentWrap.find('.ac-panel').slideUp(400);
                $parentWrap.find('.ac').removeClass('is-active');
            }
            $parent.addClass('is-active');
            $block.slideDown(400)
        }
    })

    $('body').on('click', '.ac-trigger', (event) => {
        let $this = $(event.currentTarget);
        let $parent = $this.closest('.ac');
        let $parentWrap = $parent.closest('.js-accordion');
        let $block = $parent.find('.ac-panel');
        let mitiple = $parentWrap.data('multiple');

        if ($parent.hasClass('is-active')) {
            $parent.removeClass('is-active');
            $block.slideUp(400);
        } else {
            if (!mitiple) {
                $parentWrap.find('.ac-panel').slideUp(400);
                $parentWrap.find('.ac').removeClass('is-active');
            }
            $parent.addClass('is-active');
            $block.slideDown(400)
        }
    })

    $('.js-select').each((i, el) => {
        $(el).select2({
            allowClear: true,
            placeholder: $(this).data('placeholder'),
            minimumResultsForSearch: $(el).data('search-min-length') === undefined ? '10' : $(el).data('search-min-length'),
            dropdownPosition: 'below',
            dropdownParent: $(el).parent(),
            maximumSelectionLength: $(el).data('max-length'),
            language: {
                noResults: () => {
                    return 'noResults';
                },
                maximumSelected: () => {
                    return + $(el).data('max-length') + ' ' +
                        'maximumSelected 5 ';
                },
                searching: function (params) {
                    query = params;
                    return 'Searching…';
                }
            },
            templateResult: function (item) {
                if (item.loading) {
                    return item.text;
                }
                var term = query.term || '';
                var $result = markMatch(item.text, term);
                return $result;
            },
            // ajax: {
            //   url: '/select2.json',
            //   dataType: 'json'
            // }
        });

        function markMatch(text, term) {
            var match = text.toUpperCase().indexOf(term.toUpperCase());
            var $result = $('<span></span>');
            if (match < 0) {
                return $result.text(text);
            }
            $result.text(text.substring(0, match));
            var $match = $('<span class="select2-rendered__match"></span>');
            $match.text(text.substring(match, match + term.length));
            $result.append($match);
            $result.append(text.substring(match + term.length));
            return $result;
        }

        // clone and append choises

        $(el).on('select2:select', function (e) {

        })

        $(el).on('select2:unselect', function (e) {

        })

        $(el).on('select2:open', function (e) {

        })

        $(el).on('select2:closing', function () {

        })
    })

    $('.js-delete-favorite').each((i, el) => {
        $(el).on('click', () => {
            $(el).toggleClass('choosed')
        })
    })

    $('.js-choose-all').on('click', () => {
        if( $('.js-choose-all').hasClass('active')) {
            $('.js-choose-all').removeClass('active')
            $('.js-delete-favorite').each((i, el) => {
                $(el).removeClass('choosed')
            })
        } else {
            $('.js-delete-favorite').each((i, el) => {
                $('.js-choose-all').addClass('active')
                $(el).addClass('choosed')
            })
        }
    })

    var favorites = []
    var addedCart = []

    $('.js-delete-fav').on('click', () => {
        const url = $('.js-delete-fav').data('ajax-url');
        $('.js-delete-favorite').each((i, el) => {
            const id = $(el).data('id');
            if($(el).hasClass('choosed')) {
                favorites.push(id);
                $(el).slideUp();

                setTimeout(() => {
                    $(el).remove()
                }, 500)
            }
        })

        $.ajax({
            type: "POST",
            url: url,
            data: {removed:favorites},
            dataType: 'json',
            async:false,
            success: function(data) {

            },
            complete: function (data) {

            }
        });
    })

    $('.js-add-to-cart').on('click', () => {
        const url = $('.js-add-to-cart').data('ajax-url');
        $('.js-delete-favorite').each((i, el) => {
            const id = $(el).data('id');
            if($(el).hasClass('choosed')) {
                addedCart.push(id);
            }
        })

        $.ajax({
            type: "POST",
            url: url,
            data: {added:addedCart},
            dataType: 'json',
            async:false,
            success: function(data) {

            },
            complete: function (data) {

            }
        });
    })

    $('.js-add-fav').on('click', () => {
        const url = $('.js-delete-fav').data('ajax-url');
        const id = $(el).data('id');

        if($('.js-add-fav').hasClass('active')) {
            $('.js-add-fav').removeClass('active')
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    remove: id
                },
                dataType: 'json',
                async:false,
                success: function(data) {

                },
                complete: function (data) {

                }
            });
        } else {
            $('.js-add-fav').addClass('active')
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    add: id
                },
                dataType: 'json',
                async:false,
                success: function(data) {

                },
                complete: function (data) {

                }
            });
        }
    })

    let num;
    $('.js-count-prod').each((i, el) => {
        const plus = $(el).find('.js-count-plus');
        const minus = $(el).find('.js-count-minus');
        const input = $(el).find('input');

        if(parseInt(input.val()) === 0) {
            minus.addClass('disable')
        }

        minus.on('click', () => {
            num = parseInt(input.val());
            if (num > 1) {
                input.val(num - 1);
            }
        })

        plus.on('click', () => {
            num = parseInt(input.val());
            input.val(num + 1);

        })
    })

    $('.js-filter-desk').on('click', () => {
        if($('.js-filter-desk').hasClass('active')) {
            $('.js-filter-desk').removeClass('active')
            $('.catalog-filter').slideUp()
            $('.catalog-inner__top-second').removeClass('hd')
        } else {
            $('.js-filter-desk').addClass('active')
            $('.catalog-filter').slideDown()
            $('.catalog-inner__top-second').addClass('hd')
        }
    })

    $('.js-close-filter').on('click', () => {
        $('.js-filter-desk').removeClass('active')
        $('.catalog-filter').slideUp()
        $('.catalog-inner__top-second').removeClass('hd')
    })

    $('.js-open-search').each((i, el) => {
        $(el).on('click', () => {
            setTimeout(() => {
                $('.search-block').addClass("open")
            }, 50)
            $('.search-block').find('input').focus()
        })
    })

    $('.js-close-search').on('click', () => {
        setTimeout(() => {
            $('.search-block').removeClass("open")
        }, 50)
    })

    $('.js-close-menu').on('click', () => {
        $('.mob-menu').removeClass('open')
        $('.js-links-trigger').each((i, el) => {
            $(el).removeClass('open');
        })
    })

    $('.burger').on('click', () => {
        $('.mob-menu').addClass('open');

        $('.js-links-trigger').each((i, el) => {
            $(el).addClass('open');
        })
        $('.mob-menu__bottom').addClass('open')
    })

    $('.text-us__icon').on('click', () => {
        $('.text-us').addClass('open')
    })

    $('.text-us__close').on('click', () => {
        $('.text-us').removeClass('open')
    })

    document.querySelector('.scroll-top').addEventListener('click', () => window.scrollTo({
        top: 0,
        behavior: 'smooth',
    }));


    $('.basket-popup__list').scroll(function() {
        var pos = $('.basket-popup__list').scrollTop();
        $('.basket-popup__list').closest('.basket-popup__list-wrap').addClass('hide-shadow')
        if (pos == 0) {
            $('.basket-popup__list').closest('.basket-popup__list-wrap').removeClass('hide-shadow')
        }
    });

    if($('.basket-popup__list').find('.history-card').length < 2) {
        $('.basket-popup__list').closest('.basket-popup__list-wrap').addClass('hide-shadow')
    }

    $('.js-open-menu').each((i, el) => {
        const id = $(el).data('id');
        const pt = 120

        $(el).on('mouseover', () => {
            $('.header').addClass('scroll')
            $('.header').addClass('menu-open')
            $('.hover-menu').addClass('show');
            $('.js-menu-item').removeClass('show');
            $('.js-menu-item').find('.hover-menu__list-item').removeClass('show')
            $('.js-menu-item[data-id="'+ id +'"]').addClass('show')
            $('.hover-menu').css('height', $('.js-menu-item[data-id="'+ id +'"]').find('.hover-menu__list-item').height() + pt + 'px')
            setTimeout(() => {
                $('.js-menu-item[data-id="'+ id +'"]').find('.hover-menu__list-item').addClass('show')
            }, 300)
        })
    })

    $('.header').on('mouseleave', () => {
        $('.hover-menu').removeClass('show');
        $('.js-menu-item').removeClass('show');
        $('.js-menu-item').find('.hover-menu__list-item').removeClass('show')
        $('.header').removeClass('scroll')
        $('.header').removeClass('menu-open')
    })

    $('.js-links-trigger').each((i, el) => {
        const id = $(el).data('id');
        $(el).on('click', () => {
            $('.js-links-trigger').removeClass('open')
            $('.mob-menu__bottom').removeClass('open')
            $('.js-links-mob').removeClass('show');
            $('.js-links-mob').removeClass('showed');
            $('.mob-menu__hidden').addClass('show');
            $('.js-links-mob[data-id="'+ id +'"]').addClass('show');
            $('.js-links-mob[data-id="'+ id +'"]').addClass('showed');
            setTimeout(() => {
                $('.js-links-mob[data-id="'+ id +'"]').find('.mob-menu__back-list').addClass('show')
            }, 200)
        })
    })

    $('.mob-menu__back').on('click', () => {
        $('.js-links-mob').removeClass('show');
        $('.js-links-trigger').addClass('open')
        $('.mob-menu__bottom').addClass('open')
        $('.mob-menu__hidden').removeClass('show');
        $('.mob-menu__back-list').removeClass('show')
    })
})
