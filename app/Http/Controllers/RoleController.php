<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // public function all(){
    //     return view('roles.all');
    // }
    public function all(){
        //get all the cows data.
        $roles = Role::all();
        // dd($cows); // dump the execution of the data and stop execution.
        //show the view.
        // passing the data to the view.
        return view('roles.all', [
            'role' => $roles
        ]);
    }

    public function add(){
        return view('roles.add');
    }

    public function save(Request $request) {

        $validated = $request->validate([
            'role_name' => 'required|alpha',
            'role_desc' => 'required|alpha',
        ]);

        $role = new Role();

        $role->name = $request->get('role_name');
        $role->desc = $request->get('role_desc');
        $role->save();

        return redirect('roles');
    }
    public function delete($id){
        Role::find($id)->delete();
        return redirect('roles');
    }
    public function edit($id){
        $role = Role::findOrFail($id);
        return view('roles.update',compact('role'))
        ->with('role', $role);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|alpha',
            'desc' => 'required|alpha',
        ]);
        Role::whereroleId($id)->update($validatedData);

        return back()->with('success', 'Roles successfully updated');
    }
}
