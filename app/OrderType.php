<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderType extends Model
{
    protected $table = 'order_types';
    protected $primaryKey = 'order_type_id';
    protected $fillable   = ['order_type_id','name'];
    protected $order_type_id = 1;
    protected $name;
    protected $created_at;
    protected $updated_at;
    public $timestamps = false; // for false updated_at and created_ats
    
    
}
