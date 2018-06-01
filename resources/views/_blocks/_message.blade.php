@if(session('message_success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Удачно!</strong>

        {{ session('message_success') }}
    </div>
@endif

@if(session('message_errors'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Ошибка!</strong>

        {{ session('message_errors') }}
    </div>
@endif

@if(isset($errors) && count($errors) > 0)
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Ошибка!</strong>

        @if($errors->all())
            @if(count($errors->all()) > 1)
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @else
                {{ $errors->all()[0] }}
            @endif
        @endif
    </div>
@endif