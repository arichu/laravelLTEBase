<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Paciente;

use App\Eform;

class EformController extends Controller
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
        return view('analisis.eform.create')->withPaciente($paciente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $paciente=Paciente::findOrFail($request->user_id);
        $input = $request->all();
        $data = new Eform();
        $data ->fill($input);
        $data ->dni=$paciente->dni;
        $data ->user_id=$paciente->id;
        $data ->save();
        return Redirect('eform/'.$data->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data = Eform::findOrFail($id);
        $paciente = Paciente::findOrFail($data->user_id);
        return view('analisis.eform.show',['paciente' => $paciente])->withEform($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eform = Eform::findOrFail($id);
        $item = Paciente::findOrFail($eform->user_id);
        return view('analisis.eform.edit',['paciente' => $item])->withEform($eform);
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
        $data=Eform::findOrFail($id);
        $input = $request->all();
        $data ->fill($input);
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
        $data=Eform::findOrFail($id);
        $user_id=$data->user_id;
        $data->delete();
        return Redirect('paciente/'.$user_id);
    }
}
