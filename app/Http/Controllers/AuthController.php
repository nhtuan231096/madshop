<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

/**
 * summary
 */
class AuthController extends Controller
{
    /**
     * summary
     */
    public function login()
    {
        return view('admin.login');
    }
    public function post_login(Request $req){
        $req->offsetUnset('_token');
        // $req->merge(['username' => 'bkap']);
        // dd($req->all())
    }

    public function register()
    {
        return view('auth.register');
    }


    public function post_register(Request $req){

        $this->validate($req,[
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ],[
            'required' => ':attribute khong duoc de trong',
            'min' => ':attribute it nhat :min ky tu',
            'same' => ':attribute kong trung khop voi :other',
            'unique' => ':attribute nay da ton tai trong du lieu'
        ]);
        $password = bcrypt($req->password);
        $req->offsetUnset('_token','password');
        $req->merge(['password' => $password]);
        User::create($req->all());
        echo 'Thanh cong';
    }
}
?>