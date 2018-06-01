<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable =
        [
            'order_id',
            'product_id',
            'quantity',
            'price'
        ];

    /**
     * Получение продукта.
     * @return \App\Product
     */
    public function Product()
    {
        return $this->hasOne('\App\Product', 'id', 'product_id');
    }
}
