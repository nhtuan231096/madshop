<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Models\Banner;
	use Illuminate\Http\Request;

	/**
	 * 
	 */
	class BannerController extends Controller
	{
		
		function banner()
		{
			$banner=Banner::all();
			return view('admin.banner.index',[
				'banner'=>$banner
			]);
		}
		function add(){
			return view('admin.banner.add');
		}
		public function postadd(Request $req){
			$this->validate($req,[
				'name'=>'required|unique:banner,name',
				'file_upload'=>'required'
			],[
				'name.required'=>'Name is not empty',
				'file_upload.required'=>'Select a image',
				// 'file_upload.mimes'=>'Select one in formats jpg,png,jpeg,gif'
			]);

			$img='';
			if($req->hasFile('file_upload')){
				$file=$req->file_upload;
				$file->move(base_path('uploads/banner'),$file->getClientOriginalName());
				$img=$file->getClientOriginalName();
			}
			$req->merge(['image'=>$img]);
			Banner::create($req->all());
			return redirect()->route('banner')->with('Create Banner Successfully');
			// dd($req->all());
		}

		public function delete($id){
			Banner::find($id)->delete();
			return redirect()->route('banner')->with('success','Delete successfully');
		}
	}
 ?>