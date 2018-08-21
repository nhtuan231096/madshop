<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;

	/**
	 * 
	 */
	class Bill_detail extends Model
	{
		protected $table="bill_detail";
		protected $fillable=[
         'bill_id','pro_id','quantity','total','price'
		];
	}
 ?>