<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use Session;
use Validator;
use App\Adherent;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function authenticate(){
        if (Auth::attempt(['matricule' => $matricule, 'password' => $passwd])) {
            // Authentication passed...
            return redirect()->intended('/');
        }
    }

    public function login(Request $request){
        $rules = array (
				
            'matricule' => 'required',
            'passwd' => 'required' 
        );

        $validator = Validator::make ( Input::all (), $rules );
		if ($validator->fails ()) {
			return Redirect::back ()->withErrors ( $validator, 'login' )->withInput ();
		} else {
            if(Auth::attempt ( [
                'matricule' => $request['matricule'],
                'password'    => $request['passwd']]
            )){
                session ( [
                    'matricule' => $request['matricule'],
                ]);
                return redirect()->intended('/listeAdherents');
            } else {
                Session::flash ('message', "Paramètres Incorrects, réessayez svp.");
                //return Redirect::back();
                return view('emprunts');
            }
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return  Redirect::back();
    }
}
