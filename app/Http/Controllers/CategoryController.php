<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$categories = Category::all();
        $categories = Category::orderBy('id', 'desc')->get();

        return view('admin.pages.category.category-list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.category-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $category = new Category();
        // $category->category_name = $request->category_name;
        // $category->calegory_des = $request->calegory_des;
        // $category->pub_status = $request->pub_status;

        // $category->save();

        Category::create($request->all());

        // DB::table('categories')->insert([
        //     'category_name' => $request->category_name,
        //     'calegory_des' => $request->calegory_des,
        //     'pub_status' => $request->pub_status,
        // ]);

        return redirect('category/create')->with('message', 'Category Created');
    }

    //Categero Publication
    public function unpublish($id){
        $category = Category::find($id);
        $category->pub_status = 1;
        $category->save();

        return redirect('category')->with('message', 'Category unpublish');
    }

    public function publish($id){
        $category = Category::find($id);
        $category->pub_status = 0;
        $category->save();

        return redirect('category')->with('message', 'Category unpublish');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.pages.category.category-update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->category_name = $request->category_name;
        $category->calegory_des = $request->calegory_des;
        $category->pub_status = $request->pub_status;

        $category->save();

        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/category');
    }
}
