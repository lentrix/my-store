<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Category $category=null)
    {
        if($category){
            $products = $category->products()->orderBy('name')->get();
        }else{
            $products = Product::orderBy('name')->get();
        }

        $categories = Category::orderBy('name')->get();

        return inertia('Product/Index', compact('categories', 'products', 'category'));
    }
}
