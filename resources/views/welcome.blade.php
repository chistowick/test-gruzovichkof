@extends('layouts.app')

@section('content')
<div class="card border-primary mb-4">
    <h5 class="card-header bg-primary">
        Генерировать новое случайное число
    </h5>

    <div class="card-body text-left" id="gen-result">
        <h5 class="card-title">Добавлена новая запись:</h5>
        <p class="card-text p-3 bg-success rounded" id="gen-text"></p>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <div class="col-12">
                <button class="btn-lg btn-primary" id="generate_button" type="button">GENERATE</button>
            </div>
        </div>
    </div>
</div>

<div class="card border-info">
    <h5 class="card-header bg-info">
        Извлечь существующее случайное число по ID
    </h5>

    <div class="card-body">
        <div class="form-group row justify-content-center">
            <label class="col-auto col-form-label" for="inputId">ID:</label>
            <div class="col-4">
                <input class="form-control" type="number" id="inputId" name="inputId" placeholder="ID записи" maxlength="10">
            </div>
        </div>
    </div>

    <div class="card-body text-left" id="retr-result">
        <h5 class="card-title">Извлеченная запись:</h5>
        <p class="card-text p-3 bg-success rounded" id="retr-text"></p>
    </div>

    <div class="card-body text-left bg-error" id="retrieve_error">
        <h5 class="card-title">Ошибка:</h5>
        <p class="card-text p-3 bg-danger rounded" id="retr-text-error"></p>
    </div>

    <div class="card-body">
        <div class="form-group row no-gutters">
            <div class="col-12">
                <button class="btn-lg btn-info" id="retrieve_button" type="button">RETRIEVE</button>
            </div>
        </div>
    </div>
</div>

@endsection