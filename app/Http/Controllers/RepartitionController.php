<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fond;
use DB;
use Config;
use DateTime;

class RepartitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $max = Fond::max('idFond');
        $fond1 = DB::table('fonds')->where('idFond', '=', $max)->get();
        $fond= $fond1[0]->soldeEnCours;
        $date1 = Config::get('appConfig.startSession');
        $date = new DateTime($date1);
        $solde1 = Fond::where('created_at','=',$date)->get();
        //dd($solde1[0]->soldeEnCours);
        $int = $fond - $solde1[0]->soldeEnCours;
        
        //dd(Config::get('appConfig.adminUsername'));
        return view('repartition',compact('fond','solde1'));
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

   
}
