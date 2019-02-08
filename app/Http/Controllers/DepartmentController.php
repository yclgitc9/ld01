<?php

namespace App\Http\Controllers;

use App\Department;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\App\Department\StoreDepartmentsRequest;
use App\Http\Requests\App\Department\UpdateDepartmentsRequest;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('app/departments/index', compact('departments'));
        // return("naaber");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('app/books/create');
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'name');

        return view('app.departments.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepartmentsRequest $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $department = Department::create($request->all());
        // dd($book);
        // $roles = $request->input('roles') ? $request->input('roles') : [];
        // $user->assignRole($roles);

        return redirect()->route('departments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $department = Department::findOrFail($id);

        return view('app.departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartmentsRequest $request, $id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $department = Department::findOrFail($id);
        $department->update($request->all());

        return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
    }
}
