<!DOCTYPE html>
<html lang="ru-ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="/css/normalize.min.css" rel="stylesheet" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic|PT+Sans+Narrow:400,700|Russo+One&subset=latin,cyrillic-ext,latin-ext,cyrillic'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/underscore-min.js"></script>
    <script>window.tobiz = {
            "project_id": "47926",
            "rep_id": "67293",
            "user_id": "7",
            "owner_email": "guilty.warriors1@gmail.com",
            "user_email": "manager1@tobiz.net",
            "bs": true,
            "t": "4",
            "w": 1
        }</script>
    <link rel="stylesheet" type="text/css" href="/css/style.css?ver=1518193508">
    <script type="text/javascript" src="/js/script.js?v=1518193508"></script>
    <script type="text/javascript">tobiz.blocks = [];</script>


    <meta content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link href="/css/mobile.css" rel="stylesheet">


    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title></title>


    <script type="text/javascript">
        $(function () {
            $('body').on('submit', 'form[action="handler.php"]', function (event) {
                event.preventDefault();
                var this_form = $(this);
                if (!$(this).children("input[name=project_id]").length)
                    $(this).prepend('<input type="hidden" name="project_id" value="' + window.tobiz.project_id + '">');
                if (!$(this).children("input[name=page_id]").length)
                    $(this).prepend('<input type="hidden" name="page_id" value="' + window.tobiz.rep_id + '">');
                if (!$(this).children("input[name=referrer]").length)
                    $(this).prepend('<input type="hidden" name="referrer" value="' + document.referrer + '">');
                if (!$(this).children("input[name=user_id]").length)
                    $(this).prepend('<input type="hidden" name="user_id" value="' + window.tobiz.user_id + '">');

                if ($(this).find("[data-action]").size()) {
                    console.log(123);
                    $(this).prepend('<input type="hidden" name="action" value="' + $(this).find("[data-action]").data('action') + '">');
                    $(this).prepend('<input type="hidden" name="amount" value="' + $(this).find("[data-action]").data('amount') + '">');
                    $(this).prepend('<input type="hidden" name="url" value="' + $(this).find("[data-action]").data('url') + '">');
                } else {
                    console.log('not found');
                }
                var formData = new FormData($(this)[0]);
                var this_block = $(this).closest('.section');
                $.ajax({
                    dataType: "json",
                    type: "POST",
                    url: "/handler.php",
                    data: formData,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function (data) {
                    if (data.status == 'OK') {
                        alert(data.msg);
                        this_form.each(function () {
                            $(this)[0].reset();
                        })
                        $('.popup_form').hide();
                    }
                    if (data.status == 'ERROR') {
                        alert(data.msg);
                    }
                    if (data.status == 'JC') {
                        $('body').append(data.form);
                        $('#jc_form').submit();
                        this_form.each(function () {
                            $(this)[0].reset();
                        })
                    }
                    if (data.status == 'SR') {
                        $('body').append(data.form);
                        $('#sr_form').submit();
                        this_form.each(function () {
                            $(this)[0].reset();
                        })
                    }
                    if (data.status == 'GR') {
                        $('body').append(data.form);
                        $('#gr_form').submit();
                        this_form.each(function () {
                            $(this)[0].reset();
                        })
                    }
                    if (data.status == 'RK') {
                        this_form.each(function () {
                            $(this)[0].reset();
                        })
                        window.location.href = data.url;
                    }
                    if (data.status == 'redirect') {
                        this_form.each(function () {
                            $(this)[0].reset();
                        })


                        window.location.href = data.url;
                    }
                    if (data.status == 'thanks') {
                        this_block.find('.popup_thanks').show();
                        this_form.each(function () {
                            $(this)[0].reset();
                        })
                        $('.popup_form').hide();
                        this_block.find('.extra_info_block_wrapper').hide();
                    }
                    if (data.status == 'thanks_order_complete') {
                        this_block.find('.popup_thanks').show();
                        this_form.each(function () {
                            $(this)[0].reset();
                        })
                        window.basket.clean();
                        window.basket.hideForm();
                        window.basket.renderForm();
                        window.basket.renderBtn();
                        window.basket.hideBtn();
                        alert('Спасибо ваш заказ успешно оформлен!');
                        $('.popup_form').hide();
                    }
                }).error(function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(thrownError)
                });
            })


            $('.btn1').click(function(){
                $('.popup_form').show();
            })
        })



    </script>
    <style id="page_style">
        .section .title {
            font-family: Ubuntu, sans-serif;
        }

        .

        "\n"</style>


