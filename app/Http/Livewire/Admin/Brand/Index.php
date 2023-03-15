<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name, $slug, $status;
    public $brand_id;
    public function rules()
    {
        return [
            'name' => 'required|string',
            'slug' => 'required|unique:brands',
            'status' => 'nullable'
        ];
    }
    public function resetInput()
    {
        $this->name = '';
        $this->slug = '';
        $this->status = '';
    }
    public function storeBrand()
    {
        $validatedData = $this->validate();
        Brand::create([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'status' => $this->status == true ? '1' : '0',
        ]);
        session()->flash('message', 'Успешно добавяне на марка!');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }
    public function deleteBrand($id)
    {
        $this->brand_id = $id;
        $this->dispatchBrowserEvent('show-delete-modal');
    }

    public function destroyBrand()
    {
        $brand = Brand::findOrFail($this->brand_id);
        $brand->delete();
        session()->flash('message', 'Успешно изтрита марка!');
        $this->dispatchBrowserEvent('close-delete-modal');
    }
    public function render()
    {
        $brands = Brand::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.brand.index', ['brands' => $brands]);
    }
}
