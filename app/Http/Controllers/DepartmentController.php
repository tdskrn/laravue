<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;



class DepartmentController extends Controller
{
    // codigo abaixo crud com vue js
    public function storeDepartment(Request $request)
    {

        Department::create([
            'user_id' => 1,
            'name' => $request->name,
            'director_id' => $request->director_id,
        ]);

        return response()->json('Success');
    }

    public function getDepartments()
    {
        return response()->json(Department::all());
    }

    public function updateDepartment(Request $request, $id)
    {
        Department::where('id', $id)->update([

            'name' => $request->name,
            'director_id' => $request->director_id,
        ]);

        return response()->json('Success');
    }

    public function deleteDepartment($id)
    {
        Department::where('id', $id)->delete();
        return response()->json('Success');
    }

















    // codigo Crud Laravel cru

    public function index()
    {
        $departments = Department::all();

        return view("management.departments.index", compact("departments"));
    }

    public function create()
    {
        return view('management.departments.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'director_id' => ['required'],
        ]);
        Department::create([
            'user_id' => 1,
            'name' => $request->name,
            'director_id' => $request->director_id,
        ]);
        session()->flash('success-message', 'Department created successfully!');
        return redirect()->route('departmentsIndex');
    }

    public function edit($id)
    {
        $department = Department::find($id);

        return view('management.departments.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => ['required'],
            'director_id' => ['required'],
        ]);
        Department::where('id', $id)->update(
            [
                'director_id' => $request->director_id,
                'name' => $request->name,
            ]
        );
        session()->flash('success-message', 'Department update successfully!');
        return redirect()->route('departmentsIndex');
    }

    public function delete($id)
    {
        Department::find($id)->delete();
        session()->flash('success-message', 'Department destroyed successfully!');
        return redirect()->route('departmentsIndex');
    }
}
