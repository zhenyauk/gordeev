<?php if (!isset($lang) or $lang == null) $lang = 'ru'?>
<div id="promoPopup3" class="promo-popup zoom-anim-dialog mfp-hide">

    <div class="promo-title">
        <h4>Заказ</h4>
    </div>
    <form action="/order" class="promo-form" method="post"  enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="input-field">
            <input type="text" class="form-control" name="name" placeholder="Имя">
        </div>
        <div class="input-field">
            <input type="text" class="form-control" name="emails" placeholder="Телефон или Email">
        </div>

        <div class="input-field">
            <div class="form-group">
                <label >Техническое задание (если есть)</label>
                <input type="file" class="form-control-file" >
            </div>
        </div>
        <div class="input-field">
            <textarea class="form-control" placeholder="Короткое описание"></textarea>
        </div>
        <div class="text-right">
            <input type="submit" value="Связь с менеджером" class="btn btn-blue" >
        </div>
        <div class="success">Your booking is successfull.</div>
        <div class="failed">Something is wrong, please try again.</div>
    </form>
</div>
<!--
footer widget
==================================== -->
<section class="footer-widget">
    <div class="container">
        <div class="row with-border">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                {!! \App\Helpers\_Block::get('footer-about', $lang)  !!}
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                {!! \App\Helpers\_Block::get('footer-contacts', $lang)  !!}
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="footer-item recent-posts">
                    <h4>{{trans('site.last')}}</h4>
                    <ul>
                        @isset($lPosts)
                            @foreach($lPosts as $item)
                                <li><a href="{{$item->ParentCat->getParent->slug or ""}}/{{$item->ParentCat->slug or ""}}/{{$item->slug or ""}}">{{$item->title or ""}}</a></li>
                            @endforeach
                        @endisset

                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="footer-item recent-posts">
                    <h4>Какие то животные</h4>

                    <ul class="flickr-widget clearfix"></ul>
                </div>
            </div>
        </div>
    </div>
</section>
