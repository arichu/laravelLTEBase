<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hematologia extends Model
{
    //
    protected $fillable = [
        'order', 'dni', 'deliver_date', 'globulos_rojos', 'hematrocito','hemoglobina', 'vcm', 'hbcm', 'chbcm', 'vsg', '1rahora','plaquetas','globulos_blancos_a', 
            'globulos_blancos_b',
            'cayados_a',
            'cayados_b',
            'segmentados_a',
            'segmentados_b',
            'basofilos_a',
            'basofilos_b',
            'eosinofilos_a',
            'eosinofilos_b',
            'linfocitos_a',
            'linfocitos_b',
            'monocitos_a',
            'monocitos_b',
            'comment',
        ];
    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
