<?php

namespace App\Http\Livewire;


use App\Models\Contact;
use Livewire\Component;

class Contacts extends Component
{
    public function render()
    {
        $contacts = $this->getContact();
        return view('livewire.contacts', compact('contacts'));
    }
 
    public function getContact()
    { 
        return Contact::all();
    }
}
