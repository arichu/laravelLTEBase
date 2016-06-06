<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Paciente;

use App\Hematologia;
                        
class HematologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($id)
    {
        $paciente=Paciente::findOrFail($id);
        return view('analisis.hematologia.create')->withPaciente($paciente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $this->validate($request,[
            'dni'=>'required|unique:pacientes',
            'first_name'=>'required',
            'last_name'=>'required',
            'age'=>'required',
            'gender'=>'required',
        ]);*/

        $paciente=Paciente::findOrFail($request->user_id);
        $input = $request->all();
        $data = new Hematologia();
        $data ->fill($input);
        $data ->dni=$paciente->dni;
        $data ->user_id=$paciente->id;
        $data = $this->fillB($data);
        $data ->save();
        return Redirect('hematologia/'.$data->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $hematologia = Hematologia::findOrFail($id);
            $paciente = Paciente::findOrFail($hematologia->user_id);
        return view('analisis.hematologia.show',['paciente' => $paciente])->withHematologia($hematologia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hematologia = Hematologia::findOrFail($id);
        $item = Paciente::findOrFail($hematologia->user_id);
        return view('analisis.hematologia.edit',['paciente' => $item])->withHematologia($hematologia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $data=Hematologia::findOrFail($id);
        $input = $request->all();
        $data ->fill($input);
        $data = $this->fillB($data);
        $data ->save();
        return Redirect('paciente/'.$data->user_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        $data=Hematologia::findOrFail($id);
        $user_id=$data->user_id;
        $data->delete();
        return Redirect('paciente/'.$user_id);
    }

    public function fillB ($data){
        $a = $data->globulos_blancos_a / 100;
        $data->globulos_blancos_b = $a;
        $data->segmentados_b = $a * $data->segmentados_a;
        $data->basofilos_b= $a * $data->basofilos_a;
        $data->eosinofilos_b= $a * $data->eosinofilos_a;
        $data->linfocitos_b= $a * $data->linfocitos_a;
        $data->monocitos_b= $a * $data->monocitos_a;
        $data->cayados_b = $a * $data->cayados_a;
        return $data;
    }
}
