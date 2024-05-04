<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Items;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $items = Items::find($id);

        return view('addInvoice', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $items = Items::find($id);

        $request->validate([
            'ItemsId'=>'required',
            'address'=>'required|min:10|max:100',
            'postcode'=>'required|min:5',

        ]);

        Invoice::create([
            'ItemsId'=>$request->ItemsId,
            'address'=>$request->address,
            'postcode'=>$request->postcode,
            'totalPrice'=>($items->amount * $items->price),
        ]);
        return redirect('/adminDashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
