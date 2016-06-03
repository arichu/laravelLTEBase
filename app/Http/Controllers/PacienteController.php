<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paciente;

use App\Hematologia;

use App\Http\Requests;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $items= Paciente::orderBy('created_at','asc')->get();
        return view('paciente.index',['data'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\12Response
     */
    public function store(Request $request)
    {
         $validator= Validator::make($request->all(),[
                'dni'=>'required',
                'first_name'=>'required',
                'last_name'=>'required',
                'age'=>'required',
                'gender'=>'required',
            ]);
        if($validator->fails())
        {
            return Redirect::back()
            ->withInput()
            ->withErrors($validator);
        }
        $data = new Paciente();
        $data ->fill($request->all());
        $data ->save();
        return Redirect('paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $item = Paciente::findOrFail($id);
            $hematologia = Paciente::find($id)->hematologia;
            if(empty($hematologia)){
                $hematologia = [];
            }
        return view('paciente.show',['hematologias' => $hematologia])->withPaciente($item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Paciente::findOrFail($id);
        return view('paciente.edit')->withPaciente($item);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
