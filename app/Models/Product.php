<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;

	/**
	 * 
	 */
	class Product extends Model
	{
		protected $table="products";
		protected $fillable=[
			'name','description','image','price','sale_price','category_id','slug'
		];
		public function cat()
		{
			return $this->hasOne('App\Models\Category','id','category_id');
		}
		public function scopeSearch($query)
		{
			if (empty(request()->search)) {
				return $query;
			}else{
				return $query->where('name','like','%'.request()->search.'%');
			}
		}
		
	}
 ?>