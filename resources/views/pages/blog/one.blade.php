@extends('layout.main')

@section('title'){{$post->title}} | {{setting('site.title') }}@endsection
@section('meta_d'){{$post->meta_description or $post->title}} @endsection
@section('meta_k'){{$page->meta_keywords or ''}}@endsection

@section('content')

    <section id="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8">


                    <div class="posts-section">


                                <article class="post-entry">


                                    <div class="post-media" style="max-width:823px; max-height:323px; overflow: hidden; margin:0 auto;">
                                       @if($post->image != null) <img class="responsive" src="/storage/{{$post->image}}" alt="post thumb">@endif
                                    </div>

                                    <div class="post-excerpt">
                                        <h1>{{$post->title}}</h1>
                                        <div class="post-meta">
                                            <span>{{$post->created_at->format('d . m . Y')}}</span> {{trans('site.at')}}
                                            <span>{{$post->created_at->format('H:i')}}</span>
                                        </div>
                                        <p>{!! $post->body !!}</p>
                                        <pre class="prettyprint">
function my_php_demo_snippet(){
    var $test = 'Hello!';
    echo $test;

}
</pre>


                                        <ul class="post-share text-right">
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        </ul>
                                    </div>


                                </article>

                        <!-- NEXT -->
                        <nav class="next-prev-post clearfix">

                            <a href="/{{$post->prev->ParentCat->getParent->slug}}/{{$post->prev->ParentCat->slug}}/{{$post->prev->slug}}" class="pull-left"><< {{$post->prev->title}}</a>
                            <a href="/{{$post->next->ParentCat->getParent->slug}}/{{$post->next->ParentCat->slug}}/{{$post->next->slug}}" class="pull-right">{{$post->next->title}} >></a>
                        </nav>



                        <!-- COMMENTS -->

                        <div class="post_comment_area style1">
                            <h2>{{ count($comments) }} Коментарии</h2>



                            <div class="single_comment">


                                @foreach($comments as $comment)
                                <div class="comment">
                                    <div class="coment_text">
                                        <div class="author-meta">
                                            <a href="#" class="author_picture">
                                                <img alt="" src="images/blog/client4.png">
                                            </a>
                                            <div>
                                                <h2><a href="#">{{$comment->username}}</a></h2>
                                                <span>{{$comment->created_at->format('d-m-Y H:i') }}</span><a class="fa  fa-reply" href="#"></a>
                                            </div>
                                        </div>
                                        <div class="author-replay">
                                            <p>
                                                {{$comment->body}}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                @endforeach





                                </div>
                            </div>


                            @include('parts.comment-box')



                    </div>
                </div> <!-- end .col-xs-12 col-md-8 -->

    @include('parts.right-sidebar')



@endsection