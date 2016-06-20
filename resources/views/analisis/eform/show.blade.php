@extends('layouts.app')

@section('htmlheader_title')
    Formulario
@endsection
@section('contentheader_title')
    @lang('eform.showtitle')
@endsection
@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header"><h3 class="box-title">Formulario</h3></div>
                <div class="box-body">
                    <h4><b>Nombre del paciente:</b> {{$paciente->first_name}}</h4>
                    <h4><b>Apellido del paciente:</b> {{$paciente->last_name}}</h4>
                    <h4><b>Carnet de identidad:</b> {{$paciente->dni}}</h4>
                    <h4><b>Genero:</b>
                        @if($paciente->gender == '1')
                            Masculino
                        @else
                            Femenino
                        @endif
                    </h4>
                    <h4><b>Edad:</b> {{$paciente->age}} Años</h4>
                    <h4><b>Fecha de ingreso al sistema en :</b> {{$paciente->created_at}}</h4>
                    <div>
                        <h1></h1>
                        <a href="{{url('paciente/'.$paciente->id)}}" class='btn btn-info'><i
                                    class="fa fa-arrow-left"></i> Volver a la lista</a>

                        <a href="#" class="btn btn-primary" onclick="PrintElem('#print')"><i class="fa fa-print"></i>
                            Imprimir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header"><h3 class="box-title">FORMULARIO</h3>
                    <h4><b>Orden:</b> {{$eform->order}}</h4>
                    <h4><b>Fecha de entrega:</b> {{$eform->deliver_date}}</h4>

                    <div class="box-tool pull-right">
                    </div>
                    <div class="box-body">
                        {!!$eform->description!!}
                    </div>
                </div>
            </div>
            <div class="row print hidden" id="print">
                <div class="col-xs-12">
                    <style type="text/css">
                        .tg {
                            border-collapse: collapse;
                            border-spacing: 0;
                        }

                        .tg td {
                            font-family: Arial, sans-serif;
                            font-size: 10px;
                            padding: 5px 5px;
                            border-width: 1px;
                            overflow: hidden;
                            word-break: normal;
                        }

                        .tg th {
                            font-family: Arial, sans-serif;
                            font-size: 10px;
                            font-weight: normal;
                            padding: 10px 5px;
                            border-width: 1px;
                            overflow: hidden;
                            word-break: normal;
                        }

                        .tg .tg-yw4l {
                            vertical-align: top
                        }
                    </style>
                    <table style="table-layout: fixed; width: 100%;">
                        <tr>
                            <td></td>
                            <td colspan="6"><div style="padding-left: 50px">{{$paciente->first_name}} {{$paciente->last_name}}</div></td>
                        </tr>
                        <tr>

                            <td>@if($paciente->gender == '0')
                                    <div style="padding-left: 55px;"> x</div>@endif</td>
                            <td>@if($paciente->gender == '1')
                                    <div style="padding-left: 40px;"> x</div>@endif</td>
                            <td></td>
                            <td colspan="4"><div style="padding-left: 50px">{{$eform->order}}</div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{{$paciente->age}}</td>
                            <td></td>
                            <td colspan="3"><div style="padding-left: 50px">{{$eform->deliver_date}}</div></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="4">
                                <div style="padding-top: 20px;">

                                    {!!$eform->description!!}
                                </div>
                            </td>

                            <td></td>
                            <td></td>
                        </tr>
                    </table>

                </div>
            </div>
            @endsection
            @push('pagescripts')
            <script>
                $(document).ready(function () {
                    $('#tableH').DataTable()
                });
            </script>
    @endpush
