<?php 
namespace App\Http\Controllers;
use View;
use App\Models\Category;
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
        return view('home.index');
    }
}

?>