<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Order;

/**
 * Контроллер для работы с заказами.
 * @version 1.0
 * @since 1.0
 */
class OrderController extends Controller
{
    /**
     * Отображение заказов.
     * @return Response Ответ.
     */
    public function index()
    {
        $Orders = Order::paginate(20);

        return view('order.index',
            [
            'Orders' => $Orders
            ]
        );
    }

    /**
     * Форма редактирования заказа.
     * @param int $id ID заказа для редктирования.
     * @return Response Ответ.
     */
    public function edit($id)
    {

    }

    /**
     * Обновление заказа.
     * @param  Request $Request Запрос.
     * @param int $id ID заказа для редктирования.
     * @return Response Ответ.
     */
    public function update(Request $Request, $id)
    {
    }
}
