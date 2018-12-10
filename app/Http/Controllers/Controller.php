<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Categorie;
use App\Page;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Session;
use LaravelLocalization;
use Illuminate\Support\Facades\Auth;
use App\Post;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $data = [];

    public function __construct()
    {

        $this->data['lang'] = $this->lang();
        //Получаем префикс
        $this->data['pref'] = $this->pref( $this->data['lang'] );
        $this->siteBuild();
    }

    public function secure($name)
    {
        $name = strip_tags($name);
        $name = htmlentities($name, ENT_QUOTES, "UTF-8");
        $name = htmlspecialchars($name, ENT_QUOTES);
        return $name;
    }


    public function siteBuild()
    {
        //$this->data['left-menu'] = $this->getMenu();
        $this->data['sitename'] = setting('site.title');
        $this->data['lPosts'] = Post::where('lang', $this->lang())->latest('created_at')->limit(6)->get();
        $this->data['top_menu'] = Categorie::where('parent_id', null)->limit(4)->get();



        $this->data['error'] = '';

        if( Auth::check() ){
            $this->data['current_user_email'] = Auth::user()->email;
            $this->data['current_user_name'] = Auth::user()->name;
        }

    }




    //Генерирует Title, meta_k, meta_d
    public function Seo( $obj )
    {
        $title = $this->data['title_pref'];
        $description = $this->data['description_pref'];

        $this->data['sitename'] = setting('site.title') . " - " . $obj->$title;
        $this->data['title'] = trim($obj->$title);
        $this->data['meta_d'] = htmlspecialchars(trim($obj->$description));
        $this->data['meta_k'] = htmlspecialchars(trim($obj->$title));
    }

    public function create_page($title, $body ='')
    {
        $page = new Page;
        $page->title = $title;
        $page->body = $body;
        //$data = $this->data;
        return $page;
    }


    //make slug from title
    public function makeSlug($string)
    {
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
    }

    public function getMenu()
    {

        $top_menu = Categorie::where('parent_id', null)->get();
        $this->data['top_menu'] = $top_menu;

    }

    public function is_user( $table )
    {
        $uid = Auth::id();
        if( $table->user_id === $uid ){
            return true;
        }else{
            return false;
        }
    }

    public function User()
    {
        if(Auth::check()){
            $this->data['user_id'] = Auth::id();

        }else{
            return false;
        }
    }


    public function lang()
    {
        return LaravelLocalization::getCurrentLocale();
    }


    public function pref($pref)
    {
        if($pref == 'ru'){
            $pref = '';
        }elseif($pref == 'uk'){
            $pref = '_uk';
        }else{
            $pref = '_en';
        }
        $this->data['title_pref'] = 'title' . $pref;
        $this->data['description_pref'] = 'description' . $pref;
        return $pref;
    }

    /**
     * static functions
     */

    public static function top_menu()
    {
        return Categorie::where('parent_id', null)->limit(4)->get();
    }

    public static function articles()
    {
        return  Post::where('id' , ">", 0)->latest('created_at')->limit(30)->get();
    }


}
