<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
	protected $table = "bill_detail";

	public function product_type(){
 		return $this->belongsTo('App\Product', 'id_product','id');
	}

	public function product_type(){
 		return $this->belongsTo('App\Bill', 'id_bill','id');
 }
}
