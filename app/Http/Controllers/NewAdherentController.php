<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Adherent;
use DateTime;
use Validator;

class NewAdherentController extends Controller
{
    /****Expressions régulières liées au formulaire */
    //Expression régulière pour le nom
    //$nameregex='/[\W]/';

    //Expression pour les numéros
    //$numberregex='/[\D]/';

    /**Fonction pour vérifier si les infos sont correctes */
   /* public function verify(Request $req){
        if(preg_match($nameregex,req->get('name'))){
            $msg='Le nom ne doit contenir que des lettres.\n';
        }
        if(preg_match($numberregex,req->get('number'))){
            $msg= $msg .' Le numéro de téléphone ne doit contenir que des chiffres. \n';
        }
    }*/
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adherents = Adherent::all();
        return view('listeAdherents',compact('adherents'));
    }

    public function index2()
    {
        $adherents = Adherent::all();
        return view('listAdherents',compact('adherents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('newAdherent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /**MEssages d'erreurs */
        $messages= [
            'required' => 'Le champ :attribute est requis',
            'same'     => 'Les champs :attribute et :other doivent être identiques',
            'size'    => 'Le champ :attribute doit être exactememt de longeur :9',
            
        ];
        
        /**Vaalidation des données */
        $validator = Validator::make($request->all(), [
            'name' => 'bail|required|alpha',
            'prename' => 'bail|required|alpha',
            'cni'     => 'bail|required|digits:9',
            'number'  => 'bail|required|digits:9',
            'passwd'  => 'required|min:6',
            'confirmpwd'=> 'required|same:passwd',
        ]);

        //REdirection
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput($request->input());
        echo($validator);
           /* return redirect()->to($this->url('adherent/create'))
                    ->withInput($request->input())
                    ->withErrors($errors, $this->errorBag());*/
        }
         
         $adherent = new Adherent();
         $adherent->nom=$request->get('name');
         $adherent->prenom=$request->get('prename');
         $adherent->numCni=$request->get('cni');
         $adherent->telephone=$request->get('number');
         $adherent->password=bcrypt($request->get('passwd'));
         $adherent->etat=0;
         //$date= date_create(date("Y-m-d H:i:s"));
         //$format=date_format($date,"Y-m-d");
         //$adherent->dateAdhesion=strtotime($format);
         $date=new DateTime();
         $adherent->dateAdhesion=$date;
         $adherent->save();

         return view('index')->with('success', 'Information has been added');
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
