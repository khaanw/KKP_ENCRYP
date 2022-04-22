<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\departments;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departments.index');
    }

    public function data()
    {
        $department = departments::orderBy('idDepartment', 'desc')->get();

        return datatables()
            ->of($department)
            ->addIndexColumn()
            ->addColumn('idDepartment', function ($department) {
                return ($department->idDepartment);
            })
            ->addColumn('aksi', function ($department) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('departments.update', $department->idDepartment) .'`)" class="btn btn-info btn-xs btn-flat"><i class="fas fa-edit"></i></i></button>
                    <button onclick="deleteData(`'. route('departments.destroy', $department->idDepartment) .'`)" class="btn btn-danger btn-xs btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new departments();
        $department->idDepartment=$request->idDepartment;
        $department->namaDepartment = $request->namaDepartment;
        $department->save();

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = departments::find($id);

        return response()->json($department);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $department = departments::find($id);
        $department->namaDepartment = $request->namaDepartment;
        $department->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = departments::find($id);
        $department->delete();

        return response(null, 204);
    }
}
