<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Защитим лесопарк Самары</title>
    <!-- Pages Stylesheets --->
    <link rel="icon" href="sources/icons/favicon.ico">
    <link rel="stylesheet" type="text/css" href="dist/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="sources/css/style.css">
    <link rel="stylesheet" type="text/css" href="dist/font-awesome-4.7.0/css/font-awesome.css">
    <!-- Page Scripts --->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script rel="script" type="text/javascript" src="dist/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script rel="script" type="text/javascript" src="sources/js/main.js"></script>
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <script type="text/javascript">
        var map;

        DG.then(function () {
            map = DG.map('map', {
                center: [53.26062, 50.253555],
                zoom: 15,
                dragging: false,
                touchZoom: false,
                scrollWheelZoom: false,
                doubleClickZoom: false
            });

            DG.marker([53.26062, 50.253555]).addTo(map).bindPopup('Парк имени 60-летия Советской власти');
        });
    </script>

    <!-- VK Widget Scripts -->
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?154"></script>
    <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {
            mode: 2,
            wide: 1,
            no_cover: 1,
            width: "auto",
            height: "500",
            color3: 'A9B91B'
        }, 166576908);
    </script>
</head>
<body>
<div class="col-xs-12 col-md-1"></div>
<div class="col-xs-12 col-md-10">
    <!-- Navigation Menu -->
    <nav id="navigation-menu" class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li><a class="scrollto" href="#home">Главная</a></li>
                    <li><a class="scrollto" href="#aboutPark">О парке</a></li>
                    <li><a class="scrollto" href="#how-can-i-help">Как я могу помочь?</a></li>
                    <li><a class="scrollto" href="#contactUs">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation Menu End -->

    <!-- Page Header -->
    <header class="save-park-name">
        <span class="img-icon">
            <img src="sources/img/savepark.png">
        </span>
        <h1>Сохраним лесопарк</h1>
    </header>
    <!-- Page Header End -->

    <div class="container">
        <!-- Home Section -->
        <section id="home">
            <!-- Section One -->
            <div id="sectionOne" class="square sq1 row">
                <!-- Left Section -->
                <div class="col-xs-12 col-md-3">
                    <h2>Кто мы?</h2>
                    <div class="block-text">
                        Общественное объединение граждан, желающее защитить одно из природных достояний Самарского края
                        -
                        Лесопарк
                        60-летия Советской власти от бездушной вырубки многолетних деревьев. Он позволяет нам дышать
                        полной
                        грудью и
                        дает площадку для занятий спортом, семейных прогулок и дружеских встреч.
                    </div>
                    <a href="#how-can-i-help" class="scrollto btn btn-signup mobileVersion">Участвовать</a>
                </div>
                <!-- Left Section End -->
                <!-- Right Section -->
                <div class="col-xs-12 col-md-9">
                    <div id="carousel-1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="carousel-img" src="sources/img/sliders/slide1-1.png">
                            </div>
                            <div class="item">
                                <img class="carousel-img" src="sources/img/sliders/slide1-2.png">
                            </div>
                            <div class="item">
                                <img class="carousel-img" src="sources/img/sliders/slide1-3.png">
                            </div>
                            <div class="item">
                                <img class="carousel-img" src="sources/img/sliders/slide1-4.png">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-1" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"><i class="fa fa-angle-left"
                                                                      aria-hidden="true"></i></span>
                            <span class="sr-only"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-1" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"><i class="fa fa-angle-right"
                                                                           aria-hidden="true"></i></span>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                </div>
                <!-- Right Section End -->
            </div>
            <!-- Section One End -->

            <!-- Section Two -->
            <div id="sectionTwo" class="row">
                <!-- Left Section -->
                <div class="square sq2 col-xs-12 col-md-2">
                    <h2>Участвуйте!</h2>
                    <div class="block-text">
                        Самая большая зелёная зона в городе Самара находится под угрозой вырубки. Мы - неравнодушные
                        жители
                        района хотим вопрепятствовать уничтожению лесопарка имени 60-летия ВЛКСМ. Надеемся, что вы также
                        не
                        останетесь равнодушными присоединитесь к нашей кампании.
                    </div>
                    <a href="#how-can-i-help" class="scrollto help">Участвовать!</a>
                </div>
                <!-- Left Section End -->
                <!-- Right Section -->
                <div class="col-xs-12 col-md-10">
                    <div id="map" class="map-2gis"></div>
                </div>
                <!-- Right Section End -->
            </div>
            <!-- Section Two End -->
        </section>
        <!-- Home Section End -->

        <!-- About Park Section -->
        <section id="aboutPark">
            <!-- Section Three -->
            <div id="sectionThree" class="row">
                <div class="col-xs-12 col-md-12">
                    <div id="carousel-2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="carousel-img" src="sources/img/sliders/slide2-1.png">
                            </div>
                            <div class="item">
                                <img class="carousel-img" src="sources/img/sliders/slide1-2.png">
                            </div>
                            <div class="item">
                                <img class="carousel-img" src="sources/img/sliders/slide1-3.png">
                            </div>
                            <div class="item">
                                <img class="carousel-img" src="sources/img/sliders/slide1-4.png">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-2" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"><i class="fa fa-angle-left"
                                                                      aria-hidden="true"></i></span>
                            <span class="sr-only"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-2" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"><i class="fa fa-angle-right"
                                                                           aria-hidden="true"></i></span>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Section Three End -->

            <!-- Section Three-One -->
            <div id="sectionThreeOne" class="square sq1 row">
                <!-- Left Section -->
                <div class="col-xs-12 col-md-12">
                    <h2 class="text-center">Местным жителям необходим парк</h2>
                    <div class="block-text text-justify">
                        В Кировском районе г. Самара находится крупнейшая в городе зелёная зона в границах улиц
                        Московское
                        шоссе, Ташкентская, Стара Загора, Алма-Атинская.
                        <br>
                        Его территория является любимым местом для отдыха и занятий спортом жителей Кировского,
                        Промышленного и
                        др. районов нашего города. Здесь прогуливаются молодые мамы с колясками, пенсионеры, занимаются
                        спортом,
                        проводят уроки физкультуры и соревнования спортивные школы. Зимой много лыжников. В Самаре
                        катастрофически не хватает зелёных насаждений, наш город экологи обсуждают как пример мирового
                        экологического кризиса.
                    </div>
                    <a href="#how-can-i-help" class="scrollto btn btn-signup ">Участвовать в проекте</a>
                </div>
            </div>
            <!-- Section Three-One End -->

            <!-- Section Three-Two -->
            <div id="sectionThreeTwo" class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <h3 class="title-card">Экология</h3>
                                <p class="card-text class-text">
                                    Средние показатели загрязнения атмосферного воздуха взвесями <br> различных
                                    веществ<br>
                                    в
                                    Самаре<br> на
                                    43 %
                                    выше общероссийских.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <h3 class="title-card">Лесной кодекс</h3>
                                <p class="card-text class-text">
                                    Любой лес на землях населённого пункта – городской лес, а значит, на него
                                    распространяются
                                    требования ст. 105 Лесного кодекса о запрете капитального строительства
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card cardMobile flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <h3 class="title-card">Кировский район</h3>
                                <p class="card-text class-text">
                                    Озеленение города и лесные массивы составляют порядка 3,5 метров квадратных на
                                    одного
                                    жителя.
                                    Такие показатели не соответствуют необходимым установленным нормативам
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section Three-Two -->

            <!-- Section Three-Three -->
            <div id="sectionThreeThree" class="square row">
                <!-- Left Section -->
                <div class="col-xs-12 col-md-12">
                    <h2 class="text-left">Необходимо:</h2>
                    <div class="block-text text-justify">
                        <li>Отмена всех документов, допускающих любое строительство, выдачу и утверждение любых
                            документов,
                            допускающих любое подобное строительство на всей территории Лесопарка имени 60-летия
                            Советской
                            власти (в
                            том числе на участке с кадастровым номером 63:01:0219002:522 (20 га.), и других участках,
                            которые
                            находятся в частной собственности в границах лесопарка).
                        </li>
                        <li>Восстановление лесопарка в первоначальных границах (около 133 га) именно как рекреационного
                            объекта,
                            так как это лёгкие нашего города и застраивать их недопустимо.
                        </li>
                        <li>
                            Проведение в лесопарке работы по удалению сухостоя и валежника, уборке мусора, высадке
                            ценных
                            пород
                            деревьев и прочих работ для улучшения экологии и среды обитания жителей.
                        </li>
                    </div>
                    <a href="#how-can-i-help" class="scrollto btn btn-signup ">Участвовать в проекте</a>
                </div>
            </div>
            <!-- Section Tree-Three End -->
        </section>
        <!-- About Park Section End -->

        <!-- How Can I Help Section-->
        <section id="how-can-i-help">
            <!-- Section Four -->
            <div id="sectionFour" class="square sq1 row">
                <!-- Left Section -->
                <div class="col-xs-12 col-md-12">
                    <h2 class="text-center mobileVersionText">Присоединяйтесь! Помочь может каждый!</h2>
                    <!-- How can I help -->
                    <div class="how row">
                        <div class="col-md-1 col-sm-1 text-center">
                            <img class="helpIcon" src="sources/img/helpIcons/1.png">
                        </div>
                        <div class="col-md-11 col-sm-11">
                            <h3>Первый и самый простой способ помочь</h3>
                        </div>
                        <div class="col-md-1 col-sm-1 text-center"></div>
                        <div class="col-md-11 col-sm-11">
                            <p>Поделиться с друзьями, соседями, знакомыми и родственниками информацией. Рассказать о
                                ситуации.
                                Подписать петицию на <a target="_blank"
                                                        href="https://www.change.org/p/%D0%BF%D1%80%D0%B5%D0%B7%D0%B8%D0%B4%D0%B5%D0%BD%D1%82-%D1%80%D1%84-%D0%BF%D1%83%D1%82%D0%B8%D0%BD-%D0%B2-%D0%B2-%D0%B2%D0%B5%D1%80%D0%BD%D0%B5%D0%BC-%D0%BB%D0%B5%D1%81%D0%BE%D0%BF%D0%B0%D1%80%D0%BA-%D1%81%D0%B0%D0%BC%D0%B0%D1%80%D0%B5?recruiter=866448270&utm_source=share_petition&utm_medium=vk&utm_campaign=share_petition&utm_term=vk_share_responsive">change.org</a>.
                                Вступить в нашу группу в <a target="_blank"
                                                            href="https://vk.com/forestmonument">ВКонтакте</a>,
                                подписаться на аккаунт в
                                <a target="_blank" href="https://www.instagram.com/forestmonument/">Инстаграм</a>,
                                чтобы следить за новостями. А также присоединиться к флешмобу и выложить ваши фото из
                                парка
                                в
                                социальных
                                сетях с хэштегом <a target="_blank"
                                                    href="https://www.instagram.com/explore/tags/леснаташкентской/">#леснаташкентской</a>.
                            </p>
                        </div>
                    </div>
                    <!-- How can I help End -->
                    <!-- How can I help -->
                    <div class="how row">
                        <div class="col-md-1 col-sm-1 text-center">
                            <img class="helpIcon" src="sources/img/helpIcons/2.png">
                        </div>
                        <div class="col-md-11 col-sm-11">
                            <h3>Если вы готовы помочь больше - напишите письмо - обращение в министерство лесного
                                хозяйства</h3>
                        </div>
                        <div class="col-md-1 col-sm-1 text-center"></div>
                        <div class="col-md-11 col-sm-11">
                            <p>Вы можете помочь онлайн. Для этого необходимо письмо или свой вариант обращения написать
                                в
                                министерство лесного хозяйства на почту <a
                                        href="mailto: MNR@samregion.ru">MNR@samregion.ru</a>
                                Пример письма доступен для скачивания <a
                                        href="sources/docs/Ministru_lesnogo_khozyaystva_-_obraschenie_grazhdanina.docx"><b>здесь</b></a>.
                            </p>
                        </div>
                    </div>
                    <!-- How can I help End -->
                    <!-- How can I help -->
                    <div class="how row">
                        <div class="col-md-1 col-sm-1 text-center">
                            <img class="helpIcon" src="sources/img/helpIcons/3.png">
                        </div>
                        <div class="col-md-11 col-sm-11">
                            <h3>Также вы можете подписать бумажную петицию</h3>
                        </div>
                        <div class="col-md-1 col-sm-1 text-center"></div>
                        <div class="col-md-11 col-sm-11">
                            <p> На <a target="_blank"
                                      href="https://www.change.org/p/%D0%BF%D1%80%D0%B5%D0%B7%D0%B8%D0%B4%D0%B5%D0%BD%D1%82-%D1%80%D1%84-%D0%BF%D1%83%D1%82%D0%B8%D0%BD-%D0%B2-%D0%B2-%D0%B2%D0%B5%D1%80%D0%BD%D0%B5%D0%BC-%D0%BB%D0%B5%D1%81%D0%BE%D0%BF%D0%B0%D1%80%D0%BA-%D1%81%D0%B0%D0%BC%D0%B0%D1%80%D0%B5?recruiter=866448270&utm_source=share_petition&utm_medium=vk&utm_campaign=share_petition&utm_term=vk_share_responsive">change.org</a>
                                продвигается петиция в защиту лесопарка - ссылка. Помимо этого есть возможность
                                поставить
                                подпись в бумажной петиции. Правильно оформленные
                                бумажные петиции оказываются гораздо эффективнее электронных. Для
                                подписания петиции вы можете обратиться к администраторам группы
                                <a target="_blank" href="https://vk.com/forestmonument">ВКонтакте</a> или в директ
                                нашего
                                <a target="_blank" href="https://www.instagram.com/forestmonument/">Инстаграм</a>
                                аккаунта.
                            </p>
                        </div>
                    </div>
                    <!-- How can I help End -->
                    <!-- How can I help -->
                    <div class="how row">
                        <div class="col-md-1 col-sm-1 text-center">
                            <img class="helpIcon" src="sources/img/helpIcons/4.png">
                        </div>
                        <div class="col-md-11 col-sm-11">
                            <h3>Если вы горите желанием сделать что-то более значительное, то вы можете помочь со сбором
                                подписей в защиту парка</h3>
                        </div>
                        <div class="col-md-1 col-sm-1 text-center"></div>
                        <div class="col-md-11 col-sm-11">
                            <p>Организуйте сбор подписей в поддержку парка у себя в подъезде, на работе или учёбе. Для
                                этого
                                также можете связаться с координаторами проекта через группу
                                <a target="_blank" href="https://vk.com/forestmonument">ВКонтакте</a>
                                или <a target="_blank" href="https://www.instagram.com/forestmonument/">Инстаграм</a>.
                            </p>
                        </div>
                    </div>
                    <!-- How can I help End -->
                </div>
            </div>
            <!-- Section Four End -->
        </section>
        <!-- How Can I Help Section End -->

        <!-- Contact Section -->
        <section id="contactUs">
            <div id="contactSection" class="row">
                <div class="square sq2 col-md-4 col-sm-4">
                    <h2>Способы связи с нами</h2>
                    <div class="block-text contactText text-justify">
                        Чтобы присоединиться к работе или связаться с администраторами сайта можно воспользоваться
                        формой
                        справа, а также написать администраторам группы ВКонтакте
                        <a target="_blank" href="https://vk.com/forestmonument">Защита лесопарка Самары</a> или в директ
                        <a target="_blank" href="https://www.instagram.com/forestmonument/">forestmonument</a>.
                    </div>
                </div>
                <div class="col-md-1 col-sm-1"></div>
                <div class="col-md-7 col-sm-7 square sq2">
                    <form id="feedbackForm" action="contact-form-action.php" method="post">
                        <div class="form-group col-md-4 col-sm-4">
                            <label for="inputName">Имя <span>*</span></label>
                            <input type="text" required class="form-control" id="inputName" name="inputName">
                        </div>
                        <div class="form-group col-md-4 col-sm-4">
                            <label for="inputEmail">Email <span>*</span></label>
                            <input type="email" required class="form-control" id="inputEmail" name="inputEmail">
                        </div>
                        <div class="form-group col-md-4 col-sm-4">
                            <label for="inputSubject">Тема <span>*</span></label>
                            <input type="text" required class="form-control" id="inputSubject" name="inputSubject">
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <textarea required placeholder="Введите сюда ваше сообщение" class="messageArea"
                                      id="messageArea" name="messageArea"></textarea>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-signup send">Отправить</button>
                            <label id="size_inf_4" class="afterSentMessage">Ваше сообщение успешно отравлено!</label>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 col-sm-12 square widgets">
                    <div id="vk_groups"></div>
                </div>
            </div>
        </section>
    </div>
    <!-- Contact Section End -->

    <!-- Page Footer-->
    <footer class="page-footer row">
        <div class="col-md-6">
            Copyright © <?php echo date( 'Y' ); ?> Сохраним лесопарк Самары. Все права защищены.
        </div>
        <div class="col-md-6 company-footer">
            <p class="company-name">Разработка и создание сайта -
                <a class="full-comp-name" target="_blank" href="http://web-progmo.tk/">
                    <label class="comp-name">«Progress Motion»</label></a>
            </p>
        </div>
    </footer>
    <!-- Page Footer End -->

