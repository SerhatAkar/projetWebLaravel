<?php

namespace Tests\Feature;

use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowProductstest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function works()
    {
        $products = factory(Product::class, 3)->create();

        $this->get('/boutique')
            ->assertSuccessful()
            ->assertViewIs('products.index')
            ->assertViewHas('products', $products);
    }
}
