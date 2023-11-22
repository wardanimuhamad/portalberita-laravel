<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        //menggunakan query builder
        // $categories = DB::table('categories')->get();

        //menggunakan eloquent
        $categories = Category::all();

        return view('category.index', ['categories' => $categories]);
    }

    public function detail($id)
    {
        // $category = DB::table('categories')->where('id', $id)->first();

        //menggunakan eloquent
        $category = Category::find($id)->first();
        return view('category.detail', ['data' => $category]);
    }
}
