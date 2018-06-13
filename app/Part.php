<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $matricule
 * @property int $idPart
 * @property string $dateSouscription
 * @property float $montantSouscription
 * @property int $idFond
 * @property Adherent $adherent
 * @property Fond $fond
 */
class Part extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'part';
    public $timestamps = false;


    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idPart';

    /**
     * @var array
     */
    protected $fillable = ['matricule', 'dateSouscription', 'montantSouscription', 'idFond'];

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
}
