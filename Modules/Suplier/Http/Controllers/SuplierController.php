<?php

namespace Modules\Suplier\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $suplier = DB::table('table_suplier')->get();
        return view('suplier::index',compact('suplier'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('suplier::create');
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
                'email' => 'required|unique:table_suplier',
                'name' => 'required',
            ]);
        DB::table('table_suplier')->insert([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('success','Suplier created successfully!');
  }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('suplier::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('suplier::edit');
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
        DB::table('table_suplier')->where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('success','Suplier Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        DB::table('table_suplier')->where('id',$id)->delete();
        return redirect()->back()->with('success','Suplier Delete successfully!');

    }
}
