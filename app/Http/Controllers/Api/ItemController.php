<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::paginate(10); // Пагинация с 10 элементами на странице

        return response()->json($items, 200);
    }
}