</div>
<div class="col-xs-12 col-md-1"></div>
</body>
<script>
    jQuery(function ($) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 3) {
                $('#navigation-menu').addClass('navbar-fixed-top');
            }
            else if ($(this).scrollTop() < 3) {
                $('#navigation-menu').removeClass('navbar-fixed-top');
            }
        });
    });


    var flag = 0;
    $('.card').click(function () {
        if (flag == 0) {
            $(this).find(".title-card").css("display", "none");
            $(this).find(".front").css("background-color", "rgba(47, 196, 198, 0.75)");
            $(this).find(".class-text").css('display', 'block');
            flag = 1;
        }
        else {
            $(this).find(".class-text").css('display', 'none');
            $(this).find(".front").css("background-color", "#c7cd6a");
            $(this).find(".title-card").css("display", "block");
            flag = 0;
        }
    });

    /* Contact Form */
    $(document).ready(function () {

        $('#feedbackForm').submit(function () {

            $.ajax({
                type: "POST",
                url: "contact-form-action.php",
                data: "inputName=" + $("inputName").val() + "&inputEmail=" + $("#inputEmail").val() + "&inputSubject=" + $("#inputSubject").val() + "&messageArea=" + $("#messageArea").val(),
                success: function (html) {
                    $("label.afterSentMessage").css('display', 'block');
                }
            });
            $('form').trigger('reset');
            return false;
        });

    });
    /*---------*/
</script>
</html>