@extends('layout.cabinet')
@section('title'){{ $sitename or setting('site.title') }}@endsection
@section('meta_d'){{ $meta_d or '' }}@endsection
@section('meta_k'){{ $meta_k or ''  }}@endsection


@section('content')

    <section id="blog-section">
        <div class="container">
            <div class="row">
                <h1 class="text-center" style="margin-bottom: 10px;">Блог</h1>
                <div class="col-xs-12 col-md-8">
                    <!--   Сортировать по
                      <select name="" id="">
                          <option value="">Дате</option>
                          <option value="">Популярности</option>
                          <option value="">Количеству комментариев</option>
                      </select>
                      -->




                    <div class="posts-section">
                        <article class="post-entry">


                            <div class="post-excerpt">
                                <h2><a href="/drupal/magazin-na-drupal-commerce/drupal-chto-eto">Drupal что это</a></h2>
                                <div class="post-meta">
                                    <span>04 . 05 . 2018</span>
                                    <span>17:38</span>
                                </div>
                                <p></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dicta minus molestiae vel beatae natus eveniet ratione temporibus aperiam harum alias officiis assumenda officia quibusdam deleniti eos cupiditate dolore doloribus!</p>
                                <p>Ad dolore dignissimos asperiores dicta facere optio quod commodi nam tempore recusandae. Rerum sed nulla eum vero expedita ex delectus voluptates rem at neque quos facere sequi unde optio aliquam!</p>
                                <p>Tenetur quod quidem in voluptatem corporis dolorum dicta sit pariatur porro quaerat autem ipsam odit quam beatae tempora quibusdam illum! Modi velit odio nam nulla unde amet odit pariatur at!</p>
                                <p>Consequatur rerum amet fuga expedita sunt et tempora saepe? Iusto nihil explicabo perferendis quos provident delectus ducimus necessitatibus reiciendis optio tempora unde earum doloremque commodi laudantium ad nulla vel odio?</p><p></p>
                                <div class="excerpt-btn">
                                    <a href="/drupal/magazin-na-drupal-commerce/drupal-chto-eto">Подробнее</a>
                                </div>
                                <ul class="post-share text-right">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </article>
                        <article class="post-entry">


                            <div class="post-excerpt">
                                <h2><a href="/drupal/magazin-na-drupal-commerce/eshe-odna-stat-iya">Еще одна статьия</a></h2>
                                <div class="post-meta">
                                    <span>04 . 05 . 2018</span>
                                    <span>17:38</span>
                                </div>
                                <p></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dicta minus molestiae vel beatae natus eveniet ratione temporibus aperiam harum alias officiis assumenda officia quibusdam deleniti eos cupiditate dolore doloribus!</p>
                                <p>Ad dolore dignissimos asperiores dicta facere optio quod commodi nam tempore recusandae. Rerum sed nulla eum vero expedita ex delectus voluptates rem at neque quos facere sequi unde optio aliquam!</p>
                                <p>Tenetur quod quidem in voluptatem corporis dolorum dicta sit pariatur porro quaerat autem ipsam odit quam beatae tempora quibusdam illum! Modi velit odio nam nulla unde amet odit pariatur at!</p>
                                <p>Consequatur rerum amet fuga expedita sunt et tempora saepe? Iusto nihil explicabo perferendis quos provident delectus ducimus necessitatibus reiciendis optio tempora unde earum doloremque commodi laudantium ad nulla vel odio?</p><p></p>
                                <div class="excerpt-btn">
                                    <a href="/drupal/magazin-na-drupal-commerce/eshe-odna-stat-iya">Подробнее</a>
                                </div>
                                <ul class="post-share text-right">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </article>
                        <article class="post-entry">


                            <div class="post-excerpt">
                                <h2><a href="/other/other/kak-prodavat-cherez-internet-">Как продавать через интернет?</a></h2>
                                <div class="post-meta">
                                    <span>09 . 09 . 2018</span>
                                    <span>19:38</span>
                                </div>
                                <p></p><p>Уверен что лично вы и многие ваши друзья не раз заказывали товар через интернет. Это могла быть покупка товара на АлиЕкспес, Olx или любой другой интернет площадке. Каждый день тысячи людей в Украине делают покупки через интернет. А думали ли вы что эти люди - <strong>ваши потенциальные клиенты</strong>?&nbsp;</p>
                                <p>За последние несколько лет, бизнес вышел из обычных географических "рамок".&nbsp; Теперь не нужно расчитывать только на покупателей из своего города. Если у вас есть интернет магазин, и он хорошо продуман с точки зрения поисковых запросов, удобен, то вы можете предложить ваш товар или услугу огромной аудитории.&nbsp; &nbsp;</p>
                                <h2>Что дает интернет магазин?</h2>
                                <p>Создают интернет магазин для того, что бы увеличить доход. Тут, опять таки не может быть "розовых иллюзий" - что мол сделай магазин и от клиентов не будет отбоя. Как и открытие обычного магазина не гарантирует само по себе что он будет хорошо продавать.&nbsp;</p>
                                <p>Как же тогда получать прибыль? Есть основной, проверенный метод - это реклама. Например, человек платит за рекламу Google 1000 грн. Гугл ему за эту 1000 грн загоняет в магазин 100 целевых клиентов. Это именно целевая аудитория а не просто кто то с улицы. Важно использовать <strong>целевые запросы</strong>, например "купить матрас двухспальный", или "купить Samsung Note 9". Коротко говоря, правильная&nbsp; реклама, показывается только тем кто намерен купить конкретную вещь, а не всем подрят. Таким образом из 100 человек, которые посетили ваш сайт по рекламе, 15 человек сделали покупку.&nbsp; <strong>Чистая прибыль</strong> (с учетом всех затрат) с этих 15 продаж составляет, например 1500 грн. Тоесть&nbsp; мы потратили 1000 грн на рекламу а получили чистыми 1500 грн с продаж. Выгода очевидна. Представьте себе устройство, в которое вы "засовываете" 1000 грн а получаете 1500 грн. Даже если это будет 1001 грн - выгода все равно очевидна.</p>
                                <p>И тут важно насколько равильно сделан ваш интернет магазин. В одном случае он вам может принести прибыль 1001 грн с вложенных в рекламу 1000, а может дать вам 1500 грн с вложенных 1000 грн в рекламу. Получается, что через несколько месяцев или недель, магазин полностью себя окупает.&nbsp;</p>
                                <h2>Чего не дает интернет магазин</h2>
                                <p>Интернет магазин это лишь инструмент. Инструмент может быть удобным или не очень, надежным или глючным - но он лишь инструмент. Все зависит от того как им <strong>пользоватся</strong>. Нужно вкладывать в рекламу, товар должен быть интересен потребителям. Сам по себе интернет магазин, не будет продавать, так же как молоток не будет сам забивать гвозди. Мы обучаем наших клиентов работе с магазином и основным тонкостям интернет маркетинга.</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p><p></p>
                                <div class="excerpt-btn">
                                    <a href="/other/other/kak-prodavat-cherez-internet-">Подробнее</a>
                                </div>
                                <ul class="post-share text-right">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </article>

                        <!-- POTST -->

                    </div>
                </div> <!-- end .col-xs-12 col-md-8 -->

                <div class="col-xs-12 col-md-4">
                    <div class="right-sidebar">

                        <aside class="sidebar">
                            <form action="/blog/search" method="post" class="blog-search">
                                <input type="hidden" name="_token" value="Du9XnsuFd8A849KvZsgbSCDkT3Dl4lao0l6T2RnP">
                                <input type="text" name="search" class="search-input" placeholder="Поиск по сайту...">
                                <button type="submit" class="search-sub">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </aside>
                        <!-- end .sidebar -->

                        <aside class="sidebar">
                            <h4 class="widget-title">Категории</h4>
                            <ul>


                                <li><a href="/laravel"><i class="fa fa-angle-right"></i>Laravel</a>
                                    <ul>
                                        <li class="subcat"><a href="/laravel/voyager">Voyager</a></li>
                                    </ul>
                                </li>




                                <li><a href="/drupal"><i class="fa fa-angle-right"></i>Drupal</a>
                                    <ul>
                                        <li class="subcat"><a href="/drupal/magazin-na-drupal-commerce">Магазин на Drupal Commerce</a></li>
                                    </ul>
                                </li>




                                <li><a href="/symfony"><i class="fa fa-angle-right"></i>Symfony</a>
                                    <ul>
                                    </ul>
                                </li>


                                <li><a href="/zhiznennoe"><i class="fa fa-angle-right"></i>Жизненное</a>
                                    <ul>
                                    </ul>
                                </li>





                            </ul>
                        </aside>        <!-- end .sidebar -->

                        <!--
                         <aside class="sidebar">
                             <h4 class="widget-title">Поддержать автора</h4>
                             <div class="pp-item clearfix">

                                 <div class="pp-media">
                                     <span>WebMoney:</span>
                                     <span>YandexMoney:</span>

                                 </div>
                             </div>
                         </aside>
             -->
                        <aside class="sidebar">
                            <h4 class="widget-title">Популярное</h4>
                            <div class="pp-item clearfix">
                                <a href="/other/other/kak-prodavat-cherez-internet-">
                                    <img src="/storage/posts/September2018/JW9T5I28thH6992fbkNj.jpg" alt="" style="padding-top:10px;">
                                </a>
                                <div class="pp-media">
                                    <span>Sep, 09, 2018</span>
                                    <h4><a href="/other/other/kak-prodavat-cherez-internet-">Как продавать через интернет?</a></h4>
                                </div>
                            </div>
                            <div class="pp-item clearfix">
                                <a href="/drupal/magazin-na-drupal-commerce/eshe-odna-stat-iya">
                                    <img src="/storage/posts/May2018/1GY8iF5iMQbHRKVLvs5d.png" alt="" style="padding-top:10px;">
                                </a>
                                <div class="pp-media">
                                    <span>May, 04, 2018</span>
                                    <h4><a href="/drupal/magazin-na-drupal-commerce/eshe-odna-stat-iya">Еще одна статьия</a></h4>
                                </div>
                            </div>
                            <div class="pp-item clearfix">
                                <a href="/drupal/magazin-na-drupal-commerce/drupal-chto-eto">
                                    <img src="/storage/" alt="" style="padding-top:10px;">
                                </a>
                                <div class="pp-media">
                                    <span>May, 04, 2018</span>
                                    <h4><a href="/drupal/magazin-na-drupal-commerce/drupal-chto-eto">Drupal что это</a></h4>
                                </div>
                            </div>

                        </aside>
                        <!-- end .sidebar -->



                        <aside class="sidebar">
                            <h4 class="widget-title">Тэги</h4>
                            <div class="tagcloud">
                                <a href="/tags/laravel">Laravel</a>
                                <a href="/tags/voyager">Voyager</a>
                                <a href="/tags/drupal">Drupal</a>
                                <a href="/tags/drupal-commerce">Drupal Commerce</a>
                                <a href="/tags/drush">Drush</a>
                                <a href="/tags/php">Php</a>
                                <a href="/tags/wordpress">Wordpress</a>
                                <a href="/tags/servers">Servers</a>

                            </div>
                        </aside>

                        <aside class="sidebar">
                            <h4 class="widget-title">Последние комментарии</h4>
                            <div class="pp-item clearfix">
                                <div class="pp-media">
                                    <span>28-07-2018 15:11</span>
                                    <h4><a href="drupal-chto-eto">ЛДа ниче так</a></h4>
                                </div>
                            </div>
                            <div class="pp-item clearfix">
                                <div class="pp-media">
                                    <span>28-07-2018 15:12</span>
                                    <h4><a href="drupal-chto-eto">asdasd</a></h4>
                                </div>
                            </div>
                            <div class="pp-item clearfix">
                                <div class="pp-media">
                                    <span>08-09-2018 17:57</span>
                                    <h4><a href="drupal-chto-eto">sdfsdfsdf</a></h4>
                                </div>
                            </div>
                            <div class="pp-item clearfix">
                                <div class="pp-media">
                                    <span>08-09-2018 17:57</span>
                                    <h4><a href="drupal-chto-eto">asdasd</a></h4>
                                </div>
                            </div>


                        </aside>
                        <!-- end .sidebar -->

                        <!--
                        <aside class="sidebar">
                            <h4 class="widget-title">Flickr Widget</h4>
                            <ul class="flickr-widget clearfix"><li><a data-lightbox="flickr-feed" href="http://farm4.staticflickr.com/3647/3435384001_9ed9864bb4.jpg" title="DSC_0660"><img src="http://farm4.staticflickr.com/3647/3435384001_9ed9864bb4_m.jpg" alt="DSC_0660"></a></li><li><a data-lightbox="flickr-feed" href="http://farm4.staticflickr.com/3311/3436188742_caaa28c689.jpg" title="DSC_0698"><img src="http://farm4.staticflickr.com/3311/3436188742_caaa28c689_m.jpg" alt="DSC_0698"></a></li><li><a data-lightbox="flickr-feed" href="http://farm4.staticflickr.com/3371/3436188466_418a0d8a06.jpg" title="DSC_0668"><img src="http://farm4.staticflickr.com/3371/3436188466_418a0d8a06_m.jpg" alt="DSC_0668"></a></li><li><a data-lightbox="flickr-feed" href="http://farm4.staticflickr.com/3397/3436188128_5e503cefcd.jpg" title="DSC_0704"><img src="http://farm4.staticflickr.com/3397/3436188128_5e503cefcd_m.jpg" alt="DSC_0704"></a></li><li><a data-lightbox="flickr-feed" href="http://farm4.staticflickr.com/3300/3436187796_4d228a5bde.jpg" title="DSC_0699"><img src="http://farm4.staticflickr.com/3300/3436187796_4d228a5bde_m.jpg" alt="DSC_0699"></a></li><li><a data-lightbox="flickr-feed" href="http://farm4.staticflickr.com/3386/3435382439_68b5e3742b.jpg" title="DSC_0602"><img src="http://farm4.staticflickr.com/3386/3435382439_68b5e3742b_m.jpg" alt="DSC_0602"></a></li><li><a data-lightbox="flickr-feed" href="http://farm4.staticflickr.com/3657/3436187288_e84058f54b.jpg" title="DSC_0603"><img src="http://farm4.staticflickr.com/3657/3436187288_e84058f54b_m.jpg" alt="DSC_0603"></a></li><li><a data-lightbox="flickr-feed" href="http://farm4.staticflickr.com/3405/3436187010_c731dea9a3.jpg" title="DSC_0604"><img src="http://farm4.staticflickr.com/3405/3436187010_c731dea9a3_m.jpg" alt="DSC_0604"></a></li><li><a data-lightbox="flickr-feed" href="http://farm4.staticflickr.com/3403/3435381659_ea615ecf14.jpg" title="DSC_0607"><img src="http://farm4.staticflickr.com/3403/3435381659_ea615ecf14_m.jpg" alt="DSC_0607"></a></li></ul>
                        </aside>
                        <!-- end .sidebar -->

                    </div>
                </div> <!-- end .col-xs-12 col-md-4 -->

            </div>
        </div>


    </section>



@endsection