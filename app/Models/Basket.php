<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    /** @use HasFactory<\Database\Factories\BasketFactory> */
    use HasFactory;
    protected $fillable = [
        'product_id',
        'amount'
    ];
    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('product_id', '=', $this->getAttribute('product_id'));
        return $query;
}
public function productData(){
    return $this->belongsTo(Product::class, 'product_id','product_id');
}
}