</head>
<body class="editor_false">
<div id="wrapper">
    <div class="hide_line section section103  " style="background-color:#ffffff;  background-image:url(/img/null.png);"
         data-id="519613" id="b_519613"><a name="a_519613"></a>
        <div class="section_inner">
            <div class="slogan">
                <div class="text1">Интернет-магазин мебели</div>
                <div class="text2">Работаем по всей России</div>
            </div>


            <div class="logo_img"><img src="/img/200x0/default_logo.jpg" alt=""></div>


            <div class="phone-and-btn">
                <div class="phone1  ">8 912 766 83 02</div>
                <div class="btn1 surround  " style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">
                    Заказать звонок
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>




            <div class="popup_thanks">
                <div class="popup_thanks_inner">
                    <div class="popup_thanks_close">X</div>
                    <div class="popup_thanks_title">Спасибо за заявку!</div>
                    <div class="popup_thanks_text">Заявка отправлена. Наш менеджер свяжется с Вами в ближайшее время.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="hide_line section section116  " style="background:#ffffff ;  background-image:url(/img/null.png);"
         data-id="519636" id="b_519636"><a name="a_519636"></a>
        <div class="section_inner">
            <div class="menu-toogler"><i class="fa fa-bars"></i></div>
            <div class="menu1 ">
                <ul>
                    <li><a href="#anchor1" title="Каталог мебели">Каталог мебели</a></li>
                    <li><a href="#anchor2" title="Наши достижения">Наши достижения</a></li>
                    <li><a href="#anchor3" title="Отзывы">Отзывы</a></li>
                    <li><a href="#anchor4" title="Контакты">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section section153    "
         style="background-color:#ffffff; background-image:url(/img/1920x0/e38838a0d4704accf3f5607b6bee7a25.jpg);"
         data-id="519614" id="b_519614"><a name="a_519614"></a>

        <div class="dark"></div>
        <div class="noise" style="background-image:url(/img/null.png);"></div>
        <div class="section_inner  ">
            <div class="layer">
                <div class="title  ">
                    <div><br></div>
                    Лучшая мебель по индивидуальным проектам
                </div>
                <div class="sub_title  ">Летняя распродажа! Скидка 66% на всю мягкую мебель.&nbsp;<div>Спешите,
                        количество товаров ограничено!
                    </div>
                </div>

                <div class="btn1  " style="color:#FFFFFF;  border-radius: 0.5em;   box-shadow: 0; ">Оставить заявку
                </div>
                <div class="btn_descr">По любым возникшим вопросам вы можете проконсультироваться по телефону
                    +7(800)333-22-33 или по электронной почте info@tobiz.net<br></div>
            </div>

            <div class="popup_form">
                <div class="popup_form_inner">
                    <div class="popup_form_close">X</div>
                    <div class="popup_form_title">Оставить заявку</div>
                    <form action="handler.php" enctype="multipart/form-data" method="post">
                        <div class="form1"><input type="hidden" name="Название формы" value="">
                            <div class="field">
                                <div class="field_title">Введите имя</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="text" required="required" name="Введите имя"
                                                                placeholder="Введите имя"></div>
                            </div>
                            <div class="field">
                                <div class="field_title">Введите E-mail</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="text" required="required" name="Введите E-mail"
                                                                placeholder="Введите E-mail"></div>
                            </div>
                            <div class="field">
                                <div class="field_title">Введите номер телефона</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="text" required="required"
                                                                name="Введите номер телефона"
                                                                placeholder="Введите номер телефона"></div>
                            </div>
                            <div class="field">
                                <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                data-action="thanks" data-url="" data-amount="0"
                                                                value="Заказать"
                                                                style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="popup_form_text"> Нажимая на кнопку, Вы принимаете <a target="_blank"
                                                                                      data-cke-saved-href="/?personal_data=1"
                                                                                      href="/?personal_data=1">Положение</a>
                        и <a target="_blank" data-cke-saved-href="/?personal_data=2"
                             href="/?personal_data=2">Согласие</a> на обработку персональных данных. <br></div>
                </div>
            </div>


            <div class="popup_thanks">
                <div class="popup_thanks_inner">
                    <div class="popup_thanks_close">X</div>
                    <div class="popup_thanks_title">Спасибо за заявку!</div>
                    <div class="popup_thanks_text">Заявка отправлена. Наш менеджер свяжется с Вами в ближайшее время.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="hide_line  section  transparent_ico section200  "
         style="background-color:#ffffff;  background-image:url(/img/null.png);" data-id="519616" id="b_519616"><a
                name="anchor1"></a>
        <div class="section_inner">
            <div class="title  ">
                <div>Мебель для гостиных</div>
                <div><br></div>
            </div>
            <div class="sub_title  hidden   ">Выберите услугу, подходящую под решение ваших задач</div>

            <div class="arr1">
                <div class="col_4">
                    <div class="image1 s200     border   shadow  ">
                        <img src="/img/200x200/32cf52ba7bea86062f293127634f78bd.jpg" alt=""></div>
                    <div class="title1">СТЕНКА ДЛЯ ГОСТИНОЙ</div>
                    <div class="txt1  hidden  ">
                        Вы можете выбрать типовой проект или создать собственный проект готового дома с нашей помощью
                    </div>
                    <div class="price1 ">7&nbsp;999 руб.</div>
                    <div class="btn1 surround  " style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">
                        Заказать
                    </div>

                </div>
                <div class="col_4">
                    <div class="image2 s200     border   shadow  "><img
                                src="/img/200x200/bffddf2c6db6f7712b27a2329a801bdb.jpg" alt=""></div>


                    <div class="title2">МОДУЛЬНЫЙ ГАРНИТУР</div>
                    <div class="txt2  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price2 ">56&nbsp;995 руб.</div>
                    <div class="btn2 surround  "  style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Заказать
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form2"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text"> Нажимая на кнопку, Вы принимаете <a target="_blank"
                                                                                              data-cke-saved-href="/?personal_data=1"
                                                                                              href="/?personal_data=1">Положение</a>
                                и <a target="_blank" data-cke-saved-href="/?personal_data=2" href="/?personal_data=2">Согласие</a>
                                на обработку персональных данных. <br></div>
                        </div>
                    </div>


                </div>
                <div class="clear480"></div>
                <div class="col_4 ">
                    <div class="image3 s200     border   shadow  "><img
                                src="/img/200x200/fcc5d4d6d563479e457c9fbe76e0467e.jpg" alt=""></div>


                    <div class="title3">ШКАФ С ВИТРИНОЙ</div>
                    <div class="txt3  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price3 ">14&nbsp;999 руб.</div>
                    <div class="btn3 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Заказать
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form3"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text"> Нажимая на кнопку, Вы принимаете <a target="_blank"
                                                                                              data-cke-saved-href="/?personal_data=1"
                                                                                              href="/?personal_data=1">Положение</a>
                                и <a target="_blank" data-cke-saved-href="/?personal_data=2" href="/?personal_data=2">Согласие</a>
                                на обработку персональных данных. <br></div>
                        </div>
                    </div>


                </div>
                <div class="col_4 last">
                    <div class="image4 s200     border   shadow  "><img
                                src="/img/200x200/e1fc540008513d7fd347009c63a32a0a.jpg" alt=""></div>


                    <div class="title4">ШКАФ ДЛЯ ОДЕЖДЫ И БЕЛЬЯ&nbsp;</div>
                    <div class="txt4  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price4 ">4&nbsp;299 руб.</div>
                    <div class="btn4 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Заказать
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form4"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text"> Нажимая на кнопку, Вы принимаете <a target="_blank"
                                                                                              data-cke-saved-href="/?personal_data=1"
                                                                                              href="/?personal_data=1">Положение</a>
                                и <a target="_blank" data-cke-saved-href="/?personal_data=2" href="/?personal_data=2">Согласие</a>
                                на обработку персональных данных. <br></div>
                        </div>
                    </div>


                </div>
                <div class="clear"></div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/32cf52ba7bea86062f293127634f78bd.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info1"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn1x surround " style="background-color:#009999; ">Заказать</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/bffddf2c6db6f7712b27a2329a801bdb.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info2"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn2x surround " style="background-color:#009999; ">Заказать</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/fcc5d4d6d563479e457c9fbe76e0467e.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info3"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn3x surround " style="background-color:#009999; ">Заказать</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/e1fc540008513d7fd347009c63a32a0a.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info4"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn4x surround " style="background-color:#009999; ">Заказать</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
            </div>
            <div class="popup_thanks">
                <div class="popup_thanks_inner">
                    <div class="popup_thanks_close">X</div>
                    <div class="popup_thanks_title">Спасибо за заявку!</div>
                    <div class="popup_thanks_text">Заявка отправлена. Наш менеджер свяжется с Вами в ближайшее время.
                    </div>
                </div>
            </div>


            <div class="arr1">
                <div class="col_4">
                    <div class="image1 s200     border   shadow  "><img
                                src="/img/200x200/c8754f2762351a6195babaafa99ece99.jpg" alt=""></div>


                    <div class="title1">СТЕНКА ДЛЯ ГОСТИНОЙ</div>
                    <div class="txt1  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price1 ">7&nbsp;999 руб.</div>
                    <div class="btn1 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Заказать
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form1"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text"> Нажимая на кнопку, Вы принимаете <a target="_blank"
                                                                                              data-cke-saved-href="/?personal_data=1"
                                                                                              href="/?personal_data=1">Положение</a>
                                и <a target="_blank" data-cke-saved-href="/?personal_data=2" href="/?personal_data=2">Согласие</a>
                                на обработку персональных данных. <br></div>
                        </div>
                    </div>


                </div>
                <div class="col_4">
                    <div class="image2 s200     border   shadow  "><img
                                src="/img/200x200/68cd11fee93721372292264f0454e760.jpg" alt=""></div>


                    <div class="title2">МОДУЛЬНЫЙ ГАРНИТУР</div>
                    <div class="txt2  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price2 ">56&nbsp;995 руб.</div>
                    <div class="btn2 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Заказать
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form2"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text"> Нажимая на кнопку, Вы принимаете <a target="_blank"
                                                                                              data-cke-saved-href="/?personal_data=1"
                                                                                              href="/?personal_data=1">Положение</a>
                                и <a target="_blank" data-cke-saved-href="/?personal_data=2" href="/?personal_data=2">Согласие</a>
                                на обработку персональных данных. <br></div>
                        </div>
                    </div>


                </div>
                <div class="clear480"></div>
                <div class="col_4 ">
                    <div class="image3 s200     border   shadow  "><img
                                src="/img/200x200/5e354e81b77f393cc5a1208d2ee3a7cf.jpg" alt=""></div>


                    <div class="title3">ШКАФ С ВИТРИНОЙ</div>
                    <div class="txt3  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price3 ">14&nbsp;999 руб.</div>
                    <div class="btn3 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Заказать
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form3"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text"> Нажимая на кнопку, Вы принимаете <a target="_blank"
                                                                                              data-cke-saved-href="/?personal_data=1"
                                                                                              href="/?personal_data=1">Положение</a>
                                и <a target="_blank" data-cke-saved-href="/?personal_data=2" href="/?personal_data=2">Согласие</a>
                                на обработку персональных данных. <br></div>
                        </div>
                    </div>


                </div>
                <div class="col_4 last">
                    <div class="image4 s200     border   shadow  "><img
                                src="/img/200x200/b42e42b5abfa808102abd681cd6f9564.jpg" alt=""></div>


                    <div class="title4">ШКАФ ДЛЯ ОДЕЖДЫ И БЕЛЬЯ&nbsp;</div>
                    <div class="txt4  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price4 ">4&nbsp;299 руб.</div>
                    <div class="btn4 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Заказать
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form4"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text"> Нажимая на кнопку, Вы принимаете <a target="_blank"
                                                                                              data-cke-saved-href="/?personal_data=1"
                                                                                              href="/?personal_data=1">Положение</a>
                                и <a target="_blank" data-cke-saved-href="/?personal_data=2" href="/?personal_data=2">Согласие</a>
                                на обработку персональных данных. <br></div>
                        </div>
                    </div>


                </div>
                <div class="clear"></div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/c8754f2762351a6195babaafa99ece99.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info1"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn1x surround " style="background-color:#009999; ">Заказать</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/68cd11fee93721372292264f0454e760.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info2"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn2x surround " style="background-color:#009999; ">Заказать</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/5e354e81b77f393cc5a1208d2ee3a7cf.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info3"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn3x surround " style="background-color:#009999; ">Заказать</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/b42e42b5abfa808102abd681cd6f9564.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info4"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn4x surround " style="background-color:#009999; ">Заказать</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
            </div>
            <div class="popup_thanks">
                <div class="popup_thanks_inner">
                    <div class="popup_thanks_close">X</div>
                    <div class="popup_thanks_title">Спасибо за заявку!</div>
                    <div class="popup_thanks_text">Заявка отправлена. Наш менеджер свяжется с Вами в ближайшее время.
                    </div>
                </div>
            </div>


            <div class="arr1">
                <div class="col_4">
                    <div class="image1 s200     border   shadow  "><img
                                src="/img/200x200/792b4e881da7edea66774e317a3ba556.jpg" alt=""></div>


                    <div class="title1">СТЕНКА ДЛЯ ГОСТИНОЙ</div>
                    <div class="txt1  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price1 ">7&nbsp;999 руб.</div>
                    <div class="btn1 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Заказать
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form1"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text"> Нажимая на кнопку, Вы принимаете <a target="_blank"
                                                                                              data-cke-saved-href="/?personal_data=1"
                                                                                              href="/?personal_data=1">Положение</a>
                                и <a target="_blank" data-cke-saved-href="/?personal_data=2" href="/?personal_data=2">Согласие</a>
                                на обработку персональных данных. <br></div>
                        </div>
                    </div>


                </div>
                <div class="col_4">
                    <div class="image2 s200     border   shadow  "><img
                                src="/img/200x200/bf13e5bddfd5c9aade79fcfa02ec497d.jpg" alt=""></div>


                    <div class="title2">МОДУЛЬНЫЙ ГАРНИТУР</div>
                    <div class="txt2  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price2 ">56&nbsp;995 руб.</div>
                    <div class="btn2 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Заказать
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form2"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text"> Нажимая на кнопку, Вы принимаете <a target="_blank"
                                                                                              data-cke-saved-href="/?personal_data=1"
                                                                                              href="/?personal_data=1">Положение</a>
                                и <a target="_blank" data-cke-saved-href="/?personal_data=2" href="/?personal_data=2">Согласие</a>
                                на обработку персональных данных. <br></div>
                        </div>
                    </div>


                </div>
                <div class="clear480"></div>
                <div class="col_4 ">
                    <div class="image3 s200     border   shadow  "><img
                                src="/img/200x200/13c4d8bbee7fe113243d54e04b8bbd0c.jpg" alt=""></div>


                    <div class="title3">ШКАФ С ВИТРИНОЙ</div>
                    <div class="txt3  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price3 ">14&nbsp;999 руб.</div>
                    <div class="btn3 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Заказать
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form3"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text"> Нажимая на кнопку, Вы принимаете <a target="_blank"
                                                                                              data-cke-saved-href="/?personal_data=1"
                                                                                              href="/?personal_data=1">Положение</a>
                                и <a target="_blank" data-cke-saved-href="/?personal_data=2" href="/?personal_data=2">Согласие</a>
                                на обработку персональных данных. <br></div>
                        </div>
                    </div>


                </div>
                <div class="col_4 last">
                    <div class="image4 s200     border   shadow  "><img
                                src="/img/200x200/ed916778d63c7b52f01559310ad51b76.jpg" alt=""></div>


                    <div class="title4">ШКАФ ДЛЯ ОДЕЖДЫ И БЕЛЬЯ&nbsp;</div>
                    <div class="txt4  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price4 ">4&nbsp;299 руб.</div>
                    <div class="btn4 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Заказать
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form4"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text"> Нажимая на кнопку, Вы принимаете <a target="_blank"
                                                                                              data-cke-saved-href="/?personal_data=1"
                                                                                              href="/?personal_data=1">Положение</a>
                                и <a target="_blank" data-cke-saved-href="/?personal_data=2" href="/?personal_data=2">Согласие</a>
                                на обработку персональных данных. <br></div>
                        </div>
                    </div>


                </div>
                <div class="clear"></div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/792b4e881da7edea66774e317a3ba556.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info1"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn1x surround " style="background-color:#009999; ">Заказать</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/bf13e5bddfd5c9aade79fcfa02ec497d.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info2"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn2x surround " style="background-color:#009999; ">Заказать</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/13c4d8bbee7fe113243d54e04b8bbd0c.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info3"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn3x surround " style="background-color:#009999; ">Заказать</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/ed916778d63c7b52f01559310ad51b76.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info4"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn4x surround " style="background-color:#009999; ">Заказать</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
            </div>
            <div class="popup_thanks">
                <div class="popup_thanks_inner">
                    <div class="popup_thanks_close">X</div>
                    <div class="popup_thanks_title">Спасибо за заявку!</div>
                    <div class="popup_thanks_text">Заявка отправлена. Наш менеджер свяжется с Вами в ближайшее время.
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="hide_line wide  section section132 "
         style="background-color:#ffffff;  background-image:url(/img/null.png);" data-id="519617" id="b_519617"><a
                name="a_516876"></a>
        <div class="section_inner">
            <div class="title  ">
                <div>
                    <div>Мебель в гостиную<br></div>
                </div>
            </div>
            <div class="sub_title  hidden   ">Рыбный текст</div>
            <div class="text"><p>Одной из самых важных комнат в каждом доме или квартире является гостиная, которую по
                    праву можно назвать «лицом» хозяев. Если гостиная правильно и лаконично обустроена, в ней выдержан
                    единый стиль оформления, то находиться в данной комнате будет и комфортно, и приятно.Одним из
                    наиболее значимых заданий владельцев дома во время дизайна комнат является выбор мебели для
                    гостиной. Конечно, мебель должна в первую очередь отвечать вкусу хозяев дома, она также должна
                    выглядеть гармонично в интерьере и быть многофункциональной, практичной и компактной. Кроме того,
                    если вам требуется купить мебель для гостиной в Москве, стоит учитывать собственный бюджет. Если
                    финансы ограничены, существует немало возможностей купить мебель в гостиную недорого в Москве. Для
                    этого стоит воспользоваться поиском в интернет-магазине, а также просмотреть состояние текущих акций
                    и выгодных предложений, которые появляются достаточно часто. Кроме того, мебель для гостиной в
                    интернет-магазине в Москве приобрести можно с доставкой, которая не только окажется бесплатной, но и
                    порадует сроками выполнения. Важно также учитывать тот факт, что на мебель для гостиной цены всегда
                    зависят от материала изготовления, поэтому более дорогими окажутся изделия из натурального дерева и
                    металла, которые отличаются долговечностью и поистине роскошным видом. </p></div>
        </div>
    </div>

    <div class="hide_line  section section117 " style="background-color:#ffffff;  background-image:url(/img/null.png);"
         data-id="519619" id="b_519619"><a name="a_519619"></a>
        <div class="section_inner">
            <div class="title  ">
                <div>Ассортимент мебели в гостиную</div>
                <div><br></div>
            </div>
            <div class="sub_title  hidden   ">Результаты людей, продших наше обучение до результата</div>

            <div class="arr1">


                <div class="col_2 image1  border   image_size_470x340  border1   shadow  "><img
                            src="/img/470x340/e2e711a18f859135e45dfbbbddb026d6.jpg" alt=""></div>


                <div class="col_2">
                    <div class="descr1   hidden  ">Продажа автомобилей бизнес-класса</div>
                    <div class="txt1  "><p>Если вам понадобилось купить мебель в гостиную, интернет-магазин предлагает
                            ознакомиться с широчайшим ассортиментом моделей, которые порадуют не только стоимостью, но и
                            многочисленными достоинствами.</p>
                        <p><br></p>
                        <p>В каталоге гипермаркета вы сможете подобрать диваны, кресла, стильные пуфы, вместительные
                            комоды и стеллажи, консольный гарнитуры и практичную мебель для ТВ, а также изысканные
                            банкетки, журнальные столики и навесные многофункциональные элементы декора. Несмотря на
                            неизменно высокое качество товаров и изделий, мы предлагаем мебель для гостиной недорого,
                            что позволит каждому покупателю совершить исключительно выгодные покупки.<br></p></div>
                </div>
                <div class="clear"></div>
            </div>

        </div>
    </div>

    <div class="hide_line  section  transparent_ico section200  "
         style="background-color:#ffffff;  background-image:url(/img/null.png);" data-id="519615" id="b_519615"><a
                name="anchor2"></a>
        <div class="section_inner">
            <div class="title  ">Почему покупают&nbsp;у нас ?
                <div><br></div>
            </div>
            <div class="sub_title  hidden   ">Выберите услугу, подходящую под решение ваших задач</div>

            <div class="arr1">
                <div class="col_4">


                    <div class="c_ico1     border   shadow  "
                         style="background-image: url(/cicons/creditcard.png)"></div>
                    <div class="title1"><p>ЛУЧШИЕ ЦЕНЫ<br>Только в нашем интернет-магазине вы можете сделать заказ по
                            самой низкой цене!<br></p></div>
                    <div class="txt1  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price1  hidden  ">2000 руб.</div>
                    <div class=" hidden btn1 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Узнать подробнее
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form1"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text">Мы не передаем Вашу персональную информацию третьим лицам.
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col_4">


                    <div class="c_ico2     border   shadow  "
                         style="background-image: url(/cicons/RoundIcons-Free-Set-50.png)"></div>
                    <div class="title2">ДОСТАВКА ПО МОСКВЕ<br>Доставим Ваш заказ в любую точку Москвы и Московской
                        области совершенно бесплатно!
                    </div>
                    <div class="txt2  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price2  hidden  ">2000 руб.</div>
                    <div class=" hidden btn2 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Узнать подробнее
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form2"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text">Мы не передаем Вашу персональную информацию третьим лицам.
                            </div>
                        </div>
                    </div>


                </div>
                <div class="clear480"></div>
                <div class="col_4 ">


                    <div class="c_ico3     border   shadow  " style="background-image: url(/cicons/Shopping.png)"></div>
                    <div class="title3">СКИДКИ И АКЦИИ<br>Только в нашем магазине регулярно проводятся акции и вы можете
                        купить товар со скидкой!
                    </div>
                    <div class="txt3  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price3  hidden  ">2000 руб.</div>
                    <div class=" hidden btn3 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Узнать подробнее
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form3"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text">Мы не передаем Вашу персональную информацию третьим лицам.
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col_4 last">


                    <div class="c_ico4     border   shadow  " style="background-image: url(/cicons/User.png)"></div>
                    <div class="title4">БЕСПЛАТНЫЕ КОНСУЛЬТАЦИИ<br>Сомневаетеь в выборе? Есть вопросы? Оставьте заявку и
                        наш специалист свяжется с вами!
                    </div>
                    <div class="txt4  hidden  ">Вы можете выбрать типовой проект или создать собственный проект готового
                        дома с нашей помощью
                    </div>
                    <div class="price4  hidden  ">2000 руб.</div>
                    <div class=" hidden btn4 surround  "
                         style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">Узнать подробнее
                    </div>


                    <div class="popup_form">
                        <div class="popup_form_inner">
                            <div class="popup_form_close">X</div>
                            <div class="popup_form_title">Оставить заявку</div>
                            <form action="handler.php" enctype="multipart/form-data" method="post">
                                <div class="form4"><input type="hidden" name="Название формы" value="">
                                    <div class="field">
                                        <div class="field_title">Введите имя</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите имя" placeholder="Введите имя">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите E-mail</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите E-mail"
                                                                        placeholder="Введите E-mail"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_title">Введите номер телефона</div>
                                        <div class="field_description"></div>
                                        <div class="field_input"><input type="text" required="required"
                                                                        name="Введите номер телефона"
                                                                        placeholder="Введите номер телефона"></div>
                                    </div>
                                    <div class="field">
                                        <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                        data-action="thanks" data-url="" data-amount="0"
                                                                        value="Отправить"
                                                                        style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="popup_form_text">Мы не передаем Вашу персональную информацию третьим лицам.
                            </div>
                        </div>
                    </div>


                </div>
                <div class="clear"></div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/image_247.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info1"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn1x surround " style="background-color:#009999; ">Узнать подробнее</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/image_220.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info2"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn2x surround " style="background-color:#009999; ">Узнать подробнее</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/image_286.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info3"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn3x surround " style="background-color:#009999; ">Узнать подробнее</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="extra_info_block_wrapper">
                    <div class="extra_info_block">
                        <div class="close">Х</div>
                        <div class="left"><img src="/img/400x400/image_286.jpg" alt="">

                        </div>
                        <div class="right">
                            <div class="extra_info4"><span style="font-size:28px;">Название товара<br></span>Подробное
                                описание продукта.<br>Здесь вы можете расписать:
                                <ul>
                                    <li>свойства товара,<br type="_moz"></li>
                                    <li>параметры товара,<br type="_moz"></li>
                                    <li>описание товара,</li>
                                    <li>наличие на складе,</li>
                                    <li>цвет,</li>
                                    <li>количество.<br></li>
                                </ul>
                                <p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>

                            <div class="btn4x surround " style="background-color:#009999; ">Узнать подробнее</div>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
            </div>
            <div class="popup_thanks">
                <div class="popup_thanks_inner">
                    <div class="popup_thanks_close">X</div>
                    <div class="popup_thanks_title">Спасибо за заявку!</div>
                    <div class="popup_thanks_text">Заявка отправлена. Наш менеджер свяжется с Вами в ближайшее время.
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="hide_line  section section117 " style="background-color:#ffffff;  background-image:url(/img/null.png);"
         data-id="519621" id="b_519621"><a name="anchor3"></a>
        <div class="section_inner">
            <div class="title  ">Краткая информация о доставке и оплате товара
                <div><br></div>
            </div>
            <div class="sub_title  hidden   ">Результаты людей, продших наше обучение до результата</div>

            <div class="arr1">


                <div class="col_2 image1  border   image_size_470x340  border1   shadow  "><img
                            src="/img/470x340/1b45eadd74648ec9d7dd83b3c47442db.jpg" alt=""></div>


                <div class="col_2">
                    <div class="descr1  "><p>ОПЛАТА<br></p></div>
                    <div class="txt1  "><p>Для вашего удобства мы принимаем следующие способы оплаты:</p>
                        <ul>
                            <li>Наличные;<br></li>
                            <li>Безналичный расчет);</li>
                            <li>Электронные деньги (QIWI, Pay Pal, WebMoney).<br></li>
                        </ul>
                        <p>Оплата заказа по безналичному расчету: После подтверждения заказа менеджером, для оплаты на
                            расчетный счет, Вам выставят счет с реквизитами компании. Счет можно оплатить в банке через
                            оператора. Если у вас есть банк-клиент, то оплачиваете заказ через него.</p></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="arr1">


                <div class="col_2 image1  border   image_size_470x340  border1   shadow  "><img
                            src="/img/470x340/0e317d36e0dca1903d6dae8a5e412861.jpg" alt=""></div>


                <div class="col_2">
                    <div class="descr1  "><p>ДОСТАВКА<br></p></div>
                    <div class="txt1  "><p>Одним из преимуществ компании для работы с клиентами является организация и
                            контроль логистики продукции по всей цепочке: от завода производителя из любой точки мира до
                            объекта заказчика в любой точке России.</p>
                        <p><br></p>
                        <p>Мы осуществляем доставку по Москве и Московской области. Стоимость уточняйте по телефону
                            +7(800)333-22-33.<br>При заказе на сумму более 20 000 рублей доставка осуществляется
                            совершенно бесплатно!<br></p></div>
                </div>
                <div class="clear"></div>
            </div>

        </div>
    </div>

    <div class="section section153    "
         style="background-color:#ffffff; background-image:url(/img/1920x0/976d4d8dab0f1379e87197293ad065cb.jpg);"
         data-id="519623" id="b_519623"><a name="a_518931"></a>

        <div class="dark"></div>
        <div class="noise" style="background-image:url(/img/null.png);"></div>
        <div class="section_inner  ">
            <div class="layer">
                <div class="title  "><p><br></p>
                    <p>Есть вопросы?&nbsp;</p>
                    <div>Нужна консультация?</div>
                </div>
                <div class="sub_title  "><p>Оставьте заявку на нашем сайте или позвоните по телефону&nbsp;<br></p>
                    <div>+7(800)333-22-33 и наш консультант ответит на все Ваши вопросы</div>
                </div>

                <div class="btn1 surround  " style="background-color:#009999;  border-radius: 0.5em;   box-shadow: 0; ">
                    Заказать звонок
                </div>
                <div class="btn_descr"><br></div>
            </div>

            <div class="popup_form">
                <div class="popup_form_inner">
                    <div class="popup_form_close">X</div>
                    <div class="popup_form_title">Оставить заявку</div>
                    <form action="handler.php" enctype="multipart/form-data" method="post">
                        <div class="form1"><input type="hidden" name="Название формы" value="">
                            <div class="field">
                                <div class="field_title">Введите имя</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="text" required="required" name="Введите имя"
                                                                placeholder="Введите имя"></div>
                            </div>
                            <div class="field">
                                <div class="field_title">Введите E-mail</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="text" required="required" name="Введите E-mail"
                                                                placeholder="Введите E-mail"></div>
                            </div>
                            <div class="field">
                                <div class="field_title">Введите номер телефона</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="text" required="required"
                                                                name="Введите номер телефона"
                                                                placeholder="Введите номер телефона"></div>
                            </div>
                            <div class="field">
                                <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                data-action="thanks" data-url="" data-amount="0"
                                                                value="Заказать"
                                                                style="background-color:#009999;    border-radius: 0.5em; ;  box-shadow: 0; ">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="popup_form_text">Нажимая на кнопку, Вы принимаете <a target="_blank"
                                                                                     data-cke-saved-href="/?personal_data=1"
                                                                                     href="/?personal_data=1">Положение</a>
                        и <a target="_blank" data-cke-saved-href="/?personal_data=2"
                             href="/?personal_data=2">Согласие</a> на обработку персональных данных. <br></div>
                </div>
            </div>


            <div class="popup_thanks">
                <div class="popup_thanks_inner">
                    <div class="popup_thanks_close">X</div>
                    <div class="popup_thanks_title">Спасибо за заявку!</div>
                    <div class="popup_thanks_text">Заявка отправлена. Наш менеджер свяжется с Вами в ближайшее время.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="hide_line section section303" data-id="519624" id="b_519624"><a name="anchor4"></a>
        <div class="map"
             data-map-obj="[
             {&quot;address&quot;:&quot;Ижевск, Индустриальная 38&quot;,&quot;color&quot;:&quot;#FF1500&quot;}]"
             data-map-center="{&quot;zoom&quot;:5,&quot;center&quot;:[56.855764, 53.246021]}">
            <div class="map_inner"></div>
        </div>
        <div class="text  ">Адрес: г. Ижевск, ул. Индустриальная 38,офис 1<br>Телефон: +7(800)000-00-00<br>Электронный
            адрес: info@mebelvam18.кг<br>График работы: с 08:00 до 20:00 (пон-пят), с 09:00 до 14:00 (суб)&nbsp;
        </div>
    </div>

    <div class="hide_line section section119   " style="background-color:#ffffff;  background-image:url(/img/null.png);"
         data-id="519625" id="b_519625"><a name="a_515786"></a>
        <div class="section_inner">


            <div class="logo_img"><img src="/img/200x0/default_logo.jpg" alt=""></div>


            <div class="address-and-ua">
                <div class="address1">ИП «Бусоргина», 123456, г.Ижевск, ул. Индустриальная 38, офис 1 <br>ИНН 1234567890
                    ОГРН 123456789012
                </div>
                <div class="policy2 ">Политика конфиденциальности</div>
            </div>
            <div class="phone-and-address">
                <div class="phone1 ">8 800 333 22 33</div>
                <div class="text1">Звонок по России бесплатный</div>
                <a target="_blank" href="http://tobiz.net/" class="tobiz_link ">Сделано на платформе TOBIZ.NET</a>
            </div>
            <div class="clear"></div>
            <div class="policy2_popup">
                <div class="policy2_title">Политика конфиденциальности</div>
                <div class="policy2_body"><p>Данный сайт уважает Ваше право и соблюдает конфиденциальность при
                        заполнении, передаче и хранении Ваших конфиденциальных сведений.<br>Размещение заявки на данном
                        сайте означает Ваше согласие на обработку данных и дальнейшей передачи ваших контактных данных
                        нашей компании.<br>Под персональными данными подразумевается информация, относящаяся к субъекту
                        персональных данных, в частности имя, контактные реквизиты (адрес электронной почты) и иные
                        данные, относимые Федеральным законом от 27 июля 2006 года № 152-ФЗ «О персональных данных» к
                        категории персональных данных.<br>Целью обработки персональных данных является информирование об
                        оказываемых услугах нашей компании.</p></div>
            </div>
        </div>
    </div>

</div>


</body>
</html>