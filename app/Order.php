<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Product;

class Order extends Model
{
    protected $fillable =
    [
        'status',
        'client_email',
        'partner_id'
    ];

    /**
     * Получение партнера.
     * @return \App\Partner
     */
    public function Partner()
    {
        return $this->hasOne('\App\Partner', 'id', 'partner_id');
    }

    /**
     * Получение оформленных продуктов.
     * @return \App\OrderProduct[]
     */
    public function Products()
    {
        return $this->hasMany('App\OrderProduct', 'order_id', 'id');
    }


    /**
     * Подсчет стоимости заказа.
     * @return double Стоимость заказа.
     */
    public function total()
    {
        return OrderProduct::where("order_id", $this->id)->sum(DB::raw("quantity * price"));
    }
}
