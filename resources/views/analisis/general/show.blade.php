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
                		<h1> </h1>
                			<a href="{{url('paciente/'.$paciente->id)}}" class='btn btn-info'><i class="fa fa-arrow-left"></i> Volver a la lista</a>

                      <a href="#" class="btn btn-primary" onclick="PrintElem('#print')"><i class="fa fa-print"></i> Imprimir</a>
                		</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header"><h3 class="box-title">GENERAL</h3>
					<h4><b>Orden:</b> {{$general->order}}</h4>
					<h4><b>Fecha de entrega:</b> {{$general->deliver_date}}</h4>
					
					<div class="box-tool pull-right">
					</div>
					<div class="box-body"> 
						<h4><b>Volumen:</b> {{$general->volumen}}</h4>
						<h4><b>Color:</b> {{$general->color}}</h4>
						<h4><b>Olor:</b> {{$general->olor}}</h4>
						<h4><b>Espuma:</b> {{$general->espuma}}</h4>
						<h4><b>Aspecto:</b> {{$general->aspecto}}</h4>
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
						<h4><b>Leucocitos:</b> {{$general->leucocitos}}</h4>
						<h4><b>Hematies:</b> {{$general->hematies}}</h4>
						<h4><b>Celepiteliales:</b> {{$general->celepiteliales}}</h4>
						<h4><b>Flora bacteriana:</b> {{$general->flbacteriana}}</h4>
						<h4><b>Cristales:</b> {{$general->cristales}}</h4>
						<h4><b>Otros:</b> {{$general->otros}}</h4>			
					</div>
			</div>
		</div>
		<div class="row print hidden"  id="print">
			<div class="col-xs-12">
				<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:10px;padding:5px 5px;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:10px;font-weight:normal;padding:10px 5px;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:top}
</style>
<table>
  <tr>
    <th colspan="3">Nombre y Apellido</th>
    <th colspan="4">{{$paciente->first_name}} {{$paciente->last_name}}</th>
  </tr>
  <tr>
    <td>Sexo</td>
    <td>@if($paciente->gender == '0') x @endif</td>
    <td>@if($paciente->gender == '1') x @endif</td>
    <td></td>
    <td>Orden</td>
    <td colspan="2">{{$general->order}}</td>
  </tr>
  <tr>
    <td>Edad</td>
    <td colspan="2">{{$paciente->age}}</td>
    <td colspan="2">Fecha de Entrega</td>
    <td colspan="2">{{$general->deliver_date}}</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>General</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Volumen:</td>
    <td>{{$general->volumen}}</td>
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
    <td>Color:</td>
    <td>{{$general->color}}</td>
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
    <td>Olor:</td>
    <td>{{$general->olor}}</td>
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
    <td>Espuma:</td>
    <td>{{$general->espuma}}</td>
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
    <td>Aspecto:</td>
    <td>{{$general->aspecto}}</td>
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
    <td>Densidad:</td>
    <td>{{$general->densidad}}</td>
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
    <td>Reaccion:</td>
    <td>{{$general->reaccion}}</td>
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
    <td>Proteinas:</td>
    <td>{{$general->proteinas}}</td>
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
    <td>Ccetonicos:</td>
    <td>{{$general->ccetonicos}}</td>
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
    <td>Hemoglobina:</td>
    <td>{{$general->hemoglobina}}</td>
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
    <td>Glucosa:</td>
    <td>{{$general->glucosa}}</td>
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
    <td>Sales Biliares:</td>
    <td>{{$general->salbiliares}}</td>
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
    <td>Pigmentos Biliares:</td>
    <td>{{$general->pigbiliares}}</td>
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
    <td>Urobilinogeno:</td>
    <td>{{$general->urobilinogeno}}</td>
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
    <td>Nitritos:</td>
    <td>{{$general->nitritos}}</td>
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
    <td>Leucocitos:</td>
    <td>{{$general->leucocitos}}</td>
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
    <td>Hematies:</td>
    <td>{{$general->hematies}}</td>
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
    <td>Celepiteliales:</td>
    <td>{{$general->celepiteliales}}</td>
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
    <td>Flora bacteriana:</td>
    <td>{{$general->flbacteriana}}</td>
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
    <td>Cristales:</td>
    <td>{{$general->cristales}}</td>
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
    <td>Otros:</td>
    <td>{{$general->otros}}</td>
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
		$(document).ready(function(){
			$('#tableH').DataTable()
		} );
	</script>
@endpush
