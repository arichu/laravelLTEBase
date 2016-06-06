<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eform extends Model
{
    protected $fillable = [
        'order', 'dni', 'deliver_date', 'description', 
        ];
    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
