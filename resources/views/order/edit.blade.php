@extends('layouts.main')

@section("title", "Изменить заказ: №".$Order->id)

@section('content')
    @include("_blocks._message")

    {{ Form::model($Order, ['url' => route("order.update", $Order->id), 'method' => 'post', 'name' => 'order_edit']) }}
        <div class="h1">Информация о заказе №{{ $Order->id }}</div>
        <div class="row">
            <div class="form-group col-4">
                {{ Form::label('client_email', "E-mail клиента") }}:<span class="form-input-require"></span>
                {{ Form::email("client_email", null, ['class' => 'form-control', 'required' => true]) }}
            </div>
            <div class="form-group col-4">
                {{ Form::label('partner_id', "Партнер") }}:<span class="form-input-require"></span>
                {{ Form::select("partner_id", $partnerSelect, null, ['class' => 'form-control', 'required' => true]) }}
            </div>
            <div class="form-group col-4">
                {{ Form::label('status', "Статус") }}:<span class="form-input-require"></span>
                {{ Form::select("status", ['' => 'Выберите статус', '0' => 'Новый', '10' => 'Подтвержден', '20' => 'Завершен', ], null, ['class' => 'form-control', 'required' => true]) }}
            </div>
        </div>

        <div class="h2">Продукты</div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th width="90">ID продукта</th>
                    <th width="240">Производитель</th>
                    <th>Наименование</th>
                    <th width="120">Количество</th>
                    <th width="120">Цена</th>
                    <th width="120">Стоимость</th>
                </tr>
                </thead>
                @foreach($Order->Products as $OrdPrd)
                    <tr>
                        <td>{{ $OrdPrd->Product->id }}</td>
                        <td>{{ $OrdPrd->Product->vendor->name }}</td>
                        <td>{{ $OrdPrd->Product->name }}</td>
                        <td>{{ $OrdPrd->quantity }} шт.</td>
                        <td>{{ $OrdPrd->price }} руб.</td>
                        <td>{{ $OrdPrd->quantity * $OrdPrd->price }} руб.</td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="form-group">
            {{ Form::label('total', "Стоимость") }}: {{ $Order->total() }} руб.
        </div>

        <div class="form-group">
            {{ Form::submit('Сохранить', ['class' => 'btn btn-primary']) }}
            {{ Form::reset('Сброс', ['class' => 'btn btn-secondary']) }}
        </div>
    {{ Form::close() }}

    <script src="{{ mix("js/order_edit.js") }}"></script>
@endsection