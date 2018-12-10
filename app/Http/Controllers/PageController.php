<?php

namespace App\Http\Controllers;

use App\Block;
use App\Message;
use App\Page;
use Illuminate\Http\Request;


class PageController extends Controller
{

    public function index()
    {
        $this->data['blocks'] = Block::where('page', 'home')->get();
        return  view('pages.main-page', $this->data);
    }

    public function blog()
    {
        return view('pages.blog.all');
    }

    public function forms(Request $request)
    {
        $message = new Message;
        $message->name = $this->secure($request->name);
        $message->phone = $this->secure($request->phone);
        $message->body = $this->secure($request->message);
        $message->save();
        $data = $this->data;
        $data['page'] = $this->create_page(
            "Форма обратной связи",
            "Спасибо! Мы с вами свяжемся в ближайшее время"
        );

        return view('pages.page', $data);
    }

    public function order(Request $request)
    {

        $message = new Message;
        $message->name = $this->secure($request->name);
        $message->email = $this->secure($request->emails);
        $message->body = "===ORDER==== " . $this->secure($request->message);
        $message->save();
        $data = $this->data;
        $data['page'] = $this->create_page(
            "Форма обратной связи",
            "<h2>Спасибо {$message->name}!</h2><br> Мы с вами свяжемся в ближайшее время"
        );

        return view('pages.page', $data);
    }

    //get custom page
    public function page($alias)
    {
        $alias = $this->secure($alias);
        if( $this->data['page'] = Page::where('slug', $alias)->first() ){
            return view('pages.page', $this->data);
        }
        abort(404);
    }




}
