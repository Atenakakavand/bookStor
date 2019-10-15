<?php

namespace App\Http\Controllers\site;

use App\Category;
use App\Comment;
use DemeterChain\C;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\book;
use DB;
use App\Libs\pay;

class SiteController extends Controller
{
    public function index()
    {
        $menu=Category::with('getChild')->where('parent_id','0')->get();
        $lastBook = book::latest()->orderBy('id','DESC')->limit(4)->get();
        return view('site.index',compact('menu','lastBook'));
    }

    public function menu($menu1)
    {
        $menu2 = Category::find($menu1);
        $menu = Category::with('getChild')->where('parent_id',0)->get();
        $cat = Category::where('id',$menu1)->first();
        if($cat){
        $book = DB::table('category_books')->where('category_id',$cat->id)->orderBy('book_id','desc')->get();

        $array = array();
        foreach ($book as $key => $value){
            $array[$key] = $value -> book_id;
        }
        $books = book::orderBy('id','ASC')->whereIn('id',$array)->get();
        return view('site.menu',compact('books','menu','menu1','menu2'));
    }
        else {
        return abort('404');
        }
    }

    public function submenu($menu1,$submenu)
    {
        $menu2 = Category::find($menu1);
        $menu = Category::with('getChild')->where('parent_id', 0)->get();
        $cat = Category::where('id', $menu1)->first();
        if ($cat) {
            $cat1 = Category::where('id', $submenu)->first(); //fine($submenu);
            if ($cat1 && $cat1->parent_id == $cat ->id)
            {
                $category = Category::where('parent_id', 0)->get();
                $book = DB::teble('category_books')->where('category_id', $cat->id)->orderBy('book_id', 'desc')->get();
            }
        }

        $array = array();
        foreach ($book as $key => $value) {
            $array[$key] = $value->book_id;
        }
        $books = DB::table('books')->orderBy('id', 'ASC')->whereIn('id', $array)->get();
        return view('site.submenu', compact('books', 'menu', 'menu2','submenu','category'));
    }


    public function single($slug)
    {
        $menu = Category::with('getChild')->where('parent_id',0)->get();
        $comments = DB::table('comments')->where('accept','=','1')->get();
        $book = book::whereSlug($slug)->get();
        return view('site.single',compact('book','menu','comments'));
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

   /* public function pay()
    {
        $api= 'test';
        $amount = 1000;
        $redirect = "http://localhost:8000/pay";
        $result = pay::send($api,$amount,$redirect);
        $result = json_decode($result);
        if($result->status) {
            $go = "https://pay.ir/pg/$result->token";
            return $redirect($go);
        } else {
            echo $result->errorMessage;
        }
    }*/

    /*public function verify()
    {
        $api='test';
        $token = $_GET['token'];
        $result = json_decode(verify($api,$token));
        if(isset($result->status)){
            if($result->status == 1){
                echo "<h1>تراکنش با موفقیت انجام شد</h1>";
            } else {
                echo "<h1>تراکنش با خطا مواجه شد</h1>";
            }
        } else {
            if($_GET['status'] == 0){
                echo "<h1>تراکنش با خطا مواجه شد</h1>";
            }
        }
    }*/

    public function about()
    {
        return view('site.about');
     }

    public function imgOfLib()
    {
        return view('site.imgOfLib');
    }
}
