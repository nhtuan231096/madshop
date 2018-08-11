<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
class AutoCompleteController extends Controller {
    
    public function index(){
        return view('autocomplete.index');
   }
    public function autoComplete(Request $request) {
        $query = $request->get('term','');
        
        $category=Category::where('name','LIKE','%'.$query.'%')->get();
        
        $data=array();
        foreach ($category as $cat) {
                $data[]=array('value'=>$category->name,'id'=>$category->id);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }
}

 ?>