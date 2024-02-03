<?php

namespace App\Http\Livewire;


use App\Models\Feature_products;
use Livewire\Component;

class Feature_product extends Component
{
    public function render()
    {
        $products = $this->getProducts();
        return view('livewire.feature_product', compact('products'));
    }

    public function getProducts()
    {
        return Feature_products::all();
    }
}
