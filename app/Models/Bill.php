<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  protected $table = "bills";

  public function product_type(){
 	return $this->hasMany('App\BillDetail', 'id_bill','id');
 }
  public function product_type(){
 	return $this->belongsTo('App\Customer', 'id_customer','id');
 }
}
