<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
/**
 * 
 */
class CategoryController extends Controller
{
    
    public function index()
    {
        $cats = Category::paginate(10);
        return view('admin.category.index', 
        	[
            'datas' => $cats
        	]
    	);
    }
    public function delete($id)
    {
    	Category::find($id)->delete();
    	// Category::destroy($id);
    	return redirect()->back()->with('success', 'Delete Successfull');	
    }
    public function add()
       {
    	return view('admin.category.add');
    }
}
 ?>