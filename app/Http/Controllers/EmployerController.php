<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Employer;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $employer = Employer::
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

    public function equipe()
    {
        $id     = Auth()->user()->id;
        $type   = Type::all();
        $chef   = DB::select('select * from employers where users_id = ?',[$id]);
        $equipe = Employer::where('departement_id',$chef[0]->departement_id)
                        ->where('users_id','!=',$id)
                        ->get();
        $departement = Departement::where('id',$chef[0]->departement_id)->get();
        return view('chef.equipe',compact('equipe','type','departement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo('test');
        DB::beginTransaction();
        try{
            $user  = new User();
            $user->name = $request->input('nom');
            $user->email = $request->input('email');
            $user->password = Hash::make('0000');
            $user->save();

            $employer = new Employer();
            $employer->nom = $request->input('nom');
            $employer->matricule = $request->input('matricule');
            $employer->prenom = $request->input('prenom');
            $employer->email = $request->input('email');
            $employer->telephone = $request->input('telephone');
            $employer->fontion = $request->input('fontion');
            $employer->Type_id = $request->input('Type_id');
            $employer->departement_id = $request->input('departement_id');
            $employer->service_id = $request->input('service_id');
            $employer->statut = $request->input('statut');
            $employer->users_id = $user->id;
            $employer->save();

            DB::insert("insert into role_user(user_id,role_id,user_type) VALUES (?,?,?)",[$user->id,3,'App\Models\User']);

            DB::commit();
            return back();

        }catch(Exception $e){
            DB::rollBack();
            // return back()->withErrors('erreur','erreur');

            echo('test');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
        //
    }

    public function change(Request $request){
        $id = $request->id;
        $user_id = $request->users_id;
        DB::update('update employers SET statut = 2 where id = ?',[$id]);
        DB::update('update role_user SET role_id = 2 where user_id = ?',[$user_id]);
        return response()->json($id);
    }
    public function del(Request $request){
        $id = $request->id;
        $user_id = $request->users_id;
        DB::update('update role_user SET role_id = 3 where user_id = ?',[$user_id]);
        DB::update('update employers SET statut = 1 where id = ?',[$id]);
        return response()->json($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employer $employer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employer $employer)
    {
        //
    }
}
