<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        //menggunakan query builder
        // $categories = DB::table('categories')->get();

        //menggunakan eloquent
        // $categories = Category::orderBy('name')->get();

        //menambahkan paginate
        $categories = Category::where('name', 'LIKE', '%' . $request->keyword . '%')->orderBy('name')->paginate(10);

        return view('category.index', ['categories' => $categories]);
    }

    public function detail($id)
    {
        // $category = DB::table('categories')->where('id', $id)->first();

        //menggunakan eloquent
        $category = Category::findOrFail($id);
        return view('category.detail', ['data' => $category]);
    }

    public function new()
    {
        return view('category.new');
    }

    public function store(CategoryCreateRequest $request)
    {
        /** menambahkan validasi data yang diinput */
        // $validated = $request->validate([
        //     'name' => 'required|unique:categories|max:50',
        //     'description' => 'required'
        // ]);

        /*** cara 1 */
        // $category = new Category;
        // $category->name = $request->name;
        // $category->description = $request->description;

        // $category->save();

        /** cara 2: menggunakan mass assignment
         * pastikan $fillable yang terdapat pada model sama dengan field pada tabel
         * pastikan name setiap elemen form sama dengan field pada tabel
         */
        $category = Category::create($request->all());
        if ($category) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penambahan data kategori ' . $request->name . ' berhasil');
        }

        return redirect('/categories');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', ['data' => $category]);
    }

    public function update(CategoryCreateRequest $request, $id)
    {
        // dd($request->all());
        $category = Category::findOrFail($id);
        /** cara 1 */
        // $category->name = $request->name;
        // $category->description = $request->description;
        // $category->save();

        /** cara 2: mass assignment */
        $category->update($request->all());

        if ($category) {
            Session::flash('status', 'success');
            Session::flash('message', 'Pengubahan data kategori ID ' . $request->id . ' berhasil');
        }

        return redirect('/categories');
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        return view('category.delete', ['data' => $category]);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        if ($category) {
            Session::flash('status', 'success');
            Session::flash('message', 'Penghapusan data kategori ' . $category->name . ' berhasil');
        }
        return redirect('/categories');
    }
}
