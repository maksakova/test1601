<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Support\Facades\Cache;

class ItemController extends Controller
{
    public function index()
    {
        $items = Cache::remember('items', 60*60, function () {
            return Item::paginate(10);
        });

        return response()->json($items, 200);
    }
}
