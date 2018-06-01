@extends('layouts.main')

@section("title", "Заказы")

@section('content')
    <div class="h1">Заказы</div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="40">ID заказа</th>
                    <th>Название партнера</th>
                    <th width="170">Стоимость заказа</th>
                    <th width="300">Наименование состава заказа</th>
                    <th width="150">Статус заказа</th>
                </tr>
            </thead>
            @foreach($Orders as $Order)
                <tr>
                    <td>
                        <a href="{{ route("order.edit", $Order->id) }}" target="_blank">
                            {{ $Order->id }}
                        </a>
                    </td>
                    <td>{{ $Order->Partner->name }}</td>
                    <td>{{ $Order->total() }} руб.</td>
                    <td>
                        <ul>
                            @foreach($Order->Products as $OrdPrd)
                                <li>
                                    {{ $OrdPrd->Product->vendor->name }}: {{ $OrdPrd->Product->name }} - <b>{{ $OrdPrd->quantity }} шт., {{ $OrdPrd->price }} руб.</b>
                                </li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        @if($Order->status == 0)
                            Новый
                        @elseif($Order->status == 10)
                            Плдтвержден
                        @elseif($Order->status == 20)
                            Завершен
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>

        {{ $Orders->links("pagination::bootstrap-4") }}
    </div>
@endsection