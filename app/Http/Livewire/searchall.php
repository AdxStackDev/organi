<?php

namespace App\Http\Livewire;

use App\Models\Feature_products;
use Livewire\Component;

class Searchall extends Component
{
    public $search = '';

    protected $queryString = ['search'];


    public function render()
    {
        $posts = Feature_products::search('red');
        // dd($posts);

        return view('livewire.search_all', ['posts' => $posts])->layout('home');
    }
}
