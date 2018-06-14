<?php
/**
 * Created by PhpStorm.
 * User: Salomon Donald N.B
 * Date: 14/06/2018
 * Time: 04:58
 */

namespace App\Http\Controllers;

use App\Retour;
use Illuminate\Http\Request;
use App\Adherent;
use App\Emprunt;
use Validator;
use DateTime;

class EmpruntsController
{
    public function empruntEstPossible($montantDemander){
        $fond = Fond::orderBy('idFond','desc')->first();

        $diff = $fond->soldeEnCours - $montantDemander;

        if($diff <= 0){
            return false;
        }else{
            return true;
        }
    }

    public function updateFond($montant)
    {
        $fond = Fond::orderBy('idFond','desc')->first();
        $fond1 = new Fond();
        if(!empty($fond)){
            $fond1->soldeInitial = $fond->soldeEnCours;
            $fond1->soldeEnCours = $fond->soldeEnCours - $montant;
            $fond1->save();
        }

        return $fond1->idFond;
    }

    /*
     * On verifie juste qu'il est elligible pour un emprunt
     */
    public function isInEmprunt($matricule){
        if (Adherent::find($matricule)->where('etat', '1') == null){
            return false;
        }else{
            return true;
        }
    }

    /*
     * Methode pour effectuer un emprunt
     */
    public  function verification(Request $request, $matricule){
        $validator = Validator::make($request->all(), [
            'montant'=>'required',
        ]);

        //Redirection
        if ($validator->fails()) {
            return redirect('action')
                ->withErrors($validator)
                ->withInput($request->input());
        }

        $emprunt = new Emprunt();

        $emprunt->matricule = $matricule;
        $emprunt->montantEmprunt = $request->get('montant');
        $date = new DateTime();
        $emprunt->dateEmprunt = $date;



        if($this->isInEmprunt($matricule)){
            if ($this->empruntEstPossible()){
                $emprunt->idFond = $this->updateFond($emprunt->montantEmprunt);
                $emprunt->save();
            }
        }
        return back();
    }

    public function reboursement(Request $request, $matricule){
        /**Validation des données */
        $validator = Validator::make($request->all(), [
            'montantR'=>'required',
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

         $retour = new Retour();

        $emprunt = Emprunt::find($matricule);
        if($emprunt != null){
            $adherent = Adherent::find($matricule);
            $montantEmp = $adherent->emprunt;

            $montantR = $request->get('montantR');
            $verif = $montantEmp - $montantR;
            if($verif == 0){
                $date = new DateTime();
                $retour->emprunt = $montantR;
                $retour->idEmprunt = $emprunt->idEmprunt;
                $retour->dateRetour = $date;
                $adherent->emprunts = 0;
                $adherent->save();
                $retour->save();

                Emprunt::find($matricule)->remove();

            }else{
                $date = new DateTime();
                $retour->emprunt = $montantR;
                $retour->idEmprunt = $emprunt->idEmprunt;
                $retour->dateRetour = $date;
                $adherent->emprunts -= $montantR;
                $adherent->save();
                $retour->save();
            }

            return back();
        }
    }

    public  function listeAdherents(){
        $listeIdAdherents = Emprunt::all('matricule');
        $listeAdherentsEnCours = Adherent::find($listeIdAdherents)->where('');

        return view('emprunts', compact('adherents'));return view('emprunts', compact('adherents'));
    }
}