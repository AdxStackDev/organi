<?php

namespace App\Http\Livewire;


use App\Models\Feature_products; // Make sure to include the Product model
use Livewire\Component;

class Feature_product extends Component
{
    public function render()
    {
        $products = $this->getProducts(); // Call the getProducts method
        return view('livewire.feature_product', compact('products'));
    }

    // function to select product from database table products and render them in the view
    public function getProducts()
    {
        return Feature_products::all();
    }
}
