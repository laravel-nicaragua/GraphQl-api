<?php

namespace App\Http\GraphQL\Mutations\Products;

use App\Models\Product;
use Nuwave\Lighthouse\Schema\Context;

class CreateProduct
{
    /**
     * @param $root
     * @param array $args
     *
     * @return mixed
     */
    public function handle($root, array $args, Context $context)
    {
        return $context->user->products()->create([
            'name' => $args['input']['name'],
            'price' => $args['input']['price'] * 100,
        ]);
    }
}
