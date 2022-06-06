<?php

namespace Modules\Pos\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $product = DB::table('table_purchase')
        ->join('table_purchase_lines','table_purchase_lines.id_purchase','table_purchase.id')
        ->join('table_product','table_product.id','table_purchase.id_product')
        ->leftjoin('table_transactions','table_transactions.id_product','table_product.id')
        ->leftjoin('table_purchase as purchase','purchase.id_product','table_product.id')
        ->select(
            'table_product.*',
            DB::raw('coalesce(SUM(table_purchase.qty),0) - coalesce(SUM(table_transactions.qty),0) as stock')
        )
        ->groupBy("table_product.id");
        if (request()->get('cat')) {
            $product = $product->where('table_product.id_product_category',request()->get('cat'))->get();
        }else{
            $product =  $product->get();
        }
        $category = DB::table('table_product_category')->get();
        return view('pos::index',compact('category','product'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('pos::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $product = json_decode($request->product);
        $customer = DB::table('table_customer')->where('email',$request->email)->first();

        foreach ($product as $key => $value) {
            DB::table('table_transactions')->insert([
                'id_product' => $value->id,
                'qty' => 1,
                'price' => $value->price,
                'payment' => $request->payment,
                'id_customer' => ($customer? $customer->id : null) ,
                'order_type' => $request->OrderType,
            ]);
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('pos::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('pos::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
