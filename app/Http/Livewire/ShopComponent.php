<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ShopComponent extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';
	
    public function render()
    {

    	$products = Product::paginate(10);
    	// print_r($products);exit;
        return view('livewire.shop-component',['products' => $products])->layout('layouts.base');
    }
}
