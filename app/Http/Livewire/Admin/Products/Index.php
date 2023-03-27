<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\WithPagination;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.products.index');
    }
}
