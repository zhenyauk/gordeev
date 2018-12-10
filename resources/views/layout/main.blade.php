@section('title'){{ $sitename or setting('site.title') }}@endsection
@section('meta_d'){{ $meta_d or '' }}@endsection
@section('meta_k'){{ $meta_k or ''  }}@endsection


@include('parts.header')

@include('parts.top-menu')

@if($_SERVER['REQUEST_URI'] == '/' or $_SERVER['REQUEST_URI'] == '/en' or $_SERVER['REQUEST_URI'] == '/uk' )
    @include('parts.baner')
@endif

<div id="content">
@section('content')

@show
</div>



@include('parts.footer')
@include('parts.footer-scripts')
