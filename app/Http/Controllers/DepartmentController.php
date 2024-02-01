<?php

namespace App\Http\Controllers;

use App\Models\Departements;
use Illuminate\Http\Request;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Departements::all();
        return view('admin.department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:departements'
        ]);
        $data = $request->all();
        Departements::create($data);
        return redirect()->back()->with('message', 'Department created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $department = Departements::find($id);
        return view('admin.department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $department = Departements::find($id);
        $data = $request->all();
        $department->update($data);
        return redirect()->route('departments.index')->with('message', 'Department updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = Departements::find($id);
        $department->delete();
        return redirect()->route('departments.index')->with('message', 'Department deleted successfully');
    }
}
