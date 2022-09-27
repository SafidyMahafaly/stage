<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $etudiant = Student::get();

        //echo($nom);
        //dd($etudiant);
        $etudiant = Student::get();

        if($request->ajax()){
            $allData = DataTables::of($etudiant)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                $btn = '<a href="javascript:void(0)" class="btn btn-info editStudent" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Edit">Edit</a>';
                $btn .= '<a href="javascript:void(0)" class="btn btn-danger deleteStudent" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Delete">Delete</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
            return $allData;
        }
        return view('etudiant.index',compact('etudiant'));
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
        Student::updateOrCreate(['id'=>$request->student_id],
        [
            'name'=>$request->name,
            'email'=>$request->email,
        ]
        );
        return response()->json(['success'=>'ajouter avec succe']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
        return response()->json(['success'=>'effacer avec succe']);
    }
}
