<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Random;

class RandomController extends Controller
{
    /**
     * Возвращает объект JSON, 
     * содержащий случайное сгенерированное число 
     * и id, под которым число записано в БД
     *
     * @param void
     * @return json
     **/
    public function generate()
    {
        $item = Random::create([
            'random' => rand(),
            'added_on' => now(),
        ]);

        return response()->json(
            [
                'id' => $item->id,
                'random' => $item->random
            ],
            201
        );
    }

    /**
     * Возвращает объект JSON, 
     * содержащий данные записи из таблицы случайных чисел
     * и метку времени (когда число было сгенерировано)
     *
     * @param string $id Идентификатор записи в таблице randoms
     * @return json
     **/
    public function retrieve(string $id)
    {
        $item = Random::findOrFail($id);

        return response()->json(
            [
                'random' => $item->random,
                'timestamp' => $item->added_on
            ],
            200
        );
    }
}
