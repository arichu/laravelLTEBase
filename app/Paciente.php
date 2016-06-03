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
        return $this->hasMany(General::class);
    }

    public function hematologias()
    {
        return $this->hasMany(Hematologia::class);
    }

    public function eforms()
    {
        return $this->hasMany(Eform::class);
    }
}
