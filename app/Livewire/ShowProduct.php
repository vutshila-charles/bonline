<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ShowProduct extends Component
{
    public $product ;
    public function mount($id)
    {
        $product = Product::find($id);
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.show-product',['product'=>$this->product])->layout('layouts.guest');
    }
}
