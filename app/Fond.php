<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idFond
 * @property float $soldeInitial
 * @property float $soldeEnCours
 * @property Emprunt[] $emprunts
 * @property Part[] $parts
 */
class Fond extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idFond';
    public $timestamps = false;


    /**
     * @var array
     */
    protected $fillable = ['soldeInitial', 'soldeEnCours'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emprunts()
    {
        return $this->hasMany('App\Emprunt', 'idFond', 'idFond');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parts()
    {
        return $this->hasMany('App\Part', 'idFond', 'idFond');
    }

    public function store($montant)
    {
        $fond = Fond::orderBy('idFond','desc')->first();
        $fond1 = new Fond();
        if(!empty($fond)){
           $fond1->soldeInitial = $fond->soldeEnCours;
           $fond1->soldeEnCours = $fond->soldeEnCours + $montant;
           $fond1->save();
        }else{
          $fond1->soldeInitial = 0;
           $fond1->soldeEnCours = $montant;
           $fond1->save();
        }
        return $fond1->idFond;
    }
}
