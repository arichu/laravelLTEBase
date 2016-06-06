<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $fillable = [
        'order', 'dni', 'deliver_date', 'volumen', 'color','olor', 'espuma', 'aspecto', 'densidad', 'reaccion', 'proteinas','ccetonicos', 'hemoglobina', 'glucosa', 'salbiliares', 'pigbiliares', 'urobilinogeno', 'urobilinogeno','leucocitos','ccetonicos', 'hematies', 'celepiteliales', 'flbacteriana', 'cristales', 'otros', 
        ];

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }

}
