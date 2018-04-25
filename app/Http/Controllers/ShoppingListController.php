<?php

namespace App\Http\Controllers;

use App\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    //Get All Shopping Product
    public function index()
    {
        return ShoppingList::all();
    }

    //Show Shopping Product
    public function show(ShoppingList $list)
    {
        return $list;
    }

    //Add Shopping Product
    public function store(Request $request)
    {
        $list = ShoppingList::create($request->all());

        return response()->json($list, 201);
    }

    //Update Shopping Product
    public function update(Request $request, ShoppingList $list)
    {
        $list->update($request->all());

        return response()->json($list, 200);
    }

    //Delete Shopping Product
    public function delete(ShoppingList $list)
    {
        $list->delete();

        return response()->json(null, 204);
    }
}
