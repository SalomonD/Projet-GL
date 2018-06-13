<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int $matricule
 * @property string $nom
 * @property string $prenom
 * @property int $numCni
 * @property int $telephone
 * @property string $password
 * @property string $dateAdhesion
 * @property boolean $etat
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Actionnaire $actionnaire
 * @property Emprunt[] $emprunts
 * @property Part[] $parts
 */
class Adherent extends Authenticatable
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'adherent';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'matricule';

    /**
     * @var array
     */
    protected $fillable = ['nom', 'prenom', 'numCni', 'telephone', 'password', 'dateAdhesion', 'etat', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function actionnaire()
    {
        return $this->hasOne('App\Actionnaire', 'matricule', 'matricule');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emprunts()
    {
        return $this->hasMany('App\Emprunt', 'matricule', 'matricule');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parts()
    {
        return $this->hasMany('App\Part', 'matricule', 'matricule');
    }
}
