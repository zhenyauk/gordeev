
<div class="comment_form_box">
    <form class="/" role="form" method="post" action="/addcomment">
        <div class="row">
            {{csrf_field()}}
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <input type="hidden" name="answer" value="0" class="answer">
            @if($user = \Illuminate\Support\Facades\Auth::user())

            @endif
            <input type="hidden" name="user_id" value="{{ $user->id or 0 }}" class="answer">

            <div errortext="This field is required" class="col-xs-12 col-sm-6 col-md-4 col-lg-6 error">
                <input type="text" required="" class="form-control" id="name" placeholder="{{$current_user_name or trans('site.name')}}" name="name">
            </div>
            <div errortext="This field is required" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <input type="email" required="" class="form-control" id="email" placeholder="{{$current_user_email or 'e-mail'}}" name="email">
            </div>

            <div errortext="This field is required" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <textarea required="" class="form-control" id="message" placeholder="Type your Message" rows="4" name="message"></textarea>
            </div>

            <div errortext="This field is required" class="col-xs-12 col-sm-4 col-md-4 col-lg-4 " style="margin-bottom:10px;">

                <input type="text" class="form-control" id="website" placeholder="2 + 3 = " name="capt" style="font-size: 16px;">
            </div><br>

        </div>
        <div class="row">
            <div class="col-md-3">
                <button class="comment-submit btn btn-blue" type="submit">Отправить</button>
            </div>
        </div>

    </form>
</div>
<br>
