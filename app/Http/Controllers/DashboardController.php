<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use App\Models\Role;
// use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $req = DB::select('select role_id from role_user where user_id = ?',[$id]);
        if($req[0]->role_id == 1){
            return view('Admin.index');
        }elseif($req[0]->role_id == 2){
            return view('Chef.index');
        }else{
            return view('Employer.index');
        }
    }
}
