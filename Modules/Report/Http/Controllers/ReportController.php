<?php

namespace Modules\Report\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('report::index');
    }

    public function stock()
    {
        $stock = DB::table('table_purchase')
        ->join('table_purchase_lines','table_purchase_lines.id_purchase','table_purchase.id')
        ->join('table_product','table_product.id','table_purchase.id_product')
        ->leftjoin('table_transactions','table_transactions.id_product','table_product.id')
        ->leftjoin('table_purchase as purchase','purchase.id_product','table_product.id')
        ->select(
            'table_product.name',
             DB::raw('IFNULL(table_transactions.qty, 0) as total_sell')
            ,DB::raw('coalesce(SUM(table_purchase.qty),0) - coalesce(SUM(table_transactions.qty),0) as stock')
            ,DB::raw('coalesce(SUM(table_transactions.qty),0) * coalesce(SUM(table_transactions.price),0) as total_profit')
            ,DB::raw('coalesce(SUM(table_purchase.price),0) * coalesce(SUM(table_purchase.qty),0) - coalesce(SUM(table_transactions.qty),0) as stock_price_purchase')
            )
        ->groupBy("table_product.id")->get()
        ;
        return view('report::stock',compact('stock'));
    }

   
}
