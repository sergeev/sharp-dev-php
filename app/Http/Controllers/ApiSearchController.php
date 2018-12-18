<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ApiSearchController extends Controller
{
    /**
     * Поиск по таблице products .
     *
     * @param  Request $request
     * @return mixed
     */
    public function search(Request $request)
    {
        // Определим сообщение, которое будет отображаться, если ничего не найдено 
        // или поисковая строка пуста
        $error = ['error' => 'No User results found'];

        // Удостоверимся, что поисковая строка есть
        if($request->has('q')) {

            // Используем синтаксис Laravel Scout для поиска по таблице products.
            $posts = Product::search($request->get('q'))->get();

            // Если есть результат есть, вернем его, если нет  - вернем сообщение об ошибке.
            return $posts->count() ? $posts : $error;

        }

        // Вернем сообщение об ошибке, если нет поискового запроса
        return $error;
    }
}
