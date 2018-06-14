<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $matricule
 * @property int $idEmprunt
 * @property string $dateEmprunt
 * @property float $montantEmprunt
 * @property float $montantARembourse
 * @property int $idFond
 * @property Adherent $adherent
 * @property Fond $fond
 * @property Retour[] $retours
 */
class Emprunt extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'emprunt';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idEmprunt';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['matricule', 'dateEmprunt', 'montantEmprunt', 'montantARembourse', 'idFond'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function adherent()
    {
        return $this->belongsTo('App\Adherent', 'matricule', 'matricule');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fond()
    {
        return $this->belongsTo('App\Fond', 'idFond', 'idFond');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function retours()
    {
        return $this->hasMany('App\Retour', 'idEmprunt', 'idEmprunt');
    }
}
