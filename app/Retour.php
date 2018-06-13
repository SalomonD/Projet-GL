<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idRetour
 * @property string $dateRetour
 * @property float $montantRetour
 * @property int $idEmprunt
 * @property Emprunt $emprunt
 */
class Retour extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'retour';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idRetour';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    protected $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['dateRetour', 'montantRetour', 'idEmprunt'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function emprunt()
    {
        return $this->belongsTo('App\Emprunt', 'idEmprunt', 'idEmprunt');
    }
}
