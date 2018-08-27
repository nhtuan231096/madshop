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

    public function edit($id){
        $cate=Category::find($id);
        return view('admin.category.edit',[
            'cate'=>$cate
        ]);
    }
    public function postedit($id,Request $req){
        $this->validate($req,[
            'name'=>'required|unique:category,name,'.$id,
            'slug'=>'required|unique:category,slug,'.$id
        ],[
            'name.required'=>'Tên không được để trống',
            'name.unique'=>'Tên đã tồn tại',
            'slug.unique'=>'Đường dẫn đã tồn tại',
            'slug.required'=>'Đường dẫn không được để trống'
        ]);
        Category::find($id)->update($req->all());
        return redirect()->route('category')->with('success','Update Successfully');
    }
}
 ?>