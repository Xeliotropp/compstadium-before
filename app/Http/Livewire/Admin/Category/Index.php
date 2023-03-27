<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\WithPagination;


use App\Models\Category;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $category_id;

    public function deleteCategory($category_id)
    {
        $this->category_id = $category_id;
        logger('Category ID: ' . $this->category_id);
    }
    public function destroyCategory()
    {
        $category = Category::find($this->category_id);
        if (!$category) {
            session()->flash('error', 'Категорията не може да бъде намерена!');
            return;
        }
        $category->delete();
        session()->flash('message', 'Успешно изтрита категория!');
        $this->dispatchBrowserEvent('close-modal');
    }


    public function render()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.category.index', ['categories' => $categories]);
    }
}
