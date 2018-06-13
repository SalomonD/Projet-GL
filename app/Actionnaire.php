<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $matricule
 * @property int $nbParts
 * @property Adherent $adherent
 */
class Actionnaire extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'actionnaire';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'matricule';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['nbParts'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function adherent()
    {
        return $this->belongsTo('App\Adherent', 'matricule', 'matricule');
    }
}
