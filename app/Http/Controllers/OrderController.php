<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Order;
use App\Partner;

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
        $Orders = Order::paginate(10);

        return view('order.index',
            [
            'Orders' => $Orders
            ]
        );
    }

    /**
     * Форма редактирования заказа.
     * @param int $id ID заказа для редактирования.
     * @return Response Ответ.
     */
    public function edit($id)
    {
        $Order = Order::findOrFail($id);
        $Partner = Partner::all();
        $partnerSelect =
            [
                '' => 'Выберите поставщика'
            ];

        for($i = 0; $i < count($Partner); $i++)
        {
            $partnerSelect[$Partner[$i]->id] = $Partner[$i]->name;
        }

        return view('order.edit',
            [
                'Order' => $Order,
                'partnerSelect' => $partnerSelect
            ]
        );
    }

    /**
     * Обновление заказа.
     * @param  Request $Request Запрос.
     * @param int $id ID заказа для редктирования.
     * @return Response Ответ.
     */
    public function update(Request $Request, $id)
    {
        $Order = Order::findOrFail($id);

        $this->validate($Request,
            [
            'client_email' => 'required|email',
            'partner_id' => 'required|integer',
            'status' => 'required|in:0,10,20'
            ],
            [],
            [
                'client_email' => 'E-mail клиента',
                'partner_id' => 'Партнер',
                'status' => 'Статус'
            ]
            );

        $Order->client_email = $Request->client_email;
        $Order->partner_id = $Request->partner_id;
        $Order->status = $Request->status;

        $Order->save();

        return redirect()->back()->with('message_success', 'Заказ был успешно изменен.');
    }
}
