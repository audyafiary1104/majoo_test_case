<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $category = DB::table('table_product_category')->get();
        return view('category::index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('category::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        request()->validate(
            [
                'name' => 'required|unique:table_product_category',
            ]);
        DB::table('table_product_category')->insert([
            'name' => $request->name,
        ]);
        return redirect()->back()->with('success','Product created successfully!');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('category::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('category::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        request()->validate(
            [
                'name' => 'required|unique:table_product_category',
            ]);
        DB::table('table_product_category')->where('id',$id)->update([
            'name' => $request->name,
        ]);
        return redirect()->back()->with('success','Product Category Updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        DB::table('table_product_category')->where('id',$id)->delete();
        return redirect()->back()->with('success','Product Category Delete successfully!');

    }
}
