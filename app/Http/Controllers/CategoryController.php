<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();

        return view('category.index', ['categories' => $categories]);
    }

    public function detail($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();

        return view('category.detail', ['data' => $category]);
    }
}
