<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $product = DB::table('table_product')
        ->join('table_product_category','table_product_category.id','table_product.id_product_category')
        ->select('table_product_category.name as category','table_product.*')
        ->get();
        return view('product::index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $category = DB::table('table_product_category')->get();

        return view('product::create',compact('category'));
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
                'name' => 'required|unique:table_product',
                'price' => 'required',
                'category' => 'required',
                'description' => 'required',
                'op_stock' => 'required',
                'purchase_price' => 'required',
                'images' => 'required|image',
            ]);
            $imageName = time().'.'.$request->images->extension();  
            $request->images->move(public_path('images'), $imageName);
            $product = DB::table('table_product')->insertGetId([
                    'name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                    'id_product_category' => $request->category,
                    'images' => $imageName,
                ]);
            $openingStock = DB::table('table_purchase')->insertGetId([
                'id_product' => $product,
                'qty' => $request->op_stock,
                'price' => $request->purchase_price,  
            ]);
            $purchaseLines = DB::table('table_purchase_lines')->insert([
                'id_purchase' => $openingStock,
                'type' =>'opening_stock',
            ]);
            return redirect()->route('product.index')->with('success','Product created successfully!');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $category = DB::table('table_product_category')->get();
        $product = DB::table('table_product')->where('id',$id)->first();
        return view('product::edit',compact('category','product'));
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
                'name' => 'required|unique:table_product',
                'price' => 'required',
                'category' => 'required',
                'description' => 'required',
                'images' => 'required|image',
            ]);
            $imageName = time().'.'.$request->images->extension();  
            $request->images->move(public_path('images'), $imageName);
            $product = DB::table('table_product')->where('id',$id)->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                    'id_product_category' => $request->category,
                    'images' => $imageName,
                ]);
                return redirect()->route('product.index')->with('success','Product Update successfully!');


    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        DB::table('table_product')->where('id',$id)->delete();
        return redirect()->back()->with('success','Product Delete successfully!');
    }
}
