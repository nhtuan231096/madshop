<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
/**
 * summary
 */
class AdminController extends Controller
{
    /**
     * summary
     */
    public function index()
    {
        return view('admin.index');
    }
}

?>