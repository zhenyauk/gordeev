@php  @endphp
<aside class="sidebar">
    <h4 class="widget-title">{{trans('site.cats')}}</h4>
    <ul>

        @foreach($cats as $cat)

            @if($cat->parent_id == 0)
                <li><a href="/{{$cat->slug}}"><i class="fa fa-angle-right"></i>{{$cat->name}}</a>
                    <ul>
                        @foreach($cats as $child)
                            @if($cat->id == $child->parent_id)
                                <li class="subcat"><a href="/{{$cat->slug}}/{{$child->slug}}" >{{$child->name}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            @endif

        @endforeach
    </ul>
</aside>