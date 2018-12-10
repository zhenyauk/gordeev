@extends('layout.main')
@section('title'){{$page->title}} | {{setting('site.title') }}@endsection
@section('meta_d'){{ $meta_description or '' }}@endsection
@section('meta_k'){{ $meta_keywords or ''  }}@endsection

@section('content')
    <div class="container" style="margin-top: 20px;">
    <div class="row" style="margin:20px auto">
        <div class="col-md-12 page">
            <h1 class="text-center" style="margin:40px; 0">{{$page->title}}</h1>
            {!! $page->body !!}

        </div>
    </div>
    </div>
@endsection