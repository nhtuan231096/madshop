<?php 
    namespace App\Http\Controllers\Admin;
    use App\Http\Controllers\Controller;
    use App\Models\Users;
    use Illuminate\Http\Request;
    /**
     * 
     */
    class UsersController extends Controller
    {
        
        public function index()
        {
            $user=Users::search()->paginate(5);
            return view('admin.users.index',[
                'user'=>$user
            ]);
        }

        public function add(Request $req){
            $img = '';
            if ($req->hasFile('file_upload')) {
                $file = $req->file_upload;
                $file->move(base_path('uploads/user'), $file->getClientOriginalName());
                $img =  $file->getClientOriginalName();
            }
            $req->merge(['image'=>$img]);
            $req->offsetUnset('_token');
            // dd($req->all());
            Users::create($req->all());
            return redirect()->route('users')->with('successs','Add Admin successfully');
        }

        public function delete($id){
            Product::destroy($id);
            return redirect()->back();
        }

        public function edit($id){
            $user=Users::find($id);
            return view('admin.users.edit',[
                'user'=>$user,
            ]);
        }

        public function postedit(Request $req,$id){
            $this->validate($req,[
                'name'=>'required|min:6',
                'email'=>'required',
                'passwors'=>'required',
                'permission'=>'required',
                // 'category_id'=>'required'
            ],[
                'required'=>':attribute must not be blank',
                'min'=>':attribute at least 6 characters',
                // 'Digits'=>':attribute must enter the number'
            ]);
            Users::find($id)->update($req->all());

            // $img = $model->image;
      //       if ($req->hasFile('file_upload')) {
      //           $file = $req->file_upload;
      //           $file->move(base_path('uploads'),$file->getClientOriginalName());

      //           $img = $file->getClientOriginalName();
      //       }
            // return redirect()->route('list_product');
        }
    }
 ?>