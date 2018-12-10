@extends('layout.main')

@section('content')
    @php
        $top_menu = \App\Http\Controllers\Controller::top_menu();
        $articles = \App\Http\Controllers\Controller::articles();
    @endphp

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <a href="/"><img src="/images/404.png" alt="" style="margin:50px; auto" ></a>

                <h1 class="text-center" style="margin: 40px; auto">Страница еще не была создана либо уже была удалена</h1>
                <p class="text-center">404</p>
            </div>

        </div>
    </div>

@endsection