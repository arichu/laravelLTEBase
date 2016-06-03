@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection

@section('contentheader_title')
	 @lang('paciente.titulo') 
@endsection


@section('main-content')
<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Lista

					<a href="{{url('paciente/create')}}" class ='btn btn-xs btn-primary pull-right'>Anadir pacientes</a>
					</div>
					<div class="panel-body">
								<table id='table' class="table table-bordered table-hover dataTable">
									<thead>
										<tr>
											<th>Acciones</th>
											<th>Nombre</th>
											<th>Apellido</th>
											<th>Carnet</th>
											<th>Genero</th>
											<th>Edad</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($data as $row)
										<tr>
										   <td>
                	<div class="btn-group">
                <a href="{{route('paciente.show', $row->id)}}" class="btn btn-primary btn-xs"><i class='fa fa-eye'></i> </a>
                <a href="{{route('paciente.edit', $row->id)}}" class="btn btn-info btn-xs"><i class='fa fa-edit'></i> </a>
                </div>

                </td>
											<td>{{$row->first_name}}</td>
											<td>{{$row->last_name}}</td>
											<td>{{$row->dni}}</td>
											<td>
 											@if($row->gender == '1')
 											Masculino
 											@else
 											Femenino
											@endif
											</td>
											<td>{{$row->age}}</td>
										</tr>
										@endforeach
									</tbody>	
								</table> 
					</div>
				</div>
			</div>
		</div>
	<!-- </div> -->
@endsection
@push('pagescripts')
	<script>
		$(document).ready(function(){
			$('#table').DataTable()
		} );
	</script>
@endpush
