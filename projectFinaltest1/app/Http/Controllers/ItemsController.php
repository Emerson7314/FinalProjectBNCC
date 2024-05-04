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

        return view('adminDashboard', compact('items', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('addItems', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:5|max:80',
            'price'=>'required|numeric',
            'amount'=>'required|numeric',
            'CategoryId'=>'required',
        ]);

        $extension = $request->file('image')->getClientOriginalExtension();
        $originalName = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);

        $filename = $originalName. '_' . $extension;

        $request->file('image')->storeAs('/public/images', $filename);

        Items::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'amount'=>$request->amount,
            'image'=>$filename,
            'CategoryId'=>$request->CategoryId,
        ]);
        return redirect('/adminDashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $items=Employee::find($id);
        return view('editItems', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $validasi = $request->validate([
        'name' => 'required|min:5|max:20',
        'age' => 'required|numeric|min:21', // Update age validation
        'address' => 'required|min:10|max:40',
        'phone_number' => 'required|regex:/^08[0-9]{9,10}$/' // Update phone number validation
    ], [
        'phone_number.regex' => 'The phone number format is invalid. It must start with "08" and have 9-12 digits.'
    ]);

    Items::findOrFail($id)->update([
        'name' => $request->name,
        'age' => $request->age,
        'address' => $request->address,
        'phone_number' => $request->phone_number
    ]);

    return redirect('/dashboard')->with('success', 'Item has been updated!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    Items::destroy($id);
    return redirect('/dashboard')->with('success', 'Item has been deleted successfully!');
    }
}
