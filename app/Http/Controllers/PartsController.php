<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Part;
use App\Fond;
use App\Actionnaire;
use App\Adherent;
use Validator;
use DateTime;

class PartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function actionnaireExist($matricule){
        if (Actionnaire::find($matricule)==null){
            return false;
        }else{
            return true;
        }
    }
    
     public function index()
    {
        //
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
    public function store( Request $request, $matricule)
    {
        /**Validation des données */
        $validator = Validator::make($request->all(), [
            'montantSous'=>'required',
        ]);
         //REdirection
        if ($validator->fails()) {
            return redirect('action')
                        ->withErrors($validator)
                        ->withInput($request->input());
        echo($validator);
           /* return redirect()->to($this->url('adherent/create'))
                    ->withInput($request->input())
                    ->withErrors($errors, $this->errorBag());*/
        }
        $part = new Part();
        $part->matricule = $matricule;
        $part->montantSouscription = $request->get('montantSous');
        $date = new DateTime();
        $part->dateSouscription = $date;
        $test = new Fond();
        $part->idFond = $test->store($request->get('montantSous'));
        $part->save();
        if($this->actionnaireExist($matricule)){
            $ad = Actionnaire::find($matricule);
            $ad->nbParts += $request->get('montantSous')/1000;
            $ad->save();
        }else{
            $ad = new Actionnaire();
            $ad->matricule = $matricule;
            $ad->nbParts = ($request->get('montantSous')/1000);
            $ad->save();
        }
        return back();
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
        //
    }
}
