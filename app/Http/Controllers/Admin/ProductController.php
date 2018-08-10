<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Models\Product;
	use App\Models\Category;
	use Illuminate\Http\Request;
	/**
	 * 
	 */
	class ProductController extends Controller
	{
		
		public function product()
		{
			$product=Product::all();
			return view('admin.product.index',[
				'product'=>$product
			]);
		}

		public function add(){
			$cate=Category::all();
			return view('admin.product.add',[
				'cate'=>$cate
			]);
		}

		public function created(Request $req){
			$this->validate($req,[
				'name'=>'required|min:6',
				'description'=>'required',
				'price'=>'required',
				'sale_price'=>'required',
				// 'category_id'=>'required'
			],[
				'required'=>':attribute must not be blank',
				'min'=>':attribute at least 6 characters',
				// 'Digits'=>':attribute must enter the number'
			]);
			$req->offsetUnset('_token');
			Product::create($req->all());
			return redirect()->route('list_product');
		}

		public function delete($id){
			Product::destroy($id);
			return redirect()->back();
		}

		public function edit($id){
			$cate=Category::all();
			$pro=Product::find($id);
			return view('admin.product.edit',[
				'cate'=>$cate,
				'pro'=>$pro
			]);
		}

		public function postedit(Request $req,$id){
			$this->validate($req,[
				'name'=>'required|min:6',
				'description'=>'required',
				'price'=>'required',
				'sale_price'=>'required',
				// 'category_id'=>'required'
			],[
				'required'=>':attribute must not be blank',
				'min'=>':attribute at least 6 characters',
				// 'Digits'=>':attribute must enter the number'
			]);
			Product::find($id)->update($req->all());
			return redirect()->route('list_product');
		}
	}
 ?>