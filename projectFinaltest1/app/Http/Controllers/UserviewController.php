<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Http\Requests\StoreItemsRequest;
use App\Http\Requests\UpdateItemsRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(Items $items)
    {
        $items = Items::all();
        $items = $items->reverse();

        $categories = Category::all();

        return view('dashboard2', compact('items', 'categories'));
    }
}
