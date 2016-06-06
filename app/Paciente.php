<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Paciente extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'dni', 'age', 'gender',
        ];
                    // Other Eloquent Properties...

    /**
     * Get all of the tasks for the user.
     */
    public function generals()
    {
        return $this->hasMany('App\General', 'user_id');
    }

    public function hematologias()
    {
        return $this->hasMany('App\Hematologia', 'user_id');
    }

    public function eforms()
    {
        return $this->hasMany('App\Eform', 'user_id');
    }
    protected static function boot() {
        parent::boot();
        static::deleted(function ($paciente) {
            foreach($paciente->hematologias as $gen) {
                $gen->delete();
            }
            foreach($paciente->generals as $gen) {
                $gen->delete();
            }
            foreach($paciente->eforms as $gen) {
                $gen->delete();
            }
        });
    }
}
