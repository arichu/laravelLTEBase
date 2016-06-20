@extends('layouts.app')

@section('htmlheader_title')
    Hematologia
@endsection
@section('contentheader_title')
    @lang('hematologia.showtitle')
@endsection
@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header"><h3 class="box-title">Paciente</h3></div>
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
                <div class="box-header"><h3 class="box-title">HEMATOLOGIA</h3>
                    <h4>Orden:</h4>
                    <p><h4>{{$hematologia->order}}</h4></p>
                    <h4>Fecha de entrega:</h4>
                    <p><h4>{{$hematologia->deliver_date}}</h4></p>
                    <div class="box-tool pull-right">
                    </div>
                    <div class="box-body">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h2>Valores paciente</h2>
                            <h3>SERIE ROJA:</h3>
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <p>Globulos rojos:</p>
                                <p>Hematocrito:</p>
                                <p>Hemoglobina:</p>
                                <p>V.C.M.:</p>
                                <p>Hb.C.M.:</p>
                                <p>C.Hb.C.M.:</p>
                                <p>VSG</p>
                                <p>1ra hora:</p>
                                <p>PLAQUETAS: </p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <p>{{$hematologia->globulos_rojos}}</p>
                                <p>{{$hematologia->hematrocito}}</p>
                                <p>{{$hematologia->hemoglobina}}</p>
                                <p>{{$hematologia->vcm}}</p>
                                <p>{{$hematologia->hbcm}}</p>
                                <p>{{$hematologia->chbcm}}</p>
                                <p>{{$hematologia->vsg}}</p>
                                <p>-</p>
                                <p>{{$hematologia->plaquetas}}</p>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <p>Mil/mm3</p>
                                <p>%</p>
                                <p>gr/100ml</p>
                                <p>fl</p>
                                <p>pg</p>
                                <p>g/dl</p>
                                <p>-</p>
                                <p>mm/hrs</p>
                                <p>mm3</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 pull-left">
                            <h2>Valores de referencia</h2>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <h3>HOMBRES:</h3>
                                <p>4600-6400</p>
                                <p>43-58</p>
                                <p>14,0-19,2</p>
                                <p>87-98</p>
                                <p>25-3</p>
                                <p>29-36</p>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <h3>MUJERES:</h3>
                                <p>4200-5600</p>
                                <p>40-53</p>
                                <p>12,5-17,0</p>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <h3>NIÑOS:</h3>
                                <p>3700-5400</p>
                                <p>31-43</p>
                                <p>11,0-16,0</p>
                            </div>
                        </div>

                    </div>
                    <div class="box-body">
                        <h3>SERIE BLANCA:</h3>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <p>Globulos blancos:</p>
                                <p>Cayados:</p>
                                <p>Segmentados:</p>
                                <p>Basofilos:</p>
                                <p>Eosinofilos:</p>
                                <p>Linfocitos:</p>
                                <p>Monocitos</p>
                                <p>Commentario:</p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-12 ">
                                <p>{{$hematologia->globulos_blancos_a}}</p>
                                <p>{{$hematologia->cayados_a}}</p>
                                <p>{{$hematologia->segmentados_a}}</p>
                                <p>{{$hematologia->basofilos_a}}</p>
                                <p>{{$hematologia->eosinofilos_a}}</p>
                                <p>{{$hematologia->linfocitos_a}}</p>
                                <p>{{$hematologia->monocitos_a}}</p>
                                <p>{{$hematologia->comment}}</p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <p>%</p>
                                <p>%</p>
                                <p>%</p>
                                <p>%</p>
                                <p>%</p>
                                <p>%</p>
                                <p>%</p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-12 ">
                                <p>{{$hematologia->globulos_blancos_b}}</p>
                                <p>{{$hematologia->cayados_b}}</p>
                                <p>{{$hematologia->segmentados_b}}</p>
                                <p>{{$hematologia->basofilos_b}}</p>
                                <p>{{$hematologia->eosinofilos_b}}</p>
                                <p>{{$hematologia->linfocitos_b}}</p>
                                <p>{{$hematologia->monocitos_b}}</p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-12 ">
                                <p>5000-10000</p>
                                <p>0-5</p>
                                <p>40-70</p>
                                <p>0-2</p>
                                <p>0-4</p>
                                <p>20-40</p>
                                <p>0-5</p>
                            </div>
                        </div>
                    </div>
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
                            <div style="padding-left: 50px">{{$hematologia->order}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>{{$paciente->age}}</td>
                        <td></td>
                        <td colspan="3">
                            <div style="padding-left: 50px">{{$hematologia->deliver_date}}</div>
                        </td>
                        <td></td>
                    </tr>
                </table>
                {{--Datos de div locos--}}
                <div style="padding-top: 120px; padding-left: 115px ">

                    <table>
                        <tr class="spaceUnder">
                            <td></td>
                            <td colspan="2">
                                <div>@if(!empty($hematologia->globulos_rojos))
                                        {{$hematologia->globulos_rojos}}
                                    @else
                                        -
                                    @endif
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="spaceUnder">
                            <td></td>
                            <td colspan="2">
                                <div>@if(!empty($hematologia->hematrocito))
                                        {{$hematologia->hematrocito}}
                                    @else
                                        -
                                    @endif
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="spaceUnder">
                            <td></td>
                            <td>
                                <div>@if(!empty($hematologia->hemoglobina))
                                        {{$hematologia->hemoglobina}}
                                    @else
                                        -
                                    @endif
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="spaceUnder">
                            <td></td>
                            <td>
                                <div>@if(!empty($hematologia->vcm))
                                        {{$hematologia->vcm}}
                                    @else
                                        -
                                    @endif
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="spaceUnder">
                            <td></td>
                            <td>
                                <div>@if(!empty($hematologia->hbcm))
                                        {{$hematologia->hbcm}}
                                    @else
                                        -
                                    @endif
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="spaceUnder">
                            <td></td>
                            <td>
                                <div>@if(!empty($hematologia->chbcm))
                                        {{$hematologia->chbcm}}
                                    @else
                                        -
                                    @endif
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>

                    <table style="padding-top: 25px">
                        <tr class="spaceUnder">
                            <td></td>
                            <td>
                                <div>@if(!empty($hematologia->vsg))
                                        {{$hematologia->vsg}}
                                    @else
                                        -
                                    @endif
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="spaceUnder">
                            <td></td>
                            <td colspan="2"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="spaceUnder">
                            <td></td>
                            <td colspan="2">
                                <div style="padding-top: 15px">
                                    <div>@if(!empty($hematologia->plaquetas))
                                            {{$hematologia->plaquetas}}
                                        @else
                                            -
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div style="padding-top: 50px; padding-left: 115px;">
                    <table>
                        <tr class="spaceUnder">
                            <td></td>
                            <td colspan="2">
                                @if(!empty($hematologia->globulos_blancos_a))
                                    {{$hematologia->globulos_blancos_a}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td class="spaceLefto">
                                @if(!empty($hematologia->globulos_blancos_b))
                                    {{$hematologia->globulos_blancos_b}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                        </tr>
                        <tr class="spaceUnder">
                            <td></td>
                            <td colspan="2">
                                @if(!empty($hematologia->cayados_a))
                                    {{$hematologia->cayados_a}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td class="spaceLefto">
                                @if(!empty($hematologia->cayados_b))
                                    {{$hematologia->cayados_b}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                        </tr>
                        <tr class="spaceUnder">
                            <td></td>
                            <td colspan="2">
                                @if(!empty($hematologia->segmentados_a))
                                    {{$hematologia->segmentados_a}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td class="spaceLefto">
                                @if(!empty($hematologia->segmentados_b))
                                    {{$hematologia->segmentados_b}}
                                @else
                                    -
                                @endif</td>
                            <td></td>
                        </tr>
                        <tr class="spaceUnder">
                            <td></td>
                            <td colspan="2">
                                @if(!empty($hematologia->basofilos_a))
                                    {{$hematologia->basofilos_a}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td class="spaceLefto">
                                @if(!empty($hematologia->basofilos_b))
                                    {{$hematologia->basofilos_b}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                        </tr>
                        <tr class="spaceUnder">
                            <td></td>
                            <td colspan="2">
                                @if(!empty($hematologia->eosinofilos_a))
                                    {{$hematologia->eosinofilos_a}}
                                @else
                                    -
                                @endif</td>
                            <td></td>
                            <td></td>
                            <td class="spaceLefto">
                                @if(!empty($hematologia->eosinofilos_b))
                                    {{$hematologia->eosinofilos_b}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                        </tr>
                        <tr class="spaceUnder">
                            <td></td>
                            <td colspan="2">
                                @if(!empty($hematologia->linfocitos_a))
                                    {{$hematologia->linfocitos_a}}
                                @else
                                    -
                                @endif</td>
                            <td></td>
                            <td></td>
                            <td class="spaceLefto">
                                @if(!empty($hematologia->linfocitos_b))
                                    {{$hematologia->linfocitos_b}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                        </tr>
                        <tr class="spaceUnder">
                            <td></td>
                            <td colspan="2">
                                @if(!empty($hematologia->monocitos_a))
                                    {{$hematologia->monocitos_a}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                            <td></td>
                            <td class="spaceLefto">
                                @if(!empty($hematologia->monocitos_b))
                                    {{$hematologia->monocitos_b}}
                                @else
                                    -
                                @endif
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <div style="padding-top: 6px">
                        @if(!empty($hematologia->comment))
                            {{$hematologia->comment}}
                        @else
                            -
                        @endif
                    </div>
                </div>


            </div>
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
