<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Order;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        Paginator::useBootstrapFive();
        $sliders = Slider::where('status', '0')->get();
        $trendingProducts = Product::where('trending', true)->orderBy('ID', 'DESC')->paginate(6);
        return view('frontend.index', compact('trendingProducts', 'sliders'));
    }

    public function categories()
    {
        $categories = Category::where('status', '0')->get();
        return view('frontend.collections.category.index', compact('categories'));
    }

    public function products($category_slug)
    {
        Paginator::useBootstrapFive();
        $category = Category::where('slug', $category_slug)->first();

        $products = $category ? $category->products()->orderBy('ID', 'DESC')->paginate(10) : null;
        return view('frontend.collections.products.index', compact('category', 'products'))->with('error', 'Category not found.');
    }


    public function productView(string $category_slug, string $product_slug)
    {
        $category = Category::where('slug', $category_slug)->first();

        if ($category) {

            $product = $category->products()->where('slug', $product_slug)->where('status', '0')->first();
            if ($product) {

                return view('frontend.collections.products.view', compact('category', 'product'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function productSearch(Request $request)
    {
        Paginator::useBootstrapFive();
        if ($request->search) {
            $searchProducts = Product::where('status', '0')
                ->where(function ($query) use ($request) {
                    $query->where('name', 'LIKE', '%' . $request->search . '%')
                        ->orWhereHas('category', function ($query) use ($request) {
                            $query->where('name', 'LIKE', '%' . $request->search . '%');
                        })
                        ->orWhere('brand', 'LIKE', '%' . $request->search . '%');
                })
                ->latest()
                ->paginate(12);
            return view('frontend.pages.search', compact('searchProducts'));
        } else {
            return redirect()->back()->with('message', 'Няма такъв продукт');
        }
    }
    public function thankyou()
    {
        return view('frontend.thank-you');
    }
}
