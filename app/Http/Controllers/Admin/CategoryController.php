<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
        $validatedData = $request->validated();

        $category = new Category([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'meta_title' => $validatedData['meta_title'],
            'meta_keyword' => $validatedData['meta_keyword'],
            'meta_description' => $validatedData['meta_description'],
        ]);

        $category->slug = SlugService::createSlug(
            Category::class,
            'slug',
            $validatedData['name']
        );

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = $file->storeAs('uploads/category', $filename);
            $category->image = $path;
        }

        $category->status = $request->status == true ? '1' : '0';
        $category->save();

        return redirect('admin/category/')
            ->with('message', 'Successfully added a category!');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(CategoryFormRequest $request, $category)
    {
        $validatedData = $request->validated();
        $category = Category::findOrFail($category);
        $category = new Category([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'meta_title' => $validatedData['meta_title'],
            'meta_keyword' => $validatedData['meta_keyword'],
            'meta_description' => $validatedData['meta_description'],
        ]);

        $category->slug = SlugService::createSlug(Category::class, 'slug', $validatedData['name']);

        if ($request->hasFile('image')) {
            $path = 'storage/category-photos' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $fileName = time() . '.' . $request->image->extension();;
            $request->image->move(public_path('storage/category-photos'), $fileName);
        }

        $category->status = $request->status == true ? '1' : '0';
        $category->save();

        return redirect('admin/category/')->with('message', 'Успешно редактиране на категория');
    }
}
