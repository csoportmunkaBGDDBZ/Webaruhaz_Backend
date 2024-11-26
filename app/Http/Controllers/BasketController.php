<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

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
            $record = new Basket();
            $record->fill($request->all());
            $record->save();
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
}
