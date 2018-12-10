    <div class="col-xs-12 col-md-4">
        <div class="right-sidebar">

            <aside class="sidebar">
                <form action="/blog/search" method="post" class="blog-search">
                    {{csrf_field()}}
                    <input type="text" name="search" class="search-input" placeholder="{{trans('site.search')}}">
                    <button type="submit" class="search-sub">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </aside>
            <!-- end .sidebar -->

        @include('parts.category')
        <!-- end .sidebar -->

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
                <h4 class="widget-title">{{trans('site.popular')}}</h4>
                @isset($popular)
                        @foreach($popular as $post)
                        <div class="pp-item clearfix">
                            <a href="/{{$post->ParentCat->getParent->slug}}/{{$post->ParentCat->slug}}/{{$post->slug}}">
                                <img src="/storage/{{$post->image}}" alt="" style="padding-top:10px;">
                            </a>
                            <div class="pp-media">
                                <span>{{$post->created_at->format('M, d, Y')}}</span>
                                <h4><a href="/{{$post->ParentCat->getParent->slug}}/{{$post->ParentCat->slug}}/{{$post->slug}}">{{$post->title}}</a></h4>
                            </div>
                        </div>
                    @endforeach
                @endisset

            </aside>
            <!-- end .sidebar -->



            <aside class="sidebar">
                <h4 class="widget-title">{{trans('site.tags')}}</h4>
                <div class="tagcloud">
                    @foreach($tags as $cat)
                        <a href="/tags/{{$cat->alias}}">{{ $cat->title}}</a>
                    @endforeach

                </div>
            </aside>

            <aside class="sidebar">
                <h4 class="widget-title">Последние комментарии</h4>
                @foreach( _Functions::getLastComments()  as $comment)
                <div class="pp-item clearfix">
                    <div class="pp-media">
                        <span>{{$comment->created_at->format('d-m-Y H:i')}}</span>
                        <h4><a href="{{ _Functions::getPath($comment->article_id) }}">{!!  strip_tags( str_limit($comment->body, 200) ) !!}</a></h4>
                    </div>
                </div>
                @endforeach


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

