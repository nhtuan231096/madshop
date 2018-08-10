<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    	$this->validate($req,[
    		'email' => 'required|email',
    		'password' => 'required'
    	],[
    		'required' => 'The :attribute is not blank',
    		'email' => 'The :attribute email validate'
    	]);

    	if (Auth::attempt($req->only('email','password'),$req->has('remember'))) {
    		return redirect()->route('admin');
    	}else{
    		return redirect()->back()->with('error','Login email or password failed');
    	}
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login')->with('success','You are logout');
    }
}
?>