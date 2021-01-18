<?php
namespace App\Http\Controllers\user;
use App\sale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\orderRequest;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\User;
use App\Category;
use Session;

class userController extends Controller
{
    public function index()
    {
    	$res = Product::all();
        $cat = Category::all();
    	return view('store.index')
            ->with('products', $res)
            ->with("cat", $cat)
            ->with('index', 1);
    }

    public function view($id)
    {

        $res = Product::find($id);
        $res1 = Product::all();
        $cat=Category::find($res);
        $colorList = explode(',',$res->colors);
    	$cat = Category::all();
        return view('store.product')
            ->with('product', $res)
            ->with('products', $res1)
            ->with('cat', $cat)
            ->with('colors',$colorList);
    }

    public function search(Request $r){
        if($r->query("c")){
            $category = $r->query("c");
        }
        if($r->query("n")){
            $name = $r->query("n");
        }
        $res = Product::all();
        $cat = Category::all();

        if(isset($category) && isset($name)){
            $name = strtolower($name);
            $sRes = DB::select( DB::raw("SELECT * FROM `products` WHERE lower(name) like '%$name%' and category_id = $category" ) );
        }
        else if(isset($name)){
            $name = strtolower($name);
            $sRes = DB::select( DB::raw("SELECT * FROM `products` WHERE lower(name) like '%$name%'" ) );
        }
        else if(isset($category)){
            $sRes = DB::table('products')
            ->where("category_id" , $category)
            ->get();
        }
        else{
            $sRes = DB::table('products')
            ->get();
        }

        if(!isset($category)) {
            $category = -1;
        }
    	return view('store.search')
            ->with('products', $sRes)
            ->with("cat", $cat)
            ->with("a", $category);
    }

    public function post($id,orderRequest $r)
    {
        if(!(Session::has('cart')))
        {
            Session::put('orderCounter',1);
            $c=$id.":".$r->quantity.":".$r->color.":".Session::get('orderCounter');
            Session::put('cart',$c);
        }
        else
        {
            Session::put('orderCounter',Session::get('orderCounter')+1);
            $cd=$id.":".$r->quantity.":".$r->color.":".Session::get('orderCounter');
            $total=Session::get('cart').",".$cd;
            Session::put('cart',$total);
        }
        return redirect()->route('user.home');
    }

    public function history(Request $r)
    {
        $res1= sale::where('user_id', session('user')->id)->get();
        if(!$res1)
        {
            return view('user.orderHistory')->with('all',[])
                ->with('products',[])
                ->with('sale',[]);
        }

        $cart=[];
        $product=[];
        $id=[];
        foreach($res1 as $r )
        {
            $totalCart = explode(',',$r->product_id);
            foreach($totalCart as $c)
            {
                $cart[]=array_prepend(explode(':',$c), $r->id);
                $a=explode(':',$c);
                $res = Product::find($a[0]);
                $product[]=$res;
            }
        }
        $res = Product::all();
        $cat = Category::all();

        return view('store.history')
            ->with('products', $res)
            ->with("cat", $cat)
            ->with('all',$cart)
            ->with('prods',$product)
            ->with('sale',$res1);
    }

}
