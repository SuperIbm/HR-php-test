<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =
        [
            'name',
            'price',
            'vendor_id'
        ];

    /**
     * Получение производителя.
     * @return \App\Vendor
     */
    public function Vendor()
    {
        return $this->hasOne('\App\Vendor', 'id', 'vendor_id');
    }
}
