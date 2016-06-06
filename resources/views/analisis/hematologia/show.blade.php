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
                		<h4><b>Edad:</b> {{$paciente->age}} Anios</h4>
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
    <td colspan="2">{{$hematologia->order}}</td>
  </tr>
  <tr>
    <td>Edad</td>
    <td colspan="2">{{$paciente->age}}</td>
    <td colspan="2">Fecha de Entrega</td>
    <td colspan="2">{{$hematologia->deliver_date}}</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>HEMATOLOGIA</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>VALORES PACIENTE</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>VALORES DE REFERENCIA</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>Hombres</td>
    <td>Mujeres</td>
    <td>Niños</td>
  </tr>
  <tr>
    <td>SERIE ROJA</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Globulos rojos</td>
    <td colspan="2">{{$hematologia->globulos_rojos}}</td>
    <td>Mil/mm3</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Hematocrito</td>
    <td colspan="2">{{$hematologia->hematocrito}}</td>
    <td>%</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Hemoglobina</td>
    <td colspan="2">{{$hematologia->hemoglobina}}</td>
    <td>gr/100ml</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>V.C.M</td>
    <td colspan="2">{{$hematologia->vcm}}</td>
    <td>fl</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Hb.C.M</td>
    <td colspan="2">{{$hematologia->hbcm}}</td>
    <td>pg</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>C.Hb.C.M</td>
    <td colspan="2">{{$hematologia->chbcm}}</td>
    <td>g/dl</td>
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
    <td></td>
  </tr>
  <tr>
    <td>VSG</td>
    <td colspan="2">{{$hematologia->vsg}}</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>1ra hora</td>
    <td colspan="2"></td>
    <td>mm/hrs.</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>PLAQUETAS</td>
    <td colspan="2">{{$hematologia->plaquetas}}</td>
    <td>mm3</td>
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
    <td></td>
  </tr>
  <tr>
    <td>SERIE BLANCA</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Globulos blancos</td>
    <td colspan="2">{{$hematologia->globulos_blancos_a}}</td>
    <td>mm3</td>
    <td></td>
    <td>{{$hematologia->globulos_blancos_b}}</td>
    <td>5000-10000</td>
  </tr>
  <tr>
    <td>Cayados</td>
    <td colspan="2">{{$hematologia->cayados_a}}</td>
    <td>%</td>
    <td></td>
    <td>{{$hematologia->cayados_b}}</td>
    <td>0-5</td>
  </tr>
  <tr>
    <td>Segmentados</td>
    <td colspan="2">{{$hematologia->segmentados_a}}</td>
    <td>%</td>
    <td></td>
    <td>{{$hematologia->segmentados_b}}</td>
    <td>40-70</td>
  </tr>
  <tr>
    <td>Basofilos</td>
    <td colspan="2">{{$hematologia->basofilos_a}}</td>
    <td>%</td>
    <td></td>
    <td>{{$hematologia->basofilos_b}}</td>
    <td>0-2</td>
  </tr>
  <tr>
    <td>Eosinofilos</td>
    <td colspan="2">{{$hematologia->eosinofilos_a}}</td>
    <td>%</td>
    <td></td>
    <td>{{$hematologia->eosinofilos_b}}</td>
    <td>0-4</td>
  </tr>
  <tr>
    <td>Linfocitos</td>
    <td colspan="2">{{$hematologia->linfocitos_a}}</td>
    <td>%</td>
    <td></td>
    <td>{{$hematologia->linfocitos_b}}</td>
    <td>20-40</td>
  </tr>
  <tr>
    <td>Monocitos</td>
    <td colspan="2">{{$hematologia->monocitos_a}}</td>
    <td>%</td>
    <td></td>
    <td>{{$hematologia->monocitos_b}}</td>
    <td>0-5</td>
  </tr>
  <tr>
    <td>Comentario</td>
    <td colspan="6">{{$hematologia->comment}}</td>
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
