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
        $this->middleware(function($request,$next){
            View::share([
            'cats' => Category::orderBy('name','ASC')->get(),
            'cart' => new Cart()
          ]);
        return $next($request);
        });
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
            $cart->add($model);
            return redirect()->route('gio-hang')->with('success','Thêm thành công');
            // return view('home.errors');
        }
        else{
            return view('home.errors');
        }
    }
    public function gio_hang(){
        return view('home.view-cart',[
            'cart' => new Cart()
        ]);
    }
    public function delete_cart($id,Cart $cart){
       $cart->delete($id); 
       return redirect()->back()->with('success','Xóa thành công');
    }
    public function update_cart($id,Cart $cart){
        $qty=request()->qty > 0 ? request()->qty : 1;
        $cart->update($id,$qty);
        return redirect()->back();
    }
    public function clear(Cart $cart){
        $cart->clear();
        return redirect()->back()->with('success','xóa giỏ hàng thành công');
    }
}

?>