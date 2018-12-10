<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Comment;
use App\Page;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class BlogController extends Controller
{
    //@blog getAll
    public function all()
    {
        $this->data['title'] = "Блог";
        $this->theme();
        //Пагинация страниц
        $this->data['posts'] = Post::where('lang', $this->data['lang'])->paginate(10);

        return view('pages.blog.all', $this->data);
    }



    //Первая категория
    public function getCat($cat)
    {
        //Если есть категория
        $cat = $this->secure($cat);
        $page = $cat;
        if ( $cat = Categorie::where('slug' , $this->secure($cat) )->first() ){
            //Данные нужные для отображения страницы
            $this->theme();

            $this->data['category'] = $cat;
            $this->Seo( $cat );
            return view('pages.blog.all', $this->data);
        }

            //Если нет категории
            //Если редиректит постоянно -
            //значит ничего не возвращяеш в if()

        if( $this->data['page'] = Page::where('slug', $page)->first() ){
            return view('pages.page', $this->data);
        }

        abort(404);
    }



    public function getCatWithSubcats($cat, $subcat)
    {
        //Проверяем главную категорию
        if ( ( $this->data['parent_cat'] = Categorie::where('slug' , $this->secure($cat))->first() ) == false  )
            return redirect('/404');

            //Если есть категория
        if ( $cat = Categorie::where('slug' , $this->secure($subcat) )->firstOrFail() ){
            //Данные нужные для отображения страницы
            $this->theme();

            $this->data['category'] = $cat;
            $this->Seo( $cat );

            return view('pages.blog.all', $this->data);
        }

        //Если нет категории
        //Если редиректит постоянно -
        //значит ничего не возвращяеш в if()
        return redirect('/404');

    }

    public function getArticle($cat, $subcat, $alias)
    {
        $blog = Post::where('slug', $this->secure($alias))->first();
        $blog->addView();
        $this->theme();
        $this->data['post'] = $blog;
        $this->data['comments'] = Comment::where('article_id' , $blog->id)->get();

        return view('pages.blog.one', $this->data);
    }

    public function theme()
    {
        $this->data['cats'] = Categorie::all();
        $this->data['tags'] = Tag::all();
        $this->data['popular'] =  Post::where('lang', $this->data['lang'])
                                 ->get()
                                 ->sortBy('views')
                                 ->take(4);

        return true;
    }

    public function search(Request $request)
    {
       if($search = $request->search){
           $posts = Post::search($search)->paginate();

            $this->theme();
            $this->data['posts'] = $posts;
            return view('pages.blog.all',$this->data);
       }

    }




}
