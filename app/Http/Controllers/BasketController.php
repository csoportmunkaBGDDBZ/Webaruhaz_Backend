<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BasketController extends Controller
{
    //
    //
    public function index()
    {
        return Basket::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            '*.product_id' => 'required|integer|exists:products,id',
            '*.amount' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        foreach ($data as $item) {
            // Ellenőrizzük, hogy létezik-e a termék a baskets táblában
            $basket = Basket::where('product_id', $item['product_id'])->first();

            if ($basket) {
                // Ha létezik, frissítjük az amount mezőt
                $basket->update([
                    'amount' => $item['amount'],
                    'updated_at' => now(),
                ]);
            } else {
                // Ha nem létezik, új rekordot hozunk létre
                Basket::create([
                    'product_id' => $item['product_id'],
                    'amount' => $item['amount'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        return response()->json(['success' => 'Basket updated with products'], 200);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $product_id)
    {
        $reservation = Basket::where('product_id', $product_id)
            ->get();
        return $reservation[0];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $product_id)
    {
        $record = $this->show($product_id);
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $product_id)
    {
        Basket::show($product_id)->delete();
    }
    public function basketData()
    {
        return with(Basket::with('productData')
            ->get());
    }
}
