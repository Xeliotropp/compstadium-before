<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandFormRequest;
use App\Models\Brand;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BrandController extends Controller
{
    public function edit($id)
    {
        $brands = Brand::find($id);
        return view('admin.brands.edit', compact('brands'));
    }
    public function update(BrandFormRequest $request, $brands)
    {
        $validatedData = $request->validated();
        $brands = Brand::findOrFail($brands);
        $brands->name = $validatedData['name'];

        $brands->slug = SlugService::createSlug(Brand::class, 'slug', $validatedData['name']);

        $brands->status = $request->status == true ? '1' : '0';
        $brands->save();

        return redirect('admin/brands/')->with('message', 'Успешно редактиране на марка');
    }
    public function store(BrandFormRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:brands,slug',
        ]);

        Brand::create([
            'name' => $validatedData['name'],
            'slug' => Str::slug($validatedData['slug']),
            'status' => $request->has('status') ? 1 : 0,
        ]);

        session()->flash('message', 'Успешно добавяне на марка!');

        return redirect()->back();
    }
    public function create()
    {
        return view('admin.brands.create');
    }
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands'));
    }
}
