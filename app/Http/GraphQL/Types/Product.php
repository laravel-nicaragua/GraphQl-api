<?php

namespace App\Http\GraphQL\Types;

use App\Models\Product as ProductModel;

class Product
{
    /**
     * @param ProductModel $product
     *
     * @return mixed
     */
    public function price(ProductModel $product)
    {
        return $product->price / 100;
    }
}
