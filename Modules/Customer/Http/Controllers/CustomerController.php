<?php

namespace Modules\Customer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
       $customer = DB::table('table_customer')->get();
        return view('customer::index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('customer::create');
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
                'email' => 'required|unique:table_customer',
                'name' => 'required',
            ]);
        DB::table('table_customer')->insert([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('success','Customer Store successfully!');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('customer::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('customer::edit');
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
                'email' => 'required|unique:table_customer',
                'name' => 'required',
            ]);
        DB::table('table_customer')->where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('success','Customer update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        DB::table('table_customer')->where('id',$id)->delete();
        return redirect()->back()->with('success','Customer Delete successfully!');

    }
}
