<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = "customer";

	public function product_type(){
 		return $this->hasMayny('App\Bill', 'id_customer','id');
 }
}
