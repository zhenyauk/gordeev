@extends('layout.main')

@section('title')Видеоуроки по созданию сайтов на Laravel | {{setting('site.title') }}@endsection
@section('meta_d')Вам интересно, как создание сайт на Laravel? Тогда вы по адресу. Создание интернет магазинов на Laravel, Drupal. Как создать магазин самому. Уроки Laravel @endsection
@section('meta_k')Laravel, Drupal 7, Drupal 8, Php, jQuery, Уроки, Видеоуроки@endsection


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
                        @if(isset($posts))
                            @foreach($posts as $post)
                                <article class="post-entry">

                                  @isset($postsss)
                                    <div class="post-media">
                                        <a href="/{{$post->ParentCat->getParent->slug}}/{{$post->ParentCat->slug}}/{{$post->slug}}"><img src="/storage/{{$post->image}}" alt="post thumb" class="img-responsive"></a>
                                    </div>
                                  @endisset

                                    <div class="post-excerpt">
                                        <h2><a href="/{{$post->ParentCat->getParent->slug}}/{{$post->ParentCat->slug}}/{{$post->slug}}">{{$post->title}}</a></h2>
                                        <div class="post-meta">
                                            <span>{{$post->created_at->format('d . m . Y')}}</span> {{trans('site.at')}}
                                            <span>{{$post->created_at->format('H:i')}}</span>
                                        </div>
                                        <p>{!! $post->body !!}</p>
                                        <div class="excerpt-btn">
                                            <a href="/{{$post->ParentCat->getParent->slug}}/{{$post->ParentCat->slug}}/{{$post->slug}}">{{trans('site.read')}}</a>
                                        </div>
                                        <ul class="post-share text-right">
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </article>
                            @endforeach

                        @else



                        @if(isset($category))
                            @foreach($category->getChilds as $childs)
                                @foreach($childs->getBlogs as $post)
                                    @if($post->lang == $lang)

                                    <article class="post-entry">

                                        <div class="post-excerpt">
                                            <h2><a href="/{{$post->ParentCat->getParent->slug}}/{{$post->ParentCat->slug}}/{{$post->slug}}">{{$post->title}}</a></h2>
                                            <div class="post-meta">
                                                <span>{{$post->created_at->format('d . m . Y')}}</span> {{trans('site.at')}}
                                                <span>{{$post->created_at->format('H:i')}}</span>
                                            </div>
                                            {!! $post->body !!}
                                            <div class="excerpt-btn">
                                                <a href="/{{$post->ParentCat->getParent->slug}}/{{$post->ParentCat->slug}}/{{$post->slug}}">{{trans('site.read')}}</a>
                                            </div>
                                            <ul class="post-share text-right">
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </article>
                                    <!-- end .post-entry -->
                                    @endif
                                @endforeach
                            @endforeach

                             <!-- category -->
                            @foreach($category->getBlogs as $post)
                                @if($post->lang == $lang)
                                    <article class="post-entry">


                                        <div class="post-excerpt">
                                            <h2><a href="#">{{$post->title}}</a></h2>
                                            <div class="post-meta">
                                                <span>January 19, 2015</span> at
                                                <span>1.:01 pm</span> by
                                                <span><a href="#">admin</a></span>
                                            </div>
                                            <p>{!! $post->body !!}</p>
                                            <div class="excerpt-btn">
                                                <a href="#">{{trans('site.read')}}</a>
                                            </div>
                                            <ul class="post-share text-right">
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </article>
                                    <!-- end .post-entry -->
                                    @endif

                            @endforeach
                        @endif

                        @endif <!-- POTST -->
                    @isset($posts)    {{$posts->links()}} @endisset

                    </div>
                </div> <!-- end .col-xs-12 col-md-8 -->

    @include('parts.right-sidebar')



@endsection