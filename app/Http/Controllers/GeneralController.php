<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Paciente;

use App\General;

class GeneralController extends Controller
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
        $paciente = Paciente::findOrFail($id);
        return view('analisis.general.create')->withPaciente($paciente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = Paciente::findOrFail($request->user_id);
        $input = $request->all();
        $data = new General();
        $data->fill($input);
        $data->dni = $paciente->dni;
        $data->user_id = $paciente->id;
        $data->save();
        return Redirect('general/' . $data->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = General::findOrFail($id);
        $paciente = Paciente::findOrFail($data->user_id);
        return view('analisis.general.show', ['paciente' => $paciente])->withGeneral($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $general = General::findOrFail($id);
        $item = Paciente::findOrFail($general->user_id);
        return view('analisis.general.edit', ['paciente' => $item])->withGeneral($general);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = General::findOrFail($id);
        $input = $request->all();
        $data->fill($input);
        $data->save();
        return Redirect('paciente/' . $data->user_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = General::findOrFail($id);
        $user_id = $data->user_id;
        $data->delete();
        return Redirect('paciente/' . $user_id);
    }
}
