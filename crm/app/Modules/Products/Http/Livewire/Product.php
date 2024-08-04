<?php

namespace App\Modules\Products\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $name;

    public $description;

    public $price;

    public $Quantity;

    public function render()
    {
        return view('products::livewire.components.product');
    }

    public function submit()
    {
        dd($this->all());
    }
}
