@extends('layouts.app')

@section('htmlheader_title')
	Paciente
@endsection
@section('contentheader_title')
    @lang('paciente.showtitle')
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
                		<h1> </h1>
                			<a href='{{url('paciente')}}' class='btn btn-info'>Volver a la lista</a>
                		</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header"><h3 class="box-title">Historial de Examenes generales</h3> 
					<div class="box-tool pull-right">

							<a href="{{url('hematologia/create/'.$paciente->id)}}" class="btn btn-info btn-m" ><i class="fa fa-plus"></i> Hematologia</a> 
							<a href="{{url('general/create/'.$paciente->id)}}" class="btn btn-info btn-m" ><i class="fa fa-plus"></i> Examen de orina</a>
							<a href="{{url('eform/create/'. $paciente->id)}}" class="btn btn-info btn-m" ><i class="fa fa-plus"></i> Datos extra</a> 
							</div>
					</div>
					<div class="box-body"> 
						<table id='tableH' class="table table-bordered table-hover dataTable">
									<thead>
										<tr>
											<th>Acciones</th>
											<th>Tipo de examen</th>
											<th>Orden</th>
											<th>Comentario</th>
											<th>Fecha de Entrega</th>
											<th>Fecha de creacion</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($hematologias as $row)
										<tr>
										   <td>
                	<div class="btn-group">
                	<form action="{{ url('hematologia/'.$row->id) }}" method="POST">
           			 {{ csrf_field() }}
           			 {{ method_field('DELETE') }}
                <a href="{{route('hematologia.show', $row->id)}}" class="btn btn-primary btn-xs"><i class='fa fa-eye'></i> </a>
                <a href="{{route('hematologia.edit', $row->id)}}" class="btn btn-info btn-xs"><i class='fa fa-edit'></i> </a>
                

          			  <button class="btn btn-danger btn-xs" onclick="return confirm('Esta seguro que desea eliminar este elemento?') ">
             			   <i class="fa fa-trash"></i>
          			  </button>
       		    </form>
                </div>

                </td>
                							<td><i class="fa fa-tint"></i> Hematologia</td>
											<td>{{$row->order}}</td>
											<td>{{$row->comment}}</td>
											<td>{{$row->deliver_date}}</td>
											<td>{{$row->created_at}}</td>
											</tr>
										@endforeach


										@foreach ($generals as $row)
										<tr>
										   <td>
                	<div class="btn-group">
                	<form action="{{ url('general/'.$row->id) }}" method="POST">
           			 {{ csrf_field() }}
           			 {{ method_field('DELETE') }}
                <a href="{{route('general.show', $row->id)}}" class="btn btn-primary btn-xs"><i class='fa fa-eye'></i> </a>
                <a href="{{route('general.edit', $row->id)}}" class="btn btn-info btn-xs"><i class='fa fa-edit'></i> </a>
                

          			  <button class="btn btn-danger btn-xs" onclick="return confirm('Esta seguro que desea eliminar este elemento?') ">
             			   <i class="fa fa-trash"></i>
          			  </button>
       		    </form>
                </div>

                </td>
                							<td><i class="fa fa-plus-square"></i> General</td>
											<td>{{$row->order}}</td>
											<td>{{$row->otros}}</td>
											<td>{{$row->deliver_date}}</td>
											<td>{{$row->created_at}}</td>
											</tr>
										@endforeach
										@foreach ($eforms as $row)
										<tr>
										   <td>
                	<div class="btn-group">
                	<form action="{{ url('eform/'.$row->id) }}" method="POST">
           			 {{ csrf_field() }}
           			 {{ method_field('DELETE') }}
                <a href="{{route('eform.show', $row->id)}}" class="btn btn-primary btn-xs"><i class='fa fa-eye'></i> </a>
                <a href="{{route('eform.edit', $row->id)}}" class="btn btn-info btn-xs"><i class='fa fa-edit'></i> </a>
                

          			  <button class="btn btn-danger btn-xs" onclick="return confirm('Esta seguro que desea eliminar este elemento?') ">
             			   <i class="fa fa-trash"></i>
          			  </button>
       		    </form>
                </div>

                </td>
                							<td><i class="fa fa-envelope"></i> Formulario</td>
											<td>{{$row->order}}</td>
											<td>{{$row->comment}}</td>
											<td>{{$row->deliver_date}}</td>
											<td>{{$row->created_at}}</td>
											</tr>
										@endforeach
									</tbody>	
								</table> 
					</div>
				</div>
			</div>
		</div>

@endsection
@push('pagescripts')
	<script>
		$(document).ready(function(){
			$('#tableH').DataTable({
            "language": {
                "lengthMenu": "@lang('tables.lengthMenu')",
                "zeroRecords": "@lang('tables.zeroRecords')",
                "info": "@lang('tables.info')",
                "infoEmpty": "@lang('tables.infoEmpty')",
                "infoFiltered": "@lang('tables.infoFiltered')",
                "search":"@lang('tables.search')",
                "paginate": {
                    "first": "@lang('tables.first')",
                    "last": "@lang('tables.last')",
                    "next": "@lang('tables.next')",
                    "previous": "@lang('tables.previous')"

                }
            }
        })
		} );

	</script>
<script>
function validateDelete() {
    if (confirm("Esta seguro que desea eliminar este elemento?") == true) {
        this.form.submit();
    } 
}
</script>
@endpush
