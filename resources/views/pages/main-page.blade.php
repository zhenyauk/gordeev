@extends('layout.main')

@section('title')Создание удобных сайтов | {{setting('site.title') }}@endsection
@section('meta_d')Создание удобных сайтов, интернет магазинов на Laravel и Drupal. Наши сайты реально приносят доходы, закажи продающий сайт уже сегодня! @endsection
@section('meta_k')Создание сайтов, создание интернет магазинов, сайты под ключ, Разработка лэндингов, Студия Гордеева@endsection

@section('content')

    <section>
        <div class="container" style="margin-top: 20px;">
            {!! \App\Helpers\_Block::get('main-page-row', $lang)  !!}
        </div>
    </section>

    <section class="parallax parallax16" style="display: none;">
        <div class="overlay"></div>
        <div class="container">
            <div class="relative text-center white">
                <h3 class="margin_bottom20">ПРОДАЮЩИЙ САЙТ - это сайт, созданный</h3>
                <h2 class="margin_bottom20"> с УПОРОМ НА ПРОДАЖИ </h2>
                <h3 class="margin_bottom40">а не просто что бы быть</h3>
                <a href="#" class="btn btn-blue"><i class="fa fa-phone"></i> Бесплатная консультация</a>
            </div>
        </div>
    </section>



    <section style="display: none">
        <div class="container">
            <div class="row">
                <header class="col-lg-12 section-head text-center item_top">
                    <h2>Примеры работ</h2>

                </header>

                <div class="col-sm-6 col-md-4 text-center">
                    <div class="promotion-item">
                        <figure class="promo-thumb">
                            <img src="assets/img/travel/destination1.jpg" alt="">

                            <div class="overlay"></div>
                            <div class="vertical-middle">
                                <div class="vertical-inner white">
                                    <a href="#" class="btn btn-border">Посмотреть</a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 text-center">
                    <div class="promotion-item">
                        <figure class="promo-thumb">
                            <img src="assets/img/travel/destination1.jpg" alt="">

                            <div class="overlay"></div>
                            <div class="vertical-middle">
                                <div class="vertical-inner white">
                                    <a href="#" class="btn btn-border">Посмотреть</a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 text-center">
                    <div class="promotion-item">
                        <figure class="promo-thumb">
                            <img src="assets/img/travel/destination2.jpg" alt="">

                            <div class="overlay"></div>
                            <div class="vertical-middle">
                                <div class="vertical-inner white">

                                    <a href="#" class="btn btn-border">Посмотреть</a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>


                <div class="col-md-12"><a href="/portfolio">Больше работ >>></a></div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><br><br>
                    <hr></div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row">


            <div class="col-xs-12 col-sm-5 col-md-5 item_left">
                <h3 class="subtitle">Получить консультацию</h3>
                <div class="row">
                    <form action="/form" method="post" id="contact-form" class="contact-form">
                        {{csrf_field()}}
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="Ваше имя" required="" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" placeholder="почта или номер телефона" class="form-control">
                        </div>

                        <div class="col-md-12">
                            <textarea name="message" class="form-control" placeholder="Вопрос"></textarea>
                            <input type="submit" value="Отправить" class="message-sub pull-right btn btn-blue">
                        </div>
                    </form>
                </div>
                <div id="success">
                    <p>Your message was sent succssfully! I will be in touch as soon as I can.</p>
                </div>
                <div id="error">
                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                </div>



            </div>


            <div class="col-md-1"></div>
            <div class="col-md-6">
                <ul style="margin-top:40px;" class="questions">
                    <h3 style="margin-bottom: 20px;">Конечно же вы спросите...</h3>
                    <li><a href="javascript:">Сколько по времени вы будете делать мой сайт?</a>
                        <ul class="subul">
                            <li>От двух недель до одного месяца. Каждый проект обсуждается отдельно.  </li>
                        </ul>
                    </li>

                    <li><a href="javascript:">Какой стек технологий вы используете (На чем делаете сайт?)</a>
                        <ul class="subul">
                            <li>Делаем на Laravel или Drupal. Иногда на Wordpress.  Никаких Joomla! и Opencart-ов. Стек технологий: Php, Ajax, jQuery, Bootstrap. Иногда Ruby on Rails</li>
                        </ul>
                    </li>
                    <li><a href="javascript:">Скидки будут? </a>
                        <ul class="subul">
                            <li>Да будут, если вы сюда дочитали то точно будут</li>
                        </ul>
                    </li>
                    <li><a href="javascript:">Как оплачивать, можно по частям???</a>
                        <ul class="subul">
                            <li>Оплачивать любым удобным для вас способом. 25% от всей суммы в начале, затем 25% когда сделали и утвердили дизайн.  После сдачи проекта оставшиеся 50%</li>
                        </ul>
                    </li>
                    <li><a href="javascript:">Этапы разработки сайта</a>
                        <ul class="subul">
                            <li>Изучение товара и всех требований к сайту а также анализ конкурентов. Составление Техзадания и поискового ядра сайта.  Дальше начинаем с дизайна,
                                потом верстка и потом эта... программирование, поиск багов, тесты там всякие,
                                опять поиск багов, Паралельно пишуться статьи на сайт и идет наполнение сайта.
                                Так же учим вас работать с сайтом</li>
                        </ul>
                    </li>
                    <li><a href="javascript:">У меня уже есть сайт, зачем что то менять в жизни?</a>
                        <ul class="subul">
                            <li>Ну не нужен так не нужен... Подумаешь кому нужен классный, безглючный сайт,
                                который приносит клиентов, меньше жрет денег на рекламу, активно использует воронку продаж,
                                а не просто где то там висит в интернете </li>
                        </ul>
                    </li>
                    <li><a href="javascript:">Как вам погодка?</a>
                        <ul class="subul">
                            <li>Ну хорошо уже ну все</li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>


        <div class="row" style="margin-top:20px;"></div>

    </div>
@endsection