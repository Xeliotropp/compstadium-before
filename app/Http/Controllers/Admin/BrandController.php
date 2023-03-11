<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandFormRequest;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandController extends Controller
{
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
