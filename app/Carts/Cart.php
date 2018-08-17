<?php 
	namespace App\Carts;

	/**
	 * 
	 */
	class Cart
	{
		public $items=[];
		function __construct()
		{
			$this->items = session('cart');
		}
		public function add($model){
			$this->items[$model->id]=[
				'id'=>$model->id,
				'name'=>$model->name,
				'price'=>$model->sale_price > 0 ? $model->sale_price : $model->price,
				'qty'=>1,
				'image'=>$model->image
			];
			session(['cart' => $this->items]);
		}
	}
 ?>