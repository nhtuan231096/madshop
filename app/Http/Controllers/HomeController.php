<?php 
namespace App\Http\Controllers;
use View;
use App\Models\Category;
use App\Models\Product;
use App\Models\Banner;
use App\Carts\Cart;
/**
 * summary
 */
class HomeController extends Controller
{
    /**
     * summary
     */
    public function __construct()
    {
    	View::share([
    		'cats' => Category::orderBy('name','ASC')->get()
    	]);
    }
    public function index()
    {
        $pro=Product::OrderBy('id','DESC')->paginate(8);
        $banner=Banner::all();
        return view('home.index',[
            'pro'=>$pro,
            'banner'=>$banner
        ]);
    }

    public function view($slug){
        $category=Category::where('slug',$slug)->first();
        $product=Product::where('slug',$slug)->first();

        if($category){
            return view('home.category',[
                'category'=>$category
            ]);
        }
        else if($product){
            return view('home.product',[
                'product'=>$product
            ]);
        }
        else{
            return view('home.errors');
        }
    }

    public function add_cart($id,Cart $cart){
        $model=Product::find($id);
        if ($model) {
           dd($cart->add);
        }
        else{
            return view('home.errors');
        }
    }
    public function view_cart(){
        return view('home.view_cart');
    }
}

?>