@extends('layouts.app')

@section('htmlheader_title')
    Evaluacion General
@endsection
@section('contentheader_title')
    @lang('general.showtitle')
@endsection
@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header"><h3 class="box-title">Examen general</h3></div>
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
                <div class="box-header"><h3 class="box-title"><b>GENERAL</b></h3>
                    <h4><b>Orden:</b> {{$general->order}}</h4>
                    <h4><b>Fecha de entrega:</b> {{$general->deliver_date}}</h4>

                    <div class="box-tool pull-right">
                    </div>
                    <div class="box-body">
                        <h2>Examen Fisico</h2>
                        <h4><b>Volumen:</b> {{$general->volumen}}</h4>
                        <h4><b>Color:</b> {{$general->color}}</h4>
                        <h4><b>Olor:</b> {{$general->olor}}</h4>
                        <h4><b>Espuma:</b> {{$general->espuma}}</h4>
                        <h4><b>Aspecto:</b> {{$general->aspecto}}</h4>
                        <h2>Examen Quimico</h2>
                        <h4><b>Densidad:</b> {{$general->densidad}}</h4>
                        <h4><b>Reaccion:</b> {{$general->reaccion}}</h4>
                        <h4><b>Proteinas:</b> {{$general->proteinas}}</h4>
                        <h4><b>Ccetonicos:</b> {{$general->ccetonicos}}</h4>
                        <h4><b>Hemoglobina:</b> {{$general->hemoglobina}}</h4>
                        <h4><b>Glucosa:</b> {{$general->glucosa}}</h4>
                        <h4><b>Sales Biliares:</b> {{$general->salbiliares}}</h4>
                        <h4><b>Pigmentos Biliares:</b> {{$general->pigbiliares}}</h4>
                        <h4><b>Urobilinogeno:</b> {{$general->urobilinogeno}}</h4>
                        <h4><b>Nitritos:</b> {{$general->nitritos}}</h4>
                        <h2>Examen Microscopico</h2>
                        <h4><b>Leucocitos:</b> {{$general->leucocitos}}</h4>
                        <h4><b>Hematies:</b> {{$general->hematies}}</h4>
                        <h4><b>Celepiteliales:</b> {{$general->celepiteliales}}</h4>
                        <h4><b>Flora bacteriana:</b> {{$general->flbacteriana}}</h4>
                        <h4><b>Cristales:</b> {{$general->cristales}}</h4>
                        <h4><b>Otros:</b> {{$general->otros}}</h4>
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

                        tr.spaceUnder > td {
                            padding-bottom: 6px;
                        }

                        td.spaceLefto {
                            padding-left: 140px;
                        }

                        .tg .tg-yw4l {
                            vertical-align: top
                        }
                    </style>
                    <table style="table-layout: fixed; width: 100%;">
                        <tr>
                            <td></td>
                            <td colspan="6">
                                <div style="padding-left: 50px">{{$paciente->first_name}} {{$paciente->last_name}}</div>
                            </td>
                        </tr>
                        <tr>

                            <td>@if($paciente->gender == '0')
                                    <div style="padding-left: 55px;"> x</div>@endif</td>
                            <td>@if($paciente->gender == '1')
                                    <div style="padding-left: 40px;"> x</div>@endif</td>
                            <td></td>
                            <td colspan="4">
                                <div style="padding-left: 50px">{{$general->order}}</div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{{$paciente->age}}</td>
                            <td></td>
                            <td colspan="3">
                                <div style="padding-left: 50px">{{$general->deliver_date}}</div>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <table style="padding-top: 40px; padding-left: 200px">
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
                            <td>@if(!empty($general->volumen))
                                    {{$general->volumen}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->color))
                                    {{$general->color}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                @if(!empty($general->olor))
                                    {{$general->olor}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->espuma))
                                    {{$general->espuma}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->aspecto))
                                    {{$general->aspecto}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->densidad))
                                    {{$general->densidad}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->reaccion))
                                    {{$general->reaccion}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->proteinas))
                                    {{$general->proteinas}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->ccetonicos))
                                    {{$general->ccetonicos}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->hemoglobina))
                                    {{$general->hemoglobina}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->glucosa))
                                    {{$general->glucosa}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->salbiliares))
                                    {{$general->salbiliares}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->pigbiliares))
                                    {{$general->pigbiliares}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->urobilinogeno))
                                    {{$general->urobilinogeno}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->nitritos))
                                    {{$general->nitritos}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->leucocitos))
                                    {{$general->leucocitos}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->hematies))
                                    {{$general->hematies}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->celepiteliales))
                                    {{$general->celepiteliales}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->flbacteriana))
                                    {{$general->flbacteriana}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->cristales))
                                    {{$general->cristales}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>@if(!empty($general->otros))
                                    {{$general->otros}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
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
