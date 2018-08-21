<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;

	/**
	 * 
	 */
	class Users extends Model
	{
		protected $table="users";
		protected $fillable=[
			'name','email','password','permission','image'
		];
		// public function cat()
		// {
		// 	return $this->hasOne('App\Models\Category','id','category_id');
		// }
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