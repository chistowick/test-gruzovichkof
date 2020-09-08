<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Random extends Model
{
    public $timestamps = false;

    // Все поля могут быть доступны для автозаполнения, т.к. вставка данных от пользователя НЕ производится
    protected $guarded = [];
}
