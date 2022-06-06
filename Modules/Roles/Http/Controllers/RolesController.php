<?php

namespace Modules\Roles\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles::index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('roles::create');
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
                'name' => 'required|unique:roles',
                'permision' => 'required',
            ]);
        $role = Role::create(['name' =>  $request->name]);
        foreach ($request->permision as $key => $value) {
            $role->givePermissionTo($value);
        }
        return redirect()->route('roles.index')->with('success','Roles created successfully!');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $roles = Role::findById($id);
        $permision = $roles->getPermissionNames()->toArray();
        return view('roles::show',compact('permision','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */


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
                'name' => 'required|unique:roles',
                'permision' => 'required',
        ]);
        $roles = Role::findById($id);
        $roles->name = $request->name;
        $roles->save();
        $roles->syncPermissions($request->permision);
        return redirect()->route('roles.index')->with('success','Roles updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return redirect()->route('roles.index')->with('success','Roles Delete successfully!');

    }
}
