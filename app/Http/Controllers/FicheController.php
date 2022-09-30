<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\fiche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FicheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id   = Auth()->user()->id;
        $info = Employer::where('users_id',$id)->first();
        $etat = DB::select('select * from etat_civil where employer_id = ?',[$info->id]);
        $situation = DB::select('select * from situation where employer_id =?',[$info->id]);
        $affectat  = DB::select('select * from affectation where employer_id = ? and actuelle = 1',[$info->id]);
        $suc       = DB::select('select * from affectation where employer_id = ? and actuelle = 2',[$info->id]);
        $diplome   = DB::select('select * from diplome where employer_id =?',[$info->id]);
        $stage     = DB::select('select * from stage where employer_id = ?',[$info->id]);
        $grade     = DB::select('select * from grades where employer_id = ?',[$info->id]);
        $civile    = DB::select('select * from civile where employer_id = ?',[$info->id]);
        $enfant    = DB::select('select * from enfant where employer_id = ?',[$info->id]);
        return view('fiche.index',compact('info','etat','situation','affectat','suc','diplome','stage','grade','civile','enfant'));
    }
    public function chef()
    {
        $id   = Auth()->user()->id;
        $info = Employer::where('users_id',$id)->first();
        $etat = DB::select('select * from etat_civil where employer_id = ?',[$info->id]);
        $situation = DB::select('select * from situation where employer_id =?',[$info->id]);
        $affectat  = DB::select('select * from affectation where employer_id = ? and actuelle = 1',[$info->id]);
        $suc       = DB::select('select * from affectation where employer_id = ? and actuelle = 2',[$info->id]);
        $diplome   = DB::select('select * from diplome where employer_id =?',[$info->id]);
        $stage     = DB::select('select * from stage where employer_id = ?',[$info->id]);
        $grade     = DB::select('select * from grades where employer_id = ?',[$info->id]);
        $civile    = DB::select('select * from civile where employer_id = ?',[$info->id]);
        $enfant    = DB::select('select * from enfant where employer_id = ?',[$info->id]);
        return view('Chef.ficheC',compact('info','etat','situation','affectat','suc','diplome','stage','grade','civile','enfant'));
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

        $employer_id       = $request->employer_id;
        $departement_id    = $request->departement_id;
        $type_id           = $request->type_id;
        $Noms              = $request->Noms;
        $Prenoms           = $request->Prenoms;
        $Matricule         = $request->Matricule;
        $DateNaiss         = $request->DateNaiss;
        $Lieu              = $request->Lieu;
        $CIN               = $request->CIN;
        $DateCIN           = $request->DateCIN;
        $Duplicata         = $request->Duplicata;
        $Pere              = $request->Pere;
        $Mere              = $request->Mere;
        $Adresse           = $request->Adresse;
        $Telephone         = $request->Telephone;

        DB::insert('insert into etat_civil (employer_id,departement_id,type_id,Noms,Prenoms,Matricule,DateNaiss,Lieu,CIN,DateCIN,Duplicata,Pere,Mere,Adresse,Telephone) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [$request->employer_id, $departement_id, $type_id, $Noms,$Prenoms,$Matricule,$DateNaiss,$Lieu,$CIN,$DateCIN,$Duplicata,$Pere,$Mere,$Adresse,$Telephone] );
        // fiche::create($teste);
        return back();
    }
    public function storeC(Request $request)
    {

        $employer_id       = $request->employer_id;
        $departement_id    = $request->departement_id;
        $type_id           = $request->type_id;
        $Noms              = $request->Noms;
        $Prenoms           = $request->Prenoms;
        $Matricule         = $request->Matricule;
        $DateNaiss         = $request->DateNaiss;
        $Lieu              = $request->Lieu;
        $CIN               = $request->CIN;
        $DateCIN           = $request->DateCIN;
        $Duplicata         = $request->Duplicata;
        $Pere              = $request->Pere;
        $Mere              = $request->Mere;
        $Adresse           = $request->Adresse;
        $Telephone         = $request->Telephone;

        DB::insert('insert into etat_civil (employer_id,departement_id,type_id,Noms,Prenoms,Matricule,DateNaiss,Lieu,CIN,DateCIN,Duplicata,Pere,Mere,Adresse,Telephone) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [$request->employer_id, $departement_id, $type_id, $Noms,$Prenoms,$Matricule,$DateNaiss,$Lieu,$CIN,$DateCIN,$Duplicata,$Pere,$Mere,$Adresse,$Telephone] );
        // fiche::create($teste);
        return back();
    }
    public function situation(Request $request){
        $employer_id      = $request->employer_id;
        $departement_id   = $request->departement_id;
        $type_id          = $request->type_id;
        $DateEntre        = $request->DateEntre;
        $Corps            = $request->Corps;
        $DateCorps        = $request->DateCorps;
        $Grade            = $request->Grade;
        $DateGrade        = $request->DateGrade;
        $Programme        = $request->Programme;

        DB::insert('insert into situation (employer_id,departement_id,type_id,DateEntre,Corps,DateCorps,Grade,DateGrade,Programme) values (?,?,?,?,?,?,?,?,?)',[$employer_id,$departement_id,$type_id,$DateEntre,$Corps,$DateCorps,$Grade,$DateGrade,$Programme]);
        return back();
    }

    public function affectation(Request $request){
        $employer_id        = $request->employer_id;
        $departement_id     = $request->departement_id;
        $type_id            = $request->type_id;
        $direction          = $request->direction;
        $dateEntre          = $request->dateEntre;
        $service            = $request->service;
        $fonction           = $request->fonction;

        DB::insert('insert into affectation (employer_id,departement_id,type_id,direction,dateEntre,service,fonction,actuelle) values (?,?,?,?,?,?,?,?)',[$employer_id,$departement_id,$type_id,$direction,$dateEntre,$service,$fonction,1]);
        return back();

    }

    public function affectationmultiple(Request $request){
        // dd($request->all());
        $employer_id      = $request->employer_id;
        $departement_id   = $request->departement_id;
        $type_id          = $request->type_id;
        $direction        = $request->direction;
        // $dateEntre = $request->dateEntre;
        $service          = $request->service;
        $fonction         = $request->fonction;
        $debut            = $request->debut;
        $fin              = $request->fin;

        // var
        for($i = 0;$i<count($employer_id);$i++){
            $datasave =[
                'employer_id'     => $employer_id[$i],
                'departement_id'  => $departement_id[$i],
                'type_id'         => $type_id[$i],
                'direction'       => $direction[$i],
                // '' => $dateEntre,
                'service'         => $service[$i],
                'fonction'        => $fonction[$i],
                'debut'           => $debut[$i],
                'fin'             => $fin[$i],
                'actuelle'        => '2'
            ];
            DB::table('affectation')->insert($datasave);
            // dd($datasave);
        }
        return back();

    }
    public function diplome(Request $request){
        // dd($request->all());
        $employer_id     = $request->employer_id;
        $departement_id  = $request->departement_id;
        $type_id         = $request->type_id;
        $diplome         = $request->diplome;
        $etab            = $request->etab;
        $obtenue         = $request->obtenue;

        for($i = 0;$i<count($employer_id);$i++){
            $datasave = [
                'employer_id'     => $employer_id[$i],
                'departement_id'  => $departement_id[$i],
                'type_id'         => $type_id[$i],
                'diplome'         =>$diplome[$i],
                'etab'            => $etab[$i],
                'obtenue'         => $obtenue[$i]
            ];
            DB::table('diplome')->insert($datasave);
        }
        return back();
    }

    public function stage(Request $request){
        $employer_id     = $request->employer_id;
        $departement_id  = $request->departement_id;
        $type_id         = $request->type_id;
        $nature          = $request->nature;
        $objet           = $request->objet;
        $lieu            = $request->lieu;
        $dure            = $request->dure;
        $anne            = $request->anne;

        for($i = 0;$i<count($employer_id);$i++){
            $datasave = [
                'employer_id'     => $employer_id[$i],
                'departement_id'  => $departement_id[$i],
                'type_id'         => $type_id[$i],
                'nature'          => $nature[$i],
                'objet'           => $objet[$i],
                'lieu'            => $lieu[$i],
                'dure'            => $dure[$i],
                'anne'            => $anne[$i]
            ];
            DB::table('stage')->insert($datasave);
        }
        return back();

    }


    public function grade(Request $request){
        $employer_id     = $request->employer_id;
        $departement_id  = $request->departement_id;
        $type_id         = $request->type_id;
        $grade = $request->grade;
        $obtention = $request->obtention;
        $date = $request->date;
        for($i = 0;$i<count($employer_id);$i++){
            $datasave = [
                'employer_id'     => $employer_id[$i],
                'departement_id'  => $departement_id[$i],
                'type_id'         => $type_id[$i],
                'grade' => $grade[$i],
                'obtention' => $obtention[$i],
                'date' => $date[$i]
            ];
            DB::table('grades')->insert($datasave);
        }
        return back();
    }

    public function civile(Request $request){
        $employer_id     = $request->employer_id;
        $departement_id  = $request->departement_id;
        $type_id         = $request->type_id;
        $civile = $request->civile;
        $enfant = $request->enfant;
        $epoux = $request->epoux;
        $pere = $request->pere;
        $mere = $request->mere;
        $datasave = [
            'employer_id'     => $employer_id,
            'departement_id'  => $departement_id,
            'type_id'         => $type_id,
            'civilite'        => $civile,
            'enfant'          => $enfant,
            'epoux'           => $epoux,
            'pere'            => $pere,
            'mere'            => $mere,
        ];
        DB::table('civile')->insert($datasave);
        return back();
    }
    public function enfant(Request $request){
        $employer_id     = $request->employer_id;
        $departement_id  = $request->departement_id;
        $type_id         = $request->type_id;
        $nom             = $request->nom;
        $date            = $request->date;
        $lieu            = $request->lieu;
        $sexe            = $request->sexe;

        for($i = 0;$i<count($employer_id);$i++){
            $datasave = [
                'employer_id'     => $employer_id[$i],
                'departement_id'  => $departement_id[$i],
                'type_id'         => $type_id[$i],
                'nom'             => $nom[$i],
                'date'            => $date[$i],
                'lieu'            => $lieu[$i],
                'sexe'            =>$sexe[$i],
            ];
            DB::table('enfant')->insert($datasave);
        }
        return back();

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function show(fiche $fiche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function edit(fiche $fiche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fiche $fiche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function destroy(fiche $fiche)
    {
        //
    }
}
