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
    public function postadd(Request $req)
    {
        $img = '';
            if ($req->hasFile('file_upload')) {
                $file = $req->file_upload;
                $file->move(base_path('uploads/brand'), $file->getClientOriginalName());
                $img =  $file->getClientOriginalName();
            }
            $req->merge(['image'=>$img]);
    	$req->offsetUnset('_token');
    	Category::create($req->all());
    	return redirect()->route('category')->with('success',"Created Successfully");
    }
}
 ?>