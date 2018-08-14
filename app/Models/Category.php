<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * summary
 */
class Category extends Model
{
    /**
     * summary
     */
   protected $table = 'category';

   protected $fillable = [
   		'name','slug','parent','status','image'
   ];
   // public function products()
   // {
   // 		return $this->hasMany('App\Models\Product','category_id','id');
   // }
}

 ?>