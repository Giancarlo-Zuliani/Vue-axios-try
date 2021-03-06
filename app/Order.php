<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'name',
        'lastname',
        'address',
        'phone_num',
        'email',
        'payment_status',
        'discount',
        'total_price',
        'final_price'
    ];
    public function user(){
        return $this -> belongsTo(User::class);
    }
    public function dishes(){
        return $this -> belongsToMany(Dish::class);
    }
    public function payments(){
        return $this -> belongsToMany(Payment::class);
    }
}
