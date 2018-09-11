<?php

namespace App\Http\GraphQL\Queries\Products;

use App\Models\Product;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Schema\Context;

class GetProducts
{
    /**
     * @param $root
     * @param array $args
     *
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
    public function resolve($root, array $args)
    {
        return Product::all();
    }
}
